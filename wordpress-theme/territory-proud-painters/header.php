<?php
/**
 * Header template.
 *
 * If Elementor Pro has a custom Header in Theme Builder, this file is
 * bypassed automatically via the theme location system. Otherwise this
 * default header renders.
 *
 * @package TerritoryProudPainters
 */

if ( ! defined( 'ABSPATH' ) ) exit;

$opt = tpp_get_option();
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

<a href="#main" class="skip-link screen-reader-text"><?php esc_html_e( 'Skip to content', 'territory-proud-painters' ); ?></a>

<header class="site-header" id="masthead">
    <div class="container header-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" aria-label="<?php bloginfo('name'); ?> home">
            <svg width="36" height="36" viewBox="0 0 36 36" aria-hidden="true">
                <rect width="36" height="36" rx="8" fill="#F26B1F"/>
                <path d="M9 24V13l9-4 9 4v11" stroke="#fff" stroke-width="2" fill="none" stroke-linejoin="round"/>
                <rect x="15" y="17" width="6" height="7" fill="#fff"/>
            </svg>
            <span class="logo-text">
                <strong><?php bloginfo( 'name' ); ?></strong>
                <small>DARWIN · NT</small>
            </span>
        </a>

        <nav class="nav" id="nav" aria-label="<?php esc_attr_e( 'Primary', 'territory-proud-painters' ); ?>">
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
            <a href="#quoteForm" class="nav-cta">Get a Free Quote</a>
        </nav>

        <button class="menu-toggle" id="menuToggle" aria-label="<?php esc_attr_e( 'Open menu', 'territory-proud-painters' ); ?>" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </div>
</header>

<div id="main">
