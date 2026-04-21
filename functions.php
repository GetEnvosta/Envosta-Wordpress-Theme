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
		'hero'         => __( 'Hero',         'envosta' ),
		'features'     => __( 'Features',     'envosta' ),
		'content'      => __( 'Content',      'envosta' ),
		'commerce'     => __( 'Commerce',     'envosta' ),
		'cta'          => __( 'CTA',          'envosta' ),
		'editorial'    => __( 'Editorial',    'envosta' ),
		'social-proof' => __( 'Social Proof', 'envosta' ),
		'header'       => __( 'Header',       'envosta' ),
		'footer'       => __( 'Footer',       'envosta' ),
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

/**
 * GitHub Theme Auto-Updater
 *
 * Checks GetEnvosta/Envosta-wordpress-theme releases for new versions.
 * Caches the check in a 12-hour transient to respect GitHub rate limits.
 */
if ( ! function_exists( 'envosta_github_theme_update' ) ) {
	function envosta_github_theme_update( $transient ) {
		if ( empty( $transient->checked ) ) {
			return $transient;
		}

		$theme_slug      = 'Envosta-wordpress-theme';
		$current_version = wp_get_theme( $theme_slug )->get( 'Version' );

		if ( ! $current_version ) {
			$current_version = wp_get_theme()->get( 'Version' );
		}

		$github_user = 'GetEnvosta';
		$github_repo = 'Envosta-wordpress-theme';

		$release_data = get_transient( 'envosta_update_check' );

		if ( false === $release_data ) {
			$response = wp_remote_get(
				"https://api.github.com/repos/{$github_user}/{$github_repo}/releases/latest",
				array(
					'timeout'   => 10,
					'sslverify' => true,
					'headers'   => array(
						'User-Agent' => 'Envosta-Theme/' . $current_version,
					),
				)
			);

			if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {
				set_transient( 'envosta_update_check', 'error', 2 * HOUR_IN_SECONDS );
				return $transient;
			}

			$release_data = json_decode( wp_remote_retrieve_body( $response ), true );
			set_transient( 'envosta_update_check', $release_data, 12 * HOUR_IN_SECONDS );
		}

		if ( ! is_array( $release_data ) || empty( $release_data['tag_name'] ) ) {
			return $transient;
		}

		$remote_version = preg_replace( '/^v/i', '', $release_data['tag_name'] );

		if ( version_compare( $remote_version, $current_version, '>' ) ) {
			$download_url = $release_data['zipball_url'] ?? '';

			if ( ! empty( $release_data['assets'] ) && is_array( $release_data['assets'] ) ) {
				foreach ( $release_data['assets'] as $asset ) {
					if ( str_contains( $asset['name'], '.zip' ) ) {
						$download_url = $asset['browser_download_url'];
						break;
					}
				}
			}

			$transient->response[ $theme_slug ] = array(
				'theme'       => $theme_slug,
				'new_version' => $remote_version,
				'url'         => $release_data['html_url'] ?? '',
				'package'     => $download_url,
			);
		}

		return $transient;
	}
}
add_filter( 'pre_set_site_transient_update_themes', 'envosta_github_theme_update' );

/**
 * Clear update transient when theme is updated.
 */
add_action( 'upgrader_process_complete', function ( $upgrader, $options ) {
	if ( 'update' === $options['action'] && 'theme' === $options['type'] ) {
		delete_transient( 'envosta_update_check' );
	}
}, 10, 2 );
