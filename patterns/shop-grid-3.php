<?php
/**
 * Title: Shop — 3-Column Grid
 * Slug: envosta/shop-grid-3
 * Template Types: archive-product
 * Inserter: no
 * Description: Archive title with a clean 3-column product grid using the inherited query.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:query-title {"type":"archive","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xx-large","fontFamily":"inter"} /-->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"theme-4","fontSize":"medium"} -->
	<p class="has-theme-4-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Considered objects for the modern interior.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|60"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--60)"/>
	<!-- /wp:separator -->

	<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":12,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
		<!-- wp:woocommerce/product-template -->
			<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":"0"}}} /-->
			<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"6px"}}},"fontSize":"medium","fontFamily":"inter","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"small"} /-->
			<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
		<!-- /wp:woocommerce/product-template -->
		<!-- wp:woocommerce/product-collection-no-results /-->
	<!-- /wp:woocommerce/product-collection -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
