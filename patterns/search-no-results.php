<?php
/**
 * Title: Search — No Results
 * Slug: envosta/search-no-results
 * Categories: envosta-search
 * Template Types: search
 * Description: Empty-state card with icon, heading, search suggestions list, and back-home button.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<div class="wp-block-group alignfull" style="padding-top:4rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:group {"className":"envosta-card envosta-reveal","style":{"spacing":{"padding":{"top":"3.5rem","right":"3rem","bottom":"3.5rem","left":"3rem"}},"border":{"radius":"16px","width":"1px"}},"borderColor":"border","layout":{"type":"constrained"}} -->
	<div class="wp-block-group envosta-card envosta-reveal has-border-color has-border-border-color" style="border-width:1px;border-radius:16px;padding:3.5rem 3rem">

		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"1.5rem"}},"border":{"radius":"9999px"}},"backgroundColor":"base-2","layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:9999px;margin-bottom:1.5rem;width:3rem;height:3rem;align-items:center">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"accent"} -->
			<p class="has-text-align-center has-accent-color has-text-color" style="font-size:1.25rem;font-weight:700"><?php echo esc_html( '·' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(1.5rem, 3vw, 2rem)","letterSpacing":"-0.02em","lineHeight":"1.2","fontWeight":"700"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
		<h2 class="wp-block-heading" style="margin-bottom:0.75rem;font-size:clamp(1.5rem, 3vw, 2rem);font-weight:700;letter-spacing:-0.02em;line-height:1.2"><?php esc_html_e( 'No results for your query', 'envosta' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.65"},"spacing":{"margin":{"bottom":"1.5rem"}}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="margin-bottom:1.5rem;font-size:1rem;line-height:1.65"><?php esc_html_e( 'We could not find anything matching what you typed. A few things worth trying:', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:list {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.75"},"spacing":{"margin":{"bottom":"2rem"}}},"textColor":"muted"} -->
		<ul class="has-muted-color has-text-color" style="margin-bottom:2rem;font-size:1rem;line-height:1.75">
			<!-- wp:list-item --><li><?php esc_html_e( 'Double-check the spelling of your search term.', 'envosta' ); ?></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><?php esc_html_e( 'Try broader or more common keywords.', 'envosta' ); ?></li><!-- /wp:list-item -->
			<!-- wp:list-item --><li><?php esc_html_e( 'Browse the journal or services pages for related topics.', 'envosta' ); ?></li><!-- /wp:list-item -->
		</ul>
		<!-- /wp:list -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"style":{"border":{"radius":"9999px"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/" style="border-radius:9999px"><?php esc_html_e( 'Back to home', 'envosta' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
