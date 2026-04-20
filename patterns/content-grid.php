<?php
/**
 * Title: Content Grid
 * Slug: envosta/content-grid
 * Categories: envosta-content
 * Description: 3-up content cards with image, tag, title, and excerpt.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">
	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"3rem"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:3rem">
		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","textColor":"accent"} --><p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'From the blog', 'envosta' ); ?></p><!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} --><h2 class="wp-block-heading has-text-align-center" style="margin-top:0.75rem"><?php esc_html_e( 'Recent stories', 'envosta' ); ?></h2><!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns">
		<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
		<!-- wp:column {"className":"envosta-card envosta-reveal","style":{"spacing":{"padding":"0"},"border":{"radius":"8px"}}} -->
		<div class="wp-block-column envosta-card envosta-reveal" style="border-radius:8px;padding:0">
			<!-- wp:image {"style":{"border":{"radius":"8px 8px 0 0"}}} -->
			<figure class="wp-block-image" style="border-radius:8px 8px 0 0;overflow:hidden"><img src="https://placehold.co/800x480/e5e5e5/999?text=Image" alt=""/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"}}}} -->
			<div class="wp-block-group" style="padding:1.25rem 1.5rem 1.5rem">
				<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.68rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"muted"} -->
				<p class="envosta-eyebrow has-muted-color has-text-color" style="font-size:0.68rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php esc_html_e( 'Category', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"600","lineHeight":"1.35"},"spacing":{"margin":{"top":"0.4rem","bottom":"0.5rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-top:0.4rem;margin-bottom:0.5rem;font-size:1.1rem;font-weight:600;line-height:1.35"><?php printf( esc_html__( 'Article title number %d', 'envosta' ), $i ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}},"textColor":"muted"} -->
				<p class="has-muted-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php esc_html_e( 'A short excerpt previewing the article content — two lines worth of value.', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endfor; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
