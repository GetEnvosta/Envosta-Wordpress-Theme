<?php
/**
 * Title: Archive — Classic Header
 * Slug: envosta/archive-header-classic
 * Categories: envosta-archive
 * Template Types: archive, category, tag, author, date
 * Description: Simple centered archive title with description paragraph and separator.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"7rem","right":"2rem","bottom":"3rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:7rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">

	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
	<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Archive', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:query-title {"type":"archive","textAlign":"center","style":{"typography":{"fontSize":"clamp(2.25rem, 5vw, 3.5rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} /-->

	<!-- wp:term-description {"textAlign":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.65"}},"textColor":"muted"} /-->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"3rem","bottom":"0"}}},"backgroundColor":"border","className":"is-style-default"} -->
	<hr class="wp-block-separator has-text-color has-border-color has-alpha-channel-opacity has-border-background-color has-background is-style-default" style="margin-top:3rem;margin-bottom:0"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
