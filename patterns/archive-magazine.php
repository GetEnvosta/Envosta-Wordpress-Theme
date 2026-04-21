<?php
/**
 * Title: Archive — Magazine
 * Slug: envosta/archive-magazine
 * Template Types: archive, home
 * Inserter: no
 * Description: Oversized archive title, a featured lead story, then a three-column grid of remaining posts.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:query-title {"type":"archive","style":{"typography":{"fontSize":"clamp(80px, 12vw, 180px)","letterSpacing":"-0.04em","lineHeight":"1","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"fontFamily":"inter"} /-->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)"/>
	<!-- /wp:separator -->

	<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
			<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|60"},"margin":{"bottom":"var:preset|spacing|70"}}}} -->
			<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--70)">

				<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
					<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"13px"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"theme-3"} -->
					<p class="has-theme-3-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:13px;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e('Featured', 'envosta'); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:post-title {"level":2,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}},"typography":{"letterSpacing":"-0.02em","lineHeight":"1.05"}},"fontSize":"x-large","fontFamily":"inter"} /-->
					<!-- wp:post-excerpt {"moreText":"","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"medium"} /-->
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"typography":{"fontSize":"13px","letterSpacing":"0.06em","textTransform":"uppercase"}}} -->
					<div class="wp-block-group" style="font-size:13px;letter-spacing:0.06em;text-transform:uppercase">
						<!-- wp:post-date {"textColor":"theme-3"} /-->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}},"textColor":"theme-3"} -->
						<p class="has-theme-3-color has-text-color" style="font-size:13px">—</p>
						<!-- /wp:paragraph -->
						<!-- wp:post-author-name {"isLink":false,"textColor":"theme-3"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:query {"queryId":2,"query":{"perPage":6,"pages":0,"offset":1,"postType":"post","order":"desc","orderBy":"date","inherit":false}} -->
	<div class="wp-block-query">

		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->
			<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}},"typography":{"letterSpacing":"-0.01em","lineHeight":"1.2"}},"fontSize":"medium","fontFamily":"inter"} /-->
			<!-- wp:post-date {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase","fontSize":"13px"}},"textColor":"theme-3"} /-->
		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
