<?php
/**
 * Title: Header — Split Navigation
 * Slug: envosta/header-split-nav
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Split navigation with half the menu items on either side of a centered logo and site title, plus a right-aligned button.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"header","align":"full","className":"envosta-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<header class="wp-block-group alignfull envosta-header" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
	<div class="wp-block-group">

		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->

		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":56,"align":"center"} /-->
			<!-- wp:site-title {"textAlign":"center","level":0,"fontSize":"medium"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-group">
			<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Shop', 'envosta'); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
