<?php
/**
 * Title: Header — Shop, Right-Aligned Actions
 * Slug: envosta/header-shop-actions
 * Categories: woocommerce, header
 * Block Types: core/template-part/header
 * Description: Shop header with the logo and site title aligned to the left. Navigation, a primary call-to-action button, and the WooCommerce mini-cart are all aligned to the right. The CTA button is hidden on small screens to keep the action group compact.
 *
 * @package Envosta
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"className":"envosta-header-shop-actions","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"theme-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group envosta-header-shop-actions alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":40} /-->
			<!-- wp:site-title {"level":0} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"envosta-header-shop-actions__right","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-group envosta-header-shop-actions__right">

			<!-- wp:navigation {"overlayMenu":"mobile","className":"is-style-slide-over"} /-->

			<!-- wp:buttons {"className":"envosta-header-shop-actions__cta"} -->
			<div class="wp-block-buttons envosta-header-shop-actions__cta">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'envosta' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:woocommerce/mini-cart /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
