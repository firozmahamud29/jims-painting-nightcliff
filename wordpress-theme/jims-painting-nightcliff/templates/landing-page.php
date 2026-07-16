<?php
/**
 * Pre-built Jim's Brand System landing page — WP template part.
 * Rendered by front-page.php when the page is NOT built with Elementor.
 *
 * Mirrors the standalone index.html (all 17 sections, same copy + class names).
 * The 2-step lead form is injected via the [jpn_quote_form] shortcode.
 * Dynamic phone/email/address come from jpn_get_option().
 *
 * @package JimsPaintingNightcliff
 */

if ( ! defined( 'ABSPATH' ) ) exit;
$opt = jpn_get_option();
?>

<!-- Scroll progress -->
<div class="scroll-progress" id="scrollProgress"></div>

<main>
<!-- ============ HERO ============ -->
<section class="hero" id="quote">
  <div class="wrap hero-grid">
    <div class="hero-copy reveal">
      <span class="eyebrow">Affordable Painting in Darwin — From $299/Room</span>
      <h1>Need it Done?<br><em>Jim's the One!</em></h1>
      <p class="hero-sub">Affordable house &amp; commercial painting across Darwin, Palmerston &amp; the Top End. Interior rooms from <strong>$299</strong> — fixed-price quotes, no hidden fees. <strong>Your Local Expert!</strong></p>

      <div class="hero-trust">
        <span class="stars" aria-label="4.9 out of 5 stars">★★★★★</span>
        <span><strong>4.9</strong> from 187 Darwin reviews</span>
        <span class="dot">·</span>
        <span>Fully insured · Police checked</span>
      </div>

      <div class="hero-ctas">
        <a href="#quote-form-card" class="btn btn-primary magnetic" data-magnetic>Get a Free Quote <span>→</span></a>
        <a href="tel:<?php echo esc_attr( $opt['phone_raw'] ); ?>" class="btn btn-outline">📞 Call <?php echo esc_html( $opt['phone'] ); ?></a>
      </div>

      <div class="franchise-badges">
        <span class="f-badge">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3 7h7l-5.5 4.5L18 21l-6-4-6 4 1.5-7.5L2 9h7z"/></svg>
          Jim's Work Guarantee
        </span>
        <span class="f-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2L4 6v6c0 5 3.5 9 8 10 4.5-1 8-5 8-10V6l-8-4z"/><path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/></svg>
          Fully Trained &amp; Insured
        </span>
        <span class="f-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M5 21v-2a7 7 0 0 1 14 0v2" stroke-linecap="round"/></svg>
          Police Checked
        </span>
        <span class="f-badge">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="10"/></svg>
          5-Year Guarantee
        </span>
      </div>
    </div>

    <?php echo do_shortcode( '[jpn_quote_form]' ); ?>
  </div>
</section>

<!-- ============ MARQUEE ============ -->
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

<!-- ============ WELCOME / INTRO (4 CTA cards) ============ -->
<section class="welcome" id="welcome">
  <div class="wrap">
    <div class="section-head center reveal">
      <span class="eyebrow">Welcome to Jim's Painting Nightcliff</span>
      <h2>Affordable Painting in Darwin,<br>Reliable &amp; Easy Booking</h2>
      <p class="section-sub" style="margin-inline:auto;">House &amp; commercial painting from one local team. Interior rooms from $299 — fixed-price quotes, no hidden fees.</p>
    </div>
    <div class="cta-cards">
      <a href="#quote" class="cta-card reveal">
        <span class="cta-icon">📞</span>
        <h3>Contact Us</h3>
        <p>Talk to your local Darwin painter.</p>
      </a>
      <a href="#quote" class="cta-card reveal">
        <span class="cta-icon">📅</span>
        <h3>Book Now</h3>
        <p>Lock in a start date that suits you.</p>
      </a>
      <a href="#packages" class="cta-card reveal">
        <span class="cta-icon">💰</span>
        <h3>See Packages</h3>
        <p>Transparent pricing from $299/room.</p>
      </a>
      <a href="#quote" class="cta-card reveal">
        <span class="cta-icon">🏢</span>
        <h3>Commercial Quote</h3>
        <p>Offices, shops, strata &amp; warehouses.</p>
      </a>
    </div>
  </div>
