<?php
defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
?>
<main class="section">
  <div class="container product-hero">
    <div class="gallery">
      <?php
      do_action( 'woocommerce_before_single_product_summary' );
      ?>
      <div class="thumb-row">
        <?php
        global $product;
        $attachment_ids = $product->get_gallery_image_ids();
        foreach ( $attachment_ids as $attachment_id ) {
          echo wp_get_attachment_image( $attachment_id, 'thumbnail' );
        }
        ?>
      </div>
    </div>
    <div class="product-meta">
      <?php do_action( 'woocommerce_single_product_summary' ); ?>
      <div class="trust-badges">
        <div class="pill">Secure checkout</div>
        <div class="pill">30-day returns</div>
        <div class="pill">24/7 support</div>
        <div class="pill">Fast shipping</div>
      </div>
    </div>
  </div>
  <div class="container tabs" style="margin-top:30px;">
    <?php do_action( 'woocommerce_after_single_product_summary' ); ?>
  </div>
  <div class="container related-slider">
    <?php woocommerce_output_related_products(); ?>
  </div>
  <?php if ( get_theme_mod( 'zak_sticky_add_to_cart', true ) ) : ?>
    <div class="sticky-atc">
      <div class="sticky-atc__meta">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        <div>
          <strong><?php the_title(); ?></strong>
          <?php woocommerce_template_single_price(); ?>
        </div>
      </div>
      <div class="sticky-atc__actions">
        <?php woocommerce_template_single_add_to_cart(); ?>
      </div>
    </div>
  <?php endif; ?>
</main>
<?php get_footer( 'shop' ); ?>
