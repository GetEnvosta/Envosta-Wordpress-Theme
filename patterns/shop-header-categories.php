<?php
/**
 * Title: Shop — Category Pills
 * Slug: envosta/shop-header-categories
 * Categories: envosta-shop
 * Template Types: archive-product
 * Description: Centered shop header with eyebrow, headline, subhead and six rounded category pill links.
 * Viewport Width: 1440
 */

$envosta_cats = array(
	__( 'All', 'envosta' ),
	__( 'Women', 'envosta' ),
	__( 'Men', 'envosta' ),
	__( 'Accessories', 'envosta' ),
	__( 'Home', 'envosta' ),
	__( 'Gifts', 'envosta' ),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"5.5rem","right":"2rem","bottom":"3rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"980px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:5.5rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">

	<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"0.75rem"}}},"textColor":"accent"} -->
	<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:0.75rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Shop the collection', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 5.5vw, 4rem)","letterSpacing":"-0.03em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
	<h1 class="wp-block-heading has-text-align-center" style="margin-bottom:1rem;font-size:clamp(2.5rem, 5.5vw, 4rem);font-weight:700;letter-spacing:-0.03em;line-height:1.05"><?php esc_html_e( 'Everything, in one place.', 'envosta' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.55"},"spacing":{"margin":{"bottom":"2.5rem"}}},"textColor":"muted"} -->
	<p class="has-text-align-center has-muted-color has-text-color" style="margin-bottom:2.5rem;font-size:1.1rem;line-height:1.55"><?php esc_html_e( 'Browse by category — or just start clicking. You will find something.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0.625rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<?php foreach ( $envosta_cats as $cat ) : ?>
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"500"},"spacing":{"padding":{"top":"0.625rem","right":"1.25rem","bottom":"0.625rem","left":"1.25rem"}},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
		<p class="has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;padding:0.625rem 1.25rem;font-size:0.9rem;font-weight:500"><a href="#" style="color:inherit;text-decoration:none"><?php echo esc_html( $cat ); ?></a></p>
		<!-- /wp:paragraph -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