</section>

<!-- ============ SERVICES STRIP ============ -->
<section class="services-strip">
  <div class="wrap">
    <div class="service-buttons reveal">
      <a href="#packages" class="service-btn">🖌️ Book a Painter</a>
      <a href="#packages" class="service-btn">🏠 Interior Painting</a>
      <a href="#packages" class="service-btn">☀️ Exterior Painting</a>
    </div>
  </div>
</section>

<!-- ============ ABOUT ============ -->
<section class="about" id="about">
  <div class="wrap narrow reveal">
    <span class="eyebrow">About Jim's Painting Nightcliff</span>
    <h2>Your Local Expert in Darwin Painting</h2>
    <p>Looking for affordable house painters in Darwin? Jim's Painting Nightcliff offers budget-friendly interior painting, exterior repaints, roof restoration and commercial painting for locals and businesses — backed by the Jim's Group national network.</p>
    <p>Whether you need a single feature wall, a full repaint, or an office refresh, we deliver reliable results at competitive prices. Our flexible scheduling suits renovations, rentals, or long-term maintenance plans across Darwin.</p>
    <h3 class="about-sub">We specialise in:</h3>
    <ul class="spec-list">
      <li>Affordable house painting Darwin</li>
      <li>Interior Painting Darwin</li>
      <li>Exterior House Painting Darwin</li>
      <li>Roof Restoration Darwin</li>
      <li>Budget-Friendly Pricing (Painting Prices Darwin)</li>
      <li>Commercial Painting Darwin &amp; Strata Maintenance Available</li>
    </ul>
  </div>
</section>

<!-- ============ STAT BAND ============ -->
<section class="stat-band">
  <div class="wrap stat-grid">
    <div class="stat reveal"><span class="stat-num" data-count="299" data-prefix="$">0</span><span class="stat-label">Rooms from /room</span></div>
    <div class="stat reveal"><span class="stat-num" data-count="1240" data-suffix="+">0</span><span class="stat-label">Rooms painted</span></div>
    <div class="stat reveal"><span class="stat-num" data-count="4.9" data-decimals="1">0</span><span class="stat-label">Google rating</span></div>
    <div class="stat reveal"><span class="stat-num" data-count="5" data-suffix="yr">0</span><span class="stat-label">Workmanship guarantee</span></div>
  </div>
</section>

<!-- ============ BEFORE / AFTER SLIDER ============ -->
<section class="ba-section" id="work">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">The Work</span>
      <h2>Drag the slider.<br><em>See the difference.</em></h2>
    </div>
    <div class="ba-slider reveal" id="baSlider">
      <div class="ba-img ba-after" data-label="After · Nightcliff, 2025">
        <div class="ba-fill illus" style="background:linear-gradient(135deg,#e1261c 0%,#f5f6f8 100%);"></div>
        <span class="ba-caption">After · Nightcliff · 3 coats, low-VOC</span>
      </div>
      <div class="ba-img ba-before" data-label="Before">
        <div class="ba-fill illus" style="background:linear-gradient(135deg,#6B6B6B 0%,#9C9C9C 100%);"></div>
        <span class="ba-caption">Before</span>
      </div>
      <div class="ba-handle" id="baHandle"><div class="ba-handle-line"></div><div class="ba-handle-circle">⟷</div></div>
    </div>
    <p class="ba-hint">Real project · Nightcliff living room · Drag to compare</p>
  </div>
</section>

