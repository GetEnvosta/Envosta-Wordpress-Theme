<?php
/**
 * Title: Archive — Grid
 * Slug: envosta/archive-grid
 * Template Types: archive, home
 * Inserter: no
 * Description: Archive title and description above a two-column post card grid with pagination.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:query-title {"type":"archive","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xx-large","fontFamily":"inter"} /-->

	<!-- wp:term-description {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"theme-4","fontSize":"medium"} /-->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|60"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--60)"/>
	<!-- /wp:separator -->

	<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":true}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->
			<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}},"typography":{"letterSpacing":"-0.01em","lineHeight":"1.15"}},"fontSize":"large","fontFamily":"inter"} /-->
			<!-- wp:post-excerpt {"moreText":"","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->
			<!-- wp:post-date {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase","fontSize":"13px"}},"textColor":"theme-3"} /-->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
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
