/**
 * Envosta — Frontend Interactions
 *
 * - Toggles .is-scrolled on the header past 40px
 * - Reveals .envosta-reveal elements on scroll
 * - Respects prefers-reduced-motion
 */
( function () {
	'use strict';

	document.addEventListener( 'DOMContentLoaded', function () {

		// --- Sticky-scroll header ---
		var header = document.querySelector( '.envosta-header' );
		if ( header ) {
			var onScroll = function () {
				if ( window.scrollY > 40 ) {
					header.classList.add( 'is-scrolled' );
				} else {
					header.classList.remove( 'is-scrolled' );
				}
			};
			window.addEventListener( 'scroll', onScroll, { passive: true } );
			onScroll();
		}

		// --- Reveal-on-scroll ---
		var reduceMotion = window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
		var reveals = document.querySelectorAll( '.envosta-reveal' );

		if ( reduceMotion || ! ( 'IntersectionObserver' in window ) ) {
			reveals.forEach( function ( el ) { el.classList.add( 'is-visible' ); } );
			return;
		}

		var observer = new IntersectionObserver( function ( entries ) {
			entries.forEach( function ( entry, i ) {
				if ( entry.isIntersecting ) {
					setTimeout( function () {
						entry.target.classList.add( 'is-visible' );
					}, i * 80 );
					observer.unobserve( entry.target );
				}
			} );
		}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' } );

		reveals.forEach( function ( el ) { observer.observe( el ); } );

	} );

} )();
