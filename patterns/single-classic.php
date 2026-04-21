<?php
/**
 * Title: Single — Classic
 * Slug: envosta/single-classic
 * Template Types: single
 * Inserter: no
 * Description: Constrained single post with category pill, oversized title, meta, featured image, content, tags, and post navigation.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:post-terms {"term":"category","prefix":"","separator":" · ","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"13px"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-3"} /-->

	<!-- wp:post-title {"level":1,"style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"fontSize":"xx-large","fontFamily":"inter"} /-->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|40"}},"typography":{"letterSpacing":"0.06em","textTransform":"uppercase","fontSize":"13px"}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--40);font-size:13px;letter-spacing:0.06em;text-transform:uppercase">
		<!-- wp:post-date {"textColor":"theme-3"} /-->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"}},"textColor":"theme-3"} -->
		<p class="has-theme-3-color has-text-color" style="font-size:13px">·</p>
		<!-- /wp:paragraph -->
		<!-- wp:post-author-name {"isLink":false,"textColor":"theme-3"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"border":{"radius":"8px"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"align":"wide"} /-->

	<!-- wp:post-content {"layout":{"type":"constrained","contentSize":"620px"}} /-->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--40)"/>
	<!-- /wp:separator -->

	<!-- wp:post-terms {"term":"post_tag","prefix":"","separator":" ","style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase","fontSize":"13px"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"theme-3"} /-->

	<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|theme-2","width":"1px"},"bottom":{"color":"var:preset|color|theme-2","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
	<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--theme-2);border-top-width:1px;border-bottom-color:var(--wp--preset--color--theme-2);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
		<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_attr__('Previous', 'envosta'); ?>","showTitle":true,"linkLabel":true} /-->
		<!-- wp:post-navigation-link {"label":"<?php echo esc_attr__('Next', 'envosta'); ?>","showTitle":true,"linkLabel":true} /-->
	</div>
	<!-- /wp:group -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