<!-- ============ PACKAGES (6 tabs) ============ -->
<section class="packages" id="packages">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Affordable Painting Packages</span>
      <h2>Transparent Packages.<br><em>No Surprises.</em></h2>
      <p class="section-sub">From single-room refreshes to full commercial repaints — carefully priced packages that give every customer a premium finish.</p>
    </div>

    <!-- Tab buttons -->
    <div class="pkg-tabs reveal" role="tablist">
      <button class="pkg-tab active" data-tab="interior" role="tab">Interior</button>
      <button class="pkg-tab" data-tab="exterior" role="tab">Exterior</button>
      <button class="pkg-tab" data-tab="roof" role="tab">Roof</button>
      <button class="pkg-tab" data-tab="commercial" role="tab">Commercial</button>
      <button class="pkg-tab" data-tab="fence" role="tab">Fence &amp; Deck</button>
      <button class="pkg-tab" data-tab="epoxy" role="tab">Epoxy Floors</button>
    </div>

    <!-- Tab panels -->
    <div class="pkg-panels">
      <!-- Interior -->
      <div class="pkg-panel active" data-panel="interior">
        <div class="pkg-detail">
          <div class="pkg-info">
            <span class="pkg-tag pkg-tag-pop">Most Popular</span>
            <div class="pkg-price"><span class="cur">From</span><span class="amt">$299</span><span class="unit">/room</span></div>
            <h3>Interior Room Refresh — Walls, Ceiling &amp; Trims</h3>
            <p class="pkg-desc">Give any bedroom, lounge or study a brand-new feel. Full prep, two premium coats on walls, plus ceiling and trims — ideal for rentals, pre-sale touch-ups or a quick style change.</p>
            <ul class="pkg-features">
              <li><span class="feat-ico">🎨</span> Premium Paint</li>
              <li><span class="feat-ico">②</span> 2 Coats</li>
              <li><span class="feat-ico">✓</span> Prep Included</li>
              <li><span class="feat-ico">⏱</span> 5-Yr Guarantee</li>
            </ul>
            <a href="#quote" class="btn btn-primary">Book Now</a>
            <p class="pkg-note">Pricing may vary with room size, repairs and colour changes. Also available: <strong>Full Interior Repaint from $2,490/home</strong> — whole home, walls to woodwork, free colour consult.</p>
          </div>
          <div class="pkg-photo photo-illus" style="background:linear-gradient(160deg,#e1261c,#f5f6f8);"><span>PHOTO: ROOM REFRESH — PARAP</span></div>
        </div>
      </div>
      <!-- Exterior -->
      <div class="pkg-panel" data-panel="exterior">
        <div class="pkg-detail">
          <div class="pkg-info">
            <span class="pkg-tag">Built for the Wet</span>
            <div class="pkg-price"><span class="cur">From</span><span class="amt">$4,900</span><span class="unit">/home</span></div>
            <h3>Exterior House Repaint — Weather-Resistant, UV-Stable</h3>
            <p class="pkg-desc">Protect and refresh your home's exterior with high-durability coatings made for NT sun, storms and humidity. Includes pressure wash, full prep, minor repairs and two coats on walls, eaves and trims.</p>
            <ul class="pkg-features">
              <li><span class="feat-ico">💦</span> Pressure Wash</li>
              <li><span class="feat-ico">☀</span> UV-Stable</li>
              <li><span class="feat-ico">✓</span> Repairs Included</li>
              <li><span class="feat-ico">⏱</span> 7-Yr Guarantee</li>
            </ul>
            <a href="#quote" class="btn btn-primary">Book Now</a>
            <p class="pkg-note">Pricing may vary with height access, cladding type and repairs.</p>
          </div>
          <div class="pkg-photo photo-illus" style="background:linear-gradient(160deg,#e1261c,#8B1F18);"><span>PHOTO: EXTERIOR REPAINT — PALMERSTON</span></div>
        </div>
      </div>
      <!-- Roof -->
      <div class="pkg-panel" data-panel="roof">
        <div class="pkg-detail">
          <div class="pkg-info">
            <span class="pkg-tag">Roof Restoration</span>
            <div class="pkg-price"><span class="cur">From</span><span class="amt">POA</span><span class="unit">/roof</span></div>
            <h3>Roof Restoration — Weatherproof Coatings</h3>
            <p class="pkg-desc">Full roof restoration built for the Top End. Pressure clean, repair, re-prime and apply UV-stable membrane coatings that outlast the Wet. Free on-site assessment.</p>
            <ul class="pkg-features">
              <li><span class="feat-ico">💦</span> Pressure Clean</li>
              <li><span class="feat-ico">☀</span> UV-Stable Membrane</li>
              <li><span class="feat-ico">✓</span> Repairs Included</li>
              <li><span class="feat-ico">⏱</span> 7-Yr Guarantee</li>
            </ul>
            <a href="#quote" class="btn btn-primary">Book Now</a>
            <p class="pkg-note">Free on-site assessment — tailored quote within 48 hours.</p>
          </div>
          <div class="pkg-photo photo-illus" style="background:linear-gradient(160deg,#76777a,#313131);"><span>PHOTO: ROOF RESTORATION — LEANYER</span></div>
        </div>
      </div>
      <!-- Commercial -->
      <div class="pkg-panel" data-panel="commercial">
        <div class="pkg-detail">
          <div class="pkg-info">
            <span class="pkg-tag">Commercial &amp; Strata</span>
            <div class="pkg-price"><span class="cur">From</span><span class="amt">POA</span><span class="unit">/site</span></div>
            <h3>Commercial &amp; Strata Painting — Offices, Shops, Complexes</h3>
            <p class="pkg-desc">Minimal-disruption repaints for offices, retail, strata and warehouses. Night and weekend scheduling, WHS-compliant crews, and long-life coating systems. Custom branding colours matched on request.</p>
            <ul class="pkg-features">
              <li><span class="feat-ico">🌙</span> After-Hours OK</li>
              <li><span class="feat-ico">🦺</span> WHS Compliant</li>
              <li><span class="feat-ico">🎨</span> Brand Colours</li>
              <li><span class="feat-ico">🛡</span> Insured Crews</li>
            </ul>
            <a href="#quote" class="btn btn-primary">Book Now</a>
            <p class="pkg-note">Free on-site assessment — tailored quote within 48 hours.</p>
          </div>
          <div class="pkg-photo photo-illus" style="background:linear-gradient(160deg,#181a20,#4A4F58);"><span>PHOTO: SHOPFRONT — DARWIN CBD</span></div>
        </div>
      </div>
      <!-- Fence & Deck -->
      <div class="pkg-panel" data-panel="fence">
        <div class="pkg-detail">
          <div class="pkg-info">
            <span class="pkg-tag">Fence &amp; Deck</span>
            <div class="pkg-price"><span class="cur">From</span><span class="amt">POA</span><span class="unit">/project</span></div>
            <h3>Fence &amp; Deck Painting — Stain &amp; Protection</h3>
            <p class="pkg-desc">Timber staining, deck oiling and fence painting that survives Darwin's UV and humidity. Prep, stain and seal for a finish that lasts.</p>
            <ul class="pkg-features">
              <li><span class="feat-ico">🪵</span> Timber Stain</li>
              <li><span class="feat-ico">☀</span> UV Protection</li>
              <li><span class="feat-ico">✓</span> Prep Included</li>
              <li><span class="feat-ico">⏱</span> 5-Yr Guarantee</li>
            </ul>
            <a href="#quote" class="btn btn-primary">Book Now</a>
            <p class="pkg-note">Free on-site assessment — tailored quote within 48 hours.</p>
          </div>
          <div class="pkg-photo photo-illus" style="background:linear-gradient(160deg,#3a3d45,#181a20);"><span>PHOTO: DECK &amp; FENCE — HUMPTY DOO</span></div>
        </div>
      </div>
      <!-- Epoxy Floors -->
      <div class="pkg-panel" data-panel="epoxy">
        <div class="pkg-detail">
          <div class="pkg-info">
            <span class="pkg-tag">Epoxy Floors</span>
            <div class="pkg-price"><span class="cur">From</span><span class="amt">POA</span><span class="unit">/m²</span></div>
            <h3>Epoxy Floor Coatings — Garages, Warehouses, Showrooms</h3>
            <p class="pkg-desc">Durable, chemical-resistant epoxy floor systems for garages, workshops and commercial floors. Seamless finish, easy to clean, built for heavy use.</p>
            <ul class="pkg-features">
              <li><span class="feat-ico">💪</span> Heavy-Duty</li>
              <li><span class="feat-ico">🧪</span> Chemical Resistant</li>
              <li><span class="feat-ico">✨</span> Seamless Finish</li>
              <li><span class="feat-ico">⏱</span> 7-Yr Guarantee</li>
            </ul>
            <a href="#quote" class="btn btn-primary">Book Now</a>
            <p class="pkg-note">Free on-site assessment — tailored quote within 48 hours.</p>
          </div>
          <div class="pkg-photo photo-illus" style="background:linear-gradient(160deg,#5a5a5a,#181a20);"><span>PHOTO: EPOXY FLOOR — WINNELLIE</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ OUR SERVICES (from territory-proud-painters.pdf p.3) ============ -->
