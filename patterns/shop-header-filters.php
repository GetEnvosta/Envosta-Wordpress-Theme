<?php
/**
 * Title: Shop — Header with Filters
 * Slug: envosta/shop-header-filters
 * Categories: envosta-shop
 * Template Types: archive-product
 * Description: Shop header with eyebrow, title, and short description on the left, filter pill bar on the right.
 * Viewport Width: 1440
 */

$envosta_filters = array(
	array( 'label' => __( 'All', 'envosta' ), 'active' => true ),
	array( 'label' => __( 'New in', 'envosta' ), 'active' => false ),
	array( 'label' => __( 'Best sellers', 'envosta' ), 'active' => false ),
	array( 'label' => __( 'Sale', 'envosta' ), 'active' => false ),
	array( 'label' => __( 'Sustainable', 'envosta' ), 'active' => false ),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"2.5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:5rem;padding-right:2rem;padding-bottom:2.5rem;padding-left:2rem">

	<!-- wp:group {"style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group" style="align-items:flex-end">

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.625rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Shop', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.25rem, 5vw, 3.5rem)","letterSpacing":"-0.03em","lineHeight":"1.05","fontWeight":"700"}}} -->
			<h1 class="wp-block-heading" style="font-size:clamp(2.25rem, 5vw, 3.5rem);font-weight:700;letter-spacing:-0.03em;line-height:1.05"><?php esc_html_e( 'The Envosta store', 'envosta' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.55"},"spacing":{"margin":{"top":"0.5rem"}}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="margin-top:0.5rem;font-size:1rem;line-height:1.55"><?php esc_html_e( 'Everyday essentials, designed to last and built to be loved.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
		<div class="wp-block-group" style="align-items:center">
			<?php foreach ( $envosta_filters as $filter ) : ?>
				<?php if ( ! empty( $filter['active'] ) ) : ?>
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"600"},"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"1rem"}},"border":{"radius":"9999px"}},"backgroundColor":"contrast","textColor":"base"} -->
					<p class="has-base-color has-contrast-background-color has-text-color has-background" style="border-radius:9999px;padding:0.5rem 1rem;font-size:0.85rem;font-weight:600"><a href="#" style="color:inherit;text-decoration:none"><?php echo esc_html( $filter['label'] ); ?></a></p>
					<!-- /wp:paragraph -->
				<?php else : ?>
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"500"},"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"1rem"}},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
					<p class="has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;padding:0.5rem 1rem;font-size:0.85rem;font-weight:500"><a href="#" style="color:inherit;text-decoration:none"><?php echo esc_html( $filter['label'] ); ?></a></p>
					<!-- /wp:paragraph -->
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"2.5rem","bottom":"0"}}},"backgroundColor":"border","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-border-background-color has-alpha-channel-opacity has-border-color has-background is-style-wide" style="margin-top:2.5rem;margin-bottom:0"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
