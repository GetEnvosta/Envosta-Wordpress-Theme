<?php
/**
 * Title: CTA — Banner
 * Slug: envosta/cta-banner
 * Categories: cta
 * Description: Full-width dark banner with oversized headline, subtext, and reversed CTA.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-5","textColor":"theme-1","layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull has-theme-1-color has-theme-5-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-1","fontSize":"xx-large","fontFamily":"inter"} -->
	<h2 class="wp-block-heading has-text-align-center has-theme-1-color has-text-color has-inter-font-family has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);letter-spacing:-0.03em;line-height:1"><?php esc_html_e('Ready to ship something worth keeping?', 'envosta'); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.5"}},"textColor":"theme-2","fontSize":"medium"} -->
	<p class="has-text-align-center has-theme-2-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--40);line-height:1.5"><?php esc_html_e('Start with a short conversation. We will tell you honestly whether we are the right fit — and what to do next if we are not.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"theme-1","textColor":"theme-5"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-theme-5-color has-theme-1-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e('Book an intro call', 'envosta'); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
