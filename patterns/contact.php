<?php
/**
 * Title: Contact — Split
 * Slug: envosta/contact
 * Categories: cta
 * Description: Two-column contact section with studio details and a message card.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-1","layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top">

		<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);font-size:13px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Get in touch', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.025em","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);letter-spacing:-0.025em;line-height:1"><?php esc_html_e('Let us know what you are building.', 'envosta'); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('A few lines about the project — timing, shape, and what you hope to achieve — is enough to get a useful reply back.', 'envosta'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"style":{"typography":{"fontSize":"14px","lineHeight":"2"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"no-underline"} -->
			<ul class="wp-block-list no-underline" style="margin-top:0;margin-bottom:0;font-size:14px;line-height:2">
				<!-- wp:list-item -->
				<li><strong><?php esc_html_e('Email', 'envosta'); ?></strong> &nbsp;<a href="mailto:studio@example.com">studio@example.com</a></li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong><?php esc_html_e('Phone', 'envosta'); ?></strong> &nbsp;+47 21 00 00 00</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li><strong><?php esc_html_e('Studio', 'envosta'); ?></strong> &nbsp;<?php esc_html_e('Storgata 12, 0155 Oslo', 'envosta'); ?></li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"theme-2","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-theme-2-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

				<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"fontSize":"medium"} -->
				<h3 class="wp-block-heading has-medium-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);letter-spacing:-0.01em"><?php esc_html_e('Send a message', 'envosta'); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|theme-3","radius":"6px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"14px","right":"14px"},"margin":{"top":"0","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"14px"}},"backgroundColor":"theme-1","textColor":"theme-3"} -->
				<p class="has-theme-3-color has-theme-1-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--theme-3);border-width:1px;border-radius:6px;margin-top:0;margin-bottom:var(--wp--preset--spacing--20);padding-top:14px;padding-right:14px;padding-bottom:14px;padding-left:14px;font-size:14px"><?php esc_html_e('Your name', 'envosta'); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|theme-3","radius":"6px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"14px","right":"14px"},"margin":{"top":"0","bottom":"var:preset|spacing|20"}},"typography":{"fontSize":"14px"}},"backgroundColor":"theme-1","textColor":"theme-3"} -->
				<p class="has-theme-3-color has-theme-1-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--theme-3);border-width:1px;border-radius:6px;margin-top:0;margin-bottom:var(--wp--preset--spacing--20);padding-top:14px;padding-right:14px;padding-bottom:14px;padding-left:14px;font-size:14px"><?php esc_html_e('you@example.com', 'envosta'); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"border":{"width":"1px","color":"var:preset|color|theme-3","radius":"6px"},"spacing":{"padding":{"top":"14px","bottom":"80px","left":"14px","right":"14px"},"margin":{"top":"0","bottom":"var:preset|spacing|30"}},"typography":{"fontSize":"14px"}},"backgroundColor":"theme-1","textColor":"theme-3"} -->
				<p class="has-theme-3-color has-theme-1-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--theme-3);border-width:1px;border-radius:6px;margin-top:0;margin-bottom:var(--wp--preset--spacing--30);padding-top:14px;padding-right:14px;padding-bottom:80px;padding-left:14px;font-size:14px"><?php esc_html_e('A few lines about your project…', 'envosta'); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Send message', 'envosta'); ?></a></div>
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
