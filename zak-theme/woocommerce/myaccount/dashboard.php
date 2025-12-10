<?php defined( 'ABSPATH' ) || exit; ?>
<div class="account-grid section">
  <?php wc_get_template( 'myaccount/navigation.php' ); ?>
  <div>
    <div class="card" style="padding:16px; margin-bottom:14px;">
      <h3><?php printf( __( 'Hi %s, welcome back.', 'zak-1-0' ), esc_html( wp_get_current_user()->display_name ) ); ?></h3>
      <p class="tagline"><?php esc_html_e( 'Manage your orders, addresses, downloads and account settings in one place.', 'zak-1-0' ); ?></p>
    </div>
    <div class="dashboard-cards">
      <div class="card" style="padding:14px;">
        <h4><?php esc_html_e( 'Orders', 'zak-1-0' ); ?></h4>
        <p class="tagline"><?php esc_html_e( 'Track, reorder, and manage your purchases.', 'zak-1-0' ); ?></p>
        <a class="btn secondary" href="<?php echo esc_url( wc_get_account_endpoint_url( 'orders' ) ); ?>"><?php esc_html_e( 'View orders', 'zak-1-0' ); ?></a>
      </div>
      <div class="card" style="padding:14px;">
        <h4><?php esc_html_e( 'Addresses', 'zak-1-0' ); ?></h4>
        <p class="tagline"><?php esc_html_e( 'Shipping and billing details.', 'zak-1-0' ); ?></p>
        <a class="btn secondary" href="<?php echo esc_url( wc_get_account_endpoint_url( 'edit-address' ) ); ?>"><?php esc_html_e( 'Manage addresses', 'zak-1-0' ); ?></a>
      </div>
      <div class="card" style="padding:14px;">
        <h4><?php esc_html_e( 'Account details', 'zak-1-0' ); ?></h4>
        <p class="tagline"><?php esc_html_e( 'Login, password, and profile.', 'zak-1-0' ); ?></p>
        <a class="btn secondary" href="<?php echo esc_url( wc_get_account_endpoint_url( 'edit-account' ) ); ?>"><?php esc_html_e( 'Update profile', 'zak-1-0' ); ?></a>
      </div>
    </div>
  </div>
</div>
