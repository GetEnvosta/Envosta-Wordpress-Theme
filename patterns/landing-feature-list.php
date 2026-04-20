<?php
/**
 * Title: Landing — Feature Checklist
 * Slug: envosta/landing-feature-list
 * Categories: envosta-landing
 * Template Types: page-landing
 * Description: Two-column feature section with intro copy and a bordered card of six checklisted feature rows.
 * Viewport Width: 1440
 */

$envosta_features = array(
	array(
		'title' => __( 'Unlimited projects', 'envosta' ),
		'body'  => __( 'Spin up as many workspaces as you need — no per-seat gotchas.', 'envosta' ),
	),
	array(
		'title' => __( 'Team roles & permissions', 'envosta' ),
		'body'  => __( 'Granular access down to the view. Invite clients without fear.', 'envosta' ),
	),
	array(
		'title' => __( 'Native integrations', 'envosta' ),
		'body'  => __( 'Slack, Figma, GitHub, Linear and Notion — already wired in.', 'envosta' ),
	),
	array(
		'title' => __( 'API + webhooks', 'envosta' ),
		'body'  => __( 'Build your own automations against a clean, documented surface.', 'envosta' ),
	),
	array(
		'title' => __( 'SOC 2 Type II', 'envosta' ),
		'body'  => __( 'Enterprise-grade security, audited annually. Encrypted at rest and in flight.', 'envosta' ),
	),
	array(
		'title' => __( 'Priority human support', 'envosta' ),
		'body'  => __( 'Real humans, under four minutes, every day. No AI triage maze.', 'envosta' ),
	),
);
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem","right":"2rem","left":"2rem"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull" style="padding-top:6rem;padding-right:2rem;padding-bottom:6rem;padding-left:2rem">
	<!-- wp:columns {"verticalAlignment":"top","style":{"spacing":{"blockGap":{"top":"3rem","left":"5rem"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-top">

		<!-- wp:column {"verticalAlignment":"top","width":"40%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-top envosta-reveal" style="flex-basis:40%">
			<!-- wp:paragraph {"className":"envosta-eyebrow","style":{"typography":{"fontSize":"0.78rem","letterSpacing":"0.14em","textTransform":"uppercase","fontWeight":"600"},"spacing":{"margin":{"bottom":"1rem"}}},"textColor":"accent"} -->
			<p class="envosta-eyebrow has-accent-color has-text-color" style="margin-bottom:1rem;font-size:0.78rem;font-weight:600;letter-spacing:0.14em;text-transform:uppercase"><?php esc_html_e( 'Every plan, every feature', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"clamp(2.25rem, 4.5vw, 3.25rem)","letterSpacing":"-0.025em","lineHeight":"1.08","fontWeight":"700"},"spacing":{"margin":{"bottom":"1.25rem"}}}} -->
			<h2 class="wp-block-heading" style="margin-bottom:1.25rem;font-size:clamp(2.25rem, 4.5vw, 3.25rem);font-weight:700;letter-spacing:-0.025em;line-height:1.08"><?php esc_html_e( 'Everything included.', 'envosta' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.7"}},"textColor":"muted"} -->
			<p class="has-muted-color has-text-color" style="font-size:1.05rem;line-height:1.7"><?php esc_html_e( 'No starter tier with the good parts locked away. Every team gets the full product, from day one. Upgrade only when you outgrow the seat count.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top","width":"60%","className":"envosta-reveal"} -->
		<div class="wp-block-column is-vertically-aligned-top envosta-reveal" style="flex-basis:60%">
			<!-- wp:group {"className":"envosta-card","style":{"border":{"radius":"16px","width":"1px"},"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"},"blockGap":"0"}},"borderColor":"border","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group envosta-card has-border-color has-border-border-color" style="border-width:1px;border-radius:16px;padding:1rem">
				<?php foreach ( $envosta_features as $i => $feature ) : ?>
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"1rem","bottom":"1rem","left":"1rem"},"blockGap":"1rem"}<?php echo $i > 0 ? ',"border":{"top":{"color":"var:preset|color|border","width":"1px"}}' : ''; ?>},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="<?php echo $i > 0 ? 'border-top-color:var(--wp--preset--color--border);border-top-width:1px;' : ''; ?>padding:1rem;align-items:flex-start">
					<!-- wp:group {"style":{"border":{"radius":"9999px"}},"backgroundColor":"accent","layout":{"type":"flex","justifyContent":"center"}} -->
					<div class="wp-block-group has-accent-background-color has-background" style="border-radius:9999px;width:1.5rem;height:1.5rem;align-items:center">
						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.75rem","fontWeight":"700"},"color":{"text":"#ffffff"}}} -->
						<p class="has-text-align-center has-text-color" style="color:#ffffff;font-size:0.75rem;font-weight:700">✓</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"0.25rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"600","letterSpacing":"-0.005em"}}} -->
						<p style="font-size:1rem;font-weight:600;letter-spacing:-0.005em"><?php echo esc_html( $feature['title'] ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":"1.55"}},"textColor":"muted"} -->
						<p class="has-muted-color has-text-color" style="font-size:0.9rem;line-height:1.55"><?php echo esc_html( $feature['body'] ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
				<?php endforeach; ?>
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
