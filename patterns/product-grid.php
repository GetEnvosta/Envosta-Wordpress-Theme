<?php
/**
 * Title: Product Grid
 * Slug: envosta/product-grid
 * Categories: envosta-commerce
 * Description: WooCommerce product showcase (3-up) with image, title, price, and add-to-cart.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">
	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"3rem"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:3rem">
		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","textColor":"accent"} --><p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Shop', 'envosta' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><h2 class="wp-block-heading has-text-align-center" style="margin-top:0.75rem"><?php esc_html_e( 'Featured products', 'envosta' ); ?></h2><!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"collection":"woocommerce/product-collection/featured"} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:group {"className":"envosta-card","style":{"spacing":{"padding":"0"},"border":{"radius":"8px"}}} -->
			<div class="wp-block-group envosta-card" style="border-radius:8px;padding:0">
				<!-- wp:woocommerce/product-image {"showSaleBadge":true,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}}} -->
				<div class="wp-block-group" style="padding:1rem 1.25rem 1.25rem">
					<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1rem","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0.4rem"}}}} /-->
					<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"style":{"typography":{"fontSize":"1rem","fontWeight":"600"}}} /-->
					<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->
		<!-- wp:woocommerce/product-collection-no-results -->
			<!-- wp:paragraph {"align":"center"} --><p class="has-text-align-center"><?php esc_html_e( 'No products yet.', 'envosta' ); ?></p><!-- /wp:paragraph -->
		<!-- /wp:woocommerce/product-collection-no-results -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
