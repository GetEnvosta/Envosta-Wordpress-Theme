<?php
/**
 * Pattern categories for the Envosta theme.
 *
 * Adds two editorial buckets to the pattern inserter:
 *
 *   - Site  (headers, footers, navigation, announcement bars)
 *   - Blog  (post layouts, archives, editorial content)
 *
 * WooCommerce already registers its own "WooCommerce" pattern category
 * when active, so we don't duplicate it. Our WC-flavored patterns
 * (header-with-cart, header-shop-*, etc.) declare
 * `Categories: woocommerce, header` in their headers and slot into
 * WC's bucket automatically.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'envosta_register_pattern_categories' ) ) :
	function envosta_register_pattern_categories() {
		if ( ! function_exists( 'register_block_pattern_category' ) ) return;

		register_block_pattern_category( 'site', array(
			'label'       => __( 'Site', 'envosta' ),
			'description' => __( 'Headers, footers, navigation, and announcement bars.', 'envosta' ),
		) );

		register_block_pattern_category( 'blog', array(
			'label'       => __( 'Blog', 'envosta' ),
			'description' => __( 'Post layouts, archives, and editorial content.', 'envosta' ),
		) );
	}
endif;
add_action( 'init', 'envosta_register_pattern_categories', 9 );
