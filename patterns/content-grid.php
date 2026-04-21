<?php
/**
 * Title: Content — Article Grid
 * Slug: envosta/content-grid
 * Categories: content
 * Description: Editorial three-column article grid with category pills and metadata.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-1","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
		<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:13px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Journal', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.025em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-top:0;margin-bottom:0;letter-spacing:-0.025em;line-height:1"><?php esc_html_e('Notes from the studio.', 'envosta'); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p style="margin-top:0;margin-bottom:0;font-size:14px;font-weight:500"><a href="#"><?php esc_html_e('View all →', 'envosta'); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"10px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/editorial-1.jpg')); ?>" alt="<?php esc_attr_e('Article cover image', 'envosta'); ?>" style="border-radius:10px;aspect-ratio:3/2;object-fit:cover;width:100%"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"border":{"radius":"999px","width":"1px","color":"var:preset|color|theme-3"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"12px","letterSpacing":"0.06em","textTransform":"uppercase"},"dimensions":{"minHeight":"0"}},"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-group" style="border-color:var(--wp--preset--color--theme-3);border-width:1px;border-radius:999px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;letter-spacing:0.06em;text-transform:uppercase">
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"12px"}}} -->
				<p style="margin-top:0;margin-bottom:0;font-size:12px"><?php esc_html_e('Essay', 'envosta'); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}},"typography":{"letterSpacing":"-0.01em"}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);letter-spacing:-0.01em"><a href="#"><?php esc_html_e('What restraint gets you', 'envosta'); ?></a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('Why the boldest brand decisions are almost always about what you leave out.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
			<p class="has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px"><?php esc_html_e('Apr 12, 2026 · 6 min read', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"10px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/editorial-2.jpg')); ?>" alt="<?php esc_attr_e('Article cover image', 'envosta'); ?>" style="border-radius:10px;aspect-ratio:3/2;object-fit:cover;width:100%"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"border":{"radius":"999px","width":"1px","color":"var:preset|color|theme-3"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"12px","letterSpacing":"0.06em","textTransform":"uppercase"},"dimensions":{"minHeight":"0"}},"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-group" style="border-color:var(--wp--preset--color--theme-3);border-width:1px;border-radius:999px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;letter-spacing:0.06em;text-transform:uppercase">
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"12px"}}} -->
				<p style="margin-top:0;margin-bottom:0;font-size:12px"><?php esc_html_e('Case Study', 'envosta'); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}},"typography":{"letterSpacing":"-0.01em"}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);letter-spacing:-0.01em"><a href="#"><?php esc_html_e('Rebuilding a storefront in 30 days', 'envosta'); ?></a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('How we helped a 20-year-old brand rediscover its voice — and triple conversion.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
			<p class="has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px"><?php esc_html_e('Mar 28, 2026 · 9 min read', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"10px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/workspace-1.jpg')); ?>" alt="<?php esc_attr_e('Article cover image', 'envosta'); ?>" style="border-radius:10px;aspect-ratio:3/2;object-fit:cover;width:100%"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"border":{"radius":"999px","width":"1px","color":"var:preset|color|theme-3"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"12px","letterSpacing":"0.06em","textTransform":"uppercase"},"dimensions":{"minHeight":"0"}},"layout":{"type":"flex","justifyContent":"left"}} -->
			<div class="wp-block-group" style="border-color:var(--wp--preset--color--theme-3);border-width:1px;border-radius:999px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--20);padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:12px;letter-spacing:0.06em;text-transform:uppercase">
				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"12px"}}} -->
				<p style="margin-top:0;margin-bottom:0;font-size:12px"><?php esc_html_e('Process', 'envosta'); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}},"typography":{"letterSpacing":"-0.01em"}},"fontSize":"medium"} -->
			<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);letter-spacing:-0.01em"><a href="#"><?php esc_html_e('A week inside the studio', 'envosta'); ?></a></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('The rituals, tools, and quiet hours behind every project we ship.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
			<p class="has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px"><?php esc_html_e('Mar 14, 2026 · 4 min read', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
