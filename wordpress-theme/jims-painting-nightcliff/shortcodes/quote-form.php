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
        'title' => 'Request a Free Quote',
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
                <p class="ftrust">No obligation · We reply within 1 business hour</p>
                <label class="lbl">What needs painting?</label>
                <div class="chips" role="radiogroup" aria-label="Painting type">
                    <input type="radio" name="painting_type" id="t-int" value="Interior" checked><label for="t-int">Interior</label>
                    <input type="radio" name="painting_type" id="t-ext" value="Exterior"><label for="t-ext">Exterior</label>
                    <input type="radio" name="painting_type" id="t-roof" value="Roof"><label for="t-roof">Roof</label>
                    <input type="radio" name="painting_type" id="t-com" value="Commercial"><label for="t-com">Commercial</label>
                </div>
                <div class="grid-2">
                    <div><label class="lbl" for="ptype">Property</label><select id="ptype" name="property_type" required>
                        <option value="House" selected>House</option><option value="Unit">Unit</option><option value="Office">Office</option><option value="Shop">Shop</option><option value="Strata">Strata</option>
                    </select></div>
                    <div><label class="lbl" for="suburb">Suburb</label><input type="text" id="suburb" name="suburb" placeholder="Nightcliff" required></div>
                </div>
                <div class="grid-2">
                    <div><label class="lbl" for="sdate">Preferred start</label><input type="date" id="sdate" name="start_date" required></div>
                    <div><label class="lbl" for="rooms">Rooms / size</label><input type="text" id="rooms" name="rooms" placeholder="3 rooms"></div>
                </div>
                <button type="button" class="btn btn-primary btn-block" id="nextBtn">See my estimate <span>&#8594;</span></button>
                <p class="prefer-call">Prefer to call? <a href="tel:+61889000000">(08) 8900 0000</a></p>
            </div>

            <!-- STEP 2 -->
            <div class="fstep" data-step="2">
                <p class="fstep-title">Where do we send your quote?</p>
                <div class="grid-2">
                    <div><label class="lbl" for="name">Name</label><input type="text" id="name" name="name" placeholder="Your name" required></div>
                    <div><label class="lbl" for="phone">Phone</label><input type="tel" id="phone" name="phone" placeholder="04xx xxx xxx" required></div>
                </div>
                <label class="lbl" for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="you@email.com" required>
                <label class="lbl" for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Street, suburb, postcode" required>
                <?php wp_nonce_field( 'jpn_lead_nonce', 'jpn_nonce_field' ); ?>
                <div class="factions">
                    <button type="button" class="btn-back" id="backBtn"><span>&#8592;</span> Back</button>
                    <button type="submit" class="btn btn-primary">Request a Free Quote</button>
                </div>
                <p class="guarantee-line">🔒 No obligation. No pressure. 5-year workmanship guarantee.</p>
            </div>

            <!-- SUCCESS -->
            <div class="fsuccess" aria-live="polite">
                <svg width="52" height="52" viewBox="0 0 52 52" aria-hidden="true"><circle cx="26" cy="26" r="24" stroke="#181a20" stroke-width="2" fill="#f5f6f8"/><path d="M16 27l7 7 14-14" stroke="#181a20" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
                <h3>Quote received — we're on it.</h3>
                <p>Reply within 1 business hour. Check your phone &amp; email.</p>
            </div>
        </form>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode( 'jpn_quote_form', 'jpn_quote_form_shortcode' );
