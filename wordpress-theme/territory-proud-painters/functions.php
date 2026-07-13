<?php
/**
 * Territory Proud Painters — Child Theme Functions
 *
 * @package TerritoryProudPainters
 * @since   1.0.0
 *
 * Built as a child of "Hello Elementor". Works standalone for the
 * 2-step lead form + conversion components, and is fully editable
 * in Elementor Pro for visual section layout.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'TPP_VERSION', '1.0.0' );
define( 'TPP_DIR', get_stylesheet_directory() );
define( 'TPP_URI', get_stylesheet_directory_uri() );

require_once TPP_DIR . '/inc/setup.php';
require_once TPP_DIR . '/inc/enqueue.php';
require_once TPP_DIR . '/inc/form-handler.php';
require_once TPP_DIR . '/inc/shortcodes.php';
