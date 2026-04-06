<?php
/**
 * Envosta Base Theme
 * Built by Envosta | envosta.com
 */

function envosta_theme_setup() {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption' ] );
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ] );
}
add_action( 'after_setup_theme', 'envosta_theme_setup' );

/**
 * Register custom pattern category for Envosta sections
 */
function envosta_register_pattern_categories() {
    register_block_pattern_category( 'envosta-sections', [
        'label' => __( 'Envosta Sections', 'envosta' ),
    ] );
}
add_action( 'init', 'envosta_register_pattern_categories' );
