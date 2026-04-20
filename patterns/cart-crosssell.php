<?php
/**
 * Title: Cart — Cross-sell Row
 * Slug: envosta/cart-crosssell
 * Categories: envosta-cart
 * Template Types: page-cart
 * Description: "Complete your order" section with a three-column curated product-collection grid of compact add-on cards.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:4rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">

	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"2.5rem"},"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:2.5rem">
		<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
		<p class="envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Hand-picked for you', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.5rem, 3vw, 2rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading" style="font-size:clamp(1.5rem, 3vw, 2rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'Complete your order', 'envosta' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:woocommerce/product-collection {"queryId":30,"query":{"perPage":3,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"popularity","inherit":false,"taxQuery":{},"isProductCollectionBlock":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[]},"displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"collection":"woocommerce/product-collection/cross-sells"} -->
	<div class="wp-block-woocommerce-product-collection">
		<!-- wp:woocommerce/product-template -->
			<!-- wp:group {"className":"envosta-card envosta-card-hover","style":{"spacing":{"padding":"0"},"border":{"radius":"12px","width":"1px"}},"backgroundColor":"base","borderColor":"border"} -->
			<div class="wp-block-group envosta-card envosta-card-hover has-border-color has-border-border-color has-base-background-color has-background" style="border-width:1px;border-radius:12px;padding:0;overflow:hidden">
				<!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
				<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile">
					<!-- wp:column {"verticalAlignment":"center","width":"110px"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:110px">
						<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"dimensions":{"aspectRatio":"1"}}} /-->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center"} -->
					<div class="wp-block-column is-vertically-aligned-center">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.875rem","right":"1rem","bottom":"0.875rem","left":"0.875rem"},"blockGap":"0.25rem"}}} -->
						<div class="wp-block-group" style="padding:0.875rem 1rem 0.875rem 0.875rem">
							<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0.125rem"}}}} /-->
							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"style":{"typography":{"fontSize":"0.85rem","fontWeight":"600"}}} /-->
							<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"style":{"spacing":{"margin":{"top":"0.625rem"}},"typography":{"fontSize":"0.8rem"}}} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/product-template -->
		<!-- wp:woocommerce/product-collection-no-results -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"}},"textColor":"muted"} -->
			<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'No suggestions available right now.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		<!-- /wp:woocommerce/product-collection-no-results -->
	</div>
	<!-- /wp:woocommerce/product-collection -->
</div>
<!-- /wp:group -->
