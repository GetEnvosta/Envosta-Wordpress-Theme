<?php
/**
 * Default attribute values for core blocks.
 *
 * Every new core/group inserted in the editor should default to:
 *
 *   • Width: Full          — align="full"
 *   • Inner blocks use content width: ON
 *     → layout.type="constrained"
 *
 * This matches the "section container" convention every Envosta pattern
 * uses and saves editors a couple of clicks on every page they build.
 *
 * Implementation: hook `block_type_metadata_settings`, which runs when
 * WordPress registers a block type from its block.json. We mutate the
 * `default` on the `align` and `layout` attribute definitions before the
 * block is handed to the editor, so insertion picks up the new defaults
 * client-side via the REST /wp/v2/block-types endpoint.
 *
 * @package Envosta
 * @since   Envosta 1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'envosta_block_default_attributes' ) ) :
	function envosta_block_default_attributes( $settings, $metadata ) {
		if ( ! is_array( $metadata ) || ! isset( $metadata['name'] ) ) {
			return $settings;
		}

		if ( 'core/group' === $metadata['name'] && ! empty( $settings['attributes'] ) ) {
			// Width: Full
			if ( isset( $settings['attributes']['align'] ) ) {
				$settings['attributes']['align']['default'] = 'full';
			}
			// Inner blocks use content width → constrained layout
			if ( isset( $settings['attributes']['layout'] ) ) {
				$settings['attributes']['layout']['default'] = array(
					'type' => 'constrained',
				);
			}
		}

		return $settings;
	}
endif;
add_filter( 'block_type_metadata_settings', 'envosta_block_default_attributes', 10, 2 );
