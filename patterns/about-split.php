<?php
/**
 * Title: About — Split
 * Slug: envosta/about-split
 * Categories: content
 * Description: Two-column about section with portrait, narrative, and stat row.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-1","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"10px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/portrait-1.jpg')); ?>" alt="<?php esc_attr_e('Portrait of the team', 'envosta'); ?>" style="border-radius:10px;aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:13px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Our story', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.025em","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);letter-spacing:-0.025em;line-height:1"><?php esc_html_e('Fourteen years. One rule: make it worth keeping.', 'envosta'); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('What started in a one-room apartment in Oslo is now a small, senior team working with founders across four continents. The shape has changed. The rule has not.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('We design for the decade ahead — not the timeline of a post. That means fewer projects, longer conversations, and work that keeps paying dividends long after launch.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"style":{"color":{"background":"var:preset|color|theme-2"}},"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--theme-2);color:var(--wp--preset--color--theme-2)"/>
			<!-- /wp:separator -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
			<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"4px"}}},"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:4px;letter-spacing:-0.02em"><?php esc_html_e('2011', 'envosta'); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
					<p class="has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e('Founded', 'envosta'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"4px"}}},"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:4px;letter-spacing:-0.02em"><?php esc_html_e('12', 'envosta'); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
					<p class="has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e('Team', 'envosta'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"4px"}}},"fontSize":"large"} -->
					<h3 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:4px;letter-spacing:-0.02em"><?php esc_html_e('4', 'envosta'); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.06em","textTransform":"uppercase"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
					<p class="has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px;letter-spacing:0.06em;text-transform:uppercase"><?php esc_html_e('Continents', 'envosta'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

			<!-- wp:separator {"style":{"color":{"background":"var:preset|color|theme-2"}},"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:var(--wp--preset--color--theme-2);color:var(--wp--preset--color--theme-2)"/>
			<!-- /wp:separator -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Read our full story →', 'envosta'); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
