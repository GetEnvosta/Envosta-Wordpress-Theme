<?php
/**
 * Pattern categories for the Envosta theme.
 *
 * Replaces the default "Envosta / All templates" grouping in the Site
 * Editor pattern inserter with three editorial buckets:
 *
 *   - Site         (headers, footers, announcement bars, layout primitives)
 *   - Blog         (post/archive-oriented content)
 *   - WooCommerce  (store, product, cart, checkout) — only registered
 *                  when WooCommerce is active, so it vanishes on
 *                  non-commerce sites.
 *
 * The inherited hidden-* patterns keep their upstream categories
 * intact; these new categories are for the user-facing library.
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

		if ( class_exists( 'WooCommerce' ) ) {
			register_block_pattern_category( 'woocommerce', array(
				'label'       => __( 'WooCommerce', 'envosta' ),
				'description' => __( 'Store, product, cart, and checkout patterns.', 'envosta' ),
			) );
		}
	}
endif;
add_action( 'init', 'envosta_register_pattern_categories', 9 );
