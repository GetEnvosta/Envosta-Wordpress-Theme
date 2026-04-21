<?php
/**
 * Title: Footer — Newsletter
 * Slug: envosta/footer-newsletter
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Top newsletter sign-up with heading and inline form, three columns of navigation links, social icons, and a copyright line.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","className":"envosta-footer","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"},"margin":{"top":"0"}},"border":{"top":{"color":"var:preset|color|theme-3","width":"1px"}}},"backgroundColor":"theme-2","layout":{"type":"constrained","contentSize":"1440px"}} -->
<footer class="wp-block-group alignfull envosta-footer has-theme-2-background-color has-background" style="border-top-color:var(--wp--preset--color--theme-3);border-top-width:1px;margin-top:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"720px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"x-large"} -->
		<h3 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e('Stay in the loop', 'envosta'); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
		<p class="has-text-align-center has-small-font-size"><?php esc_html_e('New drops, field notes, and occasional musings — straight to your inbox.', 'envosta'); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
			<!-- wp:paragraph {"placeholder":"you@example.com","fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e('you@example.com', 'envosta'); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Subscribe', 'envosta'); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
			<h4 class="wp-block-heading has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30);font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Shop', 'envosta'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
			<h4 class="wp-block-heading has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30);font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Company', 'envosta'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":4,"style":{"typography":{"letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"small"} -->
			<h4 class="wp-block-heading has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30);font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('Support', 'envosta'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /-->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:social-links {"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-social-links is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		<!-- wp:social-link {"url":"#","service":"facebook"} /-->
		<!-- wp:social-link {"url":"#","service":"youtube"} /-->
		<!-- wp:social-link {"url":"#","service":"x"} /-->
	</ul>
	<!-- /wp:social-links -->

	<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<p class="has-text-align-center has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e('© 2026 — All rights reserved.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

</footer>
<!-- /wp:group -->
