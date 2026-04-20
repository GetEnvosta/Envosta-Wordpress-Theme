<?php
/**
 * Title: Page — Simple Intro
 * Slug: envosta/page-intro-simple
 * Categories: envosta-page
 * Template Types: page
 * Description: Constrained centered intro with eyebrow, page title, lead paragraph, and divider.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"7rem","bottom":"3rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:7rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">

	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1.25rem"}}},"textColor":"accent"} -->
	<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1.25rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Company', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5.5vw, 4rem)","letterSpacing":"-0.025em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:1.5rem;font-size:clamp(2.5rem, 5.5vw, 4rem);font-weight:700;letter-spacing:-0.025em;line-height:1.05"><?php esc_html_e( 'A small studio, a long point of view.', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.65"},"spacing":{"margin":{"left":"auto","right":"auto"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-right:auto;margin-left:auto;font-size:1.2rem;line-height:1.65"><?php esc_html_e( 'We work with a handful of clients each year on the kind of problems that deserve real attention. Here is what we believe, how we work, and who we work with.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"3.5rem","bottom":"0"}}},"backgroundColor":"border"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity has-border-background-color has-background is-style-wide" style="margin-top:3.5rem;margin-bottom:0"/>
	<!-- /wp:separator -->

</div>
<!-- /wp:group -->
