<?php
/**
 * Pre-built Jim's Brand System landing page — WP template part.
 * Rendered by front-page.php when the page is NOT built with Elementor.
 *
 * @package JimsPaintingNightcliff
 */

if ( ! defined( 'ABSPATH' ) ) exit;
$opt = jpn_get_option();
?>

<!-- Scroll progress -->
<div class="scroll-progress" id="scrollProgress"></div>

<main>
<!-- ============ HERO (asymmetric 7/5 split) ============ -->
<section class="hero" id="quote">
  <div class="wrap hero-grid">
    <div class="hero-copy reveal">
      <span class="eyebrow">01 — Darwin's Painters Since 2014</span>
      <h1>Painting that<br>outlasts the <em>Wet.</em></h1>
      <p class="hero-sub">Locally owned. Fixed-price quotes. Interior rooms painted from <strong>$299</strong> — no hidden fees, just a flawless finish built for Top End conditions.</p>
      <div class="hero-trust">
        <span class="stars" aria-label="4.9 out of 5 stars">★★★★★</span>
        <span><strong>4.9</strong> from 187 Darwin reviews</span>
        <span class="dot">·</span>
        <span>Licenced &amp; insured</span>
      </div>
      <div class="hero-ctas">
        <a href="#quote-form-card" class="btn btn-primary magnetic" data-magnetic>Get a free quote <span>→</span></a>
        <a href="#work" class="btn-link">See our work <span class="line"></span></a>
      </div>
    </div>
    <?php echo do_shortcode( '[jpn_quote_form]' ); ?>
  </div>
</section>

<!-- ============ PAINT BRAND MARQUEE ============ -->
<div class="marquee-strip">
  <div class="marquee-track">
    <span>Dulux Accredited</span><span class="sep">◆</span>
    <span>Taubmans Endorsed</span><span class="sep">◆</span>
    <span>Haymes Premium</span><span class="sep">◆</span>
    <span>Wattyl Specifier</span><span class="sep">◆</span>
    <span>Solver Paints</span><span class="sep">◆</span>
    <span>Master Painters Member</span><span class="sep">◆</span>
    <span>Dulux Accredited</span><span class="sep">◆</span>
    <span>Taubmans Endorsed</span><span class="sep">◆</span>
    <span>Haymes Premium</span><span class="sep">◆</span>
    <span>Wattyl Specifier</span><span class="sep">◆</span>
    <span>Solver Paints</span><span class="sep">◆</span>
    <span>Master Painters Member</span><span class="sep">◆</span>
  </div>
</div>

<!-- ============ STAT BAND ============ -->
<section class="stat-band">
  <div class="wrap stat-grid">
    <div class="stat reveal"><span class="stat-num" data-count="11">0</span><span class="stat-label">Years in Darwin</span></div>
    <div class="stat reveal"><span class="stat-num" data-count="1240" data-suffix="+">0</span><span class="stat-label">Rooms painted</span></div>
    <div class="stat reveal"><span class="stat-num" data-count="4.9" data-decimals="1">0</span><span class="stat-label">Google rating</span></div>
    <div class="stat reveal"><span class="stat-num" data-count="5" data-suffix="yr">0</span><span class="stat-label">Workmanship guarantee</span></div>
  </div>
</section>

<!-- ============ BEFORE / AFTER SLIDER ============ -->
<section class="ba-section" id="work">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">02 — The Work</span>
      <h2>Drag the slider.<br><em>See the difference.</em></h2>
    </div>
    <div class="ba-slider reveal" id="baSlider">
      <div class="ba-img ba-after" data-label="After · Ludmilla, 2025">
        <div class="ba-fill illus" style="background:linear-gradient(135deg,#ee3127 0%,#f5f6f8 100%);"></div>
        <span class="ba-caption">After · Ludmilla · 3 coats, low-VOC</span>
      </div>
      <div class="ba-img ba-before" data-label="Before">
        <div class="ba-fill illus" style="background:linear-gradient(135deg,#6B6B6B 0%,#9C9C9C 100%);"></div>
        <span class="ba-caption">Before</span>
      </div>
      <div class="ba-handle" id="baHandle"><div class="ba-handle-line"></div><div class="ba-handle-circle">⟷</div></div>
    </div>
    <p class="ba-hint">Real project · Ludmilla living room · Drag to compare</p>
  </div>
