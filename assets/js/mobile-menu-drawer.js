/**
 * Envosta — Overlay drawer system (template-part backed).
 *
 * Companion to inc/mobile-menu.php. Renders one drawer per registered
 * overlay (mobile-menu, mini-cart, ...) into wp_footer. Any clickable
 * element with [data-envosta-overlay-open="<slug>"] (and an optional
 * [data-direction="push|slide-over|slide-down"]) opens the matching
 * drawer.
 *
 * Backwards-compatible: [data-envosta-mobile-menu-open] still works
 * and routes to the 'mobile-menu' overlay.
 *
 *   • Click on a trigger → open the matching drawer with the
 *     requested direction.
 *   • Click on [data-envosta-mobile-menu-close] (close button or
 *     backdrop) → animate out, then hide.
 *   • Escape → close any open drawer.
 *   • Focus moves to the close button on open and back to the trigger
 *     on close.
 *   • Body gets `envosta-mobile-menu-open` while any drawer is open
 *     so CSS can lock scroll. Push variants also get
 *     `envosta-mobile-menu-push-active` so the page canvas slides.
 *
 * @package Envosta
 */

( function () {
	'use strict';

	if ( typeof document === 'undefined' ) return;

	var DIRECTIONS = [ 'push', 'slide-over', 'slide-down' ];
	var SAFETY_MS  = 400;

	function getDrawer( slug ) {
		if ( ! slug ) slug = 'mobile-menu';
		return document.querySelector( '[data-envosta-overlay="' + slug + '"]' );
	}

	function getOpenDrawer() {
		return document.querySelector( '[data-envosta-overlay].is-open' );
	}

	function setDirection( drawer, direction ) {
		if ( ! direction || DIRECTIONS.indexOf( direction ) === -1 ) return;
		DIRECTIONS.forEach( function ( d ) {
			drawer.classList.remove( 'is-style-' + d );
		} );
		drawer.classList.add( 'is-style-' + direction );
	}

	var lastTrigger = null;

	function openDrawer( slug, direction, trigger ) {
		var drawer = getDrawer( slug );
		if ( ! drawer ) return;

		lastTrigger = trigger || null;

		setDirection( drawer, direction );

		drawer.hidden = false;
		// Force layout flush so the entry animation runs.
		// eslint-disable-next-line no-unused-expressions
		drawer.offsetHeight;

		drawer.classList.remove( 'envosta-closing' );
		drawer.classList.add( 'is-open' );
		drawer.setAttribute( 'aria-hidden', 'false' );
		document.body.classList.add( 'envosta-mobile-menu-open' );

		// Push variant: slide the page canvas out.
		if ( drawer.classList.contains( 'is-style-push' ) ) {
			document.body.classList.add( 'envosta-mobile-menu-push-active' );
		}

		var closeBtn = drawer.querySelector( '.envosta-mobile-menu-drawer__close' );
		if ( closeBtn ) {
			try { closeBtn.focus( { preventScroll: true } ); } catch ( e ) { closeBtn.focus(); }
		}
	}

	function closeDrawer( drawer ) {
		drawer = drawer || getOpenDrawer();
		if ( ! drawer || ! drawer.classList.contains( 'is-open' ) ) return;

		var panel = drawer.querySelector( '.envosta-mobile-menu-drawer__panel' );
		var done  = false;

		function finish() {
			if ( done ) return;
			done = true;
			drawer.classList.remove( 'is-open', 'envosta-closing' );
			drawer.setAttribute( 'aria-hidden', 'true' );
			drawer.hidden = true;
			document.body.classList.remove( 'envosta-mobile-menu-open' );

			if ( lastTrigger && typeof lastTrigger.focus === 'function' ) {
				try { lastTrigger.focus( { preventScroll: true } ); } catch ( e ) { lastTrigger.focus(); }
			}
			lastTrigger = null;
		}

		// Trigger canvas slide-back BEFORE the panel exit animation
		// starts so both run in lockstep.
		document.body.classList.remove( 'envosta-mobile-menu-push-active' );

		drawer.classList.add( 'envosta-closing' );

		if ( panel ) {
			panel.addEventListener( 'animationend', finish, { once: true } );
		}
		setTimeout( finish, SAFETY_MS );
	}

	/* -- Events -------------------------------------------------------- */

	document.addEventListener( 'click', function ( event ) {
		// Open trigger — supports both new attr and legacy attr.
		var openTrigger = event.target.closest( '[data-envosta-overlay-open], [data-envosta-mobile-menu-open]' );
		if ( openTrigger ) {
			event.preventDefault();
			var slug = openTrigger.getAttribute( 'data-envosta-overlay-open' )
				|| ( openTrigger.hasAttribute( 'data-envosta-mobile-menu-open' ) ? 'mobile-menu' : '' );
			var dir  = openTrigger.getAttribute( 'data-direction' );
			openDrawer( slug, dir, openTrigger );
			return;
		}

		// Close trigger.
		var closeTrigger = event.target.closest( '[data-envosta-mobile-menu-close]' );
		if ( closeTrigger ) {
			event.preventDefault();
			var owningDrawer = closeTrigger.closest( '[data-envosta-overlay]' );
			closeDrawer( owningDrawer );
		}
	}, false );

	document.addEventListener( 'keydown', function ( event ) {
		if ( event.key !== 'Escape' && event.key !== 'Esc' ) return;
		var drawer = getOpenDrawer();
		if ( ! drawer ) return;
		closeDrawer( drawer );
	} );

} )();
