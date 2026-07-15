# Tasks — Rebrand to Jim's Painting Nightcliff

Grouped by layer. Each task ≤ 2h, independently verifiable. Check off `[x]` when done.

## Phase 1 — Design tokens (CSS foundation)

- [ ] **T1.1** Rewrite `css/styles.css` `:root` token block: remove `--ink/--bone/--clay/--clay-deep/--terracotta/--terracotta-dk/--forest/--forest-dk/--ochre/--mist/--serif/--sans`. Add `--jims-red:#ee3127`, `--jims-red-dark:#c4261d`, `--jims-red-deep:#ee2e24`, `--ink:#181a20`, `--charcoal:#313131`, `--charcoal-mid:#5a5a5a`, `--bone:#ffffff`, `--cloud:#f5f6f8`, `--line:#e4e6ea`, `--font-head:'Rubik',system-ui,sans-serif`, `--font-body:system-ui,-apple-system,'Segoe UI',Roboto,Helvetica,Arial,sans-serif`. Verify: `grep -c "terracotta\|forest\|ochre\|Fraunces\|Manrope" css/styles.css` → 0.
- [ ] **T1.2** Sweep `css/styles.css` body of rules: replace every `var(--terracotta*)` → `var(--jims-red*)`, `var(--forest*)` → `var(--ink)`, `var(--ochre)` → `var(--jims-red)`, `var(--clay*)` → `var(--cloud)`, `var(--mist)` → `var(--charcoal-mid)`, `var(--serif)` → `var(--font-head)`, `var(--sans)` → `var(--font-body)`. Verify: open page, buttons red, headings sans.
- [ ] **T1.3** Update Google Fonts `<link>` in `index.html`: remove Fraunces+Manrope, add Rubik (400/500/600/700/800). Verify: Network tab shows Rubik woff2, no Fraunces request.

## Phase 2 — Standalone HTML copy + structure

- [ ] **T2.1** `index.html` `<head>`: rewrite `<title>`, meta description, OG tags, canonical URL. Brand → "Jim's Painting Nightcliff". Add "Backed by Jim's Group" to description. Canonical → placeholder `https://jimspaintingnightcliff.com.au/`. Verify: `document.title` correct, no "Territory Proud" in head.
- [ ] **T2.2** `index.html` JSON-LD: update `name`, `description`, `url`, `email`, `areaServed` (add Nightcliff), `address.addressLocality`. Verify: parse JSON-LD, name === "Jim's Painting Nightcliff".
- [ ] **T2.3** `index.html` header + footer brand text: "Territory Proud Painters" → "Jim's Painting Nightcliff". Logo lockup: `[red "Jim's" bold italic] Painting · Nightcliff`. Update copyright line. Verify: grep "Territory Proud" in rendered HTML → 0.
- [ ] **T2.4** `index.html` hero + stats + copy: rewrite eyebrow ("01 — Darwin's Painters Since 2014" → drop year or confirm), replace "Territory proud" phrases, update "Locally owned. Territory proud." → "Locally owned. Backed by Jim's." Update CTA labels to "Request a Free Quote" / "Call Now". Add `tel:` link. Verify: hero CTAs match franchise convention.
- [ ] **T2.5** `index.html` trust badges: replace/supplement current proof points with "10,000+ Five-Star Reviews", "Fully Trained & Insured", "Police Checked", "Jim's Work Guarantee". Inline SVG icons. Verify: 4 badges present in hero/why-us.
- [ ] **T2.6** `index.html` reviews + gallery + service-area copy: keep Darwin-wide refs, add Nightcliff as base. Update testimonial suburb tags if needed. Verify: "Darwin" retained as region, "Nightcliff" present as base.

## Phase 3 — Standalone JS

- [ ] **T3.1** `js/main.js`: update docblock, `recipientEmail` → placeholder `hello@jimspaintingnightcliff.com.au`, `data.source` → "Jim's Painting Nightcliff — Landing Page". Verify: form submission source string correct.

## Phase 4 — WordPress theme rename + rebrand

