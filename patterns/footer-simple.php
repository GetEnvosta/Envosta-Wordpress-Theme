<?php
/**
 * Title: Footer — Simple
 * Slug: envosta/footer-simple
 * Categories: site, footer
 * Block Types: core/template-part/footer
 * Description: Minimal footer with copyright, Privacy and Terms links, and a "Powered by Envosta" credit. Single row on desktop, stacks on mobile.
 *
 * @package Envosta
 */
declare( strict_types = 1 );

$envosta_year = gmdate( 'Y' );
?>
<!-- wp:group {"metadata":{"name":"Footer Container"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|theme-2","width":"1px"}}},"backgroundColor":"theme-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-theme-1-background-color has-background" style="border-top-color:var(--wp--preset--color--theme-2);border-top-width:1px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">
			<?php
			printf(
				/* translators: %s: current year. */
				esc_html__( '© %s. All rights reserved.', 'envosta' ),
				esc_html( $envosta_year )
			);
			?>
		</p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="/privacy"><?php esc_html_e( 'Privacy', 'envosta' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="/terms"><?php esc_html_e( 'Terms', 'envosta' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">
				<?php
				printf(
					/* translators: %1$s: opening anchor tag. %2$s: closing anchor tag. */
					esc_html__( 'Powered by %1$sEnvosta%2$s', 'envosta' ),
					'<a href="https://envosta.com" rel="nofollow noopener" target="_blank">',
					'</a>'
				);
				?>
			</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
