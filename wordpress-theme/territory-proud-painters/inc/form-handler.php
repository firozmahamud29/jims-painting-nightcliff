<?php
/**
 * Lead form handler — receives admin-ajax POSTs from the 2-step form.
 *
 * Stores the lead as a custom post type AND emails the recipient.
 *
 * @package TerritoryProudPainters
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register the "Lead" custom post type.
 */
function tpp_register_lead_cpt() {
    register_post_type( 'tpp_lead', array(
        'labels' => array(
            'name'          => __( 'Leads', 'territory-proud-painters' ),
            'singular_name' => __( 'Lead', 'territory-proud-painters' ),
            'menu_name'     => __( 'Quote Leads', 'territory-proud-painters' ),
            'not_found'     => __( 'No leads yet.', 'territory-proud-painters' ),
        ),
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-email-alt',
        'supports'     => array( 'title','editor','custom-fields' ),
        'capability_type' => 'post',
        'has_archive'  => false,
    ) );
}
add_action( 'init', 'tpp_register_lead_cpt' );

/**
 * Admin columns for the Lead CPT (so the sales team can scan leads fast).
 */
function tpp_lead_columns( $columns ) {
    return array(
        'cb'            => $columns['cb'],
        'title'         => __( 'Name', 'territory-proud-painters' ),
        'phone'         => __( 'Phone', 'territory-proud-painters' ),
        'email'         => __( 'Email', 'territory-proud-painters' ),
        'painting_type' => __( 'Type', 'territory-proud-painters' ),
        'suburb'        => __( 'Suburb', 'territory-proud-painters' ),
        'date'          => __( 'Received', 'territory-proud-painters' ),
    );
}
add_filter( 'manage_tpp_lead_posts_columns', 'tpp_lead_columns' );

function tpp_lead_column_content( $column, $post_id ) {
    switch ( $column ) {
        case 'phone':         echo esc_html( get_post_meta( $post_id, '_tpp_phone', true ) ); break;
        case 'email':         $e = get_post_meta( $post_id, '_tpp_email', true ); echo '<a href="mailto:' . esc_attr($e) . '">' . esc_html($e) . '</a>'; break;
        case 'painting_type': echo esc_html( get_post_meta( $post_id, '_tpp_painting_type', true ) ); break;
        case 'suburb':        echo esc_html( get_post_meta( $post_id, '_tpp_suburb', true ) ); break;
    }
}
add_action( 'manage_tpp_lead_posts_custom_column', 'tpp_lead_column_content', 10, 2 );

/**
 * AJAX handler — receives the lead, stores + emails.
 * Hooked to both logged-in and guest actions.
 */
function tpp_submit_lead() {
    check_ajax_referer( 'tpp_lead_nonce', 'nonce' );

    $payload = isset( $_POST['payload'] ) ? json_decode( wp_unslash( $_POST['payload'] ), true ) : array();
    if ( empty( $payload ) ) wp_send_json_error( array( 'message' => 'No data received.' ), 400 );

    // Sanitise
    $data = array(
        'name'          => sanitize_text_field( $payload['name'] ?? '' ),
        'phone'         => sanitize_text_field( $payload['phone'] ?? '' ),
        'email'         => sanitize_email( $payload['email'] ?? '' ),
        'address'       => sanitize_text_field( $payload['address'] ?? '' ),
        'painting_type' => sanitize_text_field( $payload['painting_type'] ?? '' ),
        'property_type' => sanitize_text_field( $payload['property_type'] ?? '' ),
        'suburb'        => sanitize_text_field( $payload['suburb'] ?? '' ),
        'start_date'    => sanitize_text_field( $payload['start_date'] ?? '' ),
        'rooms'         => sanitize_text_field( $payload['rooms'] ?? '' ),
    );

    // Basic validation
    if ( empty( $data['name'] ) || empty( $data['phone'] ) || empty( $data['email'] ) ) {
        wp_send_json_error( array( 'message' => 'Required fields missing.' ), 422 );
    }

    // Store as a Lead post
    $post_id = wp_insert_post( array(
        'post_type'   => 'tpp_lead',
        'post_title'  => $data['name'],
        'post_status' => 'publish',
        'post_content' => tpp_format_lead_body( $data ),
    ) );

    if ( $post_id && ! is_wp_error( $post_id ) ) {
        foreach ( $data as $k => $v ) {
            update_post_meta( $post_id, '_tpp_' . $k, $v );
        }
    }

    // Email the recipient
    $recipient = tpp_get_option( 'lead_email' );
    $subject   = sprintf( 'New Quote Request — %s — %s', $data['painting_type'], $data['suburb'] );
    $body      = tpp_format_lead_body( $data );
    $headers   = array( 'Content-Type: text/plain; charset=UTF-8' );

    // Reply-To the lead so the sales team can hit "reply"
    if ( $data['email'] ) $headers[] = 'Reply-To: ' . $data['name'] . ' <' . $data['email'] . '>';

    wp_mail( $recipient, $subject, $body, $headers );

    wp_send_json_success( array( 'message' => 'Lead received.' ) );
}
add_action( 'wp_ajax_tpp_submit_lead', 'tpp_submit_lead' );
add_action( 'wp_ajax_nopriv_tpp_submit_lead', 'tpp_submit_lead' );

/**
 * Build a readable plain-text body for the lead.
 */
function tpp_format_lead_body( $data ) {
    return "New quote request from the Territory Proud Painters website:\n\n"
         . "Painting Type: {$data['painting_type']}\n"
         . "Property Type: {$data['property_type']}\n"
         . "Suburb: {$data['suburb']}\n"
         . "Preferred Start: {$data['start_date']}\n"
         . "Rooms / Size: {$data['rooms']}\n\n"
         . "Name: {$data['name']}\n"
         . "Phone: {$data['phone']}\n"
         . "Email: {$data['email']}\n"
         . "Address: {$data['address']}\n\n"
         . "Submitted: " . current_time( 'mysql' );
}

/**
 * Make the Lead CPT list sortable by date desc by default.
 */
function tpp_lead_default_sort( $query ) {
    if ( is_admin() && $query->get('post_type') === 'tpp_lead' && $query->get('orderby') === '' ) {
        $query->set( 'orderby', 'date' );
        $query->set( 'order', 'DESC' );
    }
}
add_action( 'pre_get_posts', 'tpp_lead_default_sort' );
