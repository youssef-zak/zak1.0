<?php
/** Checkout form */
defined( 'ABSPATH' ) || exit;
wc_print_notices();
?>
<div class="section checkout">
  <div class="container checkout-grid">
    <div class="card" style="padding:16px;">
      <?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>
      <div id="customer_details">
        <div class="col2-set" id="customer_details">
          <div class="col-1">
            <h3><?php esc_html_e( 'Billing details', 'zak-1-0' ); ?></h3>
            <?php do_action( 'woocommerce_checkout_billing' ); ?>
          </div>
          <div class="col-2">
            <h3><?php esc_html_e( 'Shipping details', 'zak-1-0' ); ?></h3>
            <?php do_action( 'woocommerce_checkout_shipping' ); ?>
          </div>
        </div>
      </div>
      <?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
    </div>
    <div class="order-summary">
      <h3><?php esc_html_e( 'Your order', 'zak-1-0' ); ?></h3>
      <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
      <div id="order_review" class="woocommerce-checkout-review-order">
        <?php do_action( 'woocommerce_checkout_order_review' ); ?>
      </div>
      <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
    </div>
  </div>
</div>
