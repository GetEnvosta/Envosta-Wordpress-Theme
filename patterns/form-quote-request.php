<?php
/**
 * Title: Form — Quote Request
 * Slug: envosta/form-quote-request
 * Categories: contact, call-to-action, services
 * Keywords: quote, request, project, lead, jetpack
 * Description: A longer lead-capture form with name, email, phone, project type dropdown, budget range, and message. Use on a "Get a quote" or services page. Requires Jetpack.
 *
 * @package Envosta
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Request a quote', 'envosta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size"><?php esc_html_e( 'Tell us about your project and we\'ll send a tailored quote within 48 hours.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:jetpack/contact-form {"subject":"New quote request","to":""} -->
		<!-- wp:jetpack/field-name {"required":true,"requiredText":"(required)"} /-->
		<!-- wp:jetpack/field-email {"required":true,"requiredText":"(required)"} /-->
		<!-- wp:jetpack/field-telephone {"label":"Phone"} /-->
		<!-- wp:jetpack/field-select {"label":"Project type","required":true,"requiredText":"(required)","options":["Website","Branding","Marketing","Other"]} /-->
		<!-- wp:jetpack/field-select {"label":"Estimated budget","options":["Under $5,000","$5,000 – $15,000","$15,000 – $50,000","$50,000+"]} /-->
		<!-- wp:jetpack/field-textarea {"label":"Project details","required":true,"requiredText":"(required)"} /-->
		<!-- wp:jetpack/button {"element":"button","text":"Request quote","lock":{"remove":true}} /-->
	<!-- /wp:jetpack/contact-form -->

</div>
<!-- /wp:group -->
