<?php
/**
 * Title: 404 — Helpful
 * Slug: envosta/404-helpful
 * Template Types: 404
 * Inserter: no
 * Description: Faded 404 header followed by a three-column grid of suggested pages.
 * Viewport Width: 1400
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1080px"}} -->
<main class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(120px, 18vw, 260px)","lineHeight":"1","letterSpacing":"-0.04em","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"theme-3","fontFamily":"inter"} -->
	<h1 class="wp-block-heading has-text-align-center has-theme-3-color has-text-color has-inter-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-size:clamp(120px, 18vw, 260px);font-weight:500;letter-spacing:-0.04em;line-height:1"><?php esc_html_e('404', 'envosta'); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"theme-4","fontSize":"medium"} -->
	<p class="has-text-align-center has-theme-4-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--60)"><?php esc_html_e('We couldn\'t find that page. Try one of these instead.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}},"typography":{"letterSpacing":"0.08em","textTransform":"uppercase","fontSize":"13px"}},"textColor":"theme-3"} -->
	<h3 class="wp-block-heading has-theme-3-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:13px;letter-spacing:0.08em;text-transform:uppercase"><?php esc_html_e('Popular pages', 'envosta'); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:columns -->
	<div class="wp-block-columns">

		<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|theme-4","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--theme-4);border-top-width:1px;padding-top:var(--wp--preset--spacing--30)">
			<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
			<h4 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('Home', 'envosta'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="font-size:15px"><a href="/"><?php esc_html_e('Start from the top →', 'envosta'); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|theme-4","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--theme-4);border-top-width:1px;padding-top:var(--wp--preset--spacing--30)">
			<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
			<h4 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('Journal', 'envosta'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="font-size:15px"><a href="/blog"><?php esc_html_e('Read the latest →', 'envosta'); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"border":{"top":{"color":"var:preset|color|theme-4","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|30"}}}} -->
		<div class="wp-block-column" style="border-top-color:var(--wp--preset--color--theme-4);border-top-width:1px;padding-top:var(--wp--preset--spacing--30)">
			<!-- wp:heading {"level":4,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
			<h4 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--20)"><?php esc_html_e('Shop', 'envosta'); ?></h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"15px"}},"textColor":"theme-4"} -->
			<p class="has-theme-4-color has-text-color" style="font-size:15px"><a href="/shop"><?php esc_html_e('Browse the collection →', 'envosta'); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
