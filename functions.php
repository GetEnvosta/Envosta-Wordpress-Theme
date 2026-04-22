<?php
/**
 * Envosta functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Envosta
 * @since Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'envosta_unregister_patterns' ) ) :
	/**
	 * Unregister Jetpack patterns and core patterns bundled in WordPress.
	 */
	function envosta_unregister_patterns() {
		$pattern_names = array(
			// Jetpack form patterns.
			'contact-form',
			'newsletter-form',
			'rsvp-form',
			'registration-form',
			'appointment-form',
			'feedback-form',
			// Patterns bundled in WordPress core.
			// These would be removed by remove_theme_support( 'core-block-patterns' )
			// if it's called on the init action with priority 9 from a plugin, not from a theme.
			'core/query-standard-posts',
			'core/query-medium-posts',
			'core/query-small-posts',
			'core/query-grid-posts',
			'core/query-large-title-posts',
			'core/query-offset-posts',
			'core/social-links-shared-background-color',
		);
		foreach ( $pattern_names as $pattern_name ) {
			$pattern = \WP_Block_Patterns_Registry::get_instance()->get_registered( $pattern_name );
			if ( $pattern ) {
				unregister_block_pattern( $pattern_name );
			}
		}
	}

endif;

if ( ! function_exists( 'envosta_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Envosta 1.0
	 *
	 * @return void
	 */
	function envosta_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'envosta', get_template_directory() . '/languages' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		// Unregister Jetpack form patterns and core patterns bundled in WordPress.
		// Simple sites
		envosta_unregister_patterns();
		add_filter( 'wp_loaded', function () {
			// Atomic sites
			envosta_unregister_patterns();
		} );
		// Remove theme support for the core and featured patterns coming from the Dotorg pattern directory.
		remove_theme_support( 'core-block-patterns' );
	}

endif;

add_action( 'after_setup_theme', 'envosta_setup' );

if ( ! function_exists( 'envosta_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since Envosta 1.0
	 *
	 * @return void
	 */
	function envosta_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'envosta-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'envosta-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'envosta_styles' );

if ( ! function_exists( 'envosta_preload_fonts' ) ) :
	/**
	 * Preload the base Inter variable font to reduce FOUT.
	 *
	 * @since Envosta 1.0
	 *
	 * @return void
	 */
	function envosta_preload_fonts() {
		$font_url = get_stylesheet_directory_uri() . '/assets/fonts/inter/InterVariable.woff2';
		echo '<link rel="preload" href="' . esc_url( $font_url ) . '" as="font" type="font/woff2" crossorigin>' . "\n";
	}

endif;

add_action( 'wp_head', 'envosta_preload_fonts', 1 );

if ( ! function_exists( 'envosta_remove_upsells' ) ) :
	/**
	 * Remove upsells from product description.
	 *
	 * @since Envosta 1.0
	 *
	 * @return void
	 */
	function envosta_remove_upsells() {
		remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
	}

endif;

add_action( 'init', 'envosta_remove_upsells' );


// updater for WordPress.com themes
if ( is_admin() )
	include dirname( __FILE__ ) . '/inc/updater.php';

// Mobile menu block styles: Push / Slide-Over / Slide-Down
include dirname( __FILE__ ) . '/inc/mobile-menu.php';

// Pattern categories (Site / Blog / WooCommerce) shown in the FSE sidebar.
// WooCommerce only appears when WC is active.
include dirname( __FILE__ ) . '/inc/pattern-categories.php';

// Envosta Studio — WXR-driven site setup. When Tools → Import runs a WXR
// exported by the Envosta Studio app, reads _envosta_* meta from the Home
// page, applies the values to site options/theme-mods, then cleans up.
include dirname( __FILE__ ) . '/inc/envosta-studio-setup.php';

// Hide WooCommerce-only templates/parts/patterns from the Site Editor when
// WooCommerce is not active. (The files still ship, so everything lights up
// the moment WooCommerce is installed.)
include dirname( __FILE__ ) . '/inc/hide-woo-templates.php';

// WooCommerce integration — loads only when WooCommerce is active so the
// theme auto-detects a store setup and ships the Shopify-style cart drawer,
// product gallery features, and preset-ready templates the moment Woo is on.
if ( ! function_exists( 'envosta_load_woocommerce_integration' ) ) {
	function envosta_load_woocommerce_integration() {
		if ( class_exists( 'WooCommerce' ) ) {
			include dirname( __FILE__ ) . '/inc/woocommerce.php';
		}
	}
}
add_action( 'after_setup_theme', 'envosta_load_woocommerce_integration', 5 );

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
