<?php
/**
 * Title: 404
 * Slug: envosta/hidden-404
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-group">
  <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large"} -->
  <h1 class="wp-block-heading has-text-align-center has-xx-large-font-size">404</h1>
  <!-- /wp:heading -->
  <!-- wp:paragraph {"align":"center","fontSize":"large"} -->
  <p class="has-text-align-center has-large-font-size"><?php echo esc_html_x( 'The page you are looking for does not exist or has been moved.', '404 message', 'envosta' ); ?></p>
  <!-- /wp:paragraph -->
  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons">
    <!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/"><?php echo esc_html_x( 'Back to Home', '404 button', 'envosta' ); ?></a></div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
