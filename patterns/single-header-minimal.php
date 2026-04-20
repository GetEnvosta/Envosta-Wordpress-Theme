<?php
/**
 * Title: Single — Minimal Header
 * Slug: envosta/single-header-minimal
 * Categories: envosta-single
 * Template Types: single
 * Description: Constrained-width single post header with category, title, metadata, and featured image.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"7rem","right":"2rem","bottom":"3rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:7rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">

	<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.7rem","fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"},"spacing":{"padding":{"top":"0.375rem","right":"0.875rem","bottom":"0.375rem","left":"0.875rem"},"margin":{"bottom":"1.5rem"}},"border":{"radius":"9999px"}},"backgroundColor":"base-2","textColor":"accent"} /-->

	<!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"clamp(2.25rem, 5.5vw, 3.75rem)","letterSpacing":"-0.02em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem","margin":{"bottom":"2.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="margin-bottom:2.5rem;align-items:center">
		<!-- wp:post-author-name {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"}}} /-->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:0.9rem">·</p>
		<!-- /wp:paragraph -->
		<!-- wp:post-date {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"muted"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"3rem"}}},"backgroundColor":"border","className":"is-style-default"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity has-border-background-color has-background is-style-default" style="margin-top:0;margin-bottom:3rem"/>
	<!-- /wp:separator -->

	<!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"border":{"radius":"16px"}}} /-->
</div>
<!-- /wp:group -->
