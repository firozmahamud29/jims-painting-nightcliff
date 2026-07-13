<?php
/**
 * Theme setup: theme supports, image sizes, menus, ACF options page.
 *
 * @package TerritoryProudPainters
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Core theme supports.
 */
function tpp_setup() {
    // Native WP features
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array( 'search-form','comment-form','comment-list','gallery','caption','style','script' ) );

    // Menus used by the header nav
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'territory-proud-painters' ),
        'footer'  => __( 'Footer Menu', 'territory-proud-painters' ),
    ) );

    // Custom image sizes for gallery (4:3) and packages (16:9)
    add_image_size( 'tpp-gallery', 600, 450, true );
    add_image_size( 'tpp-package', 800, 450, true );
}
add_action( 'after_setup_theme', 'tpp_setup' );

/**
 * Default brand options (stored in a single option for simplicity).
 * Override these values on the Customizer or via an ACF options page.
 */
function tpp_get_option( $key = '', $default = '' ) {
    $defaults = array(
        'phone'        => '(08) 8900 0000',
        'phone_raw'    => '+61889000000',
        'email'        => 'quotes@territoryproudpainters.com.au',
        'address'      => 'Darwin, NT 0800',
        'instagram'    => '#',
        'facebook'     => '#',
        'whatsapp'     => '#',
        'lead_email'   => 'quotes@territoryproudpainters.com.au',
    );
    $options = get_option( 'tpp_options', array() );
    $options = wp_parse_args( $options, $defaults );
    if ( $key ) return isset( $options[ $key ] ) ? $options[ $key ] : $default;
    return $options;
}

/**
 * Add a simple Customizer panel for the contact details so the client
 * can edit phone/email/social without touching Elementor or code.
 */
function tpp_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'tpp_contact', array(
        'title'    => __( 'TPP — Contact Details', 'territory-proud-painters' ),
        'priority' => 30,
    ) );
    $fields = array(
        'phone'      => 'Phone (display)',
        'phone_raw'  => 'Phone (tel: link)',
        'email'      => 'Email',
        'address'    => 'Address',
        'instagram'  => 'Instagram URL',
        'facebook'   => 'Facebook URL',
        'whatsapp'   => 'WhatsApp URL',
        'lead_email' => 'Lead Form Recipient Email',
    );
    foreach ( $fields as $key => $label ) {
        $wp_customize->add_setting( "tpp_options[{$key}]", array(
            'type'              => 'option',
            'sanitize_callback' => 'sanitize_text_field',
            'default'           => '',
        ) );
        $wp_customize->add_control( "tpp_options[{$key}]", array(
            'label'   => $label,
            'section' => 'tpp_contact',
            'type'    => 'text',
        ) );
    }
}
add_action( 'customize_register', 'tpp_customize_register' );

/**
 * Elementor Pro Theme Locations — register a custom header & footer
 * location so the user can edit them visually in Elementor Pro
 * (Templates → Theme Builder → Header / Footer).
 */
function tpp_register_elementor_locations( $elementor_theme_manager ) {
    if ( ! did_action( 'elementor/loaded' ) ) return;
    $elementor_theme_manager->register_location( 'header' );
    $elementor_theme_manager->register_location( 'footer' );
}
add_action( 'elementor/theme/register_locations', 'tpp_register_elementor_locations' );
