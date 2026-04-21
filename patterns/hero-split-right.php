<?php
/**
 * Title: Hero — Split (Image Right)
 * Slug: envosta/hero-split-right
 * Categories: hero
 * Description: Two-column hero with copy, stats, and image right.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-1","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:13px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Introducing Envosta', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.025em","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xx-large","fontFamily":"inter"} -->
			<h1 class="wp-block-heading has-inter-font-family has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);letter-spacing:-0.025em;line-height:1"><?php esc_html_e('Built for the next ten years of commerce.', 'envosta'); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"theme-4","fontSize":"medium"} -->
			<p class="has-theme-4-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('A performance-first platform, paired with an editorial eye — so your storefront looks as intentional as the product inside.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Explore the platform', 'envosta'); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|theme-3","width":"1px"},"bottom":{"color":"var:preset|color|theme-3","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--theme-3);border-top-width:1px;border-bottom-color:var(--wp--preset--color--theme-3);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"4px"}}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:0;letter-spacing:-0.02em"><?php esc_html_e('200+', 'envosta'); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
					<p class="has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e('Projects shipped', 'envosta'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"4px"}}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:0;letter-spacing:-0.02em"><?php esc_html_e('98%', 'envosta'); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
					<p class="has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e('Client retention', 'envosta'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"4px"}}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:0;letter-spacing:-0.02em"><?php esc_html_e('14 yr', 'envosta'); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
					<p class="has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e('In practice', 'envosta'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","className":"is-style-image-rounded","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-large is-style-image-rounded has-custom-border"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/hero-2.jpg')); ?>" alt="<?php esc_attr_e('Editorial hero image', 'envosta'); ?>" style="border-radius:12px;aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
