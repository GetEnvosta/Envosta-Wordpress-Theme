<?php
/**
 * Title: Category — Description Block
 * Slug: envosta/category-description
 * Categories: envosta-shop
 * Template Types: taxonomy-product_cat
 * Description: Two-column category intro with query title and term description on the left, three stacked gradient panels on the right.
 * Viewport Width: 1440
 */

$envosta_panels = array(
	'data:image/svg+xml;utf8,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 400"><defs><linearGradient id="a" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="%23fecaca"/><stop offset="100%" stop-color="%23f97316"/></linearGradient></defs><rect width="600" height="400" fill="url(%23a)"/><circle cx="460" cy="120" r="90" fill="%23ffffff" fill-opacity="0.35"/></svg>' ),
	'data:image/svg+xml;utf8,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 400"><defs><linearGradient id="a" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="%23bae6fd"/><stop offset="100%" stop-color="%230ea5e9"/></linearGradient></defs><rect width="600" height="400" fill="url(%23a)"/><rect x="80" y="120" width="280" height="200" rx="18" fill="%23ffffff" fill-opacity="0.3"/></svg>' ),
	'data:image/svg+xml;utf8,' . rawurlencode( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 400"><defs><linearGradient id="a" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="%23d9f99d"/><stop offset="100%" stop-color="%2365a30d"/></linearGradient></defs><rect width="600" height="400" fill="url(%23a)"/><circle cx="180" cy="280" r="120" fill="%23ffffff" fill-opacity="0.28"/></svg>' ),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"5rem","right":"2rem","bottom":"5rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:5rem;padding-right:2rem;padding-bottom:5rem;padding-left:2rem">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3rem","left":"3rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Shop the category', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:query-title {"type":"archive","level":1,"style":{"typography":{"fontSize":"clamp(2rem, 4.5vw, 3.25rem)","letterSpacing":"-0.03em","lineHeight":"1.05","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} /-->
			<!-- wp:term-description {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.6"}},"textColor":"muted"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<?php foreach ( $envosta_panels as $panel ) : ?>
				<!-- wp:image {"aspectRatio":"21/9","scale":"cover","style":{"border":{"radius":"14px"}},"className":"envosta-card-hover"} -->
				<figure class="wp-block-image envosta-card-hover has-custom-border"><img src="<?php echo esc_url( $panel ); ?>" alt="" style="border-radius:14px;aspect-ratio:21/9;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
