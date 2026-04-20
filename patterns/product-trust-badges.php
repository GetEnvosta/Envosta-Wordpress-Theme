<?php
/**
 * Title: Product — Trust Badges Strip
 * Slug: envosta/product-trust-badges
 * Categories: envosta-product
 * Template Types: single-product
 * Description: Understated four-column trust strip sitting below product info — shipping, returns, warranty, secure checkout.
 * Viewport Width: 1440
 */

$envosta_badges = array(
	array(
		'icon'  => '🚚',
		'title' => __( 'Free shipping', 'envosta' ),
		'body'  => __( 'On all orders over $75', 'envosta' ),
	),
	array(
		'icon'  => '↩',
		'title' => __( '30-day returns', 'envosta' ),
		'body'  => __( 'No questions, no hassle', 'envosta' ),
	),
	array(
		'icon'  => '🛡',
		'title' => __( '2-year warranty', 'envosta' ),
		'body'  => __( 'Craftsmanship guaranteed', 'envosta' ),
	),
	array(
		'icon'  => '🔒',
		'title' => __( 'Secure checkout', 'envosta' ),
		'body'  => __( 'Encrypted, protected, private', 'envosta' ),
	),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"2.5rem","right":"2rem","bottom":"2.5rem","left":"2rem"}},"border":{"top":{"width":"1px"},"bottom":{"width":"1px"}}},"borderColor":"border","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull envosta-reveal has-border-color has-border-border-color" style="border-top-width:1px;border-bottom-width:1px;padding-top:2.5rem;padding-right:2rem;padding-bottom:2.5rem;padding-left:2rem">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_badges as $badge ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.875rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="align-items:center">
				<!-- wp:group {"style":{"border":{"radius":"8px"}},"backgroundColor":"base-2","layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:8px;width:2.25rem;height:2.25rem;align-items:center">
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"}}} -->
					<p class="has-text-align-center" style="font-size:0.95rem"><?php echo esc_html( $badge['icon'] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.125rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","fontWeight":"600","letterSpacing":"-0.01em"}}} -->
					<p style="font-size:0.875rem;font-weight:600;letter-spacing:-0.01em"><?php echo esc_html( $badge['title'] ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}},"textColor":"muted"} -->
					<p class="has-muted-color has-text-color" style="font-size:0.8rem;line-height:1.4"><?php echo esc_html( $badge['body'] ); ?></p>
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
