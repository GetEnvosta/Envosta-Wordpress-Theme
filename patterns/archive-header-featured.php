<?php
/**
 * Title: Archive — Featured Header
 * Slug: envosta/archive-header-featured
 * Categories: envosta-archive
 * Template Types: archive, category, tag, author, date
 * Description: Two-column archive header with category eyebrow, title, description, and gradient stat card.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"7rem","right":"2rem","bottom":"4rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:7rem;padding-right:2rem;padding-bottom:4rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"2.5rem","left":"3.5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"58%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:58%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.72rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"padding":{"top":"0.375rem","right":"0.875rem","bottom":"0.375rem","left":"0.875rem"},"margin":{"bottom":"1.25rem"}},"border":{"radius":"9999px"}},"backgroundColor":"base-2","textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-base-2-background-color has-text-color has-background" style="border-radius:9999px;margin-bottom:1.25rem;padding:0.375rem 0.875rem;font-size:0.72rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;display:inline-block;width:fit-content"><?php esc_html_e( 'Category', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:query-title {"type":"archive","style":{"typography":{"fontSize":"clamp(2.25rem, 5vw, 3.5rem)","letterSpacing":"-0.02em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} /-->

			<!-- wp:term-description {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.65"}},"textColor":"muted"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"42%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:42%">
			<!-- wp:group {"style":{"dimensions":{"aspectRatio":"4/3"},"border":{"radius":"16px"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}}},"backgroundColor":"accent-soft","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-accent-soft-background-color has-background" style="border-radius:16px;aspect-ratio:4/3;padding:2.5rem;align-items:flex-end">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"3rem","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"color":{"text":"#1a1a1a"}}} -->
				<p class="has-text-color" style="color:#1a1a1a;font-size:3rem;font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( '12', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"500"},"color":{"text":"#1a1a1a"}}} -->
				<p class="has-text-color" style="color:#1a1a1a;font-size:0.95rem;font-weight:500"><?php esc_html_e( 'Posts in this archive', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
