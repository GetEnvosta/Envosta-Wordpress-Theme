<?php
/**
 * Title: Landing — Simple Conversion Hero
 * Slug: envosta/landing-simple-hero
 * Categories: envosta-landing
 * Template Types: page-landing
 * Description: Centered conversion hero with eyebrow badge, tight headline, inline email form, and trust line.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"8rem","bottom":"7rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:8rem;padding-right:2rem;padding-bottom:7rem;padding-left:2rem">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"1.75rem"},"padding":{"top":"0.35rem","right":"0.9rem","bottom":"0.35rem","left":"0.9rem"}},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;margin-bottom:1.75rem;padding-top:0.35rem;padding-right:0.9rem;padding-bottom:0.35rem;padding-left:0.9rem">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.78rem","fontWeight":"600","letterSpacing":"0.02em"}},"textColor":"accent"} -->
		<p class="has-text-align-center has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.02em"><?php esc_html_e( '◆ Early access — limited spots', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4.5rem)","letterSpacing":"-0.03em","lineHeight":"1.03","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:1.25rem;font-size:clamp(2.5rem, 6vw, 4.5rem);font-weight:700;letter-spacing:-0.03em;line-height:1.03"><?php esc_html_e( 'Finally, invoicing that respects your time.', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.6"},"spacing":{"margin":{"left":"auto","right":"auto","bottom":"2.5rem"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-right:auto;margin-bottom:2.5rem;margin-left:auto;font-size:1.2rem;line-height:1.6"><?php esc_html_e( 'One clean screen. Send, track, and get paid — without the spreadsheet duct tape.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.3rem","right":"0.3rem","bottom":"0.3rem","left":"1.25rem"},"margin":{"left":"auto","right":"auto"}},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
	<div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;margin-right:auto;margin-left:auto;max-width:460px;padding-top:0.3rem;padding-right:0.3rem;padding-bottom:0.3rem;padding-left:1.25rem;align-items:center">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:0.95rem"><?php esc_html_e( 'your@email.com', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.6rem","bottom":"0.6rem","left":"1.25rem","right":"1.25rem"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:9999px;padding-top:0.6rem;padding-right:1.25rem;padding-bottom:0.6rem;padding-left:1.25rem"><?php esc_html_e( 'Join waitlist', 'envosta' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem","fontWeight":"500"},"spacing":{"margin":{"top":"1.25rem"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:1.25rem;font-size:0.85rem;font-weight:500"><?php esc_html_e( 'No credit card · Join 10k+ teams already onboard', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
