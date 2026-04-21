<?php
/**
 * Mobile menu block styles for core/navigation.
 *
 * Registers three mobile menu variants as native block styles so editors
 * can pick them from the block sidebar. CSS lives in style.css.
 *
 * Variants:
 *   - Push        → page content shifts right when menu opens
 *   - Slide-Over  → overlay slides in from the right over page content
 *   - Slide-Down  → fullscreen panel drops down from the top
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'envosta_register_mobile_menu_styles' ) ) :
	function envosta_register_mobile_menu_styles() {
		register_block_style( 'core/navigation', array(
			'name'  => 'push',
			'label' => __( 'Mobile: Push', 'envosta' ),
		) );
		register_block_style( 'core/navigation', array(
			'name'  => 'slide-over',
			'label' => __( 'Mobile: Slide-Over', 'envosta' ),
		) );
		register_block_style( 'core/navigation', array(
			'name'  => 'slide-down',
			'label' => __( 'Mobile: Slide-Down', 'envosta' ),
		) );
	}
endif;
add_action( 'init', 'envosta_register_mobile_menu_styles' );
