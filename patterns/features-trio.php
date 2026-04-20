<?php
/**
 * Title: Features — Trio
 * Slug: envosta/features-trio
 * Categories: envosta-features
 * Description: Three-column grid for features, services, or value props.
 * Viewport Width: 1440
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">
	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"3rem"}}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:3rem">
		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
		<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'What we offer', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"margin":{"top":"0.75rem"}}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="margin-top:0.75rem"><?php esc_html_e( 'Three things we do really well', 'envosta' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-columns">
		<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
		<!-- wp:column {"className":"envosta-card envosta-reveal","style":{"spacing":{"padding":{"top":"2rem","right":"1.75rem","bottom":"2rem","left":"1.75rem"}},"border":{"radius":"8px"}}} -->
		<div class="wp-block-column envosta-card envosta-reveal" style="border-radius:8px;padding:2rem 1.75rem">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.2rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"0.75rem"}}}} -->
			<h3 class="wp-block-heading" style="margin-bottom:0.75rem;font-size:1.2rem;font-weight:600"><?php printf( esc_html__( 'Feature %d', 'envosta' ), $i ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.65"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:0.95rem;line-height:1.65"><?php esc_html_e( 'A short, benefit-focused description that tells the reader what they get from this.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endfor; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
