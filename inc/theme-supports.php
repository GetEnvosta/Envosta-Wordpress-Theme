<?php
/**
 * Theme supports for Envosta.
 *
 * @package Envosta
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'envosta_theme_supports' ) ) :
	function envosta_theme_supports() {
		load_theme_textdomain( 'envosta', ENVOSTA_DIR . '/languages' );

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'custom-logo', array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
			'navigation-widgets',
		) );

		// WooCommerce support — declared here so it's present whether Woo is
		// installed or not. Woo-specific hooks live in inc/woocommerce.php.
		add_theme_support( 'woocommerce', array(
			'thumbnail_image_width' => 480,
			'single_image_width'    => 960,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 2,
				'max_rows'        => 8,
				'default_columns' => 3,
				'min_columns'     => 2,
				'max_columns'     => 5,
			),
		) );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
	}
endif;
add_action( 'after_setup_theme', 'envosta_theme_supports' );