<section class="why" id="why">
  <div class="wrap">
    <div class="section-head center reveal">
      <span class="eyebrow">Our Services</span>
      <h2>Everything you need for a smooth, reliable repaint in Darwin — from single rooms to full <em>commercial sites.</em></h2>
      <p class="section-sub">House &amp; commercial painting from one local team. Interior rooms from $299 — fixed-price quotes, no hidden fees.</p>
    </div>
    <div class="why-grid">
      <div class="why-card reveal">
        <span class="why-ico">🖌</span>
        <h3>Flawless, Durable Finishes</h3>
        <p>Every surface is properly prepped and painted with premium products built for Top End heat and humidity.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-ico">💰</span>
        <h3>Fair Prices, No Surprises</h3>
        <p>Fixed-price quotes with no hidden fees. You get the finish and service you agreed at the quoted rate.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-ico">🤝</span>
        <h3>We've Got Your Back</h3>
        <p>Local support before, during and after the job. Free quotes in Darwin &amp; Palmerston. Travel fee applies for remote areas.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-ico">📅</span>
        <h3>Flexible Scheduling</h3>
        <p>Nights, weekends and staged works available — we fit around your household or trading hours.</p>
      </div>
      <div class="why-card reveal">
        <span class="why-ico">🌏</span>
        <h3>Painting Across Darwin</h3>
        <p>We service Darwin City, Palmerston, Casuarina and the rural Top End. On-site quotes available.</p>
      </div>
    </div>
    <div class="why-extras reveal">
      <div class="why-extra"><span class="why-ico-sm">🧰</span> Full Prep Included</div>
      <div class="why-extra"><span class="why-ico-sm">🛡</span> Fully Insured</div>
      <div class="why-extra"><span class="why-ico-sm">✓</span> Police Checked</div>
      <div class="why-extra"><span class="why-ico-sm">⏱</span> 5-Yr Guarantee</div>
    </div>
  </div>
