<?php
/* Template Name: About Zak */
get_header(); ?>
<main class="section">
  <div class="container">
    <div class="story card">
      <div class="section-title" style="color:#fff;"><span></span>About Zak</div>
      <h2>Immersive commerce for a single signature brand.</h2>
      <p style="color:rgba(255,255,255,0.85); max-width:700px;">Zak 1.0 was crafted for founders who want cinematic motion, precise typography, and WooCommerce performance in one package. The theme is Arabic-ready, RTL-friendly, and ships with light/dark modes.</p>
      <div class="actions" style="margin-top:20px;"><a class="btn" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>">Shop the drop</a></div>
    </div>
    <div class="section" style="padding-bottom:0;">
      <div class="benefits-grid">
        <div class="card benefit-card"><h4>Design System</h4><p class="tagline">Glassmorphism, gradients, and micro-interactions ready to reuse.</p></div>
        <div class="card benefit-card"><h4>3D Hero</h4><p class="tagline">Model-viewer powered GLB showcase with parallax layers.</p></div>
        <div class="card benefit-card"><h4>Performance</h4><p class="tagline">Optimized CSS/JS footprint and lazy assets.</p></div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
