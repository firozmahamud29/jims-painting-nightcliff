<?php
/**
 * Jim's Painting Nightcliff — Child Theme Functions
 *
 * @package JimsPaintingNightcliff
 * @since   1.0.0
 *
 * Built as a child of "Hello Elementor". Works standalone for the
 * 2-step lead form + conversion components, and is fully editable
 * in Elementor Pro for visual section layout. Jim's Group franchisee.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

define( 'JPN_VERSION', '1.0.0' );
define( 'JPN_DIR', get_stylesheet_directory() );
define( 'JPN_URI', get_stylesheet_directory_uri() );

require_once JPN_DIR . '/inc/setup.php';
require_once JPN_DIR . '/inc/enqueue.php';
require_once JPN_DIR . '/inc/form-handler.php';
require_once JPN_DIR . '/inc/shortcodes.php';
