<?php
/**
 * Asset enqueuing.
 *
 * @package JimsPaintingNightcliff
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Front-end styles & scripts.
 */
function jpn_enqueue_assets() {
    // Typography — Futura (primary) + Arial (secondary) per Jim's Style Guide.
    // Both are system/locally-installed fonts — no web font load required.
    // If a licensed Futura webfont is available, enqueue it here.

    // Theme stylesheet (brand design system)
    wp_enqueue_style( 'jpn-theme', JPN_URI . '/assets/css/theme.css', array(), JPN_VERSION );

    // Elementor bridge — utility classes that map to the design system
    if ( did_action( 'elementor/loaded' ) ) {
        wp_enqueue_style( 'jpn-elementor', JPN_URI . '/assets/css/elementor.css', array('jpn-theme'), JPN_VERSION );
    }

    // Theme JS
    wp_enqueue_script( 'jpn-theme', JPN_URI . '/assets/js/theme.js', array(), JPN_VERSION, true );

    // Localize for the form handler
    wp_localize_script( 'jpn-theme', 'JPN', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'jpn_lead_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'jpn_enqueue_assets' );

/**
 * Admin bar / preview styles so the page builder shows the right body font.
 */
function jpn_admin_inline_style() {
    echo '<style>:root{--jpn-admin-preview{}}</style>';
}

/**
 * Preconnect to Google Fonts for performance.
 */
function jpn_resource_hints( $hints, $relation ) {
    if ( $relation === 'preconnect' ) {
        $hints[] = array( 'href' => 'https://fonts.gstatic.com' );
        $hints[] = array( 'href' => 'https://fonts.googleapis.com', 'crossorigin' );
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'jpn_resource_hints', 10, 2 );

/**
 * Dequeue parent (Hello Elementor) stylesheet — we ship our own.
 */
function jpn_dequeue_parent_style() {
    wp_dequeue_style( 'hello-elementor' );
    wp_deregister_style( 'hello-elementor' );
}
add_action( 'wp_enqueue_scripts', 'jpn_dequeue_parent_style', 20 );
