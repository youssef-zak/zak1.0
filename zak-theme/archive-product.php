<?php
defined( 'ABSPATH' ) || exit;
get_header( 'shop' ); ?>
<main class="section">
  <div class="container" style="display:grid; grid-template-columns: 260px 1fr; gap:18px;">
    <aside class="filter-sidebar" data-filter-panel>
      <div class="card filter-card">
        <h4><?php esc_html_e( 'Filter', 'zak-1-0' ); ?></h4>
        <?php dynamic_sidebar( 'shop-filters' ); ?>
        <?php echo do_shortcode('[woof]'); ?>
        <div style="margin-top:12px;">
          <label><?php esc_html_e( 'Price', 'zak-1-0' ); ?></label>
          <input class="range" type="range" min="0" max="500" />
        </div>
      </div>
    </aside>
    <div>
      <div class="shop-toolbar">
        <div class="shop-filters">
          <button class="btn secondary" data-filter-toggle><?php esc_html_e( 'Filters', 'zak-1-0' ); ?></button>
          <div class="pill">Glass slider + tags</div>
        </div>
        <div style="display:flex; gap:10px; align-items:center;">
          <?php woocommerce_catalog_ordering(); ?>
          <select class="pill"><option>4 columns</option><option>3 columns</option></select>
        </div>
      </div>
      <?php woocommerce_product_loop_start(); ?>
        <?php if ( wc_get_loop_prop( 'total' ) ) : while ( have_posts() ) : the_post(); ?>
          <?php wc_get_template_part( 'template-parts/content', 'product-card', [ 'product' => wc_get_product() ] ); ?>
        <?php endwhile; endif; ?>
      <?php woocommerce_product_loop_end(); ?>
      <?php do_action( 'woocommerce_after_shop_loop' ); ?>
    </div>
  </div>
  <div class="filter-drawer" data-filter-drawer>
    <div class="filter-drawer__panel card">
      <div class="filter-drawer__header">
        <strong><?php esc_html_e( 'Refine products', 'zak-1-0' ); ?></strong>
        <button class="icon-button" data-filter-close>×</button>
      </div>
      <?php dynamic_sidebar( 'shop-filters' ); ?>
      <?php echo do_shortcode('[woof]'); ?>
    </div>
  </div>
</main>
<?php get_footer( 'shop' ); ?>
