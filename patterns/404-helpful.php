<?php
/**
 * Title: 404 — Helpful Links
 * Slug: envosta/404-helpful
 * Categories: envosta-404
 * Template Types: 404
 * Description: 404 message with a 3-up grid of popular destination cards to encourage exploration.
 * Viewport Width: 1440
 */

$envosta_helpful = array(
	array(
		'eyebrow' => __( 'About us', 'envosta' ),
		'title'   => __( 'Learn the story behind the studio', 'envosta' ),
		'href'    => '/about',
	),
	array(
		'eyebrow' => __( 'Services', 'envosta' ),
		'title'   => __( 'See what we can build together', 'envosta' ),
		'href'    => '/services',
	),
	array(
		'eyebrow' => __( 'Journal', 'envosta' ),
		'title'   => __( 'Writing on design and the work', 'envosta' ),
		'href'    => '/blog',
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","right":"2rem","bottom":"6rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1100px"}} -->
<div class="wp-block-group alignfull" style="padding-top:8rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">

	<!-- wp:group {"className":"envosta-reveal","style":{"spacing":{"margin":{"bottom":"4rem"},"blockGap":"1rem"}},"layout":{"type":"constrained","contentSize":"680px"}} -->
	<div class="wp-block-group envosta-reveal" style="margin-bottom:4rem">
		<!-- wp:paragraph {"align":"center","className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"}},"textColor":"accent"} -->
		<p class="has-text-align-center envosta-eyebrow has-accent-color has-text-color" style="font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( '404 — page not found', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3.25rem)","letterSpacing":"-0.02em","lineHeight":"1.1","fontWeight":"700"}}} -->
		<h1 class="wp-block-heading has-text-align-center" style="font-size:clamp(2rem, 5vw, 3.25rem);font-weight:700;letter-spacing:-0.02em;line-height:1.1"><?php esc_html_e( 'This page took a detour.', 'envosta' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.6"}},"textColor":"muted"} -->
		<p class="has-text-align-center has-muted-color has-text-color" style="font-size:1.1rem;line-height:1.6"><?php esc_html_e( 'No harm done — here are a few places people usually end up when they were looking for something else.', 'envosta' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
	<div class="wp-block-columns">
		<?php foreach ( $envosta_helpful as $item ) : ?>
		<!-- wp:column {"className":"envosta-card envosta-card-hover envosta-reveal","style":{"spacing":{"padding":{"top":"2rem","right":"1.75rem","bottom":"2rem","left":"1.75rem"}},"border":{"radius":"16px","width":"1px"}},"borderColor":"border"} -->
		<div class="wp-block-column envosta-card envosta-card-hover envosta-reveal has-border-color has-border-border-color" style="border-width:1px;border-radius:16px;padding:2rem 1.75rem">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.72rem","letterSpacing":"0.12em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"0.75rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:0.75rem;font-size:0.72rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html( $item['eyebrow'] ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.15rem","fontWeight":"600","lineHeight":"1.35","letterSpacing":"-0.01em"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
			<h3 class="wp-block-heading" style="margin-bottom:1.25rem;font-size:1.15rem;font-weight:600;letter-spacing:-0.01em;line-height:1.35"><a href="<?php echo esc_url( $item['href'] ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html( $item['title'] ); ?></a></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"600"}},"textColor":"accent"} -->
			<p class="has-accent-color has-text-color" style="font-size:0.9rem;font-weight:600"><a href="<?php echo esc_url( $item['href'] ); ?>" style="color:inherit;text-decoration:none"><?php esc_html_e( 'Go there →', 'envosta' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
