/**
 * Envosta — Editor-side block variations
 *
 * Registers inserter variations of core blocks with preset attributes.
 * These appear as separate entries in the block inserter.
 */
( function ( blocks, domReady, i18n ) {
	'use strict';

	var __ = i18n.__;

	domReady( function () {

		// Navigation variations (appear in inserter)
		blocks.registerBlockVariation( 'core/navigation', {
			name: 'envosta-nav-push',
			title: __( 'Push Menu Nav', 'envosta' ),
			description: __( 'Mobile nav that pushes page content sideways.', 'envosta' ),
			attributes: { className: 'is-style-envosta-menu-push' },
			scope: [ 'inserter' ],
		} );

		blocks.registerBlockVariation( 'core/navigation', {
			name: 'envosta-nav-drawer',
			title: __( 'Drawer Menu Nav', 'envosta' ),
			description: __( 'Mobile nav that slides in as a drawer from the right.', 'envosta' ),
			attributes: { className: 'is-style-envosta-menu-drawer' },
			scope: [ 'inserter' ],
		} );

		blocks.registerBlockVariation( 'core/navigation', {
			name: 'envosta-nav-canvas',
			title: __( 'Full Canvas Nav', 'envosta' ),
			description: __( 'Full-screen takeover mobile nav with large centered links.', 'envosta' ),
			attributes: { className: 'is-style-envosta-menu-canvas' },
			scope: [ 'inserter' ],
		} );

	} );

} )( window.wp.blocks, window.wp.domReady, window.wp.i18n );
