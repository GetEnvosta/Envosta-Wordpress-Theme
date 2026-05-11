<?php
/**
 * Envosta — additions loaded on top of upstream Assembler.
 *
 * This file is included from functions.php below the ENVOSTA ADDITIONS
 * marker. Keeping the additions in a separate include keeps the diff
 * against upstream Assembler in functions.php to a single short block.
 *
 * @package Envosta
 * @since   Envosta 1.0.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

/* ---------------------------------------------------------------------------
 * 1. Menu Drawer block — envosta/menu-drawer
 *
 *    A custom block (mirrors WooCommerce's mini-cart architecture):
 *    a trigger button + an Interactivity-API-powered drawer overlay
 *    whose contents come from the editable menu-drawer template part.
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_register_menu_drawer_block' ) ) :
	function envosta_register_menu_drawer_block() {
		register_block_type( get_stylesheet_directory() . '/blocks/menu-drawer' );
	}
endif;
add_action( 'init', 'envosta_register_menu_drawer_block' );

/* ---------------------------------------------------------------------------
 * 2. Menu Drawer template-part area + file-based template-part record.
 *
 *    Registers a 'menu-drawer' template-part area so the Site Editor
 *    shows the part under its own heading, then surfaces
 *    parts/menu-drawer.html as a discoverable template part. Same
 *    pattern WooCommerce uses for its 'mini-cart' part.
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_register_template_part_areas' ) ) :
	function envosta_register_template_part_areas( $areas ) {
		foreach ( $areas as $existing ) {
			if ( isset( $existing['area'] ) && 'menu-drawer' === $existing['area'] ) {
				return $areas;
			}
		}
		$areas[] = array(
			'area'        => 'menu-drawer',
			'label'       => __( 'Menu Drawer', 'envosta' ),
			'description' => __( 'Contents of the slide-out drawer opened by the Menu Drawer block.', 'envosta' ),
			'icon'        => 'menu',
			'area_tag'    => 'div',
		);
		return $areas;
	}
endif;
add_filter( 'default_wp_template_part_areas', 'envosta_register_template_part_areas' );

if ( ! function_exists( 'envosta_add_menu_drawer_template_part' ) ) :
	function envosta_add_menu_drawer_template_part( $query_result, $query, $template_type ) {
		if ( 'wp_template_part' !== $template_type ) {
			return $query_result;
		}
		foreach ( $query_result as $template ) {
			if ( isset( $template->slug ) && 'menu-drawer' === $template->slug ) {
				return $query_result;
			}
		}
		$file = get_stylesheet_directory() . '/parts/menu-drawer.html';
		if ( ! file_exists( $file ) ) {
			return $query_result;
		}

		$template                 = new WP_Block_Template();
		$template->id             = get_stylesheet() . '//menu-drawer';
		$template->theme          = get_stylesheet();
		$template->slug           = 'menu-drawer';
		$template->title          = __( 'Menu Drawer', 'envosta' );
		$template->description    = __( 'Editable contents of the Menu Drawer block.', 'envosta' );
		$template->source         = 'theme';
		$template->type           = 'wp_template_part';
		$template->area           = 'menu-drawer';
		$template->content        = file_get_contents( $file );
		$template->status         = 'publish';
		$template->has_theme_file = true;

		$query_result[] = $template;
		return $query_result;
	}
endif;
add_filter( 'get_block_templates', 'envosta_add_menu_drawer_template_part', 10, 3 );

/* ---------------------------------------------------------------------------
 * 3. Utility CSS — assets/css/utilities.css
 *
 *    Composable visibility and grainy-texture classes. Enqueued on
 *    every frontend page. See README.md for the full list.
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_enqueue_utilities' ) ) :
	function envosta_enqueue_utilities() {
		wp_enqueue_style(
			'envosta-utilities',
			get_stylesheet_directory_uri() . '/assets/css/utilities.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'envosta_enqueue_utilities' );

/* ---------------------------------------------------------------------------
 * 4. Auth-state body class + server-side hide-if-* utilities.
 *
 *    .show-if-logged-in / .show-if-logged-out key off body classes.
 *    .hide-if-logged-in / .hide-if-logged-out strip the block from
 *    the render output entirely so the markup never reaches the
 *    browser for the wrong audience.
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_logged_in_body_class' ) ) :
	function envosta_logged_in_body_class( $classes ) {
		$classes[] = is_user_logged_in() ? 'envosta-logged-in' : 'envosta-logged-out';
		return $classes;
	}
endif;
add_filter( 'body_class', 'envosta_logged_in_body_class' );

if ( ! function_exists( 'envosta_filter_visibility_blocks' ) ) :
	function envosta_filter_visibility_blocks( $content, $block ) {
		if ( ! is_string( $content ) || '' === $content ) {
			return $content;
		}
		if (
			false === strpos( $content, 'hide-if-logged-in' ) &&
			false === strpos( $content, 'hide-if-logged-out' )
		) {
			return $content;
		}
		$classes = isset( $block['attrs']['className'] ) ? (string) $block['attrs']['className'] : '';
		if ( '' === $classes ) {
			return $content;
		}
		$tokens = preg_split( '/\s+/', $classes );
		if ( in_array( 'hide-if-logged-in', $tokens, true ) && is_user_logged_in() ) {
			return '';
		}
		if ( in_array( 'hide-if-logged-out', $tokens, true ) && ! is_user_logged_in() ) {
			return '';
		}
		return $content;
	}
endif;
add_filter( 'render_block', 'envosta_filter_visibility_blocks', 10, 2 );

/* ---------------------------------------------------------------------------
 * 5. GitHub release-based theme auto-updater.
 *
 *    Envosta ships from GitHub releases, not wordpress.org. This
 *    filter checks the repo's /releases/latest for a tag newer than
 *    the installed version and surfaces it in WP admin's update list.
 *    Cached for 12h to respect GitHub's anonymous rate limit.
 * ------------------------------------------------------------------------- */

