<?php
/**
 * Title: Hero — Centered
 * Slug: envosta/hero-centered
 * Categories: envosta-sections
 * Keywords: hero, header, banner
 * Inserter: true
 */
?>

<!-- wp:group {"tagName":"section","backgroundColor":"primary","textColor":"text-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group has-primary-background-color has-text-light-color has-background has-text-color">

  <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","alignItems":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
  <div class="wp-block-group">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"rgba(255,255,255,0.6)"}},"fontSize":"sm"} -->
    <p class="has-text-align-center has-text-color has-sm-font-size" style="color:rgba(255,255,255,0.6);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Eyebrow Text</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":1,"textAlign":"center","textColor":"text-light","style":{"typography":{"lineHeight":"1.1"}},"fontSize":"hero"} -->
    <h1 class="wp-block-heading has-text-align-center has-text-light-color has-text-color has-hero-font-size" style="line-height:1.1">Your Page Headline</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","fontSize":"lg","style":{"color":{"text":"rgba(255,255,255,0.7)"}}} -->
    <p class="has-text-align-center has-text-color has-lg-font-size" style="color:rgba(255,255,255,0.7)">A brief description of this page and what visitors will find here.</p>
    <!-- /wp:paragraph -->

  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->
