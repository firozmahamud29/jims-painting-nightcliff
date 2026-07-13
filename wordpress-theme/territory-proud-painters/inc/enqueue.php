<?php
/**
 * Asset enqueuing.
 *
 * @package TerritoryProudPainters
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Front-end styles & scripts.
 */
function tpp_enqueue_assets() {
    // Google Fonts (Fraunces + Manrope — "Territory Earth" type system)
    wp_enqueue_style(
        'tpp-fonts',
        'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,400;1,9..144,600;1,9..144,700&family=Manrope:wght@400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Theme stylesheet (brand design system)
    wp_enqueue_style( 'tpp-theme', TPP_URI . '/assets/css/theme.css', array('tpp-fonts'), TPP_VERSION );

    // Elementor bridge — utility classes that map to the design system
    if ( did_action( 'elementor/loaded' ) ) {
        wp_enqueue_style( 'tpp-elementor', TPP_URI . '/assets/css/elementor.css', array('tpp-theme'), TPP_VERSION );
    }

    // Theme JS
    wp_enqueue_script( 'tpp-theme', TPP_URI . '/assets/js/theme.js', array(), TPP_VERSION, true );

    // Localize for the form handler
    wp_localize_script( 'tpp-theme', 'TPP', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'tpp_lead_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'tpp_enqueue_assets' );

/**
 * Admin bar / preview styles so the page builder shows the right body font.
 */
function tpp_admin_inline_style() {
    echo '<style>:root{--tpp-admin-preview{}}</style>';
}

/**
 * Preconnect to Google Fonts for performance.
 */
function tpp_resource_hints( $hints, $relation ) {
    if ( $relation === 'preconnect' ) {
        $hints[] = array( 'href' => 'https://fonts.gstatic.com' );
        $hints[] = array( 'href' => 'https://fonts.googleapis.com', 'crossorigin' );
    }
    return $hints;
}
add_filter( 'wp_resource_hints', 'tpp_resource_hints', 10, 2 );

/**
 * Dequeue parent (Hello Elementor) stylesheet — we ship our own.
 */
function tpp_dequeue_parent_style() {
    wp_dequeue_style( 'hello-elementor' );
    wp_deregister_style( 'hello-elementor' );
}
add_action( 'wp_enqueue_scripts', 'tpp_dequeue_parent_style', 20 );
