<?php defined( 'ABSPATH' ) || exit; ?>
<?php wc_print_notices(); ?>
<div class="section">
  <div class="container" style="display:grid; grid-template-columns: 2fr 1fr; gap:18px;">
    <div class="card" style="padding:16px;">
      <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
        <table class="shop_table shop_table_responsive cart table-style">
          <thead>
            <tr>
              <th><?php esc_html_e( 'Product', 'zak-1-0' ); ?></th>
              <th><?php esc_html_e( 'Price', 'zak-1-0' ); ?></th>
              <th><?php esc_html_e( 'Quantity', 'zak-1-0' ); ?></th>
              <th><?php esc_html_e( 'Subtotal', 'zak-1-0' ); ?></th>
            </tr>
          </thead>
          <tbody>
            <?php do_action( 'woocommerce_before_cart_contents' ); ?>
            <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
              $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
              if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) : ?>
              <tr class="woocommerce-cart-form__cart-item">
                <td data-title="Product">
                  <div style="display:flex; gap:10px; align-items:center;">
                    <?php echo $_product->get_image( 'thumbnail' ); ?>
                    <div>
                      <a href="<?php echo esc_url( $_product->get_permalink() ); ?>"><?php echo wp_kses_post( $_product->get_name() ); ?></a>
                      <?php echo wc_get_formatted_cart_item_data( $cart_item ); ?>
                      <?php echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf( '<a href="%s" class="pill">Remove</a>', esc_url( wc_get_cart_remove_url( $cart_item_key ) ) ), $cart_item_key ); ?>
                    </div>
                  </div>
                </td>
                <td data-title="Price"><?php echo WC()->cart->get_product_price( $_product ); ?></td>
                <td data-title="Quantity"><?php
                  echo woocommerce_quantity_input( [
                    'input_name'   => "cart[{$cart_item_key}][qty]",
                    'input_value'  => $cart_item['quantity'],
                    'max_value'    => $_product->get_max_purchase_quantity(),
                    'min_value'    => '0',
                  ], $_product, false );
                ?></td>
                <td data-title="Subtotal"><?php echo WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ); ?></td>
              </tr>
            <?php endif; endforeach; ?>
            <?php do_action( 'woocommerce_cart_contents' ); ?>
          </tbody>
        </table>
        <div style="display:flex; justify-content:space-between; align-items:center; margin-top:12px; gap:10px; flex-wrap:wrap;">
          <div>
            <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" style="padding:10px;border-radius:10px;border:1px solid var(--border);" />
            <button type="submit" class="btn secondary" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_html_e( 'Apply coupon', 'woocommerce' ); ?></button>
            <?php do_action( 'woocommerce_cart_coupon' ); ?>
          </div>
          <button type="submit" class="btn" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
          <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
        </div>
      </form>
    </div>
    <div class="order-summary">
      <h3><?php esc_html_e( 'Order Summary', 'zak-1-0' ); ?></h3>
      <?php do_action( 'woocommerce_cart_collaterals' ); ?>
      <a class="btn" href="<?php echo esc_url( wc_get_checkout_url() ); ?>"><?php esc_html_e( 'Proceed to Checkout', 'zak-1-0' ); ?></a>
    </div>
  </div>
</div>
