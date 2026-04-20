<?php
/**
 * Title: Checkout — Trust Signals
 * Slug: envosta/checkout-trust-signals
 * Categories: envosta-checkout
 * Template Types: page-checkout
 * Description: Three quiet reassurance cards for the top of the checkout page — secure payment, easy returns, real-time support.
 * Viewport Width: 1440
 */

$envosta_signals = array(
	array(
		'icon'  => '🔒',
		'title' => __( 'Secure payment', 'envosta' ),
		'body'  => __( '256-bit encryption protects every transaction, end to end.', 'envosta' ),
	),
	array(
		'icon'  => '↩',
		'title' => __( 'Easy returns', 'envosta' ),
		'body'  => __( 'Change of heart? Thirty days, no questions asked.', 'envosta' ),
	),
	array(
		'icon'  => '💬',
		'title' => __( 'Real-time support', 'envosta' ),
		'body'  => __( 'A human is ready to help — seven days a week.', 'envosta' ),
	),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"2.5rem","right":"2rem","bottom":"2.5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:2.5rem;padding-right:2rem;padding-bottom:2.5rem;padding-left:2rem">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_signals as $signal ) : ?>
		<!-- wp:column {"className":"envosta-card","style":{"border":{"radius":"14px","width":"1px"},"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}},"borderColor":"border"} -->
		<div class="wp-block-column envosta-card has-border-color has-border-border-color" style="border-width:1px;border-radius:14px;padding:1.25rem">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="align-items:flex-start">
				<!-- wp:group {"style":{"border":{"radius":"10px"}},"backgroundColor":"base-2","layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:10px;width:2.5rem;height:2.5rem;flex-shrink:0;align-items:center">
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem"}}} -->
					<p class="has-text-align-center" style="font-size:1.1rem"><?php echo esc_html( $signal['icon'] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.925rem","fontWeight":"600","letterSpacing":"-0.01em"}}} -->
					<p style="font-size:0.925rem;font-weight:600;letter-spacing:-0.01em"><?php echo esc_html( $signal['title'] ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","lineHeight":"1.5"}},"textColor":"muted"} -->
					<p class="has-muted-color has-text-color" style="font-size:0.85rem;line-height:1.5"><?php echo esc_html( $signal['body'] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
