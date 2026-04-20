/**
 * Envosta — Mobile menu + cart drawer interactions
 *
 * - Push menu: toggles .envosta-menu-push-open on <body> so the CSS
 *   can slide the page content sideways
 * - Cart drawer: opens/closes the cart via data-envosta-cart-open
 *   and data-envosta-cart-close triggers
 * - Updates cart count bubble from Woo fragments
 */
( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {

		// --- Push menu body class sync ---
		var pushNavs = document.querySelectorAll( '.is-style-envosta-menu-push' );
		pushNavs.forEach( function ( nav ) {
			var openBtn  = nav.querySelector( '.wp-block-navigation__responsive-container-open' );
			var closeBtn = nav.querySelector( '.wp-block-navigation__responsive-container-close' );
			if ( openBtn ) {
				openBtn.addEventListener( 'click', function () {
					document.body.classList.add( 'envosta-menu-push-open' );
				} );
			}
			if ( closeBtn ) {
				closeBtn.addEventListener( 'click', function () {
					document.body.classList.remove( 'envosta-menu-push-open' );
				} );
			}
		} );

		// --- Cart drawer open/close ---
		var drawer  = document.getElementById( 'envosta-cart-drawer' );
		var openers = document.querySelectorAll( '[data-envosta-cart-open]' );
		var closers = document.querySelectorAll( '[data-envosta-cart-close]' );

		function openDrawer( e ) {
			if ( ! drawer ) { return; }
			if ( e ) { e.preventDefault(); }
			drawer.setAttribute( 'aria-hidden', 'false' );
			document.body.style.overflow = 'hidden';
		}
		function closeDrawer() {
			if ( ! drawer ) { return; }
			drawer.setAttribute( 'aria-hidden', 'true' );
			document.body.style.overflow = '';
		}

		openers.forEach( function ( el ) { el.addEventListener( 'click', openDrawer ); } );
		closers.forEach( function ( el ) { el.addEventListener( 'click', closeDrawer ); } );

		// Close on Escape
		document.addEventListener( 'keydown', function ( e ) {
			if ( e.key === 'Escape' && drawer && drawer.getAttribute( 'aria-hidden' ) === 'false' ) {
				closeDrawer();
			}
		} );

		// --- Cart count bubble ---
		function updateCartCount() {
			var countEl = document.querySelector( '[data-envosta-cart-count]' );
			if ( ! countEl ) { return; }
			var total = 0;
			document.querySelectorAll( '.widget_shopping_cart_content .mini_cart_item' ).forEach( function ( item ) {
				var qtyEl = item.querySelector( '.quantity' );
				if ( qtyEl ) {
					var match = qtyEl.textContent.match( /(\d+)/ );
					if ( match ) { total += parseInt( match[1], 10 ); }
				}
			} );
			countEl.textContent = total;
			countEl.classList.toggle( 'is-empty', total === 0 );
		}
		updateCartCount();

		// Hook into WooCommerce cart fragment refresh
		if ( typeof jQuery !== 'undefined' ) {
			jQuery( document.body ).on( 'added_to_cart wc_fragments_refreshed wc_fragments_loaded removed_from_cart', function () {
				setTimeout( updateCartCount, 100 );
				// Flash open the drawer when something is added
				if ( arguments[0] && arguments[0].type === 'added_to_cart' ) {
					openDrawer();
				}
			} );
		}

	} );

} )();
