<?php
/**
 * Title: Shop — Hero Banner
 * Slug: envosta/shop-header-hero
 * Categories: envosta-shop
 * Template Types: archive-product
 * Description: Edge-to-edge shop hero banner with gradient background, eyebrow, large heading, subhead and CTA.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"}},"dimensions":{"minHeight":"400px"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="color:#ffffff;background:linear-gradient(135deg, #1e1b4b 0%, #312e81 55%, #4338ca 100%);min-height:400px;padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
	<p class="has-text-align-center envosta-eyebrow" style="color:#c7d2fe;margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Now live', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4.5rem)","letterSpacing":"-0.03em","lineHeight":"1.02","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;margin-bottom:1.25rem;font-size:clamp(2.5rem, 6vw, 4.5rem);font-weight:700;letter-spacing:-0.03em;line-height:1.02"><?php esc_html_e( 'Spring collection 2026', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.55"},"spacing":{"margin":{"bottom":"2.25rem","left":"auto","right":"auto"}}}} -->
	<p class="has-text-align-center" style="color:#e0e7ff;margin-right:auto;margin-bottom:2.25rem;margin-left:auto;font-size:1.2rem;line-height:1.55"><?php esc_html_e( 'Fifty-two new pieces cut from organic cotton, linen and merino. Crafted in studios you can visit.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.875rem","right":"1.75rem","bottom":"0.875rem","left":"1.75rem"}},"typography":{"fontWeight":"600"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop" style="border-radius:9999px;color:#1e1b4b;background-color:#ffffff;padding:0.875rem 1.75rem;font-weight:600"><?php esc_html_e( 'Shop the collection', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
