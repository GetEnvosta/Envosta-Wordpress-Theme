<?php
/**
 * Title: Landing — Testimonial + CTA
 * Slug: envosta/landing-testimonial-cta
 * Categories: envosta-landing
 * Template Types: page-landing
 * Description: Dark testimonial section with 5-star row, pull quote, author, divider, and centered CTA.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"7rem","bottom":"7rem","right":"2rem","left":"2rem"}},"color":{"background":"#0f172a","text":"#ffffff"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull envosta-reveal has-text-color has-background" style="color:#ffffff;background-color:#0f172a;padding-top:7rem;padding-right:2rem;padding-bottom:7rem;padding-left:2rem">

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","letterSpacing":"0.15em"},"color":{"text":"#fbbf24"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
	<p class="has-text-align-center has-text-color" style="color:#fbbf24;margin-bottom:2rem;font-size:1.25rem;letter-spacing:0.15em">★★★★★</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(1.75rem, 4vw, 2.75rem)","fontStyle":"italic","fontWeight":"500","lineHeight":"1.25","letterSpacing":"-0.015em"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"2.5rem"}}}} -->
	<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff;margin-bottom:2.5rem;font-size:clamp(1.75rem, 4vw, 2.75rem);font-style:italic;font-weight:500;letter-spacing:-0.015em;line-height:1.25"><?php esc_html_e( '"We shipped in ten days what would have taken our team a quarter. The system does the heavy lifting — we just wrote the words and pressed publish."', 'envosta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","fontWeight":"600","letterSpacing":"-0.005em"},"color":{"text":"#ffffff"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#ffffff;font-size:1rem;font-weight:600;letter-spacing:-0.005em"><?php esc_html_e( 'Priya Venkataraman', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"rgba(255,255,255,0.6)"}}} -->
	<p class="has-text-align-center has-text-color" style="color:rgba(255,255,255,0.6);font-size:0.9rem"><?php esc_html_e( 'Head of Growth, Northwind Labs', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"3.5rem","bottom":"3rem"}},"color":{"background":"rgba(255,255,255,0.12)"}}} -->
	<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:rgba(255,255,255,0.12);margin-top:3.5rem;margin-bottom:3rem"/>
	<!-- /wp:separator -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#0f172a"},"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"2rem","right":"2rem"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="border-radius:9999px;color:#0f172a;background-color:#ffffff;padding-top:0.9rem;padding-right:2rem;padding-bottom:0.9rem;padding-left:2rem"><?php esc_html_e( 'See what it can do for your team', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
