<?php
/**
 * Title: Category — Description Block
 * Slug: envosta/category-description
 * Categories: envosta-shop
 * Template Types: taxonomy-product_cat
 * Description: Two-column category intro with query title and term description on the left, three stacked gradient panels on the right.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3rem","left":"3rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Shop the category', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:query-title {"type":"archive","level":1,"style":{"typography":{"fontSize":"clamp(2rem, 4.5vw, 3.25rem)","letterSpacing":"-0.03em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} /-->
			<!-- wp:term-description {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.6"}},"textColor":"muted"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"className":"envosta-card-hover","style":{"border":{"radius":"14px"},"dimensions":{"aspectRatio":"21/9"}},"backgroundColor":"base-2"} -->
				<div class="wp-block-group envosta-card-hover has-base-2-background-color has-background" style="border-radius:14px;aspect-ratio:21/9"></div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"envosta-card-hover","style":{"border":{"radius":"14px"},"dimensions":{"aspectRatio":"21/9"}},"backgroundColor":"base-2"} -->
				<div class="wp-block-group envosta-card-hover has-base-2-background-color has-background" style="border-radius:14px;aspect-ratio:21/9"></div>
				<!-- /wp:group -->
				<!-- wp:group {"className":"envosta-card-hover","style":{"border":{"radius":"14px"},"dimensions":{"aspectRatio":"21/9"}},"backgroundColor":"base-2"} -->
				<div class="wp-block-group envosta-card-hover has-base-2-background-color has-background" style="border-radius:14px;aspect-ratio:21/9"></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
