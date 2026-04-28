<?php
/**
 * Title: Form — Contact, Simple
 * Slug: envosta/form-contact-simple
 * Categories: contact, call-to-action
 * Keywords: contact, form, jetpack, message
 * Description: A clean centered contact form (Name, Email, Message) using Jetpack Forms. Drops onto any page as a self-contained section. Requires Jetpack to be active to render the form fields.
 *
 * @package Envosta
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"560px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Get in touch', 'envosta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size"><?php esc_html_e( 'Send us a message and we\'ll get back to you within one business day.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:jetpack/contact-form {"subject":"New contact form submission","to":""} -->
		<!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)"} /-->
		<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)"} /-->
		<!-- wp:jetpack/field-textarea {"label":"Message","required":true,"requiredText":"(required)"} /-->
		<!-- wp:jetpack/button {"element":"button","text":"Send message","lock":{"remove":true}} /-->
	<!-- /wp:jetpack/contact-form -->

</div>
<!-- /wp:group -->
