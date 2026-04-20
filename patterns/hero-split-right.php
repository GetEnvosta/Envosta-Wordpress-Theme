<?php
/**
 * Title: Hero — Split (Image Right)
 * Slug: envosta/hero-split-right
 * Categories: envosta-hero
 * Description: Two-column hero with text on the left, image on the right.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-hero","style":{"spacing":{"padding":{"top":"8rem","bottom":"5rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull envosta-hero" style="padding-top:8rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"2rem","left":"4rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:50%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Eyebrow', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"1rem","bottom":"1.5rem"}}}} -->
			<h1 class="wp-block-heading" style="margin-top:1rem;margin-bottom:1.5rem"><?php esc_html_e( 'A headline that sells the outcome', 'envosta' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.6"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.1rem;line-height:1.6"><?php esc_html_e( 'A supporting paragraph that explains what you do and who you do it for.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
			<div class="wp-block-buttons" style="margin-top:2rem">
				<!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Get Started', 'envosta' ); ?></a></div><!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:50%">
			<!-- wp:image {"className":"is-style-envosta-image-rounded"} -->
			<figure class="wp-block-image is-style-envosta-image-rounded"><img src="https://placehold.co/800x600/e5e5e5/999?text=Hero+Image" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