</section>

<!-- ============ PACKAGES ============ -->
<section class="packages" id="packages">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">03 — Pricing</span>
      <h2>Transparent packages.<br><em>No surprises.</em></h2>
      <p class="section-sub">Fixed-price quotes. Final price confirmed at your free on-site assessment.</p>
    </div>
    <div class="pkg-row">
      <article class="pkg reveal">
        <span class="pkg-tag">Essential</span>
        <div class="pkg-price"><span class="cur">From</span><span class="amt">$299</span><span class="unit">/room</span></div>
        <h3>Interior Room Refresh</h3>
        <p class="pkg-desc">Walls, ceiling &amp; trims. One room, full prep, two coats.</p>
        <ul class="pkg-list"><li>Premium paint</li><li>Two coats</li><li>Full prep included</li><li>5-year guarantee</li></ul>
        <a href="#quote" class="btn btn-outline btn-block">Request a Quote</a>
      </article>
      <article class="pkg pkg-featured reveal">
        <span class="pkg-tag pkg-tag-pop">Most Popular</span>
        <div class="pkg-price"><span class="cur">From</span><span class="amt">$2,490</span><span class="unit">/home</span></div>
        <h3>Full Interior Repaint</h3>
        <p class="pkg-desc">Whole home — walls to woodwork. Free colour consult.</p>
        <ul class="pkg-list"><li>Low-VOC premium paint</li><li>Free colour consultation</li><li>Furniture protected</li><li>5-year guarantee</li></ul>
        <a href="#quote" class="btn btn-primary btn-block">Request a Free Quote</a>
      </article>
      <article class="pkg reveal">
        <span class="pkg-tag">Exterior</span>
        <div class="pkg-price"><span class="cur">From</span><span class="amt">$4,900</span><span class="unit">/home</span></div>
        <h3>Exterior House Repaint</h3>
        <p class="pkg-desc">UV-stable, weather-resistant coatings. Built for the Wet.</p>
        <ul class="pkg-list"><li>Pressure wash included</li><li>UV-stable coatings</li><li>Minor repairs</li><li>7-year guarantee</li></ul>
        <a href="#quote" class="btn btn-outline btn-block">Request a Quote</a>
      </article>
    </div>
    <p class="pkg-foot">Commercial &amp; strata? <a href="#quote" class="text-link">Get a custom quote within 48 hours →</a></p>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section class="process" id="process">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">04 — How It Works</span>
      <h2>A system, not a <em>guess.</em></h2>
    </div>
    <div class="process-track">
      <div class="process-line"></div>
      <div class="pstep reveal"><span class="pstep-num">01</span><h3>Enquiry</h3><p>Tell us what needs painting. 2-minute form.</p></div>
      <div class="pstep reveal"><span class="pstep-num">02</span><h3>Free Quote</h3><p>Fixed-price, written, on-site. No obligation.</p></div>
      <div class="pstep reveal"><span class="pstep-num">03</span><h3>We Paint</h3><p>Premium prep, paint, daily clean-up.</p></div>
      <div class="pstep reveal"><span class="pstep-num">04</span><h3>Walkthrough</h3><p>You sign off only when you're happy.</p></div>
    </div>
  </div>
</section>

<!-- ============ REVIEWS ============ -->
<section class="reviews" id="reviews">
  <div class="wrap narrow reveal">
    <span class="eyebrow">05 — Reviews</span>
    <blockquote class="pullquote"><span class="pq-mark">"</span>Fixed-price quote, turned up on time, and the finish is flawless. Our Nightcliff place looks brand new — even after the first Wet. This is how every tradesperson should operate.</blockquote>
    <div class="pq-attr"><div class="pq-avatar">ST</div><div><strong>Sarah T.</strong><span>Nightcliff, NT · ★★★★★</span></div></div>
    <div class="review-nav">
      <button class="rv-btn" data-dir="prev" aria-label="Previous review">←</button>
      <span class="rv-dots" id="rvDots"></span>
      <button class="rv-btn" data-dir="next" aria-label="Next review">→</button>
    </div>
  </div>
