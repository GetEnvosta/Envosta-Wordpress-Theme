<?php
/**
 * Title: Hero — Full Bleed
 * Slug: envosta/hero-fullbleed
 * Categories: hero
 * Description: Full-width cover hero with overlay, centered title, and CTA.
 * Viewport Width: 1400
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/hero-3.jpg')); ?>","dimRatio":40,"overlayColor":"theme-5","minHeight":80,"minHeightUnit":"vh","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-5-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('assets/images/hero-3.jpg')); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"0.98"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-1","fontSize":"xx-large","fontFamily":"inter"} -->
	<h1 class="wp-block-heading has-text-align-center has-theme-1-color has-text-color has-inter-font-family has-xx-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30);letter-spacing:-0.03em;line-height:0.98"><?php esc_html_e('A new standard for considered design.', 'envosta'); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"lineHeight":"1.5"}},"textColor":"theme-2","fontSize":"medium"} -->
	<p class="has-text-align-center has-theme-2-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--40);line-height:1.5"><?php esc_html_e('Every detail carefully weighed. Every pixel earning its place. Built for brands that refuse to look like everyone else.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"theme-1","textColor":"theme-5"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-theme-5-color has-theme-1-background-color has-text-color has-background wp-element-button" href="#"><?php esc_html_e('Begin the journey', 'envosta'); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div></div>
<!-- /wp:cover -->
