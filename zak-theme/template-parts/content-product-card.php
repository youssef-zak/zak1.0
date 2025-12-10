<?php
/**
 * Product card component.
 */
$product = $args['product'] ?? wc_get_product();
if ( ! $product ) { return; }
?>
<article class="card product-card">
  <div class="image-wrap">
    <a href="<?php echo esc_url( $product->get_permalink() ); ?>">
      <?php echo $product->get_image( 'woocommerce_thumbnail' ); ?>
    </a>
    <div class="floating-actions">
      <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="icon-button" aria-label="Add to cart">+</a>
      <a href="#" data-quick-view data-title="<?php echo esc_attr( $product->get_name() ); ?>" data-price="<?php echo wp_kses_post( $product->get_price_html() ); ?>" data-image="<?php echo esc_url( wp_get_attachment_image_url( $product->get_image_id(), 'medium' ) ); ?>" class="icon-button" aria-label="Quick view">👁</a>
    </div>
  </div>
  <div style="display:grid; gap:6px;">
    <h4><a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo esc_html( $product->get_name() ); ?></a></h4>
    <div class="price"><?php echo wp_kses_post( $product->get_price_html() ); ?></div>
    <div class="rating-stars">★★★★★</div>
    <a class="btn" href="<?php echo esc_url( $product->add_to_cart_url() ); ?>">Add to Cart</a>
  </div>
</article>
