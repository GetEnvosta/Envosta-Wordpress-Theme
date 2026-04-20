<?php
/**
 * Title: Cart — Empty State
 * Slug: envosta/cart-empty-state
 * Categories: envosta-cart
 * Template Types: page-cart
 * Description: Centered empty cart with icon, reassurance copy, continue shopping CTA, and a three-column featured row.
 * Viewport Width: 1440
 */

$envosta_featured = array(
	array(
		'title' => __( 'The Everyday Tee', 'envosta' ),
		'price' => __( '$38', 'envosta' ),
		'img'   => 'data:image/svg+xml;utf8,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><defs><linearGradient id="g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="%23fecdd3"/><stop offset="100%" stop-color="%23fb7185"/></linearGradient></defs><rect width="400" height="400" fill="url(%23g)"/></svg>' ),
	),
	array(
		'title' => __( 'Merino Crew', 'envosta' ),
		'price' => __( '$98', 'envosta' ),
		'img'   => 'data:image/svg+xml;utf8,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><defs><linearGradient id="g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="%23bfdbfe"/><stop offset="100%" stop-color="%236366f1"/></linearGradient></defs><rect width="400" height="400" fill="url(%23g)"/></svg>' ),
	),
	array(
		'title' => __( 'Canvas Tote', 'envosta' ),
		'price' => __( '$52', 'envosta' ),
		'img'   => 'data:image/svg+xml;utf8,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400"><defs><linearGradient id="g" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="%23d1fae5"/><stop offset="100%" stop-color="%2310b981"/></linearGradient></defs><rect width="400" height="400" fill="url(%23g)"/></svg>' ),
	),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"6rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"4rem"},"blockGap":"1rem"}},"layout":{"type":"constrained","contentSize":"520px"}} -->
	<div class="wp-block-group" style="margin-bottom:4rem">

		<!-- wp:group {"style":{"spacing":{"margin":{"left":"auto","right":"auto","bottom":"0.5rem"}},"border":{"radius":"18px"}},"backgroundColor":"base-2","layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group has-base-2-background-color has-background" style="border-radius:18px;margin-right:auto;margin-bottom:0.5rem;margin-left:auto;width:4.5rem;height:4.5rem;align-items:center">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.75rem"}}} -->
			<p class="has-text-align-center" style="font-size:1.75rem">🛍️</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(1.875rem, 4vw, 2.5rem)","letterSpacing":"-0.03em","lineHeight":"1.1","fontWeight":"700"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(1.875rem, 4vw, 2.5rem);font-weight:700;letter-spacing:-0.03em;line-height:1.1"><?php esc_html_e( 'Your cart is empty', 'envosta' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.6"}},"textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="font-size:1.05rem;line-height:1.6"><?php esc_html_e( 'But it does not have to stay that way. Here are a few things we think you will love.', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"1.5rem"}}}} -->
		<div class="wp-block-buttons" style="margin-top:1.5rem">
			<!-- wp:button {"style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"0.875rem","right":"1.75rem","bottom":"0.875rem","left":"1.75rem"}}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop" style="border-radius:9999px;padding:0.875rem 1.75rem"><?php esc_html_e( 'Continue shopping', 'envosta' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1.5rem"}}},"textColor":"accent"} -->
	<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1.5rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Popular right now', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_featured as $item ) : ?>
		<!-- wp:column {"className":"envosta-card envosta-card-hover","style":{"border":{"radius":"14px","width":"1px"},"spacing":{"padding":"0"}},"borderColor":"border"} -->
		<div class="wp-block-column envosta-card envosta-card-hover has-border-color has-border-border-color" style="border-width:1px;border-radius:14px;padding:0;overflow:hidden">
			<!-- wp:image {"aspectRatio":"1","scale":"cover"} -->
			<figure class="wp-block-image"><img src="<?php echo esc_url( $item['img'] ); ?>" alt="" style="aspect-ratio:1;object-fit:cover;width:100%"/></figure>
			<!-- /wp:image -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1.25rem","left":"1rem"},"blockGap":"0.25rem"}}} -->
			<div class="wp-block-group" style="padding:1rem 1rem 1.25rem">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600","letterSpacing":"-0.01em"}}} -->
				<p style="font-size:0.95rem;font-weight:600;letter-spacing:-0.01em"><?php echo esc_html( $item['title'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"}},"textColor":"muted"} -->
				<p class="has-muted-color has-text-color" style="font-size:0.9rem;font-weight:600"><?php echo esc_html( $item['price'] ); ?></p>
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
