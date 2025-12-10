<?php
/**
 * Zak 1.0 Theme functions.
 */

define( 'ZAK_VERSION', '1.0.1' );

require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/elementor.php';

action_hook_requirements();

function action_hook_requirements() {
    add_action( 'after_setup_theme', 'zak_setup' );
    add_action( 'wp_enqueue_scripts', 'zak_enqueue' );
    add_action( 'widgets_init', 'zak_widgets' );
    add_filter( 'woocommerce_output_related_products_args', 'zak_related_args' );
    add_filter( 'body_class', 'zak_body_classes' );
}

function zak_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-logo', [ 'height' => 80, 'flex-height' => true, 'flex-width' => true ] );
    add_theme_support( 'align-wide' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
    add_theme_support( 'woocommerce', [
        'thumbnail_image_width' => 420,
        'single_image_width'    => 720,
        'product_grid'          => [ 'default_rows' => 3, 'default_columns' => 3 ],
    ] );

    register_nav_menus( [
        'primary' => __( 'Primary Menu', 'zak-1-0' ),
        'footer'  => __( 'Footer Menu', 'zak-1-0' ),
    ] );
}

function zak_enqueue() {
    wp_enqueue_style( 'zak-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Tajawal:wght@400;500;700&display=swap', [], ZAK_VERSION );
    wp_enqueue_style( 'zak-style', get_stylesheet_uri(), [ 'zak-fonts' ], ZAK_VERSION );
    $custom_css = zak_generate_css_variables();
    if ( $custom_css ) {
        wp_add_inline_style( 'zak-style', $custom_css );
    }

    wp_enqueue_script( 'model-viewer', 'https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js', [], ZAK_VERSION, true );
    wp_enqueue_script( 'zak-main', get_template_directory_uri() . '/assets/js/main.js', [], ZAK_VERSION, true );
}

function zak_widgets() {
    register_sidebar( [
        'name'          => __( 'Footer Widgets', 'zak-1-0' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here.', 'zak-1-0' ),
        'before_widget' => '<div class="widget card">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="section-title"><span></span>',
        'after_title'   => '</h3>',
    ] );

    register_sidebar( [
        'name'          => __( 'Shop Filters', 'zak-1-0' ),
        'id'            => 'shop-filters',
        'description'   => __( 'Widgets in this area appear in the shop filter sidebar.', 'zak-1-0' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ] );
}

function zak_related_args( $args ) {
    $args['posts_per_page'] = 4;
    $args['columns']        = 4;
    return $args;
}

function zak_body_classes( $classes ) {
    if ( get_theme_mod( 'zak_sticky_add_to_cart', true ) ) {
        $classes[] = 'has-sticky-atc';
    }
    if ( get_theme_mod( 'zak_header_noise', true ) ) {
        $classes[] = 'has-noise';
    }
    if ( get_theme_mod( 'zak_glow_accents', true ) ) {
        $classes[] = 'has-glow';
    }
    return $classes;
}

/**
 * Quick helper to render icons.
 */
function zak_icon( $name, $classes = '' ) {
    $icons = [
        'search' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><line x1="16.65" y1="16.65" x2="22" y2="22"/></svg>',
        'bag'    => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M6 8h12l-1 12H7L6 8z"/><path d="M9 10a3 3 0 0 1 6 0"/></svg>',
        'user'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="7" r="4"/><path d="M5 21c1.5-4 12.5-4 14 0"/></svg>',
        'heart'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 21s-7-4.5-7-10a5 5 0 0 1 9-3 5 5 0 0 1 9 3c0 5.5-7 10-7 10z"/></svg>',
        'star'   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 3l2.9 6.6L22 10l-5 4.9 1.2 7.1L12 18l-6.2 4L7 14.9 2 10l7.1-0.4z"/></svg>',
        'arrow'  => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M5 12h14"/><path d="M13 5l7 7-7 7"/></svg>',
    ];
    if ( isset( $icons[ $name ] ) ) {
        echo '<span class="icon ' . esc_attr( $classes ) . '">' . $icons[ $name ] . '</span>';
    }
}

/**
 * Custom excerpt helper
 */
function zak_trim( $text, $limit = 16 ) {
    $words = wp_trim_words( wp_strip_all_tags( $text ), $limit, '…' );
    return $words;
}
