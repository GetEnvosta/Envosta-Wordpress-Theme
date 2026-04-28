/**
 * Envosta — Native navigation block as a drawer trigger.
 *
 * When a core/navigation block has one of our three block styles
 * applied (is-style-push / is-style-slide-over / is-style-slide-down),
 * we hijack WordPress's built-in hamburger button so it opens the
 * Envosta mobile menu drawer (rendered in the footer, populated by
 * the editable mobile-menu template part) instead of WP's bare
 * responsive overlay.
 *
 * Author flow: drop a Navigation block in the header, apply a Mobile
 * block style — that's it. The hamburger that auto-appears on small
 * screens now drives the rich drawer.
 *
 * @package Envosta
 */

( function () {
	'use strict';

	if ( typeof document === 'undefined' ) return;

	var ENVOSTA_NAV_SEL = [
		'.wp-block-navigation.is-style-push',
		'.wp-block-navigation.is-style-slide-over',
		'.wp-block-navigation.is-style-slide-down'
	].join( ', ' );

	function directionFor( navBlock ) {
		if ( navBlock.classList.contains( 'is-style-push' ) )       return 'push';
		if ( navBlock.classList.contains( 'is-style-slide-down' ) ) return 'slide-down';
		return 'slide-over';
	}

	/**
	 * Intercept clicks on WordPress's hamburger button (the open-overlay
	 * button) when the parent navigation block has one of our mobile
	 * styles. Fire a synthetic click on a hidden trigger so
	 * mobile-menu-drawer.js opens the drawer with the matching direction.
	 *
	 * Capture phase so we beat WP's interactivity-API listener that
	 * would otherwise show its bare overlay.
	 */
	document.addEventListener( 'click', function ( event ) {
		var openBtn = event.target.closest( '.wp-block-navigation__responsive-container-open' );
		if ( ! openBtn ) return;

		var navBlock = openBtn.closest( ENVOSTA_NAV_SEL );
		if ( ! navBlock ) return; // not one of our styles — let WP handle it

		event.preventDefault();
		event.stopImmediatePropagation();

		var direction = directionFor( navBlock );

		// Forward to the drawer system. mobile-menu-drawer.js listens for
		// clicks on [data-envosta-mobile-menu-open] and reads
		// [data-direction]. We synthesize a temporary trigger so the
		// drawer's open handler runs through its normal code path
		// (focus management, body classes, push-canvas effect, etc.).
		var fake = document.createElement( 'button' );
		fake.type = 'button';
		fake.setAttribute( 'data-envosta-mobile-menu-open', '' );
		fake.setAttribute( 'data-direction', direction );
		fake.style.position = 'fixed';
		fake.style.left = '-9999px';
		fake.setAttribute( 'aria-hidden', 'true' );
		document.body.appendChild( fake );

		// Click triggers the drawer; remove the fake right after.
		fake.click();
		setTimeout( function () {
			if ( fake.parentNode ) fake.parentNode.removeChild( fake );
		}, 0 );
	}, true ); // capture

} )();
