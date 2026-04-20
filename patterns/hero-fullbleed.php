<?php
/**
 * Title: Hero — Full Bleed
 * Slug: envosta/hero-fullbleed
 * Categories: envosta-hero
 * Description: Full-bleed background image with overlay text.
 * Viewport Width: 1440
 */
?>
<!-- wp:cover {"url":"https://placehold.co/1920x1080/2a2a2a/777?text=Background","dimRatio":50,"overlayColor":"contrast","minHeight":85,"minHeightUnit":"vh","align":"full","className":"is-style-envosta-cover-dim envosta-hero"} -->
<div class="wp-block-cover alignfull is-style-envosta-cover-dim envosta-hero" style="min-height:85vh">
	<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-50 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="https://placehold.co/1920x1080/2a2a2a/777?text=Background" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}}} -->
		<p class="has-text-align-center envosta-eyebrow" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Welcome', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1.5rem"}}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="margin-top:1rem;margin-bottom:1.5rem"><?php esc_html_e( 'Make an entrance', 'envosta' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.15rem"}}} -->
		<p class="has-text-align-center" style="font-size:1.15rem"><?php esc_html_e( 'A bold statement that sets the tone for everything that follows.', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
		<div class="wp-block-buttons" style="margin-top:2.5rem">
			<!-- wp:button {"className":"is-style-envosta-btn-pill"} -->
			<div class="wp-block-button is-style-envosta-btn-pill"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get Started', 'envosta' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
</div>
<!-- /wp:cover -->
