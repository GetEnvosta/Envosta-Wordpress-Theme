<?php
/**
 * Title: Quote — Editorial
 * Slug: envosta/quote
 * Categories: editorial
 * Description: Oversized editorial pull quote with attribution.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-1","layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:quote {"className":"is-style-editorial","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<blockquote class="wp-block-quote is-style-editorial" style="margin-top:0;margin-bottom:0">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","lineHeight":"1.15","letterSpacing":"-0.02em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"theme-4","fontSize":"x-large","fontFamily":"inter"} -->
		<p class="has-text-align-center has-theme-4-color has-text-color has-inter-font-family has-x-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);font-style:italic;letter-spacing:-0.02em;line-height:1.15"><?php esc_html_e('“Good design is as little design as possible — and the discipline to stop before you have said too much.”', 'envosta'); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"13px","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"theme-3"} -->
		<p class="has-text-align-center has-theme-3-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:13px;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e('— Dieter Rams, paraphrased', 'envosta'); ?></p>
		<!-- /wp:paragraph -->
	</blockquote>
	<!-- /wp:quote -->

</div>
<!-- /wp:group -->
