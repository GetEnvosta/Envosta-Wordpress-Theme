<?php
/**
 * Title: Header — Centered Logo
 * Slug: envosta/header-centered-logo
 * Categories: header
 * Block Types: core/template-part/header
 * Description: Centered vertical stack with site logo, title, navigation, and a thin separator.
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"header","align":"full","className":"envosta-header","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1280px"}} -->
<header class="wp-block-group alignfull envosta-header" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
	<div class="wp-block-group">
		<!-- wp:site-logo {"width":64,"align":"center"} /-->
		<!-- wp:site-title {"textAlign":"center","level":0,"fontSize":"medium"} /-->
		<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0"}}},"backgroundColor":"theme-3","className":"is-style-wide"} -->
	<hr class="wp-block-separator has-text-color has-theme-3-color has-alpha-channel-opacity has-theme-3-background-color has-background is-style-wide" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:0"/>
	<!-- /wp:separator -->

</header>
<!-- /wp:group -->
