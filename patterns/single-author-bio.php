<?php
/**
 * Title: Single — Author Bio
 * Slug: envosta/single-author-bio
 * Categories: envosta-single
 * Template Types: single
 * Description: End-of-post author card with gradient avatar, name, tagline, bio, and more-from-author link.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"820px"}} -->
<div class="wp-block-group alignfull" style="padding-top:4rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">

	<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1.25rem"}}},"textColor":"accent"} -->
	<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1.25rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'About the author', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"className":"envosta-card envosta-reveal","style":{"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}},"border":{"radius":"16px","width":"1px"}},"borderColor":"border","layout":{"type":"constrained"}} -->
	<div class="wp-block-group envosta-card envosta-reveal has-border-color has-border-border-color" style="border-width:1px;border-radius:16px;padding:2.5rem">
		<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"1.75rem","left":"2rem"}}}} -->
		<div class="wp-block-columns are-vertically-aligned-top">

			<!-- wp:column {"verticalAlignment":"top","width":"120px"} -->
			<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:120px">
				<!-- wp:group {"style":{"border":{"radius":"9999px"}},"backgroundColor":"accent-soft"} -->
				<div class="wp-block-group has-accent-soft-background-color has-background" style="border-radius:9999px;width:96px;height:96px"></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.35rem","fontWeight":"700","letterSpacing":"-0.01em","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"0.25rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-bottom:0.25rem;font-size:1.35rem;font-weight:700;letter-spacing:-0.01em;line-height:1.2"><?php esc_html_e( 'Marta Liang', 'envosta' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"500"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"muted"} -->
				<p class="has-muted-color has-text-color" style="margin-bottom:1rem;font-size:0.9rem;font-weight:500"><?php esc_html_e( 'Principal designer · Writes on restraint and craft', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.98rem","lineHeight":"1.7"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
				<p style="margin-bottom:1.5rem;font-size:0.98rem;line-height:1.7"><?php esc_html_e( 'Marta has been shipping design systems for fifteen years across editorial, commerce, and SaaS. She leads the studio practice and cares too much about line-height.', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"}},"textColor":"accent"} -->
				<p class="has-accent-color has-text-color" style="font-size:0.9rem;font-weight:600"><a href="#" style="color:inherit;text-decoration:none"><?php esc_html_e( 'More from this author →', 'envosta' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
