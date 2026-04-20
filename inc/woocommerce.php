<?php
/**
 * WooCommerce integration for the Envosta parent theme.
 *
 * Handles: wrapper markup, breadcrumbs, cart drawer, shop grid tweaks,
 * button text, account menu, and notice styling.
 *
 * @package Envosta
 */

defined( 'ABSPATH' ) || exit;

/**
 * Wrap main Woo content in an Envosta container so Shop, Cart, Checkout,
 * and My Account all inherit consistent padding and max-width.
 */
function envosta_woo_wrapper_start() {
	echo '<div class="envosta-woo-wrap">';
}
function envosta_woo_wrapper_end() {
	echo '</div>';
}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content',  'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_before_main_content', 'envosta_woo_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content',  'envosta_woo_wrapper_end',   10 );

/**
 * Remove the default WooCommerce sidebar — Envosta is single-column.
 */
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

/**
 * Shop grid column count and products-per-page.
 * Children can override via the same filters at higher priority.
 */
add_filter( 'loop_shop_columns', function () { return 3; }, 10 );
add_filter( 'loop_shop_per_page', function () { return 12; }, 20 );

/**
 * Sale badge — replaces the default "Sale!" tag with an Envosta-branded pill.
 */
add_filter( 'woocommerce_sale_flash', function () {
	return '<span class="envosta-sale-flash">' . esc_html__( 'Sale', 'envosta' ) . '</span>';
} );

/**
 * Single-product "Add to Cart" text — slightly more editorial.
 */
add_filter( 'woocommerce_product_single_add_to_cart_text', function () {
	return __( 'Add to Cart', 'envosta' );
} );
add_filter( 'woocommerce_product_add_to_cart_text', function () {
	return __( 'Add to Cart', 'envosta' );
} );

/**
 * Breadcrumbs — slimmer style, Envosta-branded separator.
 */
add_filter( 'woocommerce_breadcrumb_defaults', function ( $defaults ) {
	$defaults['delimiter']   = '<span class="envosta-breadcrumb-sep" aria-hidden="true"> / </span>';
	$defaults['wrap_before'] = '<nav class="woocommerce-breadcrumb envosta-breadcrumb">';
	$defaults['wrap_after']  = '</nav>';
	return $defaults;
} );

/**
 * Account menu labels — match Envosta's editorial voice.
 */
add_filter( 'woocommerce_account_menu_items', function ( $items ) {
	$renamed = array(
		'dashboard'       => __( 'Overview', 'envosta' ),
		'orders'          => __( 'Orders', 'envosta' ),
		'downloads'       => __( 'Downloads', 'envosta' ),
		'edit-address'    => __( 'Addresses', 'envosta' ),
		'edit-account'    => __( 'Account', 'envosta' ),
		'customer-logout' => __( 'Sign Out', 'envosta' ),
	);
	foreach ( $renamed as $key => $label ) {
		if ( isset( $items[ $key ] ) ) {
			$items[ $key ] = $label;
		}
	}
	return $items;
} );

/**
 * Cart drawer — Envosta ships a slide-in cart drawer by default.
 * The drawer HTML is rendered in the footer via `wp_footer` hook; the
 * cart icon in the header opens it via JS.
 */
function envosta_render_cart_drawer() {
	if ( is_admin() || ! function_exists( 'WC' ) || ! WC()->cart ) {
		return;
	}
	?>
	<aside class="envosta-cart-drawer" id="envosta-cart-drawer" aria-hidden="true" aria-labelledby="envosta-cart-title">
		<div class="envosta-cart-drawer__backdrop" data-envosta-cart-close></div>
		<div class="envosta-cart-drawer__panel" role="dialog" aria-modal="true">
			<header class="envosta-cart-drawer__header">
				<h2 class="envosta-cart-drawer__title" id="envosta-cart-title"><?php esc_html_e( 'Your Cart', 'envosta' ); ?></h2>
				<button type="button" class="envosta-cart-drawer__close" data-envosta-cart-close aria-label="<?php esc_attr_e( 'Close cart', 'envosta' ); ?>">&times;</button>
			</header>
			<div class="envosta-cart-drawer__body">
				<?php echo do_shortcode( '[woocommerce_mini_cart]' ); ?>
			</div>
		</div>
	</aside>
	<?php
}
add_action( 'wp_footer', 'envosta_render_cart_drawer', 50 );

/**
 * When the cart is updated via AJAX, the mini-cart fragment needs to
 * refresh inside the drawer.
 */
add_filter( 'woocommerce_add_to_cart_fragments', function ( $fragments ) {
	ob_start();
	woocommerce_mini_cart();
	$fragments['div.widget_shopping_cart_content'] = '<div class="widget_shopping_cart_content">' . ob_get_clean() . '</div>';
	return $fragments;
} );

/**
 * Product gallery — default to 4 columns for related/upsell displays.
 */
add_filter( 'woocommerce_output_related_products_args', function ( $args ) {
	$args['posts_per_page'] = 4;
	$args['columns']        = 4;
	return $args;
} );
