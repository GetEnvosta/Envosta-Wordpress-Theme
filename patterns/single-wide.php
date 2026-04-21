<?php
/**
 * Title: Single — Wide Cover
 * Slug: envosta/single-wide
 * Template Types: single
 * Inserter: no
 * Description: Full-bleed featured-image cover with overlay, title, and meta; constrained content below.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"theme-5","minHeight":60,"minHeightUnit":"vh","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1000px"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-5-background-color has-background-dim has-background-dim-50" style="background-color:var(--wp--preset--color--theme-5)"></span><div class="wp-block-cover__inner-container">

	<!-- wp:post-terms {"term":"category","prefix":"","separator":" · ","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"13px"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-1"} /-->

	<!-- wp:post-title {"level":1,"style":{"typography":{"fontSize":"clamp(56px, 8vw, 120px)","letterSpacing":"-0.03em","lineHeight":"1","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"theme-1","fontFamily":"inter"} /-->

	<!-- wp:post-date {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"13px"}},"textColor":"theme-1"} /-->

</div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:post-content {"layout":{"type":"constrained","contentSize":"620px"}} /-->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
