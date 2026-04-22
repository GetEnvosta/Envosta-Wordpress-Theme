<?php
/**
 * Envosta Studio — WXR-driven site setup.
 *
 * The Envosta Studio application (GetEnvosta/Envosta-application) exports
 * WXR files that embed site settings as post_meta on the Home page:
 *
 *   _envosta_pending_setup   — sentinel; the Home page with this meta is
 *                              the setup target.
 *   _envosta_site_title      — update_option('blogname', …)
 *   _envosta_site_tagline    — update_option('blogdescription', …)
 *   _envosta_home_title      — page title of the homepage (default: "Home").
 *                              Sets show_on_front=page + page_on_front.
 *   _envosta_blog_title      — optional page title for the posts page.
 *                              Sets page_for_posts (skipped if same as home).
 *   _envosta_style_variation — set_theme_mod('envosta_active_variation', …)
 *   _envosta_menu_name       — nav menu name; assigned to the four common
 *                              location slugs so it works with any header
 *                              template.
 *
 * When WordPress finishes an import (Tools → Import → WordPress), this hook
 * reads the meta, applies the values to site options and theme mods, then
 * deletes the _envosta_* meta so re-imports are no-ops.
 *
 * The hook is idempotent — running the importer a second time with no new
 * sentinel meta is a silent no-op.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'envosta_apply_studio_site_setup' ) ) :
	function envosta_apply_studio_site_setup() {
		// Find the Home page carrying the pending-setup sentinel.
		$pending = get_posts( array(
			'post_type'              => 'page',
			'meta_key'               => '_envosta_pending_setup',
			'meta_value'             => '1',
			'posts_per_page'         => 1,
			'post_status'            => 'any',
			'no_found_rows'          => true,
			'update_post_term_cache' => false,
		) );
		if ( empty( $pending ) ) {
			return;
		}
		$home_id = $pending[0]->ID;

		// Read meta.
		$site_title      = (string) get_post_meta( $home_id, '_envosta_site_title', true );
		$tagline         = (string) get_post_meta( $home_id, '_envosta_site_tagline', true );
		$home_title      = (string) get_post_meta( $home_id, '_envosta_home_title', true );
		$blog_title      = (string) get_post_meta( $home_id, '_envosta_blog_title', true );
		$style_variation = (string) get_post_meta( $home_id, '_envosta_style_variation', true );
		$menu_name       = (string) get_post_meta( $home_id, '_envosta_menu_name', true );

		if ( '' === $home_title ) $home_title = 'Home';
		if ( '' === $menu_name )  $menu_name  = 'Main Menu';

		// Site identity.
		if ( '' !== $site_title ) update_option( 'blogname',        $site_title );
		if ( '' !== $tagline    ) update_option( 'blogdescription', $tagline );

		// Homepage.
		$home = envosta_studio_find_page_by_title( $home_title );
		if ( $home instanceof WP_Post ) {
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $home->ID );
		}

		// Posts page (skip if identical to home).
		if ( '' !== $blog_title ) {
			$blog = envosta_studio_find_page_by_title( $blog_title );
			if ( $blog instanceof WP_Post && ( ! $home || $blog->ID !== $home->ID ) ) {
				update_option( 'page_for_posts', $blog->ID );
			}
		}

		// Nav menu → every common location slug so the menu shows regardless
		// of which one the current header template expects.
		$menu = wp_get_nav_menu_object( $menu_name );
		if ( $menu ) {
			$locations = get_theme_mod( 'nav_menu_locations' );
			if ( ! is_array( $locations ) ) $locations = array();
			foreach ( array( 'primary', 'header-navigation', 'main', 'header' ) as $loc ) {
				$locations[ $loc ] = (int) $menu->term_id;
			}
			set_theme_mod( 'nav_menu_locations', $locations );
		}

		// Style variation (stored as a theme_mod for the Envosta studio flow).
		if ( '' !== $style_variation ) {
			set_theme_mod( 'envosta_active_variation', $style_variation );
		}

		// Permalinks: only upgrade from the default plain structure. Never
		// overwrite a user- or previous-import-configured value.
		if ( '' === (string) get_option( 'permalink_structure' ) ) {
			update_option( 'permalink_structure', '/%postname%/' );
			flush_rewrite_rules( false );
		}

		// Clean up so re-imports are no-ops.
		$keys = array(
			'_envosta_site_title',
			'_envosta_site_tagline',
			'_envosta_home_title',
			'_envosta_blog_title',
			'_envosta_style_variation',
			'_envosta_menu_name',
			'_envosta_pending_setup',
		);
		foreach ( $keys as $k ) {
			delete_post_meta( $home_id, $k );
		}
	}
endif;
add_action( 'import_end', 'envosta_apply_studio_site_setup' );

/**
 * Forward-compatible page lookup by title.
 *
 * get_page_by_title() was deprecated in WordPress 6.2; this helper uses
 * WP_Query internally so the studio setup hook keeps working cleanly on
 * current and future WP versions.
 */
if ( ! function_exists( 'envosta_studio_find_page_by_title' ) ) :
	function envosta_studio_find_page_by_title( $title ) {
		if ( '' === (string) $title ) return null;

		$query = new WP_Query( array(
			'post_type'              => 'page',
			'title'                  => $title,
			'post_status'            => array( 'publish', 'draft', 'pending', 'future', 'private' ),
			'posts_per_page'         => 1,
			'no_found_rows'          => true,
			'update_post_term_cache' => false,
			'update_post_meta_cache' => false,
		) );

		return $query->have_posts() ? $query->posts[0] : null;
	}
endif;
