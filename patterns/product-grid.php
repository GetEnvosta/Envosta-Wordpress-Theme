<?php
/**
 * Title: Product — Grid
 * Slug: envosta/product-grid
 * Categories: commerce
 * Description: WooCommerce product collection with three-column grid and header.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-1","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:13px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('The shop', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.025em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-top:0;margin-bottom:0;letter-spacing:-0.025em;line-height:1"><?php esc_html_e('New this season.', 'envosta'); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p style="margin-top:0;margin-bottom:0;font-size:14px;font-weight:500"><a href="#"><?php esc_html_e('Shop all →', 'envosta'); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"queryContextIncludes":["collection"],"collection":"woocommerce/product-collection/product-catalog"} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":"8px"}}} /-->
				<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}},"typography":{"letterSpacing":"-0.01em"}},"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
				<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductBlock":false,"textAlign":"left","fontSize":"small","style":{"spacing":{"margin":{"top":"4px","bottom":"var:preset|spacing|20"}}}} /-->
				<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"0"}}}} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->

		<!-- wp:woocommerce/product-collection-no-results -->
			<!-- wp:paragraph {"align":"center","textColor":"theme-4"} -->
			<p class="has-text-align-center has-theme-4-color has-text-color"><?php esc_html_e('No products yet — check back soon.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:woocommerce/product-collection-no-results -->
	</div>
	<!-- /wp:woocommerce/product-collection -->

</div>
<!-- /wp:group -->
