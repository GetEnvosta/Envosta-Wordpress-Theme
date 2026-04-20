<?php
/**
 * Title: Front Page — Portfolio Intro
 * Slug: envosta/front-portfolio
 * Categories: envosta-hero
 * Template Types: front-page
 * Description: Designer portfolio landing with oversized name, bio, and a 2x2 gradient project grid.
 * Viewport Width: 1440
 */

$envosta_projects = array(
	array(
		'label' => __( 'Aperture — Identity System', 'envosta' ),
		'year'  => '2026',
		'grad'  => 'linear-gradient(135deg, #fce7f3 0%, #f9a8d4 100%)',
	),
	array(
		'label' => __( 'Northwind — Product Site', 'envosta' ),
		'year'  => '2025',
		'grad'  => 'linear-gradient(135deg, #dbeafe 0%, #60a5fa 100%)',
	),
	array(
		'label' => __( 'Halcyon — Brand Refresh', 'envosta' ),
		'year'  => '2025',
		'grad'  => 'linear-gradient(135deg, #fef3c7 0%, #fbbf24 100%)',
	),
	array(
		'label' => __( 'Tidewater — Editorial', 'envosta' ),
		'year'  => '2024',
		'grad'  => 'linear-gradient(135deg, #dcfce7 0%, #4ade80 100%)',
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"7rem","bottom":"6rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull" style="padding-top:7rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"3.5rem","left":"4.5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"48%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:48%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1.25rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1.25rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Independent designer · Brooklyn', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(3rem, 7vw, 5.5rem)","letterSpacing":"-0.035em","lineHeight":"1","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.75rem"}}}} -->
			<h1 class="wp-block-heading" style="margin-bottom:1.75rem;font-size:clamp(3rem, 7vw, 5.5rem);font-weight:700;letter-spacing:-0.035em;line-height:1"><?php esc_html_e( 'Mira Okafor — brand & product design for teams who care.', 'envosta' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.7"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.1rem;line-height:1.7"><?php esc_html_e( 'Ten years helping founders ship work that feels inevitable. Previously design lead at Linear and Arc. Currently taking two new clients per quarter — usually brand systems or first-launch product sites.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"2.5rem"},"blockGap":"0.75rem"}}} -->
			<div class="wp-block-buttons" style="margin-top:2.5rem">
				<!-- wp:button {"style":{"border":{"radius":"9999px"}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="border-radius:9999px"><?php esc_html_e( 'View selected work', 'envosta' ); ?></a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-envosta-btn-arrow","style":{"border":{"radius":"9999px","width":"1px"}},"borderColor":"border"} -->
				<div class="wp-block-button is-style-envosta-btn-arrow"><a class="wp-block-button__link has-border-color has-border-border-color wp-element-button" href="#" style="border-width:1px;border-radius:9999px"><?php esc_html_e( 'Start a project', 'envosta' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"52%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-center envosta-reveal" style="flex-basis:52%">
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"style":{"spacing":{"blockGap":"1rem"}}} -->
				<div class="wp-block-column">
					<?php foreach ( array( $envosta_projects[0], $envosta_projects[2] ) as $project ) : ?>
					<!-- wp:group {"className":"envosta-card-hover","style":{"dimensions":{"aspectRatio":"4/5"},"border":{"radius":"14px"},"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
					<div class="wp-block-group envosta-card-hover" style="border-radius:14px;background:<?php echo esc_attr( $project['grad'] ); ?>;aspect-ratio:4/5;padding:1.25rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#0f172a"}}} --><p class="has-text-color" style="color:#0f172a;font-size:0.75rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $project['year'] ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"600","letterSpacing":"-0.01em"},"color":{"text":"#0f172a"}}} --><p class="has-text-color" style="color:#0f172a;font-size:1rem;font-weight:600;letter-spacing:-0.01em"><?php echo esc_html( $project['label'] ); ?></p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
					<?php endforeach; ?>
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"style":{"spacing":{"blockGap":"1rem","margin":{"top":"3rem"}}}} -->
				<div class="wp-block-column" style="margin-top:3rem">
					<?php foreach ( array( $envosta_projects[1], $envosta_projects[3] ) as $project ) : ?>
					<!-- wp:group {"className":"envosta-card-hover","style":{"dimensions":{"aspectRatio":"4/5"},"border":{"radius":"14px"},"spacing":{"padding":{"top":"1.25rem","right":"1.25rem","bottom":"1.25rem","left":"1.25rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"space-between"}} -->
					<div class="wp-block-group envosta-card-hover" style="border-radius:14px;background:<?php echo esc_attr( $project['grad'] ); ?>;aspect-ratio:4/5;padding:1.25rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"#0f172a"}}} --><p class="has-text-color" style="color:#0f172a;font-size:0.75rem;font-weight:600;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html( $project['year'] ); ?></p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"600","letterSpacing":"-0.01em"},"color":{"text":"#0f172a"}}} --><p class="has-text-color" style="color:#0f172a;font-size:1rem;font-weight:600;letter-spacing:-0.01em"><?php echo esc_html( $project['label'] ); ?></p><!-- /wp:paragraph --></div>
					<!-- /wp:group -->
					<?php endforeach; ?>
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
