<?php
/**
 * Title: Footer — Contact
 * Slug: envosta/footer-contact
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Three-column footer with brand block, visit address, and contact details plus social icons, closed with a copyright line.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"envosta-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"},"margin":{"top":"0"}},"border":{"top":{"color":"var:preset|color|theme-3","width":"1px"}}},"backgroundColor":"theme-2","layout":{"type":"constrained","contentSize":"1440px"}} -->
<footer class="wp-block-group alignfull envosta-footer has-theme-2-background-color has-background" style="border-top-color:var(--wp--preset--color--theme-3);border-top-width:1px;margin-top:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:site-logo {"width":48} /-->
			<!-- wp:site-title {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"large"} /-->
			<!-- wp:site-tagline {"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
			<h4 class="wp-block-heading has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30);font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Visit us', 'envosta'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e('123 Example Street', 'envosta'); ?><br><?php esc_html_e('Suite 200', 'envosta'); ?><br><?php esc_html_e('City, ST 00000', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e('Open Mon – Sat', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
			<h4 class="wp-block-heading has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30);font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Contact', 'envosta'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e('hello@example.com', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e('+1 (555) 123-4567', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|30"}}}} -->
			<ul class="wp-block-social-links is-style-logos-only" style="margin-top:var(--wp--preset--spacing--30)">
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"x"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|30"}}},"backgroundColor":"theme-3","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-theme-3-color has-alpha-channel-opacity has-theme-3-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--30)"/>
	<!-- /wp:separator -->

	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size"><?php esc_html_e('© 2026 — All rights reserved.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

</footer>
<!-- /wp:group -->
