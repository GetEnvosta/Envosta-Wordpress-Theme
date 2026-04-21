<?php
/**
 * Title: 404 — Branded
 * Slug: envosta/404-branded
 * Template Types: 404
 * Inserter: no
 * Description: Full-bleed cover image with oversized 404 and centered CTA.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:cover {"url":"<?php echo esc_url(get_theme_file_uri('assets/images/hero-3.jpg')); ?>","dimRatio":55,"overlayColor":"theme-5","minHeight":70,"minHeightUnit":"vh","isDark":true,"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40);min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-theme-5-background-color has-background-dim-60 has-background-dim" style="background-color:var(--wp--preset--color--theme-5)"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_theme_file_uri('assets/images/hero-3.jpg')); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(160px, 26vw, 400px)","lineHeight":"1","letterSpacing":"-0.04em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"textColor":"theme-1","fontFamily":"inter"} -->
	<h1 class="wp-block-heading has-text-align-center has-theme-1-color has-text-color has-inter-font-family" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);font-size:clamp(160px, 26vw, 400px);font-weight:500;letter-spacing:-0.04em;line-height:1"><?php esc_html_e('404', 'envosta'); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-1","fontSize":"x-large","fontFamily":"inter"} -->
	<h2 class="wp-block-heading has-text-align-center has-theme-1-color has-text-color has-inter-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('You\'ve wandered off the map', 'envosta'); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"theme-1","fontSize":"medium"} -->
	<p class="has-text-align-center has-theme-1-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('Let\'s get you back to something worth reading.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"theme-1","textColor":"theme-5"} -->
		<div class="wp-block-button"><a class="wp-block-button__link has-theme-5-color has-theme-1-background-color has-text-color has-background wp-element-button" href="/"><?php esc_html_e('Return home', 'envosta'); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