</section>

<!-- ============ SERVICE AREAS ============ -->
<section class="areas">
  <div class="wrap center reveal">
    <span class="eyebrow">Service Areas</span>
    <h2>We Provide Painting Services Across Darwin</h2>
    <div class="areas-grid">
      <div class="area">Darwin City</div>
      <div class="area">Palmerston</div>
      <div class="area">Casuarina &amp; Northern Suburbs</div>
      <div class="area">Surrounding Rural Top End</div>
    </div>
  </div>
</section>

<!-- ============ 5-STEP PROCESS ============ -->
<section class="process" id="process">
  <div class="wrap">
    <div class="section-head center reveal">
      <span class="eyebrow">Our 5-Step Booking Process</span>
      <h2>From Enquiry to the <em>Final Walkthrough.</em></h2>
    </div>
    <div class="process-track">
      <div class="process-line"></div>
      <div class="pstep reveal"><span class="pstep-num">1</span><h3>Send Your Enquiry</h3><p>Fill in the quote form or call us with your job details and photos.</p></div>
      <div class="pstep reveal"><span class="pstep-num">2</span><h3>Free Quote</h3><p>We confirm scope on-site or by photo and send a fixed-price quote.</p></div>
      <div class="pstep reveal"><span class="pstep-num">3</span><h3>Pick Your Colours</h3><p>Free colour consultation — samples tested in your own light.</p></div>
      <div class="pstep reveal"><span class="pstep-num">4</span><h3>We Paint</h3><p>Our crew preps, paints and keeps the site clean and safe.</p></div>
      <div class="pstep reveal"><span class="pstep-num">5</span><h3>Final Walkthrough</h3><p>Inspect everything with us — you sign off only when happy.</p></div>
    </div>
  </div>
