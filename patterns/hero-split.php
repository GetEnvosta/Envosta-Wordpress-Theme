<?php
/**
 * Title: Hero — Split Layout
 * Slug: envosta/hero-split
 * Categories: envosta-sections
 * Keywords: hero, header, banner
 * Inserter: true
 */
?>

<!-- wp:group {"tagName":"section","backgroundColor":"bg","style":{"spacing":{"padding":{"top":"var:preset|spacing|32","bottom":"var:preset|spacing|32"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group has-bg-background-color has-background">

  <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|16"}}}} -->
  <div class="wp-block-columns are-vertically-aligned-center">

    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

      <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|cta"}},"fontSize":"sm"} -->
      <p class="has-text-color has-sm-font-size" style="color:var(--wp--preset--color--cta);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Your Eyebrow Text</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"hero"} -->
      <h1 class="wp-block-heading has-hero-font-size" style="line-height:1.1">Your Main Headline Goes Here</h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-muted"}},"fontSize":"lg"} -->
      <p class="has-text-color has-lg-font-size" style="color:var(--wp--preset--color--text-muted)">Your value proposition goes here. One to two sentences that speak directly to your ideal customer's biggest pain point.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|4","margin":{"top":"var:preset|spacing|8"}}}} -->
      <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--8)">
        <!-- wp:button {"backgroundColor":"cta","textColor":"text-light","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-cta-background-color has-text-light-color has-background has-text-color wp-element-button">Primary Action</a></div>
        <!-- /wp:button -->
        <!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"9999px"},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}}}} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button">Secondary Action</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->

    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"45%"} -->
    <div class="wp-block-column" style="flex-basis:45%">
      <!-- wp:image {"sizeSlug":"full","style":{"border":{"radius":"16px"}},"alt":"Hero image"} -->
      <figure class="wp-block-image size-full" style="border-radius:16px"><img src="" alt="Hero image" loading="lazy"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

  </div>
  <!-- /wp:columns -->

</section>
<!-- /wp:group -->
