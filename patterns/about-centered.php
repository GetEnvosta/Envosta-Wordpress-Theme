<?php
/**
 * Title: About — Centered
 * Slug: envosta/about-centered
 * Categories: content
 * Description: Editorial about block, constrained to a reading-width column.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-1","layout":{"type":"constrained","contentSize":"760px"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"13px","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"theme-4"} -->
	<p class="has-theme-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:13px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('About', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":2,"style":{"typography":{"letterSpacing":"-0.025em","lineHeight":"1.02"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--40);letter-spacing:-0.025em;line-height:1.02"><?php esc_html_e('A small studio, built around a simple promise: thoughtful work, on time, without drama.', 'envosta'); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.7"}},"textColor":"theme-4","fontSize":"medium"} -->
	<p class="has-theme-4-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--30);line-height:1.7"><?php esc_html_e('We take on a small number of engagements each year — enough to stay sharp, few enough to stay close. Every project is led by a partner, start to finish, and shaped by a small team of senior practitioners.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"typography":{"lineHeight":"1.7"}},"textColor":"theme-4","fontSize":"medium"} -->
	<p class="has-theme-4-color has-text-color has-medium-font-size" style="margin-top:0;margin-bottom:0;line-height:1.7"><?php esc_html_e('That means fewer project managers, more design time, and the kind of care you can feel in the finished work.', 'envosta'); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
