<?php
/**
 * Elementor compatibility layer.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'after_setup_theme', 'zak_elementor_support' );
function zak_elementor_support() {
    add_theme_support( 'elementor-location-header' );
    add_theme_support( 'elementor-location-footer' );
    add_theme_support( 'elementor-pro-theme-builder' );
}

add_action( 'elementor/frontend/after_enqueue_styles', function() {
    wp_enqueue_style( 'zak-style-elementor', get_template_directory_uri() . '/style.css', [], ZAK_VERSION );
} );

add_action( 'elementor/frontend/after_register_styles', function() {
    wp_register_style( 'zak-elementor-surfaces', false );
    wp_enqueue_style( 'zak-elementor-surfaces' );
    $css = '.elementor-section, .elementor-widget-container{background:var(--card);border:1px solid var(--border);border-radius:var(--radius);backdrop-filter:blur(var(--glass-blur));padding:24px;}';
    wp_add_inline_style( 'zak-elementor-surfaces', $css );
} );
