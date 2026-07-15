<?php
/**
 * Shortcode: [jpn_quote_form]
 * Renders the 2-step lead form (Jim's Brand System design).
 *
 * @package JimsPaintingNightcliff
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function jpn_quote_form_shortcode( $atts = array() ) {
    $atts = shortcode_atts( array(
        'title' => 'Get a Free Quote',
    ), $atts, 'jpn_quote_form' );

    ob_start();
    ?>
    <div class="quote-card" id="quote-form-card">
        <div class="qc-head">
            <h2><?php echo esc_html( $atts['title'] ); ?></h2>
            <div class="step-pill">Step 1 of 2</div>
        </div>

        <form id="leadForm" method="post" novalidate>
            <!-- STEP 1 -->
            <div class="fstep active" data-step="1">
                <p class="ftrust">Free quotes · No obligation · We reply within one business day</p>
                <label class="lbl">Painting Type <span class="req">*</span></label>
                <div class="chips" role="radiogroup" aria-label="Painting type">
                    <input type="radio" name="painting_type" id="t-int" value="Interior" checked><label for="t-int">Interior</label>
                    <input type="radio" name="painting_type" id="t-ext" value="Exterior"><label for="t-ext">Exterior</label>
                    <input type="radio" name="painting_type" id="t-roof" value="Roof"><label for="t-roof">Roof</label>
                    <input type="radio" name="painting_type" id="t-com" value="Commercial"><label for="t-com">Commercial</label>
                    <input type="radio" name="painting_type" id="t-fence" value="Fence & Deck"><label for="t-fence">Fence &amp; Deck</label>
                </div>
                <div class="grid-2">
                    <div><label class="lbl" for="ptype">Property Type <span class="req">*</span></label><select id="ptype" name="property_type" required>
                        <option value="House" selected>House</option><option value="Unit">Unit</option><option value="Office">Office</option><option value="Shop">Shop</option><option value="Strata">Strata</option>
                    </select></div>
                    <div><label class="lbl" for="suburb">Suburb <span class="req">*</span></label><input type="text" id="suburb" name="suburb" placeholder="Nightcliff" required></div>
                </div>
                <div class="grid-2">
                    <div><label class="lbl" for="sdate">Preferred Start Date <span class="req">*</span></label><input type="date" id="sdate" name="start_date" required></div>
                    <div><label class="lbl" for="rooms">Number of Rooms / Approx. Size</label><input type="text" id="rooms" name="rooms" placeholder="e.g. 3 rooms"></div>
                </div>
                <button type="button" class="btn btn-primary btn-block" id="nextBtn">Next <span>&#8594;</span></button>
                <p class="prefer-call">Prefer to call? <a href="tel:+61400000000">0400 000 000</a> · Jim's <a href="tel:131546">131 546</a></p>
            </div>

            <!-- STEP 2 -->
            <div class="fstep" data-step="2">
                <p class="fstep-title">Where do we send your quote?</p>
                <div class="grid-2">
                    <div><label class="lbl" for="name">Name <span class="req">*</span></label><input type="text" id="name" name="name" placeholder="Your name" required></div>
                    <div><label class="lbl" for="phone">Phone <span class="req">*</span></label><input type="tel" id="phone" name="phone" placeholder="04xx xxx xxx" required></div>
                </div>
                <label class="lbl" for="email">Email <span class="req">*</span></label>
                <input type="email" id="email" name="email" placeholder="you@email.com" required>
                <label class="lbl" for="address">Address <span class="req">*</span></label>
                <input type="text" id="address" name="address" placeholder="Street, suburb, postcode" required>
                <?php wp_nonce_field( 'jpn_lead_nonce', 'jpn_nonce_field' ); ?>
                <div class="factions">
                    <button type="button" class="btn-back" id="backBtn"><span>&#8592;</span> Back</button>
                    <button type="submit" class="btn btn-primary">Get my free quote</button>
                </div>
                <p class="guarantee-line">🔒 No obligation. No pressure. Backed by Jim's Work Guarantee.</p>
            </div>

            <!-- SUCCESS -->
            <div class="fsuccess" aria-live="polite">
                <svg width="52" height="52" viewBox="0 0 52 52" aria-hidden="true"><circle cx="26" cy="26" r="24" stroke="#e1261c" stroke-width="2" fill="#f5f6f8"/><path d="M16 27l7 7 14-14" stroke="#e1261c" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <h3>Quote received — we're on it.</h3>
                <p>Reply within one business day. Check your phone &amp; email.</p>
            </div>
        </form>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'jpn_quote_form', 'jpn_quote_form_shortcode' );