</section>

<!-- ============ WHY (bento) ============ -->
<section class="why">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">06 — Why Jim's Painting</span>
      <h2>Built for Top End <em>conditions.</em></h2>
    </div>
    <div class="bento">
      <div class="bento-cell bento-lg reveal">
        <h3>Paints that survive the Wet</h3>
        <p>UV-stable, low-VOC, mould-resistant coatings engineered for 90%+ dry-season humidity and cyclone-season storms. We don't use mainland formulations — we use what actually lasts in the Top End climate.</p>
        <div class="bento-tags"><span>UV-stable</span><span>Mould-resistant</span><span>Low-VOC</span></div>
      </div>
      <div class="bento-cell reveal"><span class="bento-num">$20M</span><p>Public liability insured</p></div>
      <div class="bento-cell reveal"><span class="bento-num">5yr</span><p>Workmanship guarantee</p></div>
      <div class="bento-cell reveal"><span class="bento-num">1hr</span><p>Quote response time</p></div>
      <div class="bento-cell bento-md reveal">
        <h3>Locally owned. Backed by Jim.</h3>
        <p>Darwin-based crews who live here, know the suburbs, and stand behind every job — not a franchise call centre.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALLERY ============ -->
<section class="gallery">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">07 — Gallery</span>
      <h2>Recent work across <em>Darwin.</em></h2>
    </div>
    <div class="gallery-bento">
      <figure class="gtile gtile-tall reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#ee3127,#f5f6f8);"><span>Exterior · Stuart Park</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#181a20,#3a3d45);"><span>Interior · Parap</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#f5a623,#ffffff);"><span>Feature Wall · Bayview</span></div></figure>
      <figure class="gtile gtile-wide reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#181a20,#4A4F58);"><span>Commercial · Darwin CBD</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#ee3127,#8B1F18);"><span>Roof · Leanyer</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#3a3d45,#181a20);"><span>Deck &amp; Fence · Humpty Doo</span></div></figure>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="faq" id="faq">
  <div class="wrap narrow">
    <div class="section-head reveal">
      <span class="eyebrow">08 — FAQ</span>
      <h2>Answers, before you <em>ask.</em></h2>
    </div>
    <div class="accordion">
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">Is preparation included in the price?<span class="acc-i">+</span></button><div class="acc-b"><p>Yes — every quote includes full prep: cleaning, sanding, filling, masking, and furniture protection. No surprise add-ons, ever.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">How fast can you start?<span class="acc-i">+</span></button><div class="acc-b"><p>We reply within one business hour and can usually schedule within 1–2 weeks. Book before October to secure exterior work before the Wet.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">Are you licenced and insured?<span class="acc-i">+</span></button><div class="acc-b"><p>Yes — fully insured with $20M public liability, WHS-compliant crews, and a member of Master Painters Australia. Certificate of Currency on request.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">Do you handle commercial &amp; strata?<span class="acc-i">+</span></button><div class="acc-b"><p>Absolutely. Offices, shops, strata complexes and warehouses — WHS-compliant crews, after-hours scheduling, 48-hour quotes.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">What's the guarantee?<span class="acc-i">+</span></button><div class="acc-b"><p>5-year workmanship guarantee on interiors, 7-year on exterior premium systems. If anything fails, we fix it — no argument.</p></div></div>
    </div>
  </div>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="final-cta">
  <div class="wrap narrow center reveal">
    <h2>Ready to transform <em>your space?</em></h2>
    <p>Free, fixed-price quote within 1 business hour. No obligation, no pressure.</p>
    <a href="#quote" class="btn btn-primary btn-lg magnetic" data-magnetic>Request a Free Quote <span>→</span></a>
    <p class="final-phone">or call <a href="tel:<?php echo esc_attr( $opt['phone_raw'] ); ?>"><?php echo esc_html( $opt['phone'] ); ?></a></p>
  </div>
</section>
</main>

<!-- Floating mobile CTA -->
<div class="float-cta" id="floatCta">
  <a href="tel:<?php echo esc_attr( $opt['phone_raw'] ); ?>" class="float-call" aria-label="Call us">📞</a>
  <a href="#quote" class="btn btn-primary">Free Quote</a>
</div>
