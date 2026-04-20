<?php
/**
 * Title: Single — Cover Header
 * Slug: envosta/single-header-cover
 * Categories: envosta-single
 * Template Types: single
 * Description: Full-bleed cover hero using the featured image with overlayed post title and date in white.
 * Viewport Width: 1440
 */
?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":60,"overlayColor":"contrast","minHeight":70,"minHeightUnit":"vh","align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"8rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-cover alignfull envosta-reveal" style="padding-top:8rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem;min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container">

	<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"0.72rem","fontWeight":"600","letterSpacing":"0.14em","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"1.5rem"}},"color":{"text":"#ffffff"}}} /-->

	<!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4.5rem)","letterSpacing":"-0.03em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}},"color":{"text":"#ffffff"}}} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group" style="align-items:center">
		<!-- wp:post-author-name {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} /-->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#ffffff"}}} -->
		<p class="has-text-color" style="color:#ffffff;font-size:0.95rem;opacity:0.75">·</p>
		<!-- /wp:paragraph -->
		<!-- wp:post-date {"style":{"typography":{"fontSize":"0.95rem"},"color":{"text":"#ffffff"}}} /-->
	</div>
	<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
