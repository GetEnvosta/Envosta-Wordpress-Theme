<?php
/**
 * Title: Product — Features & Specs
 * Slug: envosta/product-features-tabs
 * Categories: envosta-product
 * Template Types: single-product
 * Description: Three-column feature breakdown with large numerals highlighting key product benefits.
 * Viewport Width: 1440
 */

$envosta_features = array(
	array(
		'num'   => '01',
		'title' => __( 'Built to last', 'envosta' ),
		'body'  => __( 'Premium materials sourced responsibly, engineered for a decade of daily use — not a season.', 'envosta' ),
	),
	array(
		'num'   => '02',
		'title' => __( 'Considered comfort', 'envosta' ),
		'body'  => __( 'Every contact point is obsessed over — so wearing it feels like second nature from minute one.', 'envosta' ),
	),
	array(
		'num'   => '03',
		'title' => __( 'Made with care', 'envosta' ),
		'body'  => __( 'Crafted in small runs by artisans we know by name. Traceable from thread to finish.', 'envosta' ),
	),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull envosta-reveal has-base-2-background-color has-background" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"3.5rem"},"blockGap":"0.5rem"}},"layout":{"type":"constrained","contentSize":"620px"}} -->
	<div class="wp-block-group" style="margin-bottom:3.5rem">
		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
		<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'What makes it different', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(1.75rem, 3.5vw, 2.5rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"}}} -->
		<h2 class="wp-block-heading has-text-align-center" style="font-size:clamp(1.75rem, 3.5vw, 2.5rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'Designed with intent', 'envosta' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_features as $feature ) : ?>
		<!-- wp:column {"className":"envosta-reveal"} -->
		<div class="wp-block-column envosta-reveal">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"clamp(2.25rem, 4vw, 3rem)","fontWeight":"700","letterSpacing":"-0.03em","lineHeight":"1"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
			<p class="has-accent-color has-text-color" style="margin-bottom:1rem;font-size:clamp(2.25rem, 4vw, 3rem);font-weight:700;letter-spacing:-0.03em;line-height:1"><?php echo esc_html( $feature['num'] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"600","letterSpacing":"-0.01em"},"spacing":{"margin":{"bottom":"0.625rem"}}}} -->
			<h3 class="wp-block-heading" style="margin-bottom:0.625rem;font-size:1.25rem;font-weight:600;letter-spacing:-0.01em"><?php echo esc_html( $feature['title'] ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","lineHeight":"1.65"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:0.95rem;line-height:1.65"><?php echo esc_html( $feature['body'] ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
