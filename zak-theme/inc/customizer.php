<?php
/**
 * Customizer controls for Zak 1.0.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'customize_register', 'zak_customize_register' );
function zak_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'zak_identity', [
        'title'    => __( 'Zak 1.0 Identity & 3D Hero', 'zak-1-0' ),
        'priority' => 30,
    ] );

    $wp_customize->add_setting( 'zak_accent', [ 'default' => '#5b63ff', 'transport' => 'postMessage' ] );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zak_accent', [
        'label'   => __( 'Accent Color', 'zak-1-0' ),
        'section' => 'zak_identity',
    ] ) );

    $wp_customize->add_setting( 'zak_gradient_start', [ 'default' => '#5b63ff', 'transport' => 'postMessage' ] );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zak_gradient_start', [
        'label'   => __( 'Gradient Start', 'zak-1-0' ),
        'section' => 'zak_identity',
    ] ) );

    $wp_customize->add_setting( 'zak_gradient_end', [ 'default' => '#a478ff', 'transport' => 'postMessage' ] );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'zak_gradient_end', [
        'label'   => __( 'Gradient End', 'zak-1-0' ),
        'section' => 'zak_identity',
    ] ) );

    $wp_customize->add_setting( 'zak_glass_blur', [ 'default' => 14, 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_glass_blur', [
        'label'       => __( 'Glass Blur (px)', 'zak-1-0' ),
        'type'        => 'range',
        'section'     => 'zak_identity',
        'input_attrs' => [ 'min' => 6, 'max' => 32, 'step' => 1 ],
    ] );

    $wp_customize->add_setting( 'zak_default_mode', [ 'default' => 'light', 'transport' => 'refresh' ] );
    $wp_customize->add_control( 'zak_default_mode', [
        'label'   => __( 'Default Mode', 'zak-1-0' ),
        'type'    => 'radio',
        'section' => 'zak_identity',
        'choices' => [ 'light' => __( 'Light', 'zak-1-0' ), 'dark' => __( 'Dark', 'zak-1-0' ) ],
    ] );

    $wp_customize->add_setting( 'zak_hero_title', [ 'default' => __( 'Cinematic shopping for visionary brands.', 'zak-1-0' ), 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_hero_title', [
        'label'   => __( 'Hero Title', 'zak-1-0' ),
        'type'    => 'text',
        'section' => 'zak_identity',
    ] );

    $wp_customize->add_setting( 'zak_hero_subtitle', [ 'default' => __( 'Immersive storytelling, glassmorphism, and buttery-smooth WooCommerce flows.', 'zak-1-0' ), 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_hero_subtitle', [
        'label'   => __( 'Hero Subtitle', 'zak-1-0' ),
        'type'    => 'textarea',
        'section' => 'zak_identity',
    ] );

    $wp_customize->add_setting( 'zak_hero_model', [ 'default' => 'https://modelviewer.dev/shared-assets/models/Astronaut.glb', 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_hero_model', [
        'label'   => __( 'Hero 3D Model URL (GLB)', 'zak-1-0' ),
        'type'    => 'url',
        'section' => 'zak_identity',
    ] );

    $wp_customize->add_setting( 'zak_hero_primary_label', [ 'default' => __( 'Shop Now', 'zak-1-0' ), 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_hero_primary_label', [
        'label'   => __( 'Primary CTA Label', 'zak-1-0' ),
        'type'    => 'text',
        'section' => 'zak_identity',
    ] );

    $wp_customize->add_setting( 'zak_hero_secondary_label', [ 'default' => __( 'View Collections', 'zak-1-0' ), 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_hero_secondary_label', [
        'label'   => __( 'Secondary CTA Label', 'zak-1-0' ),
        'type'    => 'text',
        'section' => 'zak_identity',
    ] );

    $wp_customize->add_setting( 'zak_top_bar_text', [ 'default' => __( 'Express worldwide shipping + live tracking', 'zak-1-0' ), 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_top_bar_text', [
        'label'   => __( 'Top Bar Message', 'zak-1-0' ),
        'type'    => 'text',
        'section' => 'zak_identity',
    ] );

    $wp_customize->add_section( 'zak_experiences', [
        'title'       => __( 'Zak 1.0 Experiences', 'zak-1-0' ),
        'priority'    => 31,
        'description' => __( 'Toggle immersive UX patterns and Elementor-friendly surfaces.', 'zak-1-0' ),
    ] );

    $toggles = [
        'zak_parallax'            => __( 'Enable parallax hero grid', 'zak-1-0' ),
        'zak_quick_view'          => __( 'Enable quick view modal', 'zak-1-0' ),
        'zak_sticky_add_to_cart'  => __( 'Sticky add to cart bar', 'zak-1-0' ),
        'zak_header_noise'        => __( 'Glass noise overlay', 'zak-1-0' ),
        'zak_glow_accents'        => __( 'Glowing accent strokes', 'zak-1-0' ),
        'zak_scroll_indicator'    => __( 'Show scroll indicator', 'zak-1-0' ),
        'zak_category_glider'     => __( 'Category hover glider', 'zak-1-0' ),
        'zak_lottie_support'      => __( 'Allow lottie / 3D embeds in sections', 'zak-1-0' ),
        'zak_minicart'            => __( 'Hover mini-cart drawer', 'zak-1-0' ),
        'zak_a11y_focus'          => __( 'Enhanced focus rings', 'zak-1-0' ),
    ];

    foreach ( $toggles as $key => $label ) {
        $wp_customize->add_setting( $key, [ 'default' => true, 'transport' => 'postMessage' ] );
        $wp_customize->add_control( $key, [
            'label'   => $label,
            'type'    => 'checkbox',
            'section' => 'zak_experiences',
        ] );
    }

    $wp_customize->add_setting( 'zak_story_cta', [ 'default' => __( 'Discover the Story', 'zak-1-0' ), 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_story_cta', [
        'label'   => __( 'Brand Story CTA', 'zak-1-0' ),
        'type'    => 'text',
        'section' => 'zak_experiences',
    ] );

    $wp_customize->add_setting( 'zak_newsletter_placeholder', [ 'default' => __( 'Your email', 'zak-1-0' ), 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_newsletter_placeholder', [
        'label'   => __( 'Newsletter Placeholder', 'zak-1-0' ),
        'type'    => 'text',
        'section' => 'zak_experiences',
    ] );

    $wp_customize->add_setting( 'zak_layout_radius', [ 'default' => 18, 'transport' => 'postMessage' ] );
    $wp_customize->add_control( 'zak_layout_radius', [
        'label'       => __( 'Card Radius (px)', 'zak-1-0' ),
        'type'        => 'range',
        'section'     => 'zak_experiences',
        'input_attrs' => [ 'min' => 10, 'max' => 32, 'step' => 1 ],
    ] );
}

function zak_generate_css_variables() {
    $accent      = get_theme_mod( 'zak_accent', '#5b63ff' );
    $grad_start  = get_theme_mod( 'zak_gradient_start', '#5b63ff' );
    $grad_end    = get_theme_mod( 'zak_gradient_end', '#a478ff' );
    $blur        = absint( get_theme_mod( 'zak_glass_blur', 14 ) );
    $radius      = absint( get_theme_mod( 'zak_layout_radius', 18 ) );
    $noise       = get_theme_mod( 'zak_header_noise', true ) ? 1 : 0;
    $glow        = get_theme_mod( 'zak_glow_accents', true ) ? 1 : 0;

    $css  = ':root{';
    $css .= '--accent:' . esc_attr( $accent ) . ';';
    $css .= '--gradient:' . esc_attr( $grad_start ) . ',' . esc_attr( $grad_end ) . ';';
    $css .= '--glass-blur:' . $blur . 'px;';
    $css .= '--radius:' . $radius . 'px;';
    $css .= '--noise-opacity:' . $noise . ';';
    $css .= '--glow-opacity:' . $glow . ';';
    $css .= '}' . "\n";

    return $css;
}
