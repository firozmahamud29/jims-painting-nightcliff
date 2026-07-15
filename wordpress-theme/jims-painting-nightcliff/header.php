<?php
/**
 * Header template.
 *
 * If Elementor Pro has a custom Header in Theme Builder, this file is
 * bypassed automatically via the theme location system. Otherwise this
 * default header renders.
 *
 * @package JimsPaintingNightcliff
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$opt = jpn_get_option();
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#main" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to content', 'jims-painting-nightcliff' ); ?></a>

<header class="site-header" id="masthead">
    <div class="container header-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="<?php bloginfo('name'); ?> home">
            <img src="<?php echo esc_url( JPN_URI . '/assets/img/jims-painting-logo.png' ); ?>" alt="Jim's Painting" class="logo-img" width="140" height="95">
            <span class="logo-text">
                <strong><?php bloginfo( 'name' ); ?></strong>
                <small>NIGHTCLIFF · DARWIN NT</small>
            </span>
        </a>

        <nav class="nav" id="nav" aria-label="<?php esc_attr_e( 'Primary', 'jims-painting-nightcliff' ); ?>">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ) );
            } else {
                // Sensible default anchors until a menu is created
                ?>
                <a href="#services">Services</a>
                <a href="#packages">Packages</a>
                <a href="#gallery">Our Work</a>
                <a href="#testimonials">Reviews</a>
                <a href="#faq">FAQ</a>
                <?php
            }
            ?>
            <a href="#quoteForm" class="nav-cta">Request a Free Quote</a>
        </nav>

        <button class="menu-toggle" id="menuToggle" aria-label="<?php esc_attr_e( 'Open menu', 'jims-painting-nightcliff' ); ?>" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<div id="main">
