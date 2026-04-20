<?php
/**
 * Title: Checkout — Guarantee Banner
 * Slug: envosta/checkout-guarantee
 * Categories: envosta-checkout
 * Template Types: page-checkout
 * Description: Soft-background reassurance card with shield emoji, 30-day guarantee heading and single-line description.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"3rem","right":"2rem","bottom":"3rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:3rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">

	<!-- wp:group {"className":"envosta-card","style":{"spacing":{"padding":{"top":"1.75rem","right":"2rem","bottom":"1.75rem","left":"2rem"},"blockGap":"1.25rem"},"border":{"radius":"16px","width":"1px"}},"backgroundColor":"base-2","borderColor":"border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group envosta-card has-border-color has-border-border-color has-base-2-background-color has-background" style="border-width:1px;border-radius:16px;padding:1.75rem 2rem;align-items:center">

		<!-- wp:group {"style":{"border":{"radius":"12px"}},"backgroundColor":"base","layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group has-base-background-color has-background" style="border-radius:12px;width:3rem;height:3rem;flex-shrink:0;align-items:center">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.3rem"}}} -->
			<p class="has-text-align-center" style="font-size:1.3rem">🛡️</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.125rem","fontWeight":"600","letterSpacing":"-0.01em"}}} -->
			<h3 class="wp-block-heading" style="font-size:1.125rem;font-weight:600;letter-spacing:-0.01em"><?php esc_html_e( '30-day money-back guarantee', 'envosta' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.55"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:0.9rem;line-height:1.55"><?php esc_html_e( 'If it is not right, return it for a full refund. No restocking fees, no awkward questions.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
