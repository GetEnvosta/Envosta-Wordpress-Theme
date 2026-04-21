<?php
/**
 * Title: 404 — Minimal
 * Slug: envosta/404-minimal
 * Template Types: 404
 * Inserter: no
 * Description: Oversized faded 404 with quiet message and a single outline CTA.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(140px, 22vw, 320px)","lineHeight":"1","letterSpacing":"-0.04em","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-3","fontFamily":"inter"} -->
	<h1 class="wp-block-heading has-text-align-center has-theme-3-color has-text-color has-inter-font-family" style="margin-bottom:var(--wp--preset--spacing--30);font-size:clamp(140px, 22vw, 320px);font-weight:500;letter-spacing:-0.04em;line-height:1"><?php esc_html_e('404', 'envosta'); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-4","fontSize":"x-large","fontFamily":"inter"} -->
	<h2 class="wp-block-heading has-text-align-center has-theme-4-color has-text-color has-inter-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e('Page not found', 'envosta'); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--40)"><?php esc_html_e('The page you were looking for has moved, been renamed, or never existed.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/"><?php esc_html_e('Back home', 'envosta'); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
