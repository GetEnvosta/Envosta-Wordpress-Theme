<?php
/**
 * Title: Header
 * Slug: envosta/hidden-header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"header","style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<header class="wp-block-group has-base-background-color has-background">

  <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","alignItems":"center"}} -->
  <div class="wp-block-group">

    <!-- wp:site-title /-->

    <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"}} /-->

    <!-- wp:buttons -->
    <div class="wp-block-buttons">
      <!-- wp:button -->
      <div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Get Started', 'Header CTA button', 'envosta' ); ?></a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

  </div>
  <!-- /wp:group -->

</header>
<!-- /wp:group -->
