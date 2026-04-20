<?php
/**
 * Title: Category — Banner Header
 * Slug: envosta/category-banner
 * Categories: envosta-shop
 * Template Types: taxonomy-product_cat
 * Description: Full-width product category banner with gradient cover, large query title and term description.
 * Viewport Width: 1440
 */

?>
<!-- wp:cover {"dimRatio":100,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":380,"minHeightUnit":"px","align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-cover alignfull envosta-reveal" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem;min-height:380px">
	<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-100 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">

		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}},"color":{"text":"#cbd5e1"}}} -->
		<p class="has-text-align-center envosta-eyebrow has-text-color" style="color:#cbd5e1;margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Category', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4.25rem)","letterSpacing":"-0.03em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}},"color":{"text":"#ffffff"}}} /-->

		<!-- wp:term-description {"textAlign":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.6"},"spacing":{"margin":{"left":"auto","right":"auto"}},"color":{"text":"#e2e8f0"}}} /-->

	</div>
</div>
<!-- /wp:cover -->
