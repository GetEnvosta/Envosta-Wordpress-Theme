<?php
/**
 * Title: Hero — Full Bleed
 * Slug: envosta/hero-fullbleed
 * Categories: envosta-hero
 * Description: Full-viewport hero with rich gradient background and centered overlay content.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-hero","style":{"spacing":{"padding":{"top":"10rem","bottom":"10rem","right":"2rem","left":"2rem"}},"dimensions":{"minHeight":"92vh"}},"layout":{"type":"constrained","contentSize":"860px"}} -->
<div class="wp-block-group alignfull envosta-hero" style="background:linear-gradient(135deg, #0f172a 0%, #1e293b 40%, #334155 100%);color:#ffffff;min-height:92vh;padding-top:10rem;padding-right:2rem;padding-bottom:10rem;padding-left:2rem">

	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.16em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
	<p class="has-text-align-center envosta-eyebrow" style="color:#a78bfa;margin-bottom:1.5rem;font-size:0.78rem;font-weight:600;letter-spacing:0.16em;text-transform:uppercase"><?php esc_html_e( '— The new standard', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(3rem, 7vw, 6rem)","lineHeight":"1","letterSpacing":"-0.035em","fontWeight":"700"},"spacing":{"margin":{"bottom":"2rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;margin-bottom:2rem;font-size:clamp(3rem, 7vw, 6rem);font-weight:700;letter-spacing:-0.035em;line-height:1"><?php esc_html_e( 'Beautiful, by default.', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.3rem","lineHeight":"1.55"},"spacing":{"margin":{"left":"auto","right":"auto"}}}} -->
	<p class="has-text-align-center" style="color:rgba(255,255,255,0.7);margin-right:auto;margin-left:auto;font-size:1.3rem;line-height:1.55"><?php esc_html_e( 'Polished from every angle. Every detail considered. Every moment designed.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0.75rem","margin":{"top":"3rem"}}}} -->
	<div class="wp-block-buttons" style="margin-top:3rem">
		<!-- wp:button {"style":{"border":{"radius":"9999px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:9999px;color:#0f172a;background-color:#ffffff"><?php esc_html_e( 'Start building', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","color":"rgba(255,255,255,0.3)","width":"1px"}}} -->
		<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link wp-element-button" href="#" style="border-color:rgba(255,255,255,0.3);border-width:1px;border-radius:9999px;color:#ffffff;background-color:transparent"><?php esc_html_e( 'See the work →', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
