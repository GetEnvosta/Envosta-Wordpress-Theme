<?php
/**
 * Title: FAQ Section
 * Slug: envosta/faq
 * Categories: envosta-sections
 * Inserter: true
 */

$content = envosta_get_config( 'content' );
$section = $content['faq'] ?? [];

$headline = esc_html( $section['headline'] ?? 'Frequently Asked Questions' );

$default_items = [
    [ 'question' => 'Your first question goes here?',  'answer' => 'Your answer goes here. Be specific and helpful.' ],
    [ 'question' => 'Your second question goes here?', 'answer' => 'Your answer goes here.' ],
    [ 'question' => 'Your third question goes here?',  'answer' => 'Your answer goes here.' ],
];
$items = $section['items'] ?? $default_items;
?>

<!-- wp:group {"tagName":"section","backgroundColor":"bg-soft","style":{"spacing":{"padding":{"top":"var:preset|spacing|24","bottom":"var:preset|spacing|24"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group has-bg-soft-background-color has-background">

  <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
  <div class="wp-block-group">
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"600","letterSpacing":"0.08em","textTransform":"uppercase"},"color":{"text":"var:preset|color|cta"}},"fontSize":"sm"} -->
    <p class="has-text-align-center has-text-color has-sm-font-size" style="color:var(--wp--preset--color--cta);font-weight:600;letter-spacing:0.08em;text-transform:uppercase">Common Questions</p>
    <!-- /wp:paragraph -->
    <!-- wp:heading {"level":2,"textAlign":"center","fontSize":"4xl"} -->
    <h2 class="wp-block-heading has-text-align-center has-4xl-font-size"><?php echo $headline; ?></h2>
    <!-- /wp:heading -->
  </div>
  <!-- /wp:group -->

  <!-- wp:spacer {"height":"var:preset|spacing|12"} -->
  <div style="height:var(--wp--preset--spacing--12)" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:group {"layout":{"type":"constrained","contentSize":"760px"},"style":{"spacing":{"blockGap":"var:preset|spacing|4"}}} -->
  <div class="wp-block-group">

    <?php foreach ( $items as $item ) :
      $question = esc_html( $item['question'] ?? '' );
      $answer   = esc_html( $item['answer'] ?? '' );
    ?>
    <!-- wp:details {"style":{"border":{"radius":"16px","width":"1px","color":"var:preset|color|border"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|8","right":"var:preset|spacing|8"}}},"backgroundColor":"bg"} -->
    <details class="wp-block-details has-bg-background-color has-background" style="border:1px solid var(--wp--preset--color--border);border-radius:16px;padding:var(--wp--preset--spacing--6) var(--wp--preset--spacing--8)">
      <summary><strong><?php echo $question; ?></strong></summary>
      <!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|text-muted"}},"fontSize":"base"} -->
      <p class="has-text-color has-base-font-size" style="color:var(--wp--preset--color--text-muted)"><?php echo $answer; ?></p>
      <!-- /wp:paragraph -->
    </details>
    <!-- /wp:details -->
    <?php endforeach; ?>

  </div>
  <!-- /wp:group -->

</section>
<!-- /wp:group -->
