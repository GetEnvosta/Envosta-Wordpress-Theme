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
		// Three mobile menu drawer variants. Apply any of these to a
		// core/navigation block and the auto-generated hamburger button
		// will open the Envosta drawer (mobile-menu template part)
		// instead of WP's native responsive overlay.
		//
		// To keep WP's NATIVE responsive overlay (just the nav links,
		// no extra content), simply leave the navigation block on the
		// default style.
		register_block_style( 'core/navigation', array(
			'name'  => 'push',
			'label' => __( 'Push', 'envosta' ),
		) );
		register_block_style( 'core/navigation', array(
			'name'  => 'slide-over',
			'label' => __( 'Slide Over', 'envosta' ),
		) );
		register_block_style( 'core/navigation', array(
			'name'  => 'slide-down',
			'label' => __( 'Slide Down', 'envosta' ),
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

/**
 * Resolve a template part the same way the woocommerce/mini-cart block
 * resolves its own — DB record (Site-Editor edits) wins, then the
 * shipped file under /parts/{slug}.html, then null.
 */
if ( ! function_exists( 'envosta_resolve_template_part' ) ) :
	function envosta_resolve_template_part( $slug ) {
		$id       = get_stylesheet() . '//' . $slug;
		$template = null;

		if ( function_exists( 'get_block_template' ) ) {
			$template = get_block_template( $id, 'wp_template_part' );
		}
		if ( ! $template && function_exists( 'get_block_file_template' ) ) {
			$template = get_block_file_template( $id, 'wp_template_part' );
		}
		return $template && ! empty( $template->content ) ? $template->content : '';
	}
endif;

/**
 * Render a single drawer container in wp_footer. Used for both the
 * mobile-menu overlay and (when WooCommerce is active) the mini-cart
 * overlay. Drawers are identified on the JS side by data-envosta-overlay.
 *
 * @param string $slug          Template part slug to load (e.g. 'mobile-menu').
 * @param string $default_dir   'push' | 'slide-over' | 'slide-down'.
 * @param string $aria_label    Accessible label for the dialog.
 * @param string $close_label   Accessible label for the close button.
 * @param string $fallback_html Markup used if the template part resolves empty.
 */
if ( ! function_exists( 'envosta_render_overlay_drawer' ) ) :
	function envosta_render_overlay_drawer( $slug, $default_dir, $aria_label, $close_label, $fallback_html = '' ) {
		$content = envosta_resolve_template_part( $slug );
		$inner   = $content ? do_blocks( $content ) : '';
		if ( '' === trim( wp_strip_all_tags( $inner ) ) ) {
			$inner = $fallback_html;
		}
		?>
		<div
			class="envosta-mobile-menu-drawer is-style-<?php echo esc_attr( $default_dir ); ?>"
			data-envosta-overlay="<?php echo esc_attr( $slug ); ?>"
			aria-hidden="true"
			hidden
		>
			<div class="envosta-mobile-menu-drawer__backdrop" data-envosta-mobile-menu-close></div>
			<aside
				class="envosta-mobile-menu-drawer__panel"
				role="dialog"
				aria-modal="true"
				aria-label="<?php echo esc_attr( $aria_label ); ?>"
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

/**
 * Render all overlay drawers once per page.
 */
if ( ! function_exists( 'envosta_render_mobile_menu_drawer' ) ) :
	function envosta_render_mobile_menu_drawer() {
		if ( is_admin() ) return;

		$default_direction = apply_filters( 'envosta_mobile_menu_default_direction', 'slide-over' );

		// Mobile menu overlay.
		envosta_render_overlay_drawer(
			'mobile-menu',
			$default_direction,
			__( 'Mobile menu', 'envosta' ),
			__( 'Close menu', 'envosta' ),
			do_blocks( '<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->' )
		);

		// Mini-cart overlay — only when WooCommerce is active.
		if ( class_exists( 'WooCommerce' ) ) {
			$cart_default_direction = apply_filters( 'envosta_mini_cart_default_direction', 'slide-over' );
			envosta_render_overlay_drawer(
				'mini-cart',
				$cart_default_direction,
				__( 'Cart', 'envosta' ),
				__( 'Close cart', 'envosta' ),
				do_blocks( '<!-- wp:woocommerce/mini-cart-contents /-->' )
			);
		}
	}
endif;
add_action( 'wp_footer', 'envosta_render_mobile_menu_drawer', 50 );

/* ---------------------------------------------------------------------------
 * 3a. Register Push / Slide Over / Slide Down block styles on the
 *     woocommerce/mini-cart block. When applied, JS hijacks the cart
 *     icon click and opens the Envosta mini-cart overlay drawer
 *     (loading the editable mini-cart template part) with the chosen
 *     direction. Default style = WC's native slide-over drawer.
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_register_mini_cart_styles' ) ) :
	function envosta_register_mini_cart_styles() {
		if ( ! class_exists( 'WooCommerce' ) ) return;
		register_block_style( 'woocommerce/mini-cart', array(
			'name'  => 'push',
			'label' => __( 'Push', 'envosta' ),
		) );
		register_block_style( 'woocommerce/mini-cart', array(
			'name'  => 'slide-over',
			'label' => __( 'Slide Over', 'envosta' ),
		) );
		register_block_style( 'woocommerce/mini-cart', array(
			'name'  => 'slide-down',
			'label' => __( 'Slide Down', 'envosta' ),
		) );
	}
endif;
add_action( 'init', 'envosta_register_mini_cart_styles', 20 );

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
