<?php
/**
 * Title: Search — Header
 * Slug: envosta/search-header
 * Categories: envosta-search
 * Template Types: search
 * Description: Section header for search results with eyebrow, query heading, and result count.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"7rem","right":"2rem","bottom":"3rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:7rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">

	<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
	<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Search results', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:query-title {"type":"search","style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3.25rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} /-->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.6"}},"textColor":"muted"} -->
	<p class="has-muted-color has-text-color" style="font-size:1.05rem;line-height:1.6"><?php esc_html_e( 'Showing the most relevant matches across articles, pages, and resources.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"2.5rem","bottom":"0"}}},"backgroundColor":"border","className":"is-style-default"} -->
	<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-default" style="margin-top:2.5rem;margin-bottom:0"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
