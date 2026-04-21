<?php
/**
 * Title: Shop — With Filters Sidebar
 * Slug: envosta/shop-filters-sidebar
 * Template Types: archive-product
 * Inserter: no
 * Description: Archive header with a 25/75 layout — active filters, price, attributes on the left; product grid on the right.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:query-title {"type":"archive","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xx-large","fontFamily":"inter"} /-->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|60"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--60)"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">

			<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}},"typography":{"letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"13px"}},"textColor":"theme-3"} -->
			<h4 class="wp-block-heading has-theme-3-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:13px;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e('Filters', 'envosta'); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:woocommerce/active-filters {"displayStyle":"list","heading":"<?php echo esc_attr__('Active', 'envosta'); ?>"} /-->

			<!-- wp:woocommerce/filter-by-price {"heading":"<?php echo esc_attr__('Price', 'envosta'); ?>"} /-->

			<!-- wp:woocommerce/filter-by-attribute {"heading":"<?php echo esc_attr__('Attributes', 'envosta'); ?>"} /-->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">

			<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":9,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
				<!-- wp:woocommerce/product-template -->
					<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->
					<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"6px"}}},"fontSize":"medium","fontFamily":"inter","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
					<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"small"} /-->
					<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"fontSize":"small"} /-->
				<!-- /wp:woocommerce/product-template -->
				<!-- wp:woocommerce/product-collection-no-results /-->
			<!-- /wp:woocommerce/product-collection -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
