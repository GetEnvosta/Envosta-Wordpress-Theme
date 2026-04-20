<?php
/**
 * Title: Cart — Benefits Strip
 * Slug: envosta/cart-benefits-strip
 * Categories: envosta-cart
 * Template Types: page-cart
 * Description: Thin four-column reassurance band for the cart — shipping, secure checkout, returns, gift wrap.
 * Viewport Width: 1440
 */

$envosta_benefits = array(
	array( 'icon' => '✓', 'label' => __( 'Free shipping over $75', 'envosta' ) ),
	array( 'icon' => '✓', 'label' => __( 'Secure checkout', 'envosta' ) ),
	array( 'icon' => '✓', 'label' => __( 'Easy 30-day returns', 'envosta' ) ),
	array( 'icon' => '✓', 'label' => __( 'Gift wrapping available', 'envosta' ) ),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"1.75rem","right":"2rem","bottom":"1.75rem","left":"2rem"}}},"backgroundColor":"base-2","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull envosta-reveal has-base-2-background-color has-background" style="padding-top:1.75rem;padding-right:2rem;padding-bottom:1.75rem;padding-left:2rem">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_benefits as $benefit ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.625rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group" style="align-items:center">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"700"}},"textColor":"accent"} -->
				<p class="has-accent-color has-text-color" style="font-size:0.95rem;font-weight:700"><?php echo esc_html( $benefit['icon'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"500"}}} -->
				<p style="font-size:0.85rem;font-weight:500"><?php echo esc_html( $benefit['label'] ); ?></p>
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
