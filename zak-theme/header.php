<!doctype html>
<html <?php language_attributes(); ?> data-theme="<?php echo esc_attr( get_theme_mod( 'zak_default_mode', 'light' ) ); ?>">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
  <div class="top-bar">
    <div class="container">
      <div class="top-bar__marquee">⚡ <?php echo esc_html( get_theme_mod( 'zak_top_bar_text', __( 'Express worldwide shipping + live tracking', 'zak-1-0' ) ) ); ?></div>
      <div class="top-bar__actions">
        <span class="pill">3D-ready</span>
        <span class="pill">Elementor friendly</span>
        <span class="pill">Ultra smooth</span>
      </div>
    </div>
  </div>
  <div class="container navbar">
    <div class="brand">
      <div class="logo"></div>
      <div>
        <h1>Zak 1.0</h1>
        <small><?php bloginfo( 'description' ); ?></small>
      </div>
    </div>
    <nav class="primary-menu" aria-label="Primary">
      <?php wp_nav_menu( [ 'theme_location' => 'primary', 'container' => false, 'fallback_cb' => false ] ); ?>
    </nav>
    <div class="header-actions">
      <form role="search" method="get" class="search-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><line x1="16.65" y1="16.65" x2="22" y2="22"/></svg>
        <input type="search" placeholder="Search products" value="<?php echo get_search_query(); ?>" name="s">
      </form>
      <button class="icon-button" data-toggle="theme" aria-label="Toggle theme">🌗</button>
      <a class="icon-button" href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" aria-label="Account"><?php zak_icon( 'user' ); ?></a>
      <a class="icon-button" href="#" aria-label="Wishlist"><?php zak_icon( 'heart' ); ?></a>
      <div class="icon-button cart" aria-label="Cart">
        <?php zak_icon( 'bag' ); ?>
        <span class="cart-count"><?php echo WC()->cart ? WC()->cart->get_cart_contents_count() : 0; ?></span>
        <div class="mini-cart">
          <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
        </div>
      </div>
      <button class="icon-button mobile-menu-btn" aria-label="Open menu">☰</button>
    </div>
  </div>
  <div class="offcanvas">
    <div class="panel">
      <?php wp_nav_menu( [ 'theme_location' => 'primary', 'container' => false, 'fallback_cb' => false ] ); ?>
    </div>
  </div>
</header>
