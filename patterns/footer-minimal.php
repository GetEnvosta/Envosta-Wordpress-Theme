<?php
/**
 * Title: Footer — Minimal
 * Slug: envosta/footer-minimal
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: A single thin row with site title on the left, short navigation in the center, and compact social links on the right.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"envosta-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0"}},"border":{"top":{"color":"var:preset|color|theme-3","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1440px"}} -->
<footer class="wp-block-group alignfull envosta-footer" style="border-top-color:var(--wp--preset--color--theme-3);border-top-width:1px;margin-top:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0,"fontSize":"medium"} /-->
		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"small"} /-->
		<!-- wp:social-links {"iconColor":"theme-4","iconColorValue":"var(--wp--preset--color--theme-4)","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"x"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

</footer>
<!-- /wp:group -->
