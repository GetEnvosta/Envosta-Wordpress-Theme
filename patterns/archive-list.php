<?php
/**
 * Title: Archive — List
 * Slug: envosta/archive-list
 * Template Types: archive, home
 * Inserter: no
 * Description: Dense editorial index — date left, title right, separated rows.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:query-title {"type":"archive","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"fontSize":"xx-large","fontFamily":"inter"} /-->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:0;margin-bottom:0"/>
	<!-- /wp:separator -->

	<!-- wp:query {"queryId":0,"query":{"perPage":20,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
	<div class="wp-block-query">

		<!-- wp:post-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|40"},"border":{"bottom":{"color":"var:preset|color|theme-2","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
			<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--theme-2);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:post-date {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase","fontSize":"13px"}},"textColor":"theme-3"} /-->
				<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"letterSpacing":"-0.01em","lineHeight":"1.2"}},"fontSize":"medium","fontFamily":"inter"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e('No posts found.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->

	</div>
	<!-- /wp:query -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
