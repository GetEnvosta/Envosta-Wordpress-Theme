<?php
/**
 * Title: Social Proof Bar
 * Slug: envosta/social-proof
 * Categories: envosta-sections
 * Inserter: true
 */

$content = envosta_get_config( 'content' );
$section = $content['social-proof'] ?? [];

$default_stats = [
    [ 'value' => '100+', 'label' => 'Projects Completed' ],
    [ 'value' => '10+',  'label' => 'Years Experience' ],
    [ 'value' => '5★',   'label' => 'Google Rating' ],
    [ 'value' => '100%', 'label' => 'Satisfaction Rate' ],
];
$stats = $section['stats'] ?? $default_stats;
?>

<!-- wp:group {"tagName":"section","backgroundColor":"bg-soft","style":{"spacing":{"padding":{"top":"var:preset|spacing|16","bottom":"var:preset|spacing|16"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group has-bg-soft-background-color has-background">

  <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|8"}}}} -->
  <div class="wp-block-columns">

    <?php foreach ( $stats as $stat ) :
      $value = esc_html( $stat['value'] ?? '' );
      $label = esc_html( $stat['label'] ?? '' );
    ?>
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:heading {"textAlign":"center","level":3,"textColor":"primary","fontSize":"4xl","fontFamily":"heading"} -->
      <h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-heading-font-family has-4xl-font-size"><?php echo $value; ?></h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-muted"}},"fontSize":"sm"} -->
      <p class="has-text-align-center has-text-color has-sm-font-size" style="color:var(--wp--preset--color--text-muted)"><?php echo $label; ?></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
    <?php endforeach; ?>

  </div>
  <!-- /wp:columns -->

</section>
<!-- /wp:group -->
