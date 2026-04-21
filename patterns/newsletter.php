<?php
/**
 * Title: Newsletter — Inline
 * Slug: envosta/newsletter
 * Categories: cta
 * Description: Soft inline newsletter sign-up with copy on the left and form on the right.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"16px"}},"backgroundColor":"theme-2","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-theme-2-background-color has-background" style="border-radius:16px;margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);font-size:13px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Newsletter', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);letter-spacing:-0.02em"><?php esc_html_e('Subscribe to our journal.', 'envosta'); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-top:0;margin-bottom:0"><?php esc_html_e('One considered letter a month. Process notes, studio news, and the occasional unreleased work.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|theme-3","radius":"6px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"margin":{"top":"0","bottom":"0"}},"typography":{"fontSize":"14px"}},"backgroundColor":"theme-1","textColor":"theme-3"} -->
				<p class="has-theme-3-color has-theme-1-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--theme-3);border-width:1px;border-radius:6px;margin-top:0;margin-bottom:0;padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px;font-size:14px"><?php esc_html_e('you@example.com', 'envosta'); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"0"}}}} -->
				<div class="wp-block-buttons" style="margin-top:0">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Subscribe', 'envosta'); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
