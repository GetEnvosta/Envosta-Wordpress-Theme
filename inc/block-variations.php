<?php
/**
 * Block variations for Envosta.
 *
 * Registers theme-specific variations on core blocks so content editors can
 * pick mobile menu styles, card styles, button variants, and image frames
 * directly from the block editor sidebar — no code required per client.
 *
 * Style names are unprefixed (no "envosta-*"); Envosta owns the theme so
 * there's no namespace collision risk.
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
		'name'  => 'menu-push',
		'label' => __( 'Push Menu', 'envosta' ),
	) );
	register_block_style( 'core/navigation', array(
		'name'  => 'menu-drawer',
		'label' => __( 'Slide Drawer', 'envosta' ),
	) );
	register_block_style( 'core/navigation', array(
		'name'  => 'menu-canvas',
		'label' => __( 'Full Canvas', 'envosta' ),
	) );
	register_block_style( 'core/navigation', array(
		'name'  => 'menu-classic',
		'label' => __( 'Classic', 'envosta' ),
	) );

	// --- core/group — section backgrounds ---
	register_block_style( 'core/group', array(
		'name'  => 'section-tight',
		'label' => __( 'Tight Section', 'envosta' ),
	) );
	register_block_style( 'core/group', array(
		'name'  => 'section-spacious',
		'label' => __( 'Spacious Section', 'envosta' ),
	) );

	// --- core/cover — hero treatments ---
	register_block_style( 'core/cover', array(
		'name'  => 'cover-dim',
		'label' => __( 'Dim Overlay', 'envosta' ),
	) );
	register_block_style( 'core/cover', array(
		'name'  => 'cover-grain',
		'label' => __( 'Grain Overlay', 'envosta' ),
	) );

	// --- core/image — card frames ---
	register_block_style( 'core/image', array(
		'name'  => 'image-rounded',
		'label' => __( 'Rounded', 'envosta' ),
	) );
	register_block_style( 'core/image', array(
		'name'  => 'image-bordered',
		'label' => __( 'Bordered', 'envosta' ),
	) );

	// --- core/button — button variants ---
	register_block_style( 'core/button', array(
		'name'  => 'outlined',
		'label' => __( 'Outlined', 'envosta' ),
	) );
	register_block_style( 'core/button', array(
		'name'  => 'pill',
		'label' => __( 'Pill', 'envosta' ),
	) );
	register_block_style( 'core/button', array(
		'name'  => 'arrow',
		'label' => __( 'Arrow', 'envosta' ),
	) );

	// --- core/quote — editorial quote variant ---
	register_block_style( 'core/quote', array(
		'name'  => 'editorial',
		'label' => __( 'Editorial', 'envosta' ),
	) );
}
add_action( 'init', 'envosta_register_block_styles' );

/**
 * Enqueue editor-side block variations JS.
 *
 * Block variations (new insertable entities with preset attributes) are
 * registered via JS because they require the block editor context.
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
