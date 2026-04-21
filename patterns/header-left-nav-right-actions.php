<?php
/**
 * Title: Header — Nav Left, Actions Right
 * Slug: envosta/header-left-nav-right-actions
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Flex row with logo and title on the left, classic navigation in the center, and a search icon plus a call-to-action button on the right.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"header","align":"full","className":"envosta-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<header class="wp-block-group alignfull envosta-header" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
	<div class="wp-block-group">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":36} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"className":"is-style-menu-classic","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->

		<!-- wp:group {"className":"envosta-header-actions","layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-group envosta-header-actions">
			<!-- wp:search {"label":"","showLabel":false,"placeholder":"","buttonText":"","buttonPosition":"button-only","buttonUseIcon":true,"className":"envosta-search-icon"} /-->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Get started', 'envosta'); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</header>
<!-- /wp:group -->
