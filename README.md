# 🎨 Jim's Painting Nightcliff — Landing Page

> Darwin's trusted painters, backed by **Jim's Group**. Locally owned in Nightcliff, serving Darwin-wide.

**Live preview:** https://firozmahamud29.github.io/jims-painting-nightcliff/

---

## Brand identity — Jim's Group franchisee

This is the franchisee site for **Jim's Painting Nightcliff**, part of the official [Jim's Group](https://jims.net) network. The design follows the Jim's brand system extracted from the live `jimspainting.com.au` production CSS.

| Token | Value |
|-------|-------|
| **Primary red** | `#e1261c` |
| Red dark (hover) | `#c4261d` |
| Ink (dark sections) | `#181a20` |
| Charcoal (body text) | `#313131` |
| White surfaces | `#ffffff` |
| Cloud (light bg) | `#f5f6f8` |
| Amber (stars only) | `#f5a623` |
| **Headings font** | Futura (primary) + Arial (secondary), per Jim's Style Guide |
| **Body font** | system-ui / Roboto stack |
| **Logo** | Official Jim's asset (never redraw the "Jim's" wordmark) |
| **Trust badges** | 10,000+ Five-Star Reviews · Fully Trained & Insured · Police Checked · Jim's Work Guarantee |
| **CTAs** | "Request a Free Quote" + "Call Now" |
| **Phone** | Franchisee mobile primary · `131 546` optional central |

---

## What's in this repo

```
jims-painting-nightcliff/
├── index.html                          ← standalone landing page (live preview)
├── css/styles.css                      ← Jim's brand design system
├── js/main.js                          ← interactions + form handler
├── assets/img/                         ← official Jim's logos (PNG)
│   ├── jims-painting-logo.png          ← logo mark (194×132)
│   └── jims-painting-brush.png         ← full lockup (4613×1576)
├── wordpress-theme/
│   └── jims-painting-nightcliff/       ← WP child theme (Hello Elementor)
│       ├── style.css                   ← theme header (Text Domain: jims-painting-nightcliff)
│       ├── functions.php               ← JPN_VERSION / JPN_DIR / JPN_URI
│       ├── header.php / footer.php     ← default templates (Elementor-overridable)
│       ├── front-page.php              ← smart: defers to Elementor if active
│       ├── inc/
│       │   ├── setup.php               ← theme supports, Customizer, image sizes
│       │   ├── enqueue.php             ← Futura+Arial fonts + theme.css + theme.js
│       │   ├── form-handler.php        ← jpn_lead CPT + admin-ajax + email
│       │   └── shortcodes.php
│       ├── shortcodes/quote-form.php   ← [jpn_quote_form]
│       ├── templates/landing-page.php  ← pre-built landing page
│       └── assets/
│           ├── css/theme.css           ← synced Jim's design system
│           ├── css/elementor.css       ← .jpn-* utility classes
│           ├── js/theme.js             ← form posts to admin-ajax
│           └── img/                    ← Jim's logos
└── wordpress-theme/jims-painting-nightcliff.zip  ← installable theme zip
```

---

## WordPress theme identifiers

All internal identifiers use the `jpn_` / `JPN_` / `jims-painting-nightcliff` schema:

| Type | Identifier |
|------|-----------|
| Text domain | `jims-painting-nightcliff` |
| Constants | `JPN_VERSION`, `JPN_DIR`, `JPN_URI` |
| Functions | `jpn_*` (15 functions) |
| Custom post type | `jpn_lead` |
| Option key | `jpn_options` |
| Meta prefix | `_jpn_*` |
| Shortcode | `[jpn_quote_form]` |
| Ajax action | `jpn_submit_lead` |
| Nonce | `jpn_lead_nonce` |
| JS global | `JPN` |
| CSS class prefix | `.jpn-*` |
| Enqueue handles | `jpn-fonts`, `jpn-theme`, `jpn-elementor` |

**Pre-launch safe:** No live database exists. Identifiers renamed freely with zero migration risk.

---

## Hard constraints (carried from original spec)

- ✅ **No faces/heads** in any imagery — before/after sliders, textures, abstract only.
- ✅ **No payment/checkout** — leads only. Form emails franchisee + saves to CPT.
- ✅ **"affordable" never "cheap"** — across all copy including SEO meta.

---

## Pending client assets

Replace these placeholders before going live:

- [ ] **Real phone number** (currently `0400 000 000` placeholder)
- [ ] **Real ABN** (currently `00 000 000 000`)
- [ ] **Domain confirmation** (currently `jimspaintingnightcliff.com.au` placeholder)
- [ ] **Real lead email** (currently `nightcliff@jimspainting.com.au`)
- [ ] **Real photos** to replace gradient placeholders in gallery + before/after slider
- [ ] **Testimonials approval** (3 reviews currently placeholders)
- [ ] **Pricing confirmation** for Roof / Fence / Epoxy packages
- [ ] **Official Jim's franchisee logo pack** (currently using division-site CDN asset — confirm with Jim's Group onboarding)

---

## Deployment

### Standalone (GitHub Pages)
Auto-deploys on push to `main` via `.github/workflows/deploy.yml`.
URL: https://firozmahamud29.github.io/jims-painting-nightcliff/

### WordPress
1. Install parent theme **Hello Elementor**.
2. Install Elementor + Elementor Pro.
3. Upload `wordpress-theme/jims-painting-nightcliff.zip` via Appearance → Themes → Add New → Upload.
4. Activate. Set front page to a static "Home" page.
5. Optional: Appearance → Customize → **JPN — Contact Details** to set phone/email/address.
6. Optional: Use `[jpn_quote_form]` shortcode anywhere, or build a custom Header/Footer in Elementor Pro Theme Builder.

---

## Stack

- **Standalone:** vanilla HTML / CSS / JS — no build step, no framework.
- **WordPress:** child theme on Hello Elementor, Elementor Pro Theme Builder.
- **Lead capture:** custom post type (`jpn_lead`) + admin-ajax handler — no plugin dependency.

---

© Jim's Painting Nightcliff · Backed by Jim's Group · Darwin, NT · Built by Qii Creative
