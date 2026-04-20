<?php
/**
 * Title: Hero — Centered
 * Slug: envosta/hero-centered
 * Categories: envosta-hero
 * Description: Centered hero with eyebrow, headline, tagline, and dual CTAs.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-hero envosta-reveal","style":{"spacing":{"padding":{"top":"10rem","bottom":"8rem","right":"2rem","left":"2rem"}},"minHeight":"80vh"},"layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignfull envosta-hero envosta-reveal" style="min-height:80vh;padding-top:10rem;padding-right:2rem;padding-bottom:8rem;padding-left:2rem">
	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
	<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Announcing', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1.5rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-top:1rem;margin-bottom:1.5rem"><?php esc_html_e( 'Build something worth talking about', 'envosta' ); ?></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.6"}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="font-size:1.2rem;line-height:1.6"><?php esc_html_e( 'A short, compelling description of what makes this brand different — the promise that brings people back.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"1rem","margin":{"top":"2.5rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:2.5rem">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get Started', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-envosta-btn-arrow"} -->
		<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Learn more', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
