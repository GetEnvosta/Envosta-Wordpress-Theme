<?php
/**
 * Title: Full Width — Immersive Hero
 * Slug: envosta/fullwidth-hero
 * Categories: envosta-page
 * Template Types: page-full-width
 * Description: Immersive full-bleed hero with Stripe-style purple/blue gradient, inverted text, and CTA.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-hero envosta-reveal","style":{"spacing":{"padding":{"top":"10rem","bottom":"10rem","right":"2rem","left":"2rem"}},"dimensions":{"minHeight":"88vh"}},"backgroundColor":"contrast","layout":{"type":"constrained","contentSize":"880px"}} -->
<div class="wp-block-group alignfull envosta-hero envosta-reveal has-contrast-background-color has-background" style="background:linear-gradient(135deg, #1e1b4b 0%, #4c1d95 35%, #6d28d9 65%, #2563eb 100%);color:#ffffff;min-height:88vh;padding-top:10rem;padding-right:2rem;padding-bottom:10rem;padding-left:2rem">

	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.18em","textTransform":"uppercase","fontWeight":"600"},"color":{"text":"#c4b5fd"},"spacing":{"margin":{"bottom":"1.75rem"}}}} -->
	<p class="has-text-align-center envosta-eyebrow has-text-color" style="color:#c4b5fd;margin-bottom:1.75rem;font-size:0.78rem;font-weight:600;letter-spacing:0.18em;text-transform:uppercase"><?php esc_html_e( 'Payments infrastructure for the modern internet', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(3rem, 7.5vw, 6.25rem)","lineHeight":"1","letterSpacing":"-0.035em","fontWeight":"700"},"color":{"text":"#ffffff"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff;margin-bottom:2rem;font-size:clamp(3rem, 7.5vw, 6.25rem);font-weight:700;letter-spacing:-0.035em;line-height:1"><?php esc_html_e( 'Move faster with financial infrastructure that just works.', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.3rem","lineHeight":"1.55"},"color":{"text":"rgba(255,255,255,0.78)"},"spacing":{"margin":{"left":"auto","right":"auto"}}}} -->
	<p class="has-text-align-center has-text-color" style="color:rgba(255,255,255,0.78);margin-right:auto;margin-left:auto;font-size:1.3rem;line-height:1.55"><?php esc_html_e( 'Accept payments, automate billing, and scale into new markets without rewriting a single endpoint. Trusted by millions of companies from ambitious start-ups to the Fortune 100.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0.75rem","margin":{"top":"3rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:3rem">
		<!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#1e1b4b"},"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"2rem","right":"2rem"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="border-radius:9999px;color:#1e1b4b;background-color:#ffffff;padding-top:0.9rem;padding-right:2rem;padding-bottom:0.9rem;padding-left:2rem"><?php esc_html_e( 'Start now', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"color":{"text":"#ffffff","background":"transparent"},"border":{"radius":"9999px","color":"rgba(255,255,255,0.35)","width":"1px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"2rem","right":"2rem"}}}} -->
		<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-text-color has-background wp-element-button" href="#" style="border-color:rgba(255,255,255,0.35);border-width:1px;border-radius:9999px;color:#ffffff;background-color:transparent;padding-top:0.9rem;padding-right:2rem;padding-bottom:0.9rem;padding-left:2rem"><?php esc_html_e( 'Contact sales →', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
