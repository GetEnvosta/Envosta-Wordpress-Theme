<?php
/**
 * Title: Form — Newsletter Signup
 * Slug: envosta/form-newsletter
 * Categories: call-to-action, contact, banner
 * Keywords: newsletter, subscribe, email, signup, jetpack
 * Description: A compact newsletter signup band — heading, supporting line, and an inline email + button. Pairs well above a footer. Uses Jetpack Forms.
 *
 * @package Envosta
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|theme-2","width":"1px"},"bottom":{"color":"var:preset|color|theme-2","width":"1px"}}},"layout":{"type":"constrained","contentSize":"640px"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--theme-2);border-top-width:1px;border-bottom-color:var(--wp--preset--color--theme-2);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Stay in the loop', 'envosta' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size"><?php esc_html_e( 'Occasional updates, no spam. Unsubscribe anytime.', 'envosta' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
	<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:jetpack/contact-form {"subject":"Newsletter signup","to":"","customThankyou":"message","customThankyouMessage":"Thanks — you’re on the list."} -->
		<!-- wp:jetpack/field-email {"label":"Email","required":true,"requiredText":"(required)"} /-->
		<!-- wp:jetpack/button {"element":"button","text":"Subscribe","lock":{"remove":true}} /-->
	<!-- /wp:jetpack/contact-form -->

</div>
<!-- /wp:group -->
