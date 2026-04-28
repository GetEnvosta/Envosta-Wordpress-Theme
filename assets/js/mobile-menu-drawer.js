/**
 * Envosta — Overlay drawer system (template-part backed).
 *
 * Companion to inc/mobile-menu.php. One drawer per overlay slug
 * (mobile-menu, mini-cart, ...) is rendered into wp_footer. Triggers
 * route to the matching drawer and direction.
 *
 *   • Trigger: any element with [data-envosta-overlay-open="<slug>"]
 *     and an optional [data-direction="push-right|push-left|
 *     slide-right|slide-left|slide-down"]. May also carry a size
 *     class ("size-25" / "size-50" / "size-75") which is forwarded
 *     to the drawer to scale width or height.
 *   • Close: [data-envosta-mobile-menu-close], Escape, or backdrop.
 *   • Body gets `envosta-mobile-menu-open` while any drawer is open
 *     so CSS can lock scroll. Push variants additionally get
 *     `envosta-mobile-menu-push-right-active` or `-push-left-active`
 *     so the page canvas slides by --envosta-overlay-size.
 *
 * Backwards-compatible: [data-envosta-mobile-menu-open] still routes
 * to the 'mobile-menu' overlay.
 *
 * @package Envosta
 */

( function () {
	'use strict';

	if ( typeof document === 'undefined' ) return;

	var DIRECTIONS = [ 'push-right', 'push-left', 'overlay-right', 'overlay-left', 'slide-down' ];
	var SIZES      = [ 'size-25', 'size-50', 'size-75', 'size-100' ];
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

	function setSize( drawer, size ) {
		SIZES.forEach( function ( s ) {
			drawer.classList.remove( s );
		} );
		if ( size && SIZES.indexOf( size ) !== -1 ) {
			drawer.classList.add( size );
		}
	}

	var lastTrigger = null;

	function openDrawer( slug, direction, size, trigger ) {
		var drawer = getDrawer( slug );
		if ( ! drawer ) return;

		lastTrigger = trigger || null;

		setDirection( drawer, direction );
		setSize( drawer, size );

		drawer.hidden = false;
		// Force layout flush so the entry animation runs.
		// eslint-disable-next-line no-unused-expressions
		drawer.offsetHeight;

		drawer.classList.remove( 'envosta-closing' );
		drawer.classList.add( 'is-open' );
		drawer.setAttribute( 'aria-hidden', 'false' );
		document.body.classList.add( 'envosta-mobile-menu-open' );

		// Push variants slide the page canvas. Mirror the size variable
		// onto <body> so the canvas-push CSS knows how far to translate.
		if ( drawer.classList.contains( 'is-style-push-right' ) ) {
			document.body.classList.add( 'envosta-mobile-menu-push-right-active' );
		} else if ( drawer.classList.contains( 'is-style-push-left' ) ) {
			document.body.classList.add( 'envosta-mobile-menu-push-left-active' );
		}
		var size_var = getComputedStyle( drawer ).getPropertyValue( '--envosta-overlay-size' ).trim();
		if ( size_var ) {
			document.body.style.setProperty( '--envosta-overlay-size', size_var );
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
			document.body.style.removeProperty( '--envosta-overlay-size' );

			if ( lastTrigger && typeof lastTrigger.focus === 'function' ) {
				try { lastTrigger.focus( { preventScroll: true } ); } catch ( e ) { lastTrigger.focus(); }
			}
			lastTrigger = null;
		}

		// Trigger canvas slide-back BEFORE the panel exit animation
		// starts so both run in lockstep.
		document.body.classList.remove(
			'envosta-mobile-menu-push-right-active',
			'envosta-mobile-menu-push-left-active'
		);

		drawer.classList.add( 'envosta-closing' );

		if ( panel ) {
			panel.addEventListener( 'animationend', finish, { once: true } );
		}
		setTimeout( finish, SAFETY_MS );
	}

	/* -- Events -------------------------------------------------------- */

	document.addEventListener( 'click', function ( event ) {
		var openTrigger = event.target.closest( '[data-envosta-overlay-open], [data-envosta-mobile-menu-open]' );
		if ( openTrigger ) {
			event.preventDefault();
			var slug = openTrigger.getAttribute( 'data-envosta-overlay-open' )
				|| ( openTrigger.hasAttribute( 'data-envosta-mobile-menu-open' ) ? 'mobile-menu' : '' );
			var dir  = openTrigger.getAttribute( 'data-direction' );
			var size = openTrigger.getAttribute( 'data-size' );
			openDrawer( slug, dir, size, openTrigger );
			return;
		}

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
