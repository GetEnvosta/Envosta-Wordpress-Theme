<?php
/**
 * Title: Features — Grid
 * Slug: envosta/features-grid
 * Categories: envosta-features
 * Description: Six-cell grid (3 columns × 2 rows) for extended feature lists.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}},"color":{"background":"var:preset|color|base-2"}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:var(--wp--preset--color--base-2);padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">
	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"3rem"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:3rem">
		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","textColor":"accent"} -->
		<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color"><?php esc_html_e( 'Everything you need', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="margin-top:0.75rem"><?php esc_html_e( 'Built for the work', 'envosta' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns">
		<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
		<!-- wp:column {"style":{"spacing":{"blockGap":"1.5rem"}}} -->
		<div class="wp-block-column">
			<?php for ( $j = 0; $j < 2; $j++ ) : $n = $i + ($j * 3); ?>
			<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"padding":{"top":"1.5rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"}}}} -->
			<div class="wp-block-group envosta-reveal" style="padding:1.5rem">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"0.5rem"}}}} -->
				<h3 class="wp-block-heading" style="margin-bottom:0.5rem;font-size:1.1rem;font-weight:600"><?php printf( esc_html__( 'Feature %d', 'envosta' ), $n ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.92rem","lineHeight":"1.6"}},"textColor":"muted"} -->
				<p class="has-muted-color has-text-color" style="font-size:0.92rem;line-height:1.6"><?php esc_html_e( 'Describe the benefit in one short sentence.', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<?php endfor; ?>
		</div>
		<!-- /wp:column -->
		<?php endfor; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
