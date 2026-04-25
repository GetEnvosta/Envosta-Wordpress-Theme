<?php
/**
 * Hide WooCommerce-only templates and template parts from the Site Editor
 * when WooCommerce is not active.
 *
 * Envosta ships the full Woo template library so a store is
 * ready the instant WooCommerce is activated. But when Woo isn't active,
 * those templates shouldn't clutter the FSE template list — the editor
 * would show archive-product, single-product, mini-cart, etc. even on a
 * non-commerce site.
 *
 * This file loads unconditionally and short-circuits immediately when
 * WooCommerce IS active.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Slugs of templates that only make sense with WooCommerce.
 */
if ( ! function_exists( 'envosta_woo_template_slugs' ) ) :
	function envosta_woo_template_slugs() {
		return array(
			'archive-product',
			'single-product',
			'page-cart',
			'page-checkout',
			'order-confirmation',
			'product-search-results',
			'taxonomy-product_attribute',
		);
	}
endif;

/**
 * Slugs of template parts that only make sense with WooCommerce.
 */
if ( ! function_exists( 'envosta_woo_part_slugs' ) ) :
	function envosta_woo_part_slugs() {
		return array(
			'mini-cart',
			'checkout-header',
			'simple-product-add-to-cart-with-options',
			'variable-product-add-to-cart-with-options',
			'grouped-product-add-to-cart-with-options',
			'external-product-add-to-cart-with-options',
		);
	}
endif;

/**
 * Filter `get_block_templates` to remove Woo entries when Woo isn't present.
 */
if ( ! function_exists( 'envosta_filter_woo_templates' ) ) :
	function envosta_filter_woo_templates( $query_result, $query, $template_type ) {
		if ( class_exists( 'WooCommerce' ) ) {
			return $query_result;
		}

		$blocklist = 'wp_template_part' === $template_type
			? envosta_woo_part_slugs()
			: envosta_woo_template_slugs();

		if ( empty( $blocklist ) ) {
			return $query_result;
		}

		return array_values( array_filter( $query_result, function ( $template ) use ( $blocklist ) {
			if ( ! is_object( $template ) || empty( $template->slug ) ) {
				return true;
			}
			return ! in_array( $template->slug, $blocklist, true );
		} ) );
	}
endif;
add_filter( 'get_block_templates', 'envosta_filter_woo_templates', 10, 3 );

/**
 * Filter `get_block_file_template` so direct lookups of Woo templates
 * (e.g. by permalink resolution) return null when Woo isn't active.
 */
if ( ! function_exists( 'envosta_filter_woo_file_template' ) ) :
	function envosta_filter_woo_file_template( $template, $id, $template_type ) {
		if ( class_exists( 'WooCommerce' ) ) {
			return $template;
		}
		if ( ! is_object( $template ) || empty( $template->slug ) ) {
			return $template;
		}
		$blocklist = 'wp_template_part' === $template_type
			? envosta_woo_part_slugs()
			: envosta_woo_template_slugs();
		if ( in_array( $template->slug, $blocklist, true ) ) {
			return null;
		}
		return $template;
	}
endif;
add_filter( 'get_block_file_template', 'envosta_filter_woo_file_template', 10, 3 );

/**
 * Hide Woo-only patterns that have Inserter: true and would otherwise
 * appear in the pattern inserter on non-commerce sites.
 * (Hidden patterns with Inserter: no are already invisible.)
 */
if ( ! function_exists( 'envosta_unregister_woo_patterns' ) ) :
	function envosta_unregister_woo_patterns() {
		if ( class_exists( 'WooCommerce' ) ) return;

		// Envosta-registered patterns that are WC-centric.
		$slugs = array(
			'envosta/header-with-cart',
			'envosta/header-shop-centered',
			'envosta/header-shop-actions',
		);
		foreach ( $slugs as $slug ) {
			$pattern = \WP_Block_Patterns_Registry::get_instance()->get_registered( $slug );
			if ( $pattern ) {
				unregister_block_pattern( $slug );
			}
		}
	}
endif;
add_action( 'init', 'envosta_unregister_woo_patterns', 20 );
