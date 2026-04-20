<?php
/**
 * Title: Page — Closing CTA
 * Slug: envosta/page-cta-footer
 * Categories: envosta-page
 * Template Types: page
 * Description: End-of-page CTA band with centered heading, subhead, and accent pill button.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull envosta-reveal has-base-2-background-color has-background" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(2.25rem, 5vw, 3.5rem)","letterSpacing":"-0.025em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:1.25rem;font-size:clamp(2.25rem, 5vw, 3.5rem);font-weight:700;letter-spacing:-0.025em;line-height:1.05"><?php esc_html_e( 'Ready to get started?', 'envosta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.15rem","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"2.5rem"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:2.5rem;font-size:1.15rem;line-height:1.6"><?php esc_html_e( 'Spin up a project in under five minutes. No credit card — just real work, in a real workspace.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"accent","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.9rem","bottom":"0.9rem","left":"2rem","right":"2rem"}}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-accent-background-color has-background wp-element-button" href="#" style="border-radius:9999px;padding-top:0.9rem;padding-right:2rem;padding-bottom:0.9rem;padding-left:2rem"><?php esc_html_e( 'Create your workspace', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
