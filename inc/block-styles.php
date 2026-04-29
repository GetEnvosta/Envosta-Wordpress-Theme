<?php
/**
 * Additional block styles shipped with Envosta.
 *
 * Currently registers:
 *   - "Grainy"  on core/group and core/cover — adds a subtle SVG noise
 *               texture over the block's background. Composes with any
 *               background color, image, or gradient already set.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'envosta_register_extra_block_styles' ) ) :
	function envosta_register_extra_block_styles() {
		$grainy = array(
			'name'  => 'grainy',
			'label' => __( 'Grainy', 'envosta' ),
		);
		register_block_style( 'core/group', $grainy );
		register_block_style( 'core/cover', $grainy );
		register_block_style( 'core/column', $grainy );
	}
endif;
add_action( 'init', 'envosta_register_extra_block_styles' );
