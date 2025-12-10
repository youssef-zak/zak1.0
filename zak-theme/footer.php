<footer class="site-footer">
  <div class="container footer-grid">
    <div>
      <div class="brand">
        <div class="logo"></div>
        <div>
          <h3>Zak 1.0</h3>
          <p class="tagline">3D E-Commerce WooCommerce Theme</p>
        </div>
      </div>
      <div class="social" style="margin-top:12px; display:flex; gap:10px;">
        <a class="icon-button" href="#" aria-label="Instagram">IG</a>
        <a class="icon-button" href="#" aria-label="Twitter">TW</a>
        <a class="icon-button" href="#" aria-label="Behance">BE</a>
      </div>
    </div>
    <div>
      <h4 class="section-title"><span></span>Explore</h4>
      <?php wp_nav_menu( [ 'theme_location' => 'footer', 'container' => false, 'fallback_cb' => false ] ); ?>
    </div>
    <div>
      <h4 class="section-title"><span></span>Support</h4>
      <ul style="list-style:none; display:grid; gap:8px;">
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Shipping</a></li>
        <li><a href="#">Returns</a></li>
        <li><a href="#">Policies</a></li>
      </ul>
    </div>
    <div>
      <h4 class="section-title"><span></span>Newsletter</h4>
      <p class="tagline">Join for drops, design stories, and secret sales.</p>
      <form class="newsletter-form" action="#" method="post" style="display:grid;gap:10px;margin-top:10px;">
        <input type="email" placeholder="Email address" style="padding:12px;border-radius:12px;border:1px solid var(--border); background:var(--card);">
        <button class="btn" type="submit">Subscribe</button>
      </form>
    </div>
  </div>
  <div class="container footer-bottom">
    <div>© <?php echo date('Y'); ?> Zak 1.0. Crafted for cinematic commerce.</div>
    <div style="display:flex; gap:10px; align-items:center;">
      <span class="pill">Visa</span>
      <span class="pill">Mastercard</span>
      <span class="pill">Apple Pay</span>
      <span class="pill">PayPal</span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
