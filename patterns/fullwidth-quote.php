<?php
/**
 * Title: Full Width — Pull Quote
 * Slug: envosta/fullwidth-quote
 * Categories: envosta-page
 * Template Types: page-full-width
 * Description: Full-width soft-background section with centered oversized italic pull quote and author line.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull envosta-reveal has-base-2-background-color has-background" style="padding-top:8rem;padding-right:2rem;padding-bottom:8rem;padding-left:2rem">

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.5rem","lineHeight":"1","fontWeight":"600"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"accent"} -->
	<p class="has-text-align-center has-accent-color has-text-color" style="margin-bottom:2rem;font-size:2.5rem;font-weight:600;line-height:1"><?php esc_html_e( '“', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(2rem, 4.5vw, 3.5rem)","fontStyle":"italic","fontWeight":"500","lineHeight":"1.25","letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"3rem"}}}} -->
	<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:3rem;font-size:clamp(2rem, 4.5vw, 3.5rem);font-style:italic;font-weight:500;letter-spacing:-0.02em;line-height:1.25"><?php esc_html_e( 'Design is not how it looks. It is the way your customer understands, at a glance, that you give a damn.', 'envosta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"0","bottom":"2rem"}}},"backgroundColor":"border"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity has-border-background-color has-background is-style-wide" style="margin-top:0;margin-bottom:2rem"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","fontWeight":"600","letterSpacing":"-0.005em"}}} -->
	<p class="has-text-align-center" style="font-size:1rem;font-weight:600;letter-spacing:-0.005em"><?php esc_html_e( 'Tobi Arenberg', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem"}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.9rem"><?php esc_html_e( 'Founder & Principal, Envosta Studio', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
