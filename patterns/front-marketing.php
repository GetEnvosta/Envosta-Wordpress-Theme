<?php
/**
 * Title: Front Page — Marketing Composition
 * Slug: envosta/front-marketing
 * Categories: envosta-hero
 * Template Types: front-page
 * Description: Centered marketing hero with dual CTAs and a four-column benefits bar beneath.
 * Viewport Width: 1440
 */

$envosta_benefits = array(
	array(
		'icon'  => '⚡',
		'label' => __( 'Deploy in minutes', 'envosta' ),
	),
	array(
		'icon'  => '◇',
		'label' => __( 'Zero config setup', 'envosta' ),
	),
	array(
		'icon'  => '◎',
		'label' => __( 'Global edge network', 'envosta' ),
	),
	array(
		'icon'  => '✦',
		'label' => __( '24/7 human support', 'envosta' ),
	),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"8rem","bottom":"0","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:8rem;padding-right:2rem;padding-bottom:0;padding-left:2rem">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"2rem"},"padding":{"top":"0.4rem","right":"1rem","bottom":"0.4rem","left":"1rem"}},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;margin-bottom:2rem;padding-top:0.4rem;padding-right:1rem;padding-bottom:0.4rem;padding-left:1rem">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.8rem","fontWeight":"500"}},"textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.8rem;font-weight:500"><?php esc_html_e( '◆ Now serving 14,000+ ambitious teams', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.75rem, 6.5vw, 5rem)","lineHeight":"1.02","letterSpacing":"-0.035em","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.5rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:1.5rem;font-size:clamp(2.75rem, 6.5vw, 5rem);font-weight:700;letter-spacing:-0.035em;line-height:1.02"><?php esc_html_e( 'The calm, capable way to ship a website.', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.55"},"spacing":{"margin":{"left":"auto","right":"auto","bottom":"2.5rem"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-right:auto;margin-bottom:2.5rem;margin-left:auto;font-size:1.25rem;line-height:1.55"><?php esc_html_e( 'Envosta gives teams a production-ready foundation — opinionated where it matters, flexible where it should be. Launch this week, not next quarter.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0.75rem"}}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"style":{"border":{"radius":"9999px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:9999px"><?php esc_html_e( 'Start for free', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
		<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-border-color has-border-border-color wp-element-button" href="#" style="border-width:1px;border-radius:9999px"><?php esc_html_e( 'Book a demo', 'envosta' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"envosta-reveal","backgroundColor":"base-2","style":{"spacing":{"padding":{"top":"2.5rem","bottom":"2.5rem","right":"2rem","left":"2rem"},"margin":{"top":"5rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull envosta-reveal has-base-2-background-color has-background" style="margin-top:5rem;padding-top:2.5rem;padding-right:2rem;padding-bottom:2.5rem;padding-left:2rem">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_benefits as $benefit ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="align-items:center">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}},"textColor":"accent"} -->
				<p class="has-accent-color has-text-color" style="font-size:1.25rem"><?php echo esc_html( $benefit['icon'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600","letterSpacing":"-0.005em"}}} -->
				<p style="font-size:0.95rem;font-weight:600;letter-spacing:-0.005em"><?php echo esc_html( $benefit['label'] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
