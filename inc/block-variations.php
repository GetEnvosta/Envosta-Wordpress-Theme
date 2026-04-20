<?php
/**
 * Block variations for Envosta.
 *
 * Registers theme-specific variations on core blocks so clients can pick
 * Envosta-branded mobile menu styles, header variants, and card styles
 * directly from the block editor sidebar — no code required per client.
 *
 * All variations are namespaced `envosta/*` and prefixed `envosta-*` in CSS
 * to guarantee no collision with core or other themes.
 *
 * @package Envosta
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register block styles (visible as clickable thumbnails in the block sidebar).
 */
function envosta_register_block_styles() {

	// --- core/navigation — mobile menu styles ---
	register_block_style( 'core/navigation', array(
		'name'  => 'envosta-menu-push',
		'label' => __( 'Push Menu', 'envosta' ),
	) );
	register_block_style( 'core/navigation', array(
		'name'  => 'envosta-menu-drawer',
		'label' => __( 'Slide Drawer', 'envosta' ),
	) );
	register_block_style( 'core/navigation', array(
		'name'  => 'envosta-menu-canvas',
		'label' => __( 'Full Canvas', 'envosta' ),
	) );
	register_block_style( 'core/navigation', array(
		'name'  => 'envosta-menu-classic',
		'label' => __( 'Classic', 'envosta' ),
	) );

	// --- core/group — section backgrounds ---
	register_block_style( 'core/group', array(
		'name'  => 'envosta-section-tight',
		'label' => __( 'Tight Section', 'envosta' ),
	) );
	register_block_style( 'core/group', array(
		'name'  => 'envosta-section-spacious',
		'label' => __( 'Spacious Section', 'envosta' ),
	) );

	// --- core/cover — hero treatments ---
	register_block_style( 'core/cover', array(
		'name'  => 'envosta-cover-dim',
		'label' => __( 'Dim Overlay', 'envosta' ),
	) );
	register_block_style( 'core/cover', array(
		'name'  => 'envosta-cover-grain',
		'label' => __( 'Grain Overlay', 'envosta' ),
	) );

	// --- core/image — card frames ---
	register_block_style( 'core/image', array(
		'name'  => 'envosta-image-rounded',
		'label' => __( 'Rounded', 'envosta' ),
	) );
	register_block_style( 'core/image', array(
		'name'  => 'envosta-image-bordered',
		'label' => __( 'Bordered', 'envosta' ),
	) );

	// --- core/button — button variants ---
	register_block_style( 'core/button', array(
		'name'  => 'envosta-btn-pill',
		'label' => __( 'Pill', 'envosta' ),
	) );
	register_block_style( 'core/button', array(
		'name'  => 'envosta-btn-arrow',
		'label' => __( 'Arrow', 'envosta' ),
	) );

	// --- core/quote — editorial quote variant ---
	register_block_style( 'core/quote', array(
		'name'  => 'envosta-quote-editorial',
		'label' => __( 'Editorial', 'envosta' ),
	) );
}
add_action( 'init', 'envosta_register_block_styles' );

/**
 * Register block variations (visible in the block inserter as separate items).
 * These are distinct from block styles — a variation creates a new insertable
 * entity with preset attributes, not just a style override.
 *
 * Variations are registered via JS (block editor context), so this function
 * enqueues the JS that does the actual registration.
 */
function envosta_register_block_variations_js() {
	wp_enqueue_script(
		'envosta-block-variations',
		ENVOSTA_URI . '/assets/js/block-variations.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-i18n' ),
		ENVOSTA_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'envosta_register_block_variations_js' );
