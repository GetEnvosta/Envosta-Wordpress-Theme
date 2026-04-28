/**
 * Envosta — Hijack core/navigation and woocommerce/mini-cart clicks.
 *
 * When either block has one of our directional block styles applied
 * (is-style-push / is-style-slide-over / is-style-slide-down), we
 * intercept the click on the auto-rendered button and route to the
 * Envosta overlay drawer system (loading the editable mobile-menu or
 * mini-cart template part).
 *
 * Author flow:
 *   - Drop a Navigation block, apply Push/Slide Over/Slide Down →
 *     hamburger drives the mobile-menu drawer.
 *   - Drop a WooCommerce Mini Cart block, apply same styles → cart
 *     icon drives the mini-cart drawer.
 *   - Leave either on the default style → block keeps its native
 *     WP/WC behavior.
 *
 * @package Envosta
 */

( function () {
	'use strict';

	if ( typeof document === 'undefined' ) return;

	var DIRECTIONAL_STYLE_RE = /(?:^|\s)is-style-(push|slide-over|slide-down)(?:\s|$)/;

	function directionFor( el ) {
		var match = ( el.className || '' ).match( DIRECTIONAL_STYLE_RE );
		return match ? match[ 1 ] : '';
	}

	function fireOverlay( slug, direction ) {
		// Synthesize a hidden trigger so mobile-menu-drawer.js's open
		// handler runs through its normal code path (focus, scroll
		// lock, push canvas, etc.).
		var fake = document.createElement( 'button' );
		fake.type = 'button';
		fake.setAttribute( 'data-envosta-overlay-open', slug );
		if ( direction ) fake.setAttribute( 'data-direction', direction );
		fake.style.position = 'fixed';
		fake.style.left = '-9999px';
		fake.setAttribute( 'aria-hidden', 'true' );
		document.body.appendChild( fake );
		fake.click();
		setTimeout( function () {
			if ( fake.parentNode ) fake.parentNode.removeChild( fake );
		}, 0 );
	}

	/* ---- Hijack: core/navigation hamburger ----------------------------- */
	document.addEventListener( 'click', function ( event ) {
		var openBtn = event.target.closest( '.wp-block-navigation__responsive-container-open' );
		if ( ! openBtn ) return;

		var navBlock = openBtn.closest( '.wp-block-navigation' );
		if ( ! navBlock ) return;

		var dir = directionFor( navBlock );
		if ( ! dir ) return; // default style — let WP handle it natively

		event.preventDefault();
		event.stopImmediatePropagation();
		fireOverlay( 'mobile-menu', dir );
	}, true );

	/* ---- Hijack: woocommerce/mini-cart icon ---------------------------- */
	document.addEventListener( 'click', function ( event ) {
		// WC's mini-cart block renders a button; in newer versions it
		// has class .wc-block-mini-cart__button. Walk up to find the
		// containing block and check its directional style.
		var miniCartBlock = event.target.closest( '.wp-block-woocommerce-mini-cart' );
		if ( ! miniCartBlock ) return;

		var dir = directionFor( miniCartBlock );
		if ( ! dir ) return; // default style — let WC's own drawer open

		// Make sure the click was on something that would actually
		// open WC's drawer (the button or the icon inside it).
		var trigger = event.target.closest( 'button, a' );
		if ( ! trigger || ! miniCartBlock.contains( trigger ) ) return;

		event.preventDefault();
		event.stopImmediatePropagation();
		fireOverlay( 'mini-cart', dir );
	}, true );

} )();
