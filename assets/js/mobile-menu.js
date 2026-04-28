/**
 * Envosta — Hijack core/navigation and woocommerce/mini-cart clicks.
 *
 * When either block has one of our directional block styles applied
 * (push-right, push-left, slide-right, slide-left, slide-down), we
 * intercept the click on the auto-rendered button and route to the
 * Envosta overlay drawer system (loading the editable mobile-menu or
 * mini-cart template part). Width can be tuned by adding `size-25`,
 * `size-50`, or `size-75` to the block's Additional CSS class field.
 *
 * Author flow:
 *   - Drop a Navigation block, apply Push/Slide direction → hamburger
 *     drives the mobile-menu drawer.
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

	var DIRECTIONAL_STYLE_RE = /(?:^|\s)is-style-(push-right|push-left|overlay-right|overlay-left|slide-down)(?:\s|$)/;
	var SIZE_CLASS_RE        = /(?:^|\s)(size-25|size-50|size-75|size-100)(?:\s|$)/;

	function directionFor( el ) {
		var match = ( el.className || '' ).match( DIRECTIONAL_STYLE_RE );
		return match ? match[ 1 ] : '';
	}

	function sizeFor( el ) {
		var match = ( el.className || '' ).match( SIZE_CLASS_RE );
		return match ? match[ 1 ] : '';
	}

	function fireOverlay( slug, direction, size ) {
		// Synthesize a hidden trigger so mobile-menu-drawer.js's open
		// handler runs through its normal code path (focus, scroll
		// lock, push canvas, etc.).
		var fake = document.createElement( 'button' );
		fake.type = 'button';
		fake.setAttribute( 'data-envosta-overlay-open', slug );
		if ( direction ) fake.setAttribute( 'data-direction', direction );
		if ( size )      fake.setAttribute( 'data-size',      size );
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
		fireOverlay( 'mobile-menu', dir, sizeFor( navBlock ) );
	}, true );

	/* ---- Hijack: woocommerce/mini-cart icon ---------------------------- */
	document.addEventListener( 'click', function ( event ) {
		var miniCartBlock = event.target.closest( '.wp-block-woocommerce-mini-cart' );
		if ( ! miniCartBlock ) return;

		var dir = directionFor( miniCartBlock );
		if ( ! dir ) return; // default style — let WC's own drawer open

		var trigger = event.target.closest( 'button, a' );
		if ( ! trigger || ! miniCartBlock.contains( trigger ) ) return;

		event.preventDefault();
		event.stopImmediatePropagation();
		fireOverlay( 'mini-cart', dir, sizeFor( miniCartBlock ) );
	}, true );

} )();
