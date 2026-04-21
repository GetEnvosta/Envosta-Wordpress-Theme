<?php
/**
 * Title: Header — Minimal
 * Slug: envosta/header-minimal
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Thin editorial row with the site title on the left and a simple navigation on the right.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"header","align":"full","className":"envosta-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<header class="wp-block-group alignfull envosta-header" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0,"fontSize":"medium"} /-->
		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->
	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
