/**
 * Envosta scroll reveal observer.
 * Activates .envosta-reveal elements as they enter the viewport.
 */
( function() {
	if ( typeof IntersectionObserver === 'undefined' ) return;

	const observer = new IntersectionObserver( ( entries ) => {
		entries.forEach( ( entry ) => {
			if ( entry.isIntersecting ) {
				entry.target.classList.add( 'visible' );
			}
		} );
	}, {
		threshold: 0.1,
		rootMargin: '0px 0px -40px 0px',
	} );

	document.querySelectorAll( '.envosta-reveal' ).forEach( ( el ) => {
		observer.observe( el );
	} );
} )();
