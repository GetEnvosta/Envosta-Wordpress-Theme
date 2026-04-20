<?php
/**
 * Title: 404 — Minimal
 * Slug: envosta/404-minimal
 * Categories: envosta-404
 * Template Types: 404
 * Description: Clean centered 404 with oversized faded numeral, message, and a single pill CTA home.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"10rem","right":"2rem","bottom":"10rem","left":"2rem"}},"dimensions":{"minHeight":"80vh"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="min-height:80vh;padding-top:10rem;padding-right:2rem;padding-bottom:10rem;padding-left:2rem">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(7rem, 18vw, 14rem)","lineHeight":"1","letterSpacing":"-0.05em","fontWeight":"800"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"base-2"} -->
	<h1 class="wp-block-heading has-text-align-center has-base-2-color has-text-color" style="margin-bottom:1rem;font-size:clamp(7rem, 18vw, 14rem);font-weight:800;letter-spacing:-0.05em;line-height:1"><?php esc_html_e( '404', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(1.75rem, 3.5vw, 2.5rem)","letterSpacing":"-0.02em","lineHeight":"1.15","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:1rem;font-size:clamp(1.75rem, 3.5vw, 2.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.15"><?php esc_html_e( 'Page not found', 'envosta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.6"}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="font-size:1.1rem;line-height:1.6"><?php esc_html_e( 'The page you were looking for has moved, been renamed, or never existed in the first place.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2.5rem">
		<!-- wp:button {"style":{"border":{"radius":"9999px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/" style="border-radius:9999px"><?php esc_html_e( 'Back to home', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
