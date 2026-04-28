<?php
/**
 * Title: Form — Contact, Split
 * Slug: envosta/form-contact-split
 * Categories: contact, call-to-action
 * Keywords: contact, form, jetpack, split, two column
 * Description: A two-column contact section: address, phone, email, and hours on the left; a Jetpack contact form on the right. Stacks on mobile. Requires Jetpack to render the form.
 *
 * @package Envosta
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading {"level":2} -->
			<h2 class="wp-block-heading"><?php esc_html_e( 'Let\'s talk', 'envosta' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size"><?php esc_html_e( 'Have a project in mind? Tell us about it. We typically respond within one business day.', 'envosta' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
			<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph -->
				<p><strong><?php esc_html_e( 'Email', 'envosta' ); ?></strong><br><a href="mailto:hello@example.com">hello@example.com</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><strong><?php esc_html_e( 'Phone', 'envosta' ); ?></strong><br><a href="tel:+15555555555">+1 (555) 555-5555</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><strong><?php esc_html_e( 'Hours', 'envosta' ); ?></strong><br><?php esc_html_e( 'Mon–Fri, 9am–5pm', 'envosta' ); ?></p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:jetpack/contact-form {"subject":"New contact form submission","to":""} -->
				<!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)"} /-->
				<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)"} /-->
				<!-- wp:jetpack/field-text {"label":"Subject"} /-->
				<!-- wp:jetpack/field-textarea {"label":"Message","required":true,"requiredText":"(required)"} /-->
				<!-- wp:jetpack/button {"element":"button","text":"Send message","lock":{"remove":true}} /-->
			<!-- /wp:jetpack/contact-form -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
