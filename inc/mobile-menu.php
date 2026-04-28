<?php
/**
 * Mobile menu drawer system.
 *
 * Provides two complementary pieces:
 *
 *   1. Block styles on core/navigation (push / slide-over / slide-down)
 *      for editors who want WordPress's native responsive nav with our
 *      animations.
 *
 *   2. A standalone drawer system backed by an editable template part
 *      (`mobile-menu`) so authors can put richer content into the
 *      slide-out panel — search, navigation, social links, contact info.
 *      Triggered by any element with `data-envosta-mobile-menu-open`,
 *      with an optional `data-direction="push|slide-over|slide-down"`.
 *      Mirrors the WooCommerce mini-cart architecture.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

/* ---------------------------------------------------------------------------
 * 1. Block styles on core/navigation (legacy, still supported).
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_register_mobile_menu_styles' ) ) :
	function envosta_register_mobile_menu_styles() {
		register_block_style( 'core/navigation', array(
			'name'  => 'push',
			'label' => __( 'Mobile: Push', 'envosta' ),
		) );
		register_block_style( 'core/navigation', array(
			'name'  => 'slide-over',
			'label' => __( 'Mobile: Slide-Over', 'envosta' ),
		) );
		register_block_style( 'core/navigation', array(
			'name'  => 'slide-down',
			'label' => __( 'Mobile: Slide-Down', 'envosta' ),
		) );
	}
endif;
add_action( 'init', 'envosta_register_mobile_menu_styles' );

/* ---------------------------------------------------------------------------
 * 2. Custom template-part area so the editor groups the Mobile Menu part
 *    in its own bucket (not "Uncategorized").
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_register_mobile_menu_area' ) ) :
	function envosta_register_mobile_menu_area( $areas ) {
		// Skip if a previous filter already registered the "overlays"
		// bucket (so the registration is idempotent).
		foreach ( $areas as $existing ) {
			if ( isset( $existing['area'] ) && 'overlays' === $existing['area'] ) {
				return $areas;
			}
		}
		$areas[] = array(
			'area'        => 'overlays',
			'label'       => __( 'Overlays', 'envosta' ),
			'description' => __( 'Floating layers over the page — drawers, pop-ups, modals, the mobile menu, and similar.', 'envosta' ),
			'icon'        => 'menu',
			'area_tag'    => 'div',
		);
		return $areas;
	}
endif;
add_filter( 'default_wp_template_part_areas', 'envosta_register_mobile_menu_area' );

/* ---------------------------------------------------------------------------
 * 3. Render the drawer container (with the Mobile Menu template part inside)
 *    once per page in the footer. The container starts closed and is shown
 *    via JS when a trigger fires.
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_render_mobile_menu_drawer' ) ) :
	function envosta_render_mobile_menu_drawer() {
		if ( is_admin() ) return;

		$default_direction = apply_filters( 'envosta_mobile_menu_default_direction', 'slide-over' );
		$theme             = get_stylesheet();
		$close_label       = __( 'Close menu', 'envosta' );

		$inner = do_blocks( '<!-- wp:template-part {"slug":"mobile-menu","theme":"' . esc_attr( $theme ) . '","area":"overlays","tagName":"div"} /-->' );

		// If the part is missing (fresh install before the file is registered),
		// fall back to a plain navigation block so the drawer still opens.
		if ( '' === trim( wp_strip_all_tags( $inner ) ) ) {
			$inner = do_blocks( '<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->' );
		}

		?>
		<div
			class="envosta-mobile-menu-drawer is-style-<?php echo esc_attr( $default_direction ); ?>"
			data-envosta-mobile-menu-drawer
			aria-hidden="true"
			hidden
		>
			<div class="envosta-mobile-menu-drawer__backdrop" data-envosta-mobile-menu-close></div>
			<aside
				class="envosta-mobile-menu-drawer__panel"
				role="dialog"
				aria-modal="true"
				aria-label="<?php esc_attr_e( 'Mobile menu', 'envosta' ); ?>"
				tabindex="-1"
			>
				<button
					type="button"
					class="envosta-mobile-menu-drawer__close"
					data-envosta-mobile-menu-close
					aria-label="<?php echo esc_attr( $close_label ); ?>"
				>
					<svg viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false">
						<path d="M6 6 L18 18 M18 6 L6 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
					</svg>
				</button>
				<div class="envosta-mobile-menu-drawer__content">
					<?php echo $inner; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
				</div>
			</aside>
		</div>
		<?php
	}
endif;
add_action( 'wp_footer', 'envosta_render_mobile_menu_drawer', 50 );

/* ---------------------------------------------------------------------------
 * 4. Enqueue scripts.
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_enqueue_mobile_menu_js' ) ) :
	function envosta_enqueue_mobile_menu_js() {
		$ver = wp_get_theme()->get( 'Version' );

		// Block-style (core/navigation) interaction polish.
		wp_enqueue_script(
			'envosta-mobile-menu',
			get_template_directory_uri() . '/assets/js/mobile-menu.js',
			array(),
			$ver,
			array( 'in_footer' => true, 'strategy' => 'defer' )
		);

		// Standalone drawer (template-part backed).
		wp_enqueue_script(
			'envosta-mobile-menu-drawer',
			get_template_directory_uri() . '/assets/js/mobile-menu-drawer.js',
			array(),
			$ver,
			array( 'in_footer' => true, 'strategy' => 'defer' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'envosta_enqueue_mobile_menu_js' );
