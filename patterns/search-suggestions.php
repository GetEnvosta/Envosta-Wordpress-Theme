<?php
/**
 * Title: Search — Suggestions
 * Slug: envosta/search-suggestions
 * Categories: envosta-search
 * Template Types: search
 * Description: Full search experience with large input, popular search pills, and featured post cards.
 * Viewport Width: 1440
 */

$envosta_popular = array(
	__( 'Design systems', 'envosta' ),
	__( 'FSE templates', 'envosta' ),
	__( 'Typography', 'envosta' ),
	__( 'Performance', 'envosta' ),
	__( 'Branding', 'envosta' ),
	__( 'Accessibility', 'envosta' ),
);

$envosta_featured = array(
	array(
		'gradient' => 'linear-gradient(135deg, #fef3c7 0%, #fcd34d 100%)',
		'tag'      => __( 'Guide', 'envosta' ),
		'title'    => __( 'How to structure a modern FSE theme', 'envosta' ),
	),
	array(
		'gradient' => 'linear-gradient(135deg, #dbeafe 0%, #93c5fd 100%)',
		'tag'      => __( 'Engineering', 'envosta' ),
		'title'    => __( 'Shipping weekly without breaking things', 'envosta' ),
	),
	array(
		'gradient' => 'linear-gradient(135deg, #fae8ff 0%, #d8b4fe 100%)',
		'tag'      => __( 'Design', 'envosta' ),
		'title'    => __( 'The case for restraint in brand systems', 'envosta' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"7rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"960px"}} -->
<div class="wp-block-group alignfull" style="padding-top:7rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"3rem"},"blockGap":"1.25rem"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:3rem">
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2rem, 4.5vw, 3rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem, 4.5vw, 3rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'What are you looking for?', 'envosta' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search articles, guides, and pages…","buttonText":"Search","buttonPosition":"button-inside","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"4rem"},"blockGap":"0.875rem"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:4rem">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","fontWeight":"600","letterSpacing":"0.02em"}},"textColor":"muted"} -->
		<p class="has-muted-color has-text-color" style="font-size:0.8rem;font-weight:600;letter-spacing:0.02em"><?php esc_html_e( 'Popular:', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<?php foreach ( $envosta_popular as $term ) : ?>
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","fontWeight":"500"},"spacing":{"padding":{"top":"0.375rem","right":"0.875rem","bottom":"0.375rem","left":"0.875rem"}},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
		<p class="has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;padding:0.375rem 0.875rem;font-size:0.8rem;font-weight:500"><a href="#" style="color:inherit;text-decoration:none"><?php echo esc_html( $term ); ?></a></p>
		<!-- /wp:paragraph -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1.25rem"}}},"textColor":"accent"} -->
	<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1.25rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Featured posts', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_featured as $post ) : ?>
		<!-- wp:column {"className":"envosta-card envosta-card-hover envosta-reveal","style":{"spacing":{"padding":"0"},"border":{"radius":"12px","width":"1px"}},"borderColor":"border"} -->
		<div class="wp-block-column envosta-card envosta-card-hover envosta-reveal has-border-color has-border-border-color" style="border-width:1px;border-radius:12px;padding:0;overflow:hidden">
			<!-- wp:group {"style":{"dimensions":{"aspectRatio":"16/10"}}} -->
			<div class="wp-block-group" style="aspect-ratio:16/10;background:<?php echo esc_attr( $post['gradient'] ); ?>"></div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"1.25rem","right":"1.5rem","bottom":"1.5rem","left":"1.5rem"},"blockGap":"0.625rem"}}} -->
			<div class="wp-block-group" style="padding:1.25rem 1.5rem 1.5rem">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.7rem","fontWeight":"600","letterSpacing":"0.05em","textTransform":"uppercase"}},"textColor":"accent"} -->
				<p class="has-accent-color has-text-color" style="font-size:0.7rem;font-weight:600;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html( $post['tag'] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.1rem","fontWeight":"600","lineHeight":"1.3","letterSpacing":"-0.01em"}}} -->
				<h3 class="wp-block-heading" style="font-size:1.1rem;font-weight:600;letter-spacing:-0.01em;line-height:1.3"><a href="#" style="color:inherit;text-decoration:none"><?php echo esc_html( $post['title'] ); ?></a></h3>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
