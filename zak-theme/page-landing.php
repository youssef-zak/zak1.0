<?php
/* Template Name: Seasonal Landing */
get_header(); ?>
<main>
  <section class="hero" style="padding:100px 0 60px;">
    <div class="container hero-grid">
      <div>
        <div class="badge">Summer Sale</div>
        <h2>Up to 40% off limited 3D-crafted editions.</h2>
        <p>Glass cards, neon glow, and cinematic storytelling for your seasonal push.</p>
        <div class="hero-cta">
          <a class="btn" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Shop the Sale</a>
          <a class="btn secondary" href="#highlights">View Highlights</a>
        </div>
      </div>
      <div class="hero-visual">
        <div class="model-shell">
          <model-viewer src="https://modelviewer.dev/shared-assets/models/RobotExpressive.glb" auto-rotate camera-controls disable-zoom></model-viewer>
        </div>
      </div>
    </div>
  </section>
  <section id="highlights" class="section">
    <div class="container">
      <h3 class="section-title"><span></span>Sale Highlights</h3>
      <div class="product-grid">
        <?php
          $sale_products = wc_get_products( [ 'limit' => 8, 'status' => 'publish', 'on_sale' => true ] );
          foreach ( $sale_products as $product ) {
            wc_get_template_part( 'template-parts/content', 'product-card', [ 'product' => $product ] );
          }
        ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
