<?php
/**
 * Title: Blog — Magazine Header
 * Slug: envosta/blog-header-magazine
 * Categories: envosta-blog
 * Template Types: index, home
 * Description: Magazine-style blog header with title on left and horizontal filter pills on right.
 * Viewport Width: 1440
 */

$envosta_filters = array(
	array( 'label' => __( 'All', 'envosta' ),         'active' => true ),
	array( 'label' => __( 'Design', 'envosta' ),      'active' => false ),
	array( 'label' => __( 'Engineering', 'envosta' ), 'active' => false ),
	array( 'label' => __( 'Culture', 'envosta' ),     'active' => false ),
	array( 'label' => __( 'Strategy', 'envosta' ),    'active' => false ),
);
?>
<!-- wp:group {"align":"full","className":"envosta-reveal","style":{"spacing":{"padding":{"top":"7rem","right":"2rem","bottom":"3rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull envosta-reveal" style="padding-top:7rem;padding-right:2rem;padding-bottom:3rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":{"top":"2rem","left":"3rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-bottom">

		<!-- wp:column {"verticalAlignment":"bottom","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:55%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 6vw, 4rem)","letterSpacing":"-0.03em","lineHeight":"1","fontWeight":"700"},"spacing":{"margin":{"bottom":"1rem"}}}} -->
			<h1 class="wp-block-heading" style="margin-bottom:1rem;font-size:clamp(2.5rem, 6vw, 4rem);font-weight:700;letter-spacing:-0.03em;line-height:1"><?php esc_html_e( 'Journal', 'envosta' ); ?></h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.65"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.05rem;line-height:1.65"><?php esc_html_e( 'Dispatches from the studio — on design, engineering, culture, and the strategy behind the work we ship.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:45%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.625rem"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<?php foreach ( $envosta_filters as $filter ) : ?>
					<?php if ( ! empty( $filter['active'] ) ) : ?>
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"600"},"spacing":{"padding":{"top":"0.5rem","right":"1.125rem","bottom":"0.5rem","left":"1.125rem"}},"color":{"background":"#1a1a1a","text":"#ffffff"},"border":{"radius":"9999px"}}} -->
					<p class="has-text-color has-background" style="border-radius:9999px;color:#ffffff;background-color:#1a1a1a;padding:0.5rem 1.125rem;font-size:0.85rem;font-weight:600"><a href="#" style="color:inherit;text-decoration:none"><?php echo esc_html( $filter['label'] ); ?></a></p>
					<!-- /wp:paragraph -->
					<?php else : ?>
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem","fontWeight":"500"},"spacing":{"padding":{"top":"0.5rem","right":"1.125rem","bottom":"0.5rem","left":"1.125rem"}},"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
					<p class="has-border-color has-border-border-color" style="border-width:1px;border-radius:9999px;padding:0.5rem 1.125rem;font-size:0.85rem;font-weight:500"><a href="#" style="color:inherit;text-decoration:none"><?php echo esc_html( $filter['label'] ); ?></a></p>
					<!-- /wp:paragraph -->
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"3rem","bottom":"0"}}},"backgroundColor":"border","className":"is-style-default"} -->
	<hr class="wp-block-separator has-alpha-channel-opacity has-border-background-color has-background is-style-default" style="margin-top:3rem;margin-bottom:0"/>
	<!-- /wp:separator -->
</div>
<!-- /wp:group -->
