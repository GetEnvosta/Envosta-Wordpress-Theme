<?php
/**
 * Title: Hero — Centered
 * Slug: envosta/hero-centered
 * Categories: hero
 * Description: Centered announcement pill with oversized headline, tagline, and dual CTAs.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-1","layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"style":{"border":{"radius":"999px","color":"var:preset|color|theme-3","width":"1px"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"},"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"fontSize":"13px","letterSpacing":"0.02em"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group" style="border-color:var(--wp--preset--color--theme-3);border-width:1px;border-radius:999px;margin-bottom:var(--wp--preset--spacing--40);padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px;font-size:13px;letter-spacing:0.02em">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
		<p style="margin-top:0;margin-bottom:0;font-size:13px"><?php esc_html_e('New — Spring 2026 collection now live →', 'envosta'); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"0.98"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xx-large","fontFamily":"inter"} -->
	<h1 class="wp-block-heading has-text-align-center has-inter-font-family has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);letter-spacing:-0.03em;line-height:0.98"><?php esc_html_e('Design systems for companies that ship.', 'envosta'); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.5"}},"textColor":"theme-4","fontSize":"medium"} -->
	<p class="has-text-align-center has-theme-4-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--40);line-height:1.5"><?php esc_html_e('A refined toolkit for brands, product teams, and storefronts — crafted with the editorial restraint your audience expects.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Start your project', 'envosta'); ?></a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('See the work', 'envosta'); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontSize":"13px","letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"theme-3"} -->
	<p class="has-text-align-center has-theme-3-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);font-size:13px;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e('Trusted by 200+ teams worldwide', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
