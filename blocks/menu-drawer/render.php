<?php
/**
 * Server-side render for the envosta/menu-drawer block.
 *
 * Outputs:
 *   1. A trigger <button> with Interactivity API directives so a click
 *      toggles the drawer open/closed.
 *   2. A <div role="dialog"> drawer containing the menu-drawer template
 *      part, hidden by default and shown by toggling `is-open` on the
 *      Interactivity store.
 *
 * The icon library here is intentionally duplicated in JS form at
 * blocks/menu-drawer/icons.js (the editor cannot import PHP). Any new
 * icon must be added to BOTH places — same slug, same SVG markup.
 *
 * @package Envosta
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * SVG icon library. Mirror of blocks/menu-drawer/icons.js.
 *
 * Keys: icon slugs exposed via block.json's triggerIcon enum.
 * Values: raw SVG inner markup (no <svg> wrapper — wrapper is added
 *         by envosta_menu_drawer_render_icon() so width / height /
 *         viewBox stay consistent).
 *
 * strokeOnly flag marks icons drawn with stroke instead of fill so
 * the wrapper applies the right paint attributes.
 */
if ( ! function_exists( 'envosta_menu_drawer_get_icons' ) ) :
	function envosta_menu_drawer_get_icons() {
		return array(
			'hamburger' => array(
				'strokeOnly' => true,
				'svg'        => '<path d="M3 6h18 M3 12h18 M3 18h18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
			),
			'menu' => array(
				'strokeOnly' => true,
				'svg'        => '<path d="M4 7h16 M4 12h16 M4 17h10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
			),
			'dots' => array(
				'strokeOnly' => false,
				'svg'        => '<circle cx="5" cy="12" r="2" fill="currentColor"/><circle cx="12" cy="12" r="2" fill="currentColor"/><circle cx="19" cy="12" r="2" fill="currentColor"/>',
			),
			'dots-vertical' => array(
				'strokeOnly' => false,
				'svg'        => '<circle cx="12" cy="5" r="2" fill="currentColor"/><circle cx="12" cy="12" r="2" fill="currentColor"/><circle cx="12" cy="19" r="2" fill="currentColor"/>',
			),
			'grid' => array(
				'strokeOnly' => true,
				'svg'        => '<rect x="3" y="3" width="7" height="7" rx="1" fill="none" stroke="currentColor" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1" fill="none" stroke="currentColor" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1" fill="none" stroke="currentColor" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1" fill="none" stroke="currentColor" stroke-width="2"/>',
			),
			'list' => array(
				'strokeOnly' => true,
				'svg'        => '<path d="M8 6h13 M8 12h13 M8 18h13 M3 6h.01 M3 12h.01 M3 18h.01" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
			),
			'chevron-down' => array(
				'strokeOnly' => true,
				'svg'        => '<path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
			),
		);
	}
endif;

/**
 * Wrap an icon slug's SVG inner markup in a full <svg> element.
 */
if ( ! function_exists( 'envosta_menu_drawer_render_icon' ) ) :
	function envosta_menu_drawer_render_icon( $slug, $size = 24 ) {
		$icons = envosta_menu_drawer_get_icons();
		if ( ! isset( $icons[ $slug ] ) ) {
			$slug = 'hamburger';
		}
		$icon = $icons[ $slug ];
		return sprintf(
			'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="%1$d" height="%1$d" aria-hidden="true" focusable="false">%2$s</svg>',
			(int) $size,
			$icon['svg'] // SVG markup is trusted — author-supplied via fixed enum.
		);
	}
endif;

/* ---------------------------------------------------------------------------
 * Render the block.
 * ------------------------------------------------------------------------- */

$envosta_md_trigger_icon  = isset( $attributes['triggerIcon'] )  ? (string) $attributes['triggerIcon']  : 'hamburger';
$envosta_md_trigger_label = isset( $attributes['triggerLabel'] ) ? (string) $attributes['triggerLabel'] : '';
$envosta_md_icon_size     = isset( $attributes['iconSize'] )     ? (int) $attributes['iconSize']        : 24;

$envosta_md_aria_label = '' !== trim( $envosta_md_trigger_label )
	? $envosta_md_trigger_label
	: __( 'Open menu', 'envosta' );

$envosta_md_wrapper_attrs = get_block_wrapper_attributes( array(
	'class'                  => 'envosta-menu-drawer',
	'data-wp-interactive'    => 'envosta/menu-drawer',
	'data-wp-context'        => '{"isOpen":false}',
	'data-wp-on-document--keydown' => 'actions.handleKeydown',
) );

// Resolve the menu-drawer template part. DB-edited overrides win,
// then the shipped /parts/menu-drawer.html, then a sensible fallback.
$envosta_md_part_html = '';
if ( function_exists( 'get_block_template' ) ) {
	$envosta_md_template = get_block_template( get_stylesheet() . '//menu-drawer', 'wp_template_part' );
	if ( ! $envosta_md_template && function_exists( 'get_block_file_template' ) ) {
		$envosta_md_template = get_block_file_template( get_stylesheet() . '//menu-drawer', 'wp_template_part' );
	}
	if ( $envosta_md_template && ! empty( $envosta_md_template->content ) ) {
		$envosta_md_part_html = do_blocks( $envosta_md_template->content );
	}
}
if ( '' === trim( wp_strip_all_tags( $envosta_md_part_html ) ) ) {
	$envosta_md_part_html = do_blocks( '<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->' );
}
?>
<div <?php echo $envosta_md_wrapper_attrs; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>>

	<button
		type="button"
		class="envosta-menu-drawer__trigger"
		aria-label="<?php echo esc_attr( $envosta_md_aria_label ); ?>"
		aria-haspopup="dialog"
		data-wp-on--click="actions.toggle"
		data-wp-bind--aria-expanded="context.isOpen"
	>
		<?php
		// Icon SVG is built from a fixed enum library — safe.
		echo envosta_menu_drawer_render_icon( $envosta_md_trigger_icon, $envosta_md_icon_size ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		if ( '' !== trim( $envosta_md_trigger_label ) ) :
			?>
			<span class="envosta-menu-drawer__trigger-label"><?php echo esc_html( $envosta_md_trigger_label ); ?></span>
			<?php
		endif;
		?>
	</button>

	<div
		class="envosta-menu-drawer__panel-wrap"
		role="dialog"
		aria-modal="true"
		aria-label="<?php esc_attr_e( 'Menu', 'envosta' ); ?>"
		data-wp-class--is-open="context.isOpen"
		data-wp-bind--aria-hidden="!context.isOpen"
		hidden
		data-wp-bind--hidden="!context.isOpen"
	>
		<div class="envosta-menu-drawer__backdrop" data-wp-on--click="actions.close"></div>

		<aside class="envosta-menu-drawer__panel" tabindex="-1">
			<button
				type="button"
				class="envosta-menu-drawer__close"
				aria-label="<?php esc_attr_e( 'Close menu', 'envosta' ); ?>"
				data-wp-on--click="actions.close"
			>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false">
					<path d="M6 6 L18 18 M18 6 L6 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
				</svg>
			</button>
			<div class="envosta-menu-drawer__content">
				<?php echo $envosta_md_part_html; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
			</div>
		</aside>
	</div>

</div>
