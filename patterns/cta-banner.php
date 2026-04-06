<?php
/**
 * Title: CTA Banner
 * Slug: envosta/cta-banner
 * Categories: envosta-sections
 * Inserter: true
 */

$content = envosta_get_config( 'content' );
$section = $content['cta-banner'] ?? [];

$headline    = esc_html( $section['headline'] ?? 'Ready to Get Started?' );
$description = esc_html( $section['description'] ?? 'Take the next step today. We\'d love to hear from you.' );
$cta_text    = esc_html( $section['cta_text'] ?? 'Contact Us' );
?>

<!-- wp:group {"tagName":"section","backgroundColor":"cta","textColor":"text-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group has-cta-background-color has-text-light-color has-background has-text-color">

  <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"level":2,"textAlign":"center","textColor":"text-light","fontSize":"4xl"} -->
    <h2 class="wp-block-heading has-text-align-center has-text-light-color has-text-color has-4xl-font-size"><?php echo $headline; ?></h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"align":"center","fontSize":"lg","style":{"color":{"text":"rgba(255,255,255,0.8)"}}} -->
    <p class="has-text-align-center has-lg-font-size" style="color:rgba(255,255,255,0.8)"><?php echo $description; ?></p>
    <!-- /wp:paragraph -->
    <!-- wp:spacer {"height":"var:preset|spacing|4"} --><div style="height:var(--wp--preset--spacing--4)" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
      <!-- wp:button {"backgroundColor":"bg","textColor":"primary","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|12","right":"var:preset|spacing|12"}}}} -->
      <div class="wp-block-button"><a class="wp-block-button__link has-bg-background-color has-primary-color has-background has-text-color wp-element-button"><?php echo $cta_text; ?></a></div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->
