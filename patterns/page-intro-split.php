<?php
/**
 * Title: Page — Split Intro
 * Slug: envosta/page-intro-split
 * Categories: envosta-page
 * Template Types: page
 * Description: Two-column page intro with oversized heading and supporting paragraph plus proof-point list.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"6rem","bottom":"4rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:6rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">

	<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"2.5rem","left":"5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top">

		<!-- wp:column {"verticalAlignment":"top","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:55%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'How we work', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5.5vw, 4.25rem)","letterSpacing":"-0.03em","lineHeight":"1.02","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
			<h1 class="wp-block-heading" style="margin-bottom:1.25rem;font-size:clamp(2.5rem, 5.5vw, 4.25rem);font-weight:700;letter-spacing:-0.03em;line-height:1.02"><?php esc_html_e( 'Fewer meetings, sharper decisions, work that ships.', 'envosta' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.55"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.1rem;line-height:1.55"><?php esc_html_e( 'A process built around real output, not choreography.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:45%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.75"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.05rem;line-height:1.75"><?php esc_html_e( 'Every engagement starts with a two-week discovery — we read the inbox, talk to three customers, and sketch a map of the real problem before touching a pixel. From there, we ship in short cycles with one accountable lead.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"2rem"},"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:2rem">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="align-items:flex-start">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700"}},"textColor":"accent"} --><p class="has-accent-color has-text-color" style="font-size:1rem;font-weight:700">✓</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.98rem","lineHeight":"1.55","fontWeight":"500"}}} --><p style="font-size:0.98rem;font-weight:500;line-height:1.55"><?php esc_html_e( 'One senior lead, start to finish — no handoffs to juniors halfway through.', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="align-items:flex-start">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"700"}},"textColor":"accent"} --><p class="has-accent-color has-text-color" style="font-size:1rem;font-weight:700">✓</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.98rem","lineHeight":"1.55","fontWeight":"500"}}} --><p style="font-size:0.98rem;font-weight:500;line-height:1.55"><?php esc_html_e( 'Fixed weekly price, scope that flexes, work you actually see every Friday.', 'envosta' ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
