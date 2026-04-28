<?php
/**
 * Pattern categories for the Envosta theme.
 *
 * Adds a single "Blog" bucket — for everything else we lean on the
 * core categories WordPress ships (header, footer, banner, featured,
 * call-to-action, gallery, posts, text…) and WooCommerce's own
 * "WooCommerce" category when WC is active.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'envosta_register_pattern_categories' ) ) :
	function envosta_register_pattern_categories() {
		if ( ! function_exists( 'register_block_pattern_category' ) ) return;

		register_block_pattern_category( 'blog', array(
			'label'       => __( 'Blog', 'envosta' ),
			'description' => __( 'Post layouts, archives, and editorial content.', 'envosta' ),
		) );
	}
endif;
add_action( 'init', 'envosta_register_pattern_categories', 9 );

/**
 * Disable WordPress's remote pattern fetcher.
 *
 * WP 6.x pulls curated patterns from wordpress.org/patterns and shows
 * them in the inserter. They don't match Envosta's typography or
 * spacing, and they make the inserter feel cluttered alongside our
 * own curated patterns. Hide them.
 */
add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * Also drop the core WP patterns that ship inside core itself
 * (separate from the remote ones). Keeps the inserter showing only
 * our patterns + WooCommerce's when WC is active.
 */
if ( ! function_exists( 'envosta_remove_core_pattern_support' ) ) :
	function envosta_remove_core_pattern_support() {
		remove_theme_support( 'core-block-patterns' );
	}
endif;
add_action( 'after_setup_theme', 'envosta_remove_core_pattern_support', 11 );
