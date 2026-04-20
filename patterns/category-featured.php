<?php
/**
 * Title: Category — Featured Collection
 * Slug: envosta/category-featured
 * Categories: envosta-shop
 * Template Types: taxonomy-product_cat
 * Description: Editorial two-column row pairing a large gradient image card with a right-side featured collection callout.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"2.5rem","left":"3rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:group {"className":"envosta-card-hover","style":{"border":{"radius":"16px"},"dimensions":{"aspectRatio":"4/5"}},"backgroundColor":"base-2"} -->
			<div class="wp-block-group envosta-card-hover has-base-2-background-color has-background" style="border-radius:16px;aspect-ratio:4/5"></div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Featured in this category', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.875rem, 4vw, 2.75rem)","letterSpacing":"-0.03em","lineHeight":"1.1","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
			<h2 class="wp-block-heading" style="margin-bottom:1.25rem;font-size:clamp(1.875rem, 4vw, 2.75rem);font-weight:700;letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'The Golden Hour capsule', 'envosta' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.65"},"spacing":{"margin":{"bottom":"1.75rem"}}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="margin-bottom:1.75rem;font-size:1.05rem;line-height:1.65"><?php esc_html_e( 'Twelve pieces, warmed to the color of late-summer light. Limited run — once it is gone, it is gone for the year.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}},"textColor":"accent"} -->
			<p class="has-accent-color has-text-color" style="font-size:0.95rem;font-weight:600"><a href="#" style="color:inherit;text-decoration:none"><?php esc_html_e( 'Shop the collection →', 'envosta' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
