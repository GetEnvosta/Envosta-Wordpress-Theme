<?php
/**
 * Title: Testimonials
 * Slug: envosta/proof
 * Categories: envosta-sections
 * Inserter: true
 */

$content = envosta_get_config( 'content' );
$section = $content['proof'] ?? [];

$headline = esc_html( $section['headline'] ?? 'Real Reviews, Real Results' );

$default_testimonials = [
    [ 'quote' => 'Client testimonial goes here. Keep it specific and results-focused.',       'name' => 'Client Name', 'location' => 'Location', 'rating' => 5 ],
    [ 'quote' => 'Another client testimonial. Focus on the outcome they experienced.',        'name' => 'Client Name', 'location' => 'Location', 'rating' => 5 ],
    [ 'quote' => 'A third testimonial. Variety in length and specifics helps credibility.',    'name' => 'Client Name', 'location' => 'Location', 'rating' => 5 ],
];
$testimonials = $section['testimonials'] ?? $default_testimonials;
?>

<!-- wp:group {"tagName":"section","backgroundColor":"bg-soft","style":{"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group has-bg-soft-background-color has-background">

  <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
  <div class="wp-block-group">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|cta"}},"fontSize":"sm"} -->
    <p class="has-text-align-center has-text-color has-sm-font-size" style="color:var(--wp--preset--color--cta);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">What Clients Say</p>
    <!-- /wp:paragraph -->
    <!-- wp:heading {"level":2,"textAlign":"center","fontSize":"4xl"} -->
    <h2 class="wp-block-heading has-text-align-center has-4xl-font-size"><?php echo $headline; ?></h2>
    <!-- /wp:heading -->
  </div>
  <!-- /wp:group -->

  <!-- wp:spacer {"height":"var:preset|spacing|12"} -->
  <div style="height:var(--wp--preset--spacing--12)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|6"}}}} -->
  <div class="wp-block-columns">

    <?php foreach ( $testimonials as $t ) :
      $stars    = str_repeat( '★', min( (int) ( $t['rating'] ?? 5 ), 5 ) );
      $quote    = esc_html( $t['quote'] ?? '' );
      $name     = esc_html( $t['name'] ?? 'Client' );
      $location = esc_html( $t['location'] ?? '' );
    ?>
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"border":{"radius":"16px","width":"1px","color":"var:preset|color|border"},"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}}},"backgroundColor":"bg","layout":{"type":"flex","orientation":"vertical"}} -->
      <div class="wp-block-group has-bg-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:16px;padding:var(--wp--preset--spacing--8)">
        <!-- wp:paragraph {"fontSize":"lg"} --><p class="has-lg-font-size"><?php echo $stars; ?></p><!-- /wp:paragraph -->
        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"fontSize":"base"} -->
        <p class="has-base-font-size" style="font-style:italic">"<?php echo $quote; ?>"</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-muted"}},"fontSize":"sm"} -->
        <p class="has-text-color has-sm-font-size" style="color:var(--wp--preset--color--text-muted)"><strong><?php echo $name; ?></strong> — <?php echo $location; ?></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    <?php endforeach; ?>

  </div>
  <!-- /wp:columns -->

</section>
<!-- /wp:group -->