</section>

<!-- ============ REVIEWS ============ -->
<section class="reviews" id="reviews">
  <div class="wrap narrow reveal">
    <span class="eyebrow">What Customers Say About Us</span>
    <blockquote class="pullquote">
      <span class="pq-mark">"</span>
      Fixed-price quote, turned up on time, and the finish is flawless. Our Nightcliff place looks brand new — even after the first Wet. Need it Done? Jim's the One!
    </blockquote>
    <div class="pq-attr">
      <div class="pq-avatar">ST</div>
      <div><strong>Sarah T.</strong><span>Nightcliff, NT · ★★★★★</span></div>
    </div>
    <div class="review-nav">
      <button class="rv-btn" data-dir="prev" aria-label="Previous review">←</button>
      <span class="rv-dots" id="rvDots"></span>
      <button class="rv-btn" data-dir="next" aria-label="Next review">→</button>
    </div>
  </div>
</section>

<!-- ============ GALLERY (8 projects) ============ -->
<section class="gallery" id="gallery">
  <div class="wrap">
    <div class="section-head reveal">
      <span class="eyebrow">Our Work</span>
      <h2>Recent Work Across <em>Darwin.</em></h2>
    </div>
    <div class="gallery-bento">
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#e1261c,#f5f6f8);"><span>Exterior · Stuart Park</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#181a20,#3a3d45);"><span>Interior · Parap</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#76777a,#313131);"><span>Roof · Leanyer</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#181a20,#4A4F58);"><span>Office · Darwin CBD</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#f1d09f,#ffffff);"><span>Feature Wall · Bayview</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#3a3d45,#181a20);"><span>Deck &amp; Fence · Humpty Doo</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#e1261c,#76777a);"><span>Strata · Larrakeyah</span></div></figure>
      <figure class="gtile reveal"><div class="photo-illus" style="background:linear-gradient(160deg,#5a5a5a,#181a20);"><span>Warehouse · Winnellie</span></div></figure>
    </div>
  </div>
</section>

<!-- ============ SPECIAL SERVICES ============ -->
<section class="special-services">
  <div class="wrap">
    <div class="section-head center reveal">
      <span class="eyebrow">Our Special Services</span>
      <h2>Specialised Painting <em>Solutions.</em></h2>
    </div>
    <div class="ss-grid">
      <div class="ss-card reveal">
        <span class="ss-ico">🎨</span>
        <h3>Affordable Interior Painting Darwin</h3>
        <p>Budget-friendly room repaints starting from $299/room. Perfect for renters, landlords and pre-sale refreshes.</p>
      </div>
      <div class="ss-card reveal">
        <span class="ss-ico">🏠</span>
        <h3>Exterior &amp; Roof Painting Darwin</h3>
        <p>Weatherproof coatings built for the Top End. Full exterior repaints and roof restorations that outlast the Wet.</p>
      </div>
      <div class="ss-card reveal">
        <span class="ss-ico">🏢</span>
        <h3>Commercial &amp; Strata Painting</h3>
        <p>From shopfronts to warehouses — after-hours scheduling and maintenance programs for every business.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ KEY INFO / T&Cs ============ -->
