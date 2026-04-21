<?php
/**
 * Title: Shop — Editorial
 * Slug: envosta/shop-editorial
 * Template Types: archive-product
 * Inserter: no
 * Description: Full-bleed textured hero followed by a generous 2-column product grid.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/texture-1.jpg')); ?>","dimRatio":30,"overlayColor":"theme-5","minHeight":60,"minHeightUnit":"vh","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-5-background-color has-background-dim-30 has-background-dim" style="background-color:var(--wp--preset--color--theme-5)"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('assets/images/texture-1.jpg')); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

	<!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontSize":"clamp(80px, 12vw, 180px)","letterSpacing":"-0.04em","lineHeight":"1","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"theme-1","fontFamily":"inter"} /-->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"14px"}},"textColor":"theme-1"} -->
	<p class="has-text-align-center has-theme-1-color has-text-color" style="font-size:14px;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e('The Collection', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

</div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":8,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","inherit":true},"displayLayout":{"type":"flex","columns":2}} -->
		<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->
			<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"8px"}},"typography":{"letterSpacing":"-0.01em"}},"fontSize":"large","fontFamily":"inter","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"medium"} /-->
			<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
		<!-- /wp:woocommerce/product-template -->
		<!-- wp:woocommerce/product-collection-no-results /-->
	<!-- /wp:woocommerce/product-collection -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
