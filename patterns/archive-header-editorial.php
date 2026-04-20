<?php
/**
 * Title: Archive — Editorial Header
 * Slug: envosta/archive-header-editorial
 * Categories: envosta-archive
 * Template Types: archive, category, tag, author, date
 * Description: Magazine-style archive header with issue eyebrow, large heading, and two-column description.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"7rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:7rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"1.5rem"},"blockGap":"1rem"},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"},"top":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-bottom:1.5rem;padding:0.875rem 0;align-items:center">
		<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.72rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"700"}}} -->
		<p class="envosta-eyebrow" style="font-size:0.72rem;font-weight:700;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Issue 012 — Spring 2026', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.72rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:0.72rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'The Archive', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:query-title {"type":"archive","style":{"typography":{"fontSize":"clamp(2.75rem, 7vw, 5rem)","letterSpacing":"-0.03em","lineHeight":"1","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"2.5rem"}}}} /-->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"3rem"}}}} -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:term-description {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.7"}},"textColor":"muted"} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.7"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1rem;line-height:1.7"><?php esc_html_e( 'A running collection of essays, notes, and field reports from the studio — published when the work is good and ready, not a moment sooner.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