- [ ] **T4.1** Rename theme directory `wordpress-theme/territory-proud-painters/` → `wordpress-theme/jims-painting-nightcliff/`. Verify: `ls wordpress-theme/jims-painting-nightcliff/style.css` exists.
- [ ] **T4.2** `style.css` header: Theme Name → "Jim's Painting Nightcliff", Theme URI, Description, Text Domain → `jims-painting-nightcliff`, @package → `JimsPaintingNightcliff`. Verify: WP admin shows new theme name.
- [ ] **T4.3** `functions.php`: constants `TPP_*` → `JPN_*`, `@package`, require_once paths. Verify: `grep -c "TPP_" functions.php` → 0.
- [ ] **T4.4** `inc/setup.php`: rename functions `tpp_*` → `jpn_*`, option `tpp_options` → `jpn_options`, customizer `tpp_contact` → `jpn_contact`, image sizes `tpp-*` → `jpn-*`, text-domain, defaults (email/address). Verify: `grep -c "tpp_" inc/setup.php` → 0.
- [ ] **T4.5** `inc/enqueue.php`: rename function, handles `tpp-*` → `jpn-*`, JS global `TPP` → `JPN`, nonce `tpp_lead_nonce` → `jpn_lead_nonce`, CSS var `--tpp-admin-preview` → `--jpn-admin-preview`. Verify: `grep -c "tpp\|TPP" inc/enqueue.php` → 0.
- [ ] **T4.6** `inc/form-handler.php`: rename functions, post type `tpp_lead` → `jpn_lead`, meta `_tpp_*` → `_jpn_*`, ajax action `tpp_submit_lead` → `jpn_submit_lead`, nonce, email body copy, text-domain. Verify: `grep -c "tpp\|TPP" inc/form-handler.php` → 0.
- [ ] **T4.7** `inc/shortcodes.php`: TPP_DIR → JPN_DIR. Verify: loads correctly.
- [ ] **T4.8** `shortcodes/quote-form.php`: rename function, shortcode `[tpp_quote_form]` → `[jpn_quote_form]`, nonce field, text-domain. Verify: `[jpn_quote_form]` renders form.
- [ ] **T4.9** `header.php` + `footer.php`: text-domain, brand display text, Darwin/Nightcliff refs, SEO footer links. Verify: no TPP strings.
- [ ] **T4.10** `front-page.php` + `templates/landing-page.php`: @package, copy rewrites (mirror T2.4/T2.6 changes), shortcode call. Verify: rendered page matches standalone.
- [ ] **T4.11** `assets/css/theme.css`: apply same token + var sweep as T1.1/T1.2. Verify: matches standalone styles.
- [ ] **T4.12** `assets/css/elementor.css`: full rebuild — remove dead `--navy/--orange/--gold` refs, rebuild `.jpn-*` utility classes against new palette. Verify: classes resolve to real colors.
- [ ] **T4.13** `assets/js/theme.js`: docblock, testimonials copy, `data.source`, `TPP` → `JPN`, ajax action. Verify: form posts to `jpn_submit_lead`.
- [ ] **T4.14** `readme.txt` + `wordpress-theme/README-WP.md`: theme name, description (fix stale "Poppins+Inter" line), zip name, shortcode, admin panel label. Verify: docs accurate.
- [ ] **T4.15** Regenerate `wordpress-theme/jims-painting-nightcliff.zip`. Verify: zip contains `jims-painting-nightcliff/` root.

## Phase 5 — Repo + deploy

- [ ] **T5.1** Update `README.md`: brand name, live preview URL (placeholder new), file-structure diagram, pending-assets section (logo, phone, ABN, domain). Verify: no old URLs.
- [ ] **T5.2** Commit all changes with conventional commit message `feat: rebrand to Jim's Painting Nightcliff (franchise identity)`. Verify: clean working tree.
- [ ] **T5.3** Rename GitHub repo via `gh repo rename jims-painting-nightcliff`. Verify: `gh repo view` shows new name.
- [ ] **T5.4** Push to renamed repo. Verify: GitHub Actions deploy workflow triggers.
- [ ] **T5.5** Verify new Pages URL `https://firozmahamud29.github.io/jims-painting-nightcliff/` returns HTTP 200 and renders rebranded site. Verify: `curl -sI` 200, visual check.

## Phase 6 — Visual QA

- [ ] **T6.1** Playwright screenshot of hero, before/after slider, packages, gallery, form. Verify: red palette, Rubik headings, no terracotta, form works.
- [ ] **T6.2** Mobile viewport (375px) screenshot. Verify: layout intact, CTAs tappable.
- [ ] **T6.3** Final grep sweep across entire repo: `grep -rli "territory proud\|tpp_\|TPP_\|TerritoryProud\|Fraunces\|Manrope"` (excluding `openspec/` change docs which intentionally reference old names). Verify: only openspec/ matches remain.
