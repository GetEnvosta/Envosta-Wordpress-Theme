<?php
/**
 * Envosta parent theme functions.
 *
 * @package Envosta
 * @since   1.0.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! defined( 'ENVOSTA_VERSION' ) ) {
	define( 'ENVOSTA_VERSION', '1.0.0' );
}

if ( ! defined( 'ENVOSTA_DIR' ) ) {
	define( 'ENVOSTA_DIR', get_template_directory() );
}

if ( ! defined( 'ENVOSTA_URI' ) ) {
	define( 'ENVOSTA_URI', get_template_directory_uri() );
}

/**
 * Load infrastructure modules.
 */
require_once ENVOSTA_DIR . '/inc/theme-supports.php';
require_once ENVOSTA_DIR . '/inc/block-variations.php';

/**
 * WooCommerce module loads only when Woo is active.
 */
add_action( 'after_setup_theme', function () {
	if ( class_exists( 'WooCommerce' ) ) {
		require_once ENVOSTA_DIR . '/inc/woocommerce.php';
	}
} );

/**
 * Enqueue parent theme styles and scripts.
 *
 * Child themes should NOT re-enqueue these. They inherit automatically
 * because a child theme's style.css includes `Template: envosta`, and
 * WordPress loads both parent and child `style.css` in that case.
 */
function envosta_enqueue_assets() {

	// The parent style.css is loaded by WordPress automatically when
	// a child theme declares Template: envosta. We only enqueue it
	// directly when the parent is active on its own.
	if ( get_template() === get_stylesheet() ) {
		wp_enqueue_style(
			'envosta-style',
			get_stylesheet_uri(),
			array(),
			ENVOSTA_VERSION
		);
	}

	// Supplemental CSS — interactions, Woo overrides, decorative effects
	// that theme.json cannot express.
	wp_enqueue_style(
		'envosta-supplemental',
		ENVOSTA_URI . '/assets/css/supplemental.css',
		array(),
		ENVOSTA_VERSION
	);

	// Frontend interactions — sticky nav, reveal-on-scroll.
	wp_enqueue_script(
		'envosta-interactions',
		ENVOSTA_URI . '/assets/js/interactions.js',
		array(),
		ENVOSTA_VERSION,
		array( 'strategy' => 'defer' )
	);

	// Mobile menu — push/drawer/full-canvas variants.
	wp_enqueue_script(
		'envosta-mobile-menu',
		ENVOSTA_URI . '/assets/js/mobile-menu.js',
		array(),
		ENVOSTA_VERSION,
		array( 'strategy' => 'defer' )
	);
}
add_action( 'wp_enqueue_scripts', 'envosta_enqueue_assets', 10 );

/**
 * Register pattern categories for the Envosta pattern library.
 */
function envosta_register_pattern_categories() {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	$categories = array(
		'envosta-hero'      => __( 'Envosta — Hero',      'envosta' ),
		'envosta-features'  => __( 'Envosta — Features',  'envosta' ),
		'envosta-content'   => __( 'Envosta — Content',   'envosta' ),
		'envosta-commerce'  => __( 'Envosta — Commerce',  'envosta' ),
		'envosta-editorial' => __( 'Envosta — Editorial', 'envosta' ),
		'envosta-cta'       => __( 'Envosta — CTA',       'envosta' ),
	);

	foreach ( $categories as $slug => $label ) {
		register_block_pattern_category( $slug, array( 'label' => $label ) );
	}
}
add_action( 'init', 'envosta_register_pattern_categories' );

/**
 * Add helper body classes so CSS can target header variants,
 * menu styles, and layout settings.
 */
function envosta_body_classes( $classes ) {
	$header_style = get_theme_mod( 'envosta_header_style', 'sticky-blur' );
	$menu_style   = get_theme_mod( 'envosta_menu_style', 'classic' );

	$classes[] = 'envosta';
	$classes[] = 'envosta-header-' . sanitize_html_class( $header_style );
	$classes[] = 'envosta-menu-' . sanitize_html_class( $menu_style );

	return $classes;
}
add_filter( 'body_class', 'envosta_body_classes' );

/**
 * Editor preview styles — makes the block editor visually match the frontend
 * so authors don't author in one environment and preview in another.
 */
function envosta_editor_styles() {
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'envosta_editor_styles' );

/**
 * Register custom template hierarchy fallbacks for landing and full-width
 * page templates declared in theme.json customTemplates.
 *
 * Templates live in /templates/page-landing.html and /templates/page-full-width.html
 * and are selected via the Page Attributes > Template dropdown in the editor.
 */
