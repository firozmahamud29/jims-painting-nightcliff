<?php
/**
 * Front Page template.
 *
 * Smart fallback behaviour:
 *   1. If the front page was built with Elementor (has Elementor content),
 *      this template renders the Elementor canvas — full visual control.
 *   2. Otherwise, this template renders the pre-built landing page so the
 *      site looks perfect out of the box, before any Elementor work.
 *
 * To convert to Elementor: edit the front page, click "Edit with Elementor",
 * and this template will defer to your visual layout automatically.
 *
 * @package JimsPaintingNightcliff
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();

$front_page_id = get_option( 'page_on_front' );
$has_elementor = false;
if ( $front_page_id && did_action( 'elementor/loaded' ) && class_exists( '\Elementor\Plugin' ) ) {
    $has_elementor = \Elementor\Plugin::$instance->documents->get( $front_page_id )->is_built_with_elementor();
}

if ( $has_elementor ) :
    // Defer to the Elementor-built layout
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    // Render the pre-built landing page
    get_template_part( 'templates/landing-page' );
endif;

get_footer();
