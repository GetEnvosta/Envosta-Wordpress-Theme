<?php
/**
 * Title: Full Width — Image Split
 * Slug: envosta/fullwidth-split
 * Categories: envosta-page
 * Template Types: page-full-width
 * Description: Edge-to-edge 50/50 split with gradient SVG image on the left and padded content on the right.
 * Viewport Width: 1440
 */
?>
<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

	<!-- wp:column {"width":"50%","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
	<div class="wp-block-column envosta-reveal" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%">
		<!-- wp:group {"style":{"dimensions":{"minHeight":"620px"}},"backgroundColor":"base-2"} -->
		<div class="wp-block-group has-base-2-background-color has-background" style="min-height:620px;background:linear-gradient(135deg, #c7d2fe 0%, #a78bfa 50%, #f472b6 100%)"></div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"50%","verticalAlignment":"center","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"5rem","right":"4rem","bottom":"5rem","left":"4rem"}}}} -->
	<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="padding-top:5rem;padding-right:4rem;padding-bottom:5rem;padding-left:4rem;flex-basis:50%">

		<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
		<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'What we believe', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2.25rem, 4.5vw, 3.5rem)","letterSpacing":"-0.025em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
		<h2 class="wp-block-heading" style="margin-bottom:1.5rem;font-size:clamp(2.25rem, 4.5vw, 3.5rem);font-weight:700;letter-spacing:-0.025em;line-height:1.05"><?php esc_html_e( 'Craft compounds. Cheap work rarely does.', 'envosta' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.7"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:1.1rem;line-height:1.7"><?php esc_html_e( 'Every pixel is a decision, and every decision either adds to your brand or quietly chips it away. We spend the extra hour so the result holds up two years later — when traffic is up 40x and you have neither time nor budget to rebuild.', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2.5rem"}}}} -->
		<div class="wp-block-buttons" style="margin-top:2.5rem">
			<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
			<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-border-color has-border-border-color wp-element-button" href="#" style="border-width:1px;border-radius:9999px"><?php esc_html_e( 'Read the manifesto', 'envosta' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
