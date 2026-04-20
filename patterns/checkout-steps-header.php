<?php
/**
 * Title: Checkout — Steps Header
 * Slug: envosta/checkout-steps-header
 * Categories: envosta-checkout
 * Template Types: page-checkout
 * Description: Horizontal three-step indicator (Cart → Information → Payment) with current step filled in accent.
 * Viewport Width: 1440
 */

$envosta_steps = array(
	array( 'num' => '1', 'label' => __( 'Cart', 'envosta' ),        'state' => 'done' ),
	array( 'num' => '2', 'label' => __( 'Information', 'envosta' ), 'state' => 'current' ),
	array( 'num' => '3', 'label' => __( 'Payment', 'envosta' ),     'state' => 'upcoming' ),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"2.5rem","right":"2rem","bottom":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:2.5rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.75rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group" style="align-items:center">

		<?php foreach ( $envosta_steps as $index => $step ) : ?>

			<?php if ( 'current' === $step['state'] ) : ?>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"0.5rem"},"blockGap":"0.625rem"},"border":{"radius":"9999px"}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background" style="border-radius:9999px;padding:0.5rem 1rem 0.5rem 0.5rem;align-items:center">
					<!-- wp:group {"style":{"border":{"radius":"9999px"}},"layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-group" style="border-radius:9999px;background-color:#ffffff25;width:1.5rem;height:1.5rem;align-items:center">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem","fontWeight":"700"}}} -->
						<p class="has-text-align-center" style="font-size:0.75rem;font-weight:700"><?php echo esc_html( $step['num'] ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600"}}} -->
					<p style="font-size:0.875rem;font-weight:600"><?php echo esc_html( $step['label'] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			<?php else : ?>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"0.5rem"},"blockGap":"0.625rem"},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border","layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;padding:0.5rem 1rem 0.5rem 0.5rem;align-items:center">
					<!-- wp:group {"style":{"border":{"radius":"9999px"}},"backgroundColor":"base-2","layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:9999px;width:1.5rem;height:1.5rem;align-items:center">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem","fontWeight":"700"}},"textColor":"muted"} -->
						<p class="has-text-align-center has-muted-color has-text-color" style="font-size:0.75rem;font-weight:700"><?php echo esc_html( $step['num'] ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"500"}},"textColor":"muted"} -->
					<p class="has-muted-color has-text-color" style="font-size:0.875rem;font-weight:500"><?php echo esc_html( $step['label'] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			<?php endif; ?>

			<?php if ( $index < count( $envosta_steps ) - 1 ) : ?>
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"}},"textColor":"muted"} -->
				<p class="has-muted-color has-text-color" style="font-size:0.85rem">→</p>
				<!-- /wp:paragraph -->
			<?php endif; ?>

		<?php endforeach; ?>

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
