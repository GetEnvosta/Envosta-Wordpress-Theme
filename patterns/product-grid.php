<?php
/**
 * Title: Product Grid
 * Slug: envosta/product-grid
 * Categories: envosta-commerce
 * Description: WooCommerce product showcase with polished section header, card hover, and view-all link.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"3.5rem"}}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:3.5rem;align-items:flex-end">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Shop', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.75rem, 3.5vw, 2.5rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"}}} -->
			<h2 class="wp-block-heading" style="font-size:clamp(1.75rem, 3.5vw, 2.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'Featured products', 'envosta' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"}},"textColor":"accent"} -->
		<p class="has-accent-color has-text-color" style="font-size:0.875rem;font-weight:600"><a href="/shop" style="color:inherit;text-decoration:none"><?php esc_html_e( 'Shop all →', 'envosta' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"collection":"woocommerce/product-collection/featured"} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:group {"className":"envosta-card envosta-card-hover","style":{"spacing":{"padding":"0"},"border":{"radius":"12px","width":"1px"}},"backgroundColor":"base","borderColor":"border"} -->
			<div class="wp-block-group envosta-card envosta-card-hover has-border-color has-base-background-color has-border-border-color has-background" style="border-width:1px;border-radius:12px;padding:0;overflow:hidden">
				<!-- wp:woocommerce/product-image {"showSaleBadge":true,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"dimensions":{"aspectRatio":"1"}}} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.5rem","left":"1.25rem"},"blockGap":"0.5rem"}}} -->
				<div class="wp-block-group" style="padding:1.25rem 1.25rem 1.5rem">
					<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"1rem","fontWeight":"600","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0.25rem"}}}} /-->
					<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}}} /-->
					<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"1rem"}}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->
		<!-- wp:woocommerce/product-collection-no-results -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"}},"textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'No featured products yet — check back soon.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:woocommerce/product-collection-no-results -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
