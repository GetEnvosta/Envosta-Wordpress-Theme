<?php
/**
 * Envosta Base Theme
 * Built by Envosta | envosta.com
 */

if ( ! function_exists( 'envosta_setup' ) ) {
	function envosta_setup() {
		add_theme_support( 'editor-styles' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ] );
		add_theme_support( 'custom-logo', [
			'height'      => 60,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		] );
		add_editor_style( 'assets/css/editor-style.css' );

		// WooCommerce support.
		add_theme_support( 'woocommerce' );
	}
}
add_action( 'after_setup_theme', 'envosta_setup' );

if ( ! function_exists( 'envosta_enqueue_styles' ) ) {
	function envosta_enqueue_styles() {
		wp_enqueue_style(
			'envosta-style',
			get_stylesheet_uri(),
			[],
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'envosta_enqueue_styles' );

if ( ! function_exists( 'envosta_enqueue_reveal' ) ) {
	function envosta_enqueue_reveal() {
		wp_enqueue_script(
			'envosta-reveal',
			get_template_directory_uri() . '/assets/js/reveal.js',
			[],
			wp_get_theme()->get( 'Version' ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'envosta_enqueue_reveal' );

if ( ! function_exists( 'envosta_pattern_categories' ) ) {
	function envosta_pattern_categories() {
		register_block_pattern_category( 'envosta-sections', [
			'label' => __( 'Envosta Sections', 'envosta' ),
		] );
	}
}
add_action( 'init', 'envosta_pattern_categories' );

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
				[
					'timeout'   => 10,
					'sslverify' => true,
					'headers'   => [
						'User-Agent' => 'Envosta-Theme/' . $current_version,
					],
				]
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

			$transient->response[ $theme_slug ] = [
				'theme'       => $theme_slug,
				'new_version' => $remote_version,
				'url'         => $release_data['html_url'] ?? '',
				'package'     => $download_url,
			];
		}

		return $transient;
	}
}
add_filter( 'pre_set_site_transient_update_themes', 'envosta_github_theme_update' );

add_action( 'upgrader_process_complete', function ( $upgrader, $options ) {
	if ( 'update' === $options['action'] && 'theme' === $options['type'] ) {
		delete_transient( 'envosta_update_check' );
	}
}, 10, 2 );
