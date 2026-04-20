<?php
/**
 * Title: Blog — Minimal Header
 * Slug: envosta/blog-header-minimal
 * Categories: envosta-blog
 * Template Types: index, home
 * Description: Tight editorial blog header with centered eyebrow, H1, and lead paragraph.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"8rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:8rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">

	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1.25rem"}}},"textColor":"accent"} -->
	<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1.25rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Journal', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.25rem, 5.5vw, 3.75rem)","letterSpacing":"-0.02em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:1.25rem;font-size:clamp(2.25rem, 5.5vw, 3.75rem);font-weight:700;letter-spacing:-0.02em;line-height:1.05"><?php esc_html_e( 'Writing on design, engineering, and the work.', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.15rem","lineHeight":"1.65"}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="font-size:1.15rem;line-height:1.65"><?php esc_html_e( 'Essays, process notes, and the occasional strong opinion — shipped whenever there is something worth saying.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