<section class="key-info" id="key-info">
  <div class="wrap">
    <div class="section-head center reveal">
      <span class="eyebrow">Key Information</span>
      <h2>Terms &amp; Conditions</h2>
      <p class="section-sub" style="margin-inline:auto;">Key conditions to be aware of when booking with Jim's Painting Nightcliff. Full T&amp;Cs apply.</p>
    </div>
    <div class="ki-grid">
      <div class="ki-card reveal"><h3>📋 Quotes &amp; Pricing</h3><p>Quotes are valid for 30 days and fixed once accepted. Variations (extra repairs, colour changes after starting) are quoted in writing before any additional work begins.</p></div>
      <div class="ki-card reveal"><h3>🚪 Site Access &amp; Preparation</h3><p>Please clear small items and valuables before start day. We handle furniture moving, floor protection and masking. Power and water access required on site.</p></div>
      <div class="ki-card reveal"><h3>🌧 Weather Policy</h3><p>Exterior work may be rescheduled around heavy rain or extreme humidity to protect the finish. We'll always confirm revised dates with you in advance.</p></div>
      <div class="ki-card reveal"><h3>🛡 Guarantee &amp; Aftercare</h3><p>Workmanship covered by our written 5-year guarantee (7 years on premium exterior systems). Keep surfaces gently washed and report any concerns — we'll make it right.</p></div>
      <div class="ki-card reveal"><h3>💳 Payment Terms</h3><p>A deposit confirms your booking; balance due on completion after your final walkthrough. We accept card, transfer and staged payments on larger projects.</p></div>
      <div class="ki-card reveal"><h3>📅 Booking Changes</h3><p>Need to move your date? Give us 48 hours' notice and we'll reschedule at no charge. Late cancellations may incur a booking fee.</p></div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="faq" id="faq">
  <div class="wrap narrow">
    <div class="section-head reveal">
      <span class="eyebrow">FAQ</span>
      <h2>Answers, Before You <em>Ask.</em></h2>
    </div>
    <div class="accordion">
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">What is the most affordable painting price in Darwin?<span class="acc-i">+</span></button><div class="acc-b"><p>Our interior room refresh starts from just $299/room, making us one of the most affordable professional painting options in Darwin. Get a fixed-price quote with no hidden fees.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">Do you offer whole-house painting packages?<span class="acc-i">+</span></button><div class="acc-b"><p>Yes — our Full Interior Repaint covers the whole home (walls, ceilings, doors, trims and cupboards) from $2,490. Includes free colour consultation and furniture protection.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">Is preparation included in the price?<span class="acc-i">+</span></button><div class="acc-b"><p>Yes — every quote includes full prep: cleaning, sanding, filling, masking, and furniture protection. No surprise add-ons, ever.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">Do you paint commercial premises?<span class="acc-i">+</span></button><div class="acc-b"><p>Absolutely. Offices, shops, strata complexes and warehouses — WHS-compliant crews, after-hours scheduling, 48-hour quotes.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">How fast can you start?<span class="acc-i">+</span></button><div class="acc-b"><p>We reply within one business day and can usually schedule within 1–2 weeks. Book before October to secure exterior work before the Wet.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">Are you licenced and insured?<span class="acc-i">+</span></button><div class="acc-b"><p>Yes — fully insured with $20M public liability, WHS-compliant crews, police-checked, and backed by Jim's Work Guarantee. Certificate of Currency on request.</p></div></div>
      <div class="acc reveal"><button class="acc-h" aria-expanded="false">What's the guarantee?<span class="acc-i">+</span></button><div class="acc-b"><p>5-year workmanship guarantee on interiors, 7-year on exterior premium systems — backed by Jim's Work Guarantee. If anything fails, we fix it — no argument.</p></div></div>
    </div>
  </div>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="final-cta">
  <div class="wrap narrow center reveal">
    <h2>Need it Done? <em>Jim's the One!</em></h2>
    <p>Free, fixed-price quote within one business day. No obligation, no pressure. <strong>Your Local Expert!</strong></p>
    <a href="#quote" class="btn btn-primary btn-lg magnetic" data-magnetic>Get a Free Quote <span>→</span></a>
    <p class="final-phone">or call <a href="tel:<?php echo esc_attr( $opt['phone_raw'] ); ?>"><?php echo esc_html( $opt['phone'] ); ?></a></p>
  </div>
</section>
</main>

<!-- Floating mobile CTA -->
<div class="float-cta" id="floatCta">
  <a href="tel:<?php echo esc_attr( $opt['phone_raw'] ); ?>" class="float-call" aria-label="Call us">📞</a>
  <a href="#quote" class="btn btn-primary">Get a Free Quote</a>
</div>
