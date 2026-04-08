<?php
/**
 * Title: Footer
 * Slug: envosta/hidden-footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"footer","className":"is-style-section-3","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group is-style-section-3">

  <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
  <div class="wp-block-group">

    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
    <div class="wp-block-group">
      <!-- wp:site-title /-->
      <!-- wp:site-tagline {"fontSize":"small"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} /-->

  </div>
  <!-- /wp:group -->

  <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}}} -->
  <hr class="wp-block-separator has-alpha-channel-opacity"/>
  <!-- /wp:separator -->

  <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
  <div class="wp-block-group">
    <!-- wp:paragraph {"fontSize":"small"} -->
    <p class="has-small-font-size"><?php
      printf(
        /* translators: %s: current year */
        esc_html_x( '© %s Your Business. All rights reserved.', 'Footer copyright', 'envosta' ),
        esc_html( gmdate( 'Y' ) )
      );
    ?> <?php printf(
      /* translators: %s: Envosta link */
      esc_html_x( 'Built by %s.', 'Footer credit', 'envosta' ),
      '<a href="https://envosta.com">Envosta</a>'
    ); ?></p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

</footer>
<!-- /wp:group -->
