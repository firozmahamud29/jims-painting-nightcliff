<?php
/**
 * Footer template.
 *
 * Renders the brand footer + floating UI. Overridable by an Elementor
 * Pro custom Footer (Theme Builder → Footer).
 *
 * @package TerritoryProudPainters
 */

if ( ! defined( 'ABSPATH' ) ) exit;
$opt = tpp_get_option();
?>
</div><!-- #main -->

<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-col">
            <h4>Painting Options</h4>
            <ul class="seo-links">
                <li><a href="#packages">Interior Painting Darwin</a></li>
                <li><a href="#packages">Exterior House Painting Darwin</a></li>
                <li><a href="#packages">Roof Restoration Darwin</a></li>
                <li><a href="#packages">Commercial Painting Darwin</a></li>
                <li><a href="#packages">Strata Maintenance Darwin</a></li>
                <li><a href="#packages">Painting Prices Darwin</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Useful Links</h4>
            <ul>
                <li><a href="#quoteForm">Contact Us</a></li>
                <li><a href="#services">Why Choose Us</a></li>
                <li><a href="#packages">Our Packages</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
                <li><a href="<?php echo esc_url( home_url( '/terms-and-conditions/' ) ); ?>">Terms &amp; Conditions</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>Get In Touch</h4>
            <p class="footer-addr">📍 <?php echo esc_html( $opt['address'] ); ?></p>
            <p><a href="tel:<?php echo esc_attr( $opt['phone_raw'] ); ?>">📞 <?php echo esc_html( $opt['phone'] ); ?></a></p>
            <p><a href="mailto:<?php echo esc_attr( $opt['email'] ); ?>">✉️ <?php echo esc_html( $opt['email'] ); ?></a></p>
            <h4 class="follow-title">Follow Us</h4>
            <div class="social">
                <a href="<?php echo esc_url( $opt['instagram'] ); ?>" class="social-link" aria-label="Instagram">Instagram</a>
                <a href="<?php echo esc_url( $opt['facebook'] ); ?>" class="social-link" aria-label="Facebook">Facebook</a>
                <a href="<?php echo esc_url( $opt['whatsapp'] ); ?>" class="social-link" aria-label="WhatsApp">WhatsApp</a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?> · Darwin, NT · All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Floating mobile CTA -->
<div class="mobile-cta" id="mobileCta" aria-hidden="true">
    <a href="tel:<?php echo esc_attr( $opt['phone_raw'] ); ?>" class="call-icon" aria-label="Call us">
        <svg width="22" height="22" viewBox="0 0 22 22"><path d="M5 4h3l2 5-2 1c1 2 3 4 5 5l1-2 5 2v3c0 1-1 2-2 2-8 0-16-8-16-16 0-1 1-2 2-2z" fill="currentColor"/></svg>
    </a>
    <a href="#quoteForm" class="btn-primary">Get a Free Quote</a>
</div>

<!-- Scroll to top -->
<button class="scroll-top" id="toTop" aria-label="Scroll to top">
    <svg width="20" height="20" viewBox="0 0 20 20"><path d="M10 16V5M5 10l5-5 5 5" stroke="currentColor" stroke-width="2.5" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
</button>

<?php wp_footer(); ?>
</body>
</html>
