<?php
/**
 * Title: About — Split
 * Slug: envosta/about-split
 * Categories: envosta-content
 * Description: Two-column about/story section with image and narrative.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"2rem","left":"4rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal">
			<!-- wp:image {"className":"is-style-envosta-image-rounded"} -->
			<figure class="wp-block-image is-style-envosta-image-rounded"><img src="https://placehold.co/800x900/e5e5e5/999?text=Photo" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal">
			<!-- wp:paragraph {"className":"envosta-eyebrow","textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Our story', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"top":"0.75rem","bottom":"1.5rem"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:0.75rem;margin-bottom:1.5rem"><?php esc_html_e( 'Built from real experience', 'envosta' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.75"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.05rem;line-height:1.75"><?php esc_html_e( 'Tell the story of how this brand came to be. Who started it, what they saw that others missed, and why they keep showing up.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.75"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.05rem;line-height:1.75"><?php esc_html_e( 'A second paragraph that goes deeper on values, what makes the work different, what clients can expect.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2rem"}}}} -->
			<div class="wp-block-buttons" style="margin-top:2rem">
				<!-- wp:button {"className":"is-style-envosta-btn-arrow"} -->
				<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e( 'Read our story', 'envosta' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