if ( ! function_exists( 'envosta_github_theme_update' ) ) :
	function envosta_github_theme_update( $transient ) {
		if ( empty( $transient->checked ) ) {
			return $transient;
		}

		$theme_slug = get_stylesheet();
		$current    = wp_get_theme()->get( 'Version' );
		$cache_key  = 'envosta_github_latest_release';
		$latest     = get_transient( $cache_key );

		if ( false === $latest ) {
			$response = wp_remote_get(
				'https://api.github.com/repos/GetEnvosta/Envosta-Wordpress-Theme/releases/latest',
				array(
					'timeout' => 6,
					'headers' => array( 'Accept' => 'application/vnd.github+json' ),
				)
			);
			if ( is_wp_error( $response ) || 200 !== wp_remote_retrieve_response_code( $response ) ) {
				set_transient( $cache_key, array(), HOUR_IN_SECONDS );
				return $transient;
			}
			$data   = json_decode( wp_remote_retrieve_body( $response ), true );
			$latest = is_array( $data ) ? array(
				'version' => isset( $data['tag_name'] )   ? ltrim( (string) $data['tag_name'], 'v' ) : '',
				'zip'     => isset( $data['zipball_url'] ) ? (string) $data['zipball_url'] : '',
				'url'     => isset( $data['html_url'] )    ? (string) $data['html_url'] : '',
			) : array();
			set_transient( $cache_key, $latest, 12 * HOUR_IN_SECONDS );
		}

		if ( empty( $latest['version'] ) || version_compare( $latest['version'], $current, '<=' ) ) {
			return $transient;
		}

		$transient->response[ $theme_slug ] = array(
			'theme'       => $theme_slug,
			'new_version' => $latest['version'],
			'url'         => $latest['url'],
			'package'     => $latest['zip'],
		);

		return $transient;
	}
endif;
add_filter( 'pre_set_site_transient_update_themes', 'envosta_github_theme_update' );
