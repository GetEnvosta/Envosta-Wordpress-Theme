/**
 * Envosta — Shopify-style cart drawer.
 *
 * Companion to inc/woocommerce.php. The drawer container
 * (#envosta-cart-drawer) is rendered server-side; this script handles
 * open / close / Escape and auto-opens the drawer when WooCommerce
 * fires the `added_to_cart` event.
 *
 * Loaded only when WooCommerce is active (gated in inc/woocommerce.php).
 *
 * @package Envosta
 */

( function () {
	'use strict';

	if ( typeof document === 'undefined' ) return;

	var drawer = document.getElementById( 'envosta-cart-drawer' );
	if ( ! drawer ) return;

	function openCart( event ) {
		if ( event ) event.preventDefault();
		drawer.classList.add( 'is-open' );
		drawer.setAttribute( 'aria-hidden', 'false' );
		document.body.classList.add( 'envosta-cart-open' );
	}

	function closeCart() {
		drawer.classList.remove( 'is-open' );
		drawer.setAttribute( 'aria-hidden', 'true' );
		document.body.classList.remove( 'envosta-cart-open' );
	}

	document.addEventListener( 'click', function ( event ) {
		if ( event.target.closest( '[data-envosta-cart-open]' ) )  openCart( event );
		if ( event.target.closest( '[data-envosta-cart-close]' ) ) closeCart();
	} );

	document.addEventListener( 'keydown', function ( event ) {
		if ( event.key === 'Escape' && drawer.classList.contains( 'is-open' ) ) closeCart();
	} );

	// WooCommerce fires `added_to_cart` on jQuery(document.body) after
	// a successful AJAX add-to-cart. Auto-open the drawer in response.
	// (The event only fires on commerce screens that issue an
	// AJAX add-to-cart, so we don't need a page-type guard here.)
	if ( window.jQuery ) {
		window.jQuery( document.body ).on( 'added_to_cart', function () {
			openCart();
		} );
	}

} )();
