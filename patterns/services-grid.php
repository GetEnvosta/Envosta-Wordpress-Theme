<?php
/**
 * Title: Services Grid
 * Slug: envosta/services-grid
 * Categories: envosta-sections
 * Inserter: true
 */

$content  = envosta_get_config( 'content' );
$section  = $content['services-grid'] ?? [];

$headline    = esc_html( $section['headline'] ?? 'Our Services' );
$description = esc_html( $section['description'] ?? 'A brief intro to your services goes here.' );

$default_services = [
    [ 'icon' => '🎯', 'name' => 'Service One',   'description' => 'Description of this service and why it matters to your customers.' ],
    [ 'icon' => '⚡', 'name' => 'Service Two',   'description' => 'Description of this service and why it matters to your customers.' ],
    [ 'icon' => '🔧', 'name' => 'Service Three', 'description' => 'Description of this service and why it matters to your customers.' ],
];
$services = $section['services'] ?? $default_services;
?>

<!-- wp:group {"tagName":"section","backgroundColor":"bg","style":{"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group has-bg-background-color has-background">

  <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
  <div class="wp-block-group">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|cta"}},"fontSize":"sm"} -->
    <p class="has-text-align-center has-text-color has-sm-font-size" style="color:var(--wp--preset--color--cta);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">What We Do</p>
    <!-- /wp:paragraph -->
    <!-- wp:heading {"level":2,"textAlign":"center","fontSize":"4xl"} -->
    <h2 class="wp-block-heading has-text-align-center has-4xl-font-size"><?php echo $headline; ?></h2>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"align":"center","style":{"color":{"text":"var:preset|color|text-muted"}},"fontSize":"lg"} -->
    <p class="has-text-align-center has-text-color has-lg-font-size" style="color:var(--wp--preset--color--text-muted)"><?php echo $description; ?></p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

  <!-- wp:spacer {"height":"var:preset|spacing|12"} -->
  <div style="height:var(--wp--preset--spacing--12)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|6","top":"var:preset|spacing|6"}}}} -->
  <div class="wp-block-columns">

    <?php foreach ( $services as $service ) :
      $s_icon = esc_html( $service['icon'] ?? '⭐' );
      $s_name = esc_html( $service['name'] ?? 'Service' );
      $s_desc = esc_html( $service['description'] ?? '' );
    ?>
    <!-- wp:column -->
    <div class="wp-block-column">
      <!-- wp:group {"style":{"border":{"radius":"16px","width":"1px","color":"var:preset|color|border"},"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}}},"backgroundColor":"bg","layout":{"type":"flex","orientation":"vertical"}} -->
      <div class="wp-block-group has-bg-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:16px;padding:var(--wp--preset--spacing--8)">
        <!-- wp:paragraph {"fontSize":"3xl"} --><p class="has-3xl-font-size"><?php echo $s_icon; ?></p><!-- /wp:paragraph -->
        <!-- wp:heading {"level":3,"fontSize":"2xl"} --><h3 class="wp-block-heading has-2xl-font-size"><?php echo $s_name; ?></h3><!-- /wp:heading -->
        <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-muted"}}} --><p class="has-text-color" style="color:var(--wp--preset--color--text-muted)"><?php echo $s_desc; ?></p><!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:column -->
    <?php endforeach; ?>

  </div>
  <!-- /wp:columns -->

</section>
<!-- /wp:group -->
