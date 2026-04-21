<?php
/**
 * Title: Hero — Split (Image Left)
 * Slug: envosta/hero-split-left
 * Categories: hero
 * Description: Two-column hero with image left and copy right.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-1","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","className":"is-style-image-rounded","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-large is-style-image-rounded has-custom-border"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/hero-1.jpg')); ?>" alt="<?php esc_attr_e('Editorial hero image', 'envosta'); ?>" style="border-radius:12px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:13px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('A studio for modern brands', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.025em","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xx-large","fontFamily":"inter"} -->
			<h1 class="wp-block-heading has-inter-font-family has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);letter-spacing:-0.025em;line-height:1"><?php esc_html_e('Identity, interface, and interiors — without the fuss.', 'envosta'); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"theme-4","fontSize":"medium"} -->
			<p class="has-theme-4-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('We build thoughtful digital experiences that feel as good as they perform — trusted by founders from Brooklyn to Berlin.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Book an intro call', 'envosta'); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
