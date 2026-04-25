<?php
/**
 * Title: Header — Shop, Centered Nav (Sticky)
 * Slug: envosta/header-shop-centered
 * Categories: woocommerce, header
 * Block Types: core/template-part/header
 * Description: Sticky shop header with the logo on the left, navigation in the middle, and the WooCommerce mini-cart on the right. On tablet and mobile, the nav becomes a hamburger that slides in from the left, with the logo centered and the mini-cart on the right. Has a subtle blurred background when scrolled past the header.
 *
 * @package Envosta
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"className":"envosta-header-shop-centered","align":"full","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"theme-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group envosta-header-shop-centered alignfull has-theme-1-background-color has-background" style="position:sticky;top:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);z-index:50">

	<!-- wp:group {"align":"wide","className":"envosta-header-shop-centered__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide envosta-header-shop-centered__inner">

		<!-- wp:site-logo {"width":48} /-->

		<!-- wp:navigation {"overlayMenu":"mobile","className":"is-style-slide-over"} /-->

		<!-- wp:woocommerce/mini-cart /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
