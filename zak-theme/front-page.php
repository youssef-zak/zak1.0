<?php get_header(); ?>
<main>
  <section class="hero">
    <div class="container hero-grid">
      <div data-parallax>
        <div class="badge">Zak 1.0 – 3D E-Commerce</div>
        <h2><?php echo esc_html( get_theme_mod( 'zak_hero_title', __( 'Cinematic shopping for visionary brands.', 'zak-1-0' ) ) ); ?></h2>
        <p><?php echo esc_html( get_theme_mod( 'zak_hero_subtitle', __( 'Immersive storytelling, glassmorphism, and buttery-smooth WooCommerce flows.', 'zak-1-0' ) ) ); ?></p>
        <div class="hero-cta">
          <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn"><?php echo esc_html( get_theme_mod( 'zak_hero_primary_label', __( 'Shop Now', 'zak-1-0' ) ) ); ?></a>
          <a href="#collections" class="btn secondary"><?php echo esc_html( get_theme_mod( 'zak_hero_secondary_label', __( 'View Collections', 'zak-1-0' ) ) ); ?></a>
        </div>
        <div style="margin-top:20px; display:flex; gap:12px; flex-wrap:wrap;">
          <span class="pill">Ultra-modern glassmorphism</span>
          <span class="pill">3D-ready hero</span>
          <span class="pill">Light + Dark</span>
        </div>
      </div>
      <div class="hero-visual" data-parallax>
        <div class="floating-card">Trending <strong>3D Studio</strong></div>
        <div class="model-shell">
          <model-viewer src="<?php echo esc_url( get_theme_mod( 'zak_hero_model', 'https://modelviewer.dev/shared-assets/models/Astronaut.glb' ) ); ?>" ar ar-modes="webxr" auto-rotate camera-controls disable-zoom></model-viewer>
        </div>
        <div class="parallax-grid"></div>
        <div class="drops"></div>
      </div>
    </div>
  </section>

  <section id="collections" class="section">
    <div class="container">
      <h3 class="section-title"><span></span>Featured Collections</h3>
      <div class="collections-grid">
        <?php $collection_data = [
          [ 'title' => 'New Arrivals', 'tag' => 'Fresh drops for the season', 'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?auto=format&fit=crop&w=900&q=80' ],
          [ 'title' => 'Best Sellers', 'tag' => 'Most loved by the community', 'image' => 'https://images.unsplash.com/photo-1542293787938-4d273c3cde3e?auto=format&fit=crop&w=900&q=80' ],
          [ 'title' => 'Accessories', 'tag' => 'Finish the story', 'image' => 'https://images.unsplash.com/photo-1489515217757-5fd1be406fef?auto=format&fit=crop&w=900&q=80' ],
          [ 'title' => 'Digital', 'tag' => 'Downloadable assets', 'image' => 'https://images.unsplash.com/photo-1545239351-1141bd82e8a6?auto=format&fit=crop&w=900&q=80' ],
        ];
        foreach ( $collection_data as $collection ) : ?>
          <article class="card collection-card">
            <img src="<?php echo esc_url( $collection['image'] ); ?>" alt="<?php echo esc_attr( $collection['title'] ); ?>">
            <div class="overlay"></div>
            <div class="content">
              <h4><?php echo esc_html( $collection['title'] ); ?></h4>
              <p><?php echo esc_html( $collection['tag'] ); ?></p>
              <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn secondary">Shop Collection</a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h3 class="section-title"><span></span>Best Sellers</h3>
      <div class="product-grid">
        <?php
          $products = wc_get_products( [ 'limit' => 6, 'status' => 'publish' ] );
          foreach ( $products as $product ) {
            wc_get_template_part( 'template-parts/content', 'product-card', [ 'product' => $product ] );
          }
        ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="category-strip">
        <?php
        $cats = get_terms( 'product_cat', [ 'number' => 8 ] );
        foreach ( $cats as $cat ) : ?>
          <a class="category-pill" href="<?php echo esc_url( get_term_link( $cat ) ); ?>">
            <div class="icon-button" aria-hidden="true">★</div>
            <span><?php echo esc_html( $cat->name ); ?></span>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container benefits-grid">
      <?php $benefits = [
        [ 'title' => 'Fast Shipping', 'text' => 'Express logistics with live tracking.' ],
        [ 'title' => 'Easy Returns', 'text' => '30-day hassle-free returns.' ],
        [ 'title' => 'Secure Payments', 'text' => 'Protected by industry-grade encryption.' ],
        [ 'title' => '24/7 Support', 'text' => 'Human help whenever you need it.' ],
      ];
      foreach ( $benefits as $item ) : ?>
        <div class="card benefit-card">
          <div class="icon-button" aria-hidden="true">◎</div>
          <h4><?php echo esc_html( $item['title'] ); ?></h4>
          <p class="tagline"><?php echo esc_html( $item['text'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="section">
    <div class="container story">
      <div class="section-title" style="color:#fff;"><span></span>Brand Story</div>
      <h3>Built for creators who want emotion in every scroll.</h3>
      <p style="color:rgba(255,255,255,0.8); max-width:640px;">Zak 1.0 blends 3D scenes, cinematic typography, and glassmorphism to present products like collectibles. Every block is crafted for single-brand storytelling.</p>
      <div class="actions"><a class="btn" href="#"><?php echo esc_html( get_theme_mod( 'zak_story_cta', __( 'Discover the Story', 'zak-1-0' ) ) ); ?></a></div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <h3 class="section-title"><span></span>Testimonials</h3>
      <div class="testimonial-grid">
        <?php $testimonials = [
          [ 'name' => 'Lina', 'role' => 'Art Director', 'text' => '“The cinematic hero and quick views lifted our conversion instantly.”' ],
          [ 'name' => 'Ahmed', 'role' => 'Founder', 'text' => '“Arabic-ready typography and dark mode look premium and effortless.”' ],
          [ 'name' => 'Noah', 'role' => 'Product Lead', 'text' => '“Cards feel alive with micro-interactions — exactly what we wanted.”' ],
        ];
        foreach ( $testimonials as $t ) : ?>
          <div class="card testimonial">
            <div class="profile">
              <div class="avatar"><?php echo substr( $t['name'], 0, 1 ); ?></div>
              <div>
                <strong><?php echo esc_html( $t['name'] ); ?></strong>
                <p class="tagline"><?php echo esc_html( $t['role'] ); ?></p>
              </div>
            </div>
            <p><?php echo esc_html( $t['text'] ); ?></p>
            <div class="rating-stars">★★★★★</div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container newsletter">
      <h3>Stay in the loop</h3>
      <p class="tagline">Join the drop list for first access to new renders and launches.</p>
      <form action="#" method="post">
        <input type="email" placeholder="<?php echo esc_attr( get_theme_mod( 'zak_newsletter_placeholder', __( 'Your email', 'zak-1-0' ) ) ); ?>">
        <button class="btn" type="submit">Subscribe</button>
      </form>
    </div>
  </section>
</main>
<div id="quick-view-modal" class="card" style="position:fixed; inset:0; margin:auto; width: min(720px,92vw); height: fit-content; display:none;" aria-modal="true" role="dialog">
  <div style="display:flex; justify-content:space-between; align-items:center; padding:16px; border-bottom:1px solid var(--border);">
    <h4 class="qv-title">Product</h4>
    <button id="quick-view-close" class="icon-button">×</button>
  </div>
  <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(260px,1fr)); gap:16px; padding:16px; align-items:center;">
    <img class="qv-image" src="" alt="" style="border-radius:14px; width:100%;">
    <div>
      <div class="qv-price price"></div>
      <p class="tagline">Glass morphic quick preview with size and color selections.</p>
      <a href="<?php echo esc_url( wc_get_page_permalink( 'cart' ) ); ?>" class="btn">Add to Cart</a>
    </div>
  </div>
</div>
<script>
  document.getElementById('quick-view-modal').classList.remove('open');
</script>
<?php get_footer(); ?>
