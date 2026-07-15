## ADDED Requirements

### Requirement: Color tokens SHALL match Jim's Group official palette
The system SHALL define CSS custom properties on `:root` using exact hex values extracted from the live `jimspainting.com.au` production CSS:
- `--jims-red: #ee3127` (primary brand red)
- `--jims-red-dark: #c4261d` (hover/pressed state)
- `--jims-red-deep: #ee2e24` (acceptable swap variant)
- `--ink: #181a20` (near-black backgrounds/footer)
- `--charcoal: #313131` (body text)
- `--charcoal-mid: #5a5a5a` (captions/secondary)
- `--bone: #ffffff` (white surfaces)
- `--cloud: #f5f6f8` (light section background)
- `--line: #e4e6ea` (hairline borders)

All former "Territory Earth" tokens (`--terracotta`, `--forest`, `--ochre`, `--clay`, `--mist`) SHALL be removed. No code SHALL reference the removed tokens after rebrand.

#### Scenario: Old palette tokens removed
- **WHEN** a developer greps `css/styles.css` and `assets/css/theme.css` for `--terracotta`, `--forest`, `--ochre`, `--clay`
- **THEN** zero matches returned

#### Scenario: New tokens defined
- **WHEN** the stylesheet loads
- **THEN** `getComputedStyle(document.documentElement).getPropertyValue('--jims-red')` returns `#ee3127` (whitespace-trimmed)

#### Scenario: Primary buttons render brand red
- **WHEN** any `.btn-primary` or primary CTA renders
- **THEN** background-color computes to `rgb(238, 49, 39)` (the RGB equivalent of `#ee3127`)

---

### Requirement: Typography SHALL use Rubik for headings and sans-serif body
The system SHALL load **Rubik** (Google Font weights 400/500/600/700/800) for all headings, eyebrows, and display text. Body copy SHALL use the system font stack (`system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, sans-serif`). No serif font (including Fraunces, Georgia) SHALL be loaded or referenced anywhere.

The `--font-head` token SHALL be `'Rubik', system-ui, sans-serif`. The `--font-body` token SHALL be the system stack. The former `--serif` token SHALL be removed.

#### Scenario: No serif fonts loaded
- **WHEN** the page's `<link>` tags and `@import` rules are inspected
- **THEN** no reference to `Fraunces` exists

#### Scenario: Headings render in Rubik
- **WHEN** any `h1`, `h2`, `h3`, `.eyebrow`, or `.display` element is measured
- **THEN** `getComputedStyle(el).fontFamily` contains `Rubik`

#### Scenario: Body copy uses sans-serif
- **WHEN** `body` computed style is read
- **THEN** `fontFamily` does NOT contain `Manrope`, `Fraunces`, or `Georgia`

---

### Requirement: Logo SHALL use official Jim's asset, never a redrawn wordmark
The site header and footer SHALL display the official Jim's logo asset (PNG or SVG sourced from `jimspainting.com.au/wp-content/uploads/` or provided by the franchisee). The "Jim's" wordmark SHALL NOT be recreated with CSS or web fonts.

The logo SHALL be paired with a text lockup: `Painting` (division) + `Nightcliff` (location). Lockup format: `[Jim's logo asset] · Painting · Nightcliff, Darwin NT`.

If the official asset is unavailable at deploy time, a temporary text lockup `Jim's Painting · Nightcliff` (with "Jim's" styled in brand red, bold, italic) MAY be used until the asset is provided. This fallback MUST be flagged in the README under "Pending client assets".

#### Scenario: Logo asset loaded from official source
- **WHEN** the header renders
- **THEN** the logo `<img>` `src` points to an official Jim's CDN URL or a local `/assets/` copy of that asset

#### Scenario: No CSS-drawn "Jim's" wordmark
- **WHEN** the page DOM is inspected
- **THEN** no element uses `content: "Jim's"` or a font-based recreation of the brush script logo

#### Scenario: Fallback lockup marked pending
- **WHEN** the official asset is not used
- **THEN** README "Pending client assets" section lists "Official Jim's logo PNG"

---

### Requirement: Trust badges SHALL reflect franchise proof points
The hero and "Why Us" sections SHALL display at least four trust badges drawn from the Jim's Group franchise value proposition:
- "10,000+ Five-Star Reviews" (national network)
- "Fully Trained & Insured"
- "Police Checked"
- "Jim's Work Guarantee"

Badges SHALL use icon + label format. Icons SHALL be inline SVG (no external dependency). The former "Territory proud" / "Locally owned" proof points SHALL be replaced or supplemented — "Locally owned" MAY be retained as a fifth badge since the franchisee is Darwin-based.

#### Scenario: Four franchise badges render in hero
- **WHEN** the hero section loads
- **THEN** at least 4 badge elements are present, each containing one of the four required phrases

#### Scenario: Jim's Work Guarantee badge present
- **WHEN** the "Why Us" section renders
- **THEN** a badge or card with the exact text "Jim's Work Guarantee" is visible

---

### Requirement: CTA copy SHALL match franchise convention
All primary call-to-action buttons SHALL use one of two franchise-standard labels:
- "Request a Free Quote" (form CTAs)
- "Call Now" (phone CTAs, click-to-call `tel:` links)

The former "Book Your Free Quote" and "Get Your Free Quote" labels SHALL be replaced. Secondary CTAs MAY use "View Packages" or "See Our Work".

The "Call Now" button SHALL be a `tel:` link to the franchisee's mobile number (placeholder `0400 000 000` until client provides real number). An optional secondary line "Or call Jim's on 131 546" MAY appear in the footer.

#### Scenario: Form CTA uses franchise label
- **WHEN** any button that opens or scrolls to the quote form is rendered
- **THEN** the label text is exactly "Request a Free Quote"

#### Scenario: Call Now is click-to-call
- **WHEN** the "Call Now" button is clicked on a mobile device
- **THEN** the device dialer opens with the franchisee's mobile number

#### Scenario: Old CTA labels removed
- **WHEN** the page is grepped for "Book Your Free Quote", "Get Your Free Quote"
- **THEN** zero matches

---

### Requirement: Copy SHALL replace all Territory-brand phrases
All occurrences of Territory-brand identity phrases SHALL be replaced with franchise-appropriate language:
- "Territory Proud Painters" → "Jim's Painting Nightcliff"
- "Territory proud" / "Territory Proud" → removed or replaced with "Backed by Jim's Group"
- "what actually lasts in the Territory" → "built to last in the Top End climate"
- "Locally owned, Territory proud" → "Locally owned. Backed by Jim's."
- "Darwin's trusted painters since 2014" → "Darwin's trusted painters, backed by Jim's Group" (drop "since 2014" unless client confirms founding year under new brand)

"Darwin" as a service-area reference SHALL be retained where it describes the region served (hero, schema `areaServed`, footer service links). "Nightcliff" SHALL be added as the home-base suburb in the header tagline and contact section.

#### Scenario: No Territory Proud display text remains
- **WHEN** the rendered page text is searched for "Territory Proud"
- **THEN** zero matches (case-insensitive)

#### Scenario: Darwin retained as service area
- **WHEN** the hero or schema is inspected
- **THEN** "Darwin" appears as the service region, and "Nightcliff" appears as the franchisee's base suburb

---

### Requirement: WordPress identifiers SHALL use jpn_ prefix
The WordPress child theme SHALL rename all internal identifiers from the `tpp_`/`TPP_`/`territory-proud-painters` schema to `jpn_`/`JPN_`/`jims-painting-nightcliff`:
- Text domain: `territory-proud-painters` → `jims-painting-nightcliff`
- Constants: `TPP_VERSION`/`TPP_DIR`/`TPP_URI` → `JPN_VERSION`/`JPN_DIR`/`JPN_URI`
- Functions: all `tpp_*` → `jpn_*` (15 functions)
- Post type: `tpp_lead` → `jpn_lead`
- Option key: `tpp_options` → `jpn_options`
- Meta prefix: `_tpp_` → `_jpn_`
- Customizer section: `tpp_contact` → `jpn_contact`
- Nonce: `tpp_lead_nonce` → `jpn_lead_nonce`
- Ajax action: `tpp_submit_lead` → `jpn_submit_lead`
- Shortcode: `[tpp_quote_form]` → `[jpn_quote_form]`
- Enqueue handles: `tpp-fonts`/`tpp-theme`/`tpp-elementor` → `jpn-fonts`/`jpn-theme`/`jpn-elementor`
- JS global: `TPP` → `JPN`
- CSS class prefix: `.tpp-*` → `.jpn-*` (rebuild elementor.css against new palette)
- Image sizes: `tpp-gallery`/`tpp-package` → `jpn-gallery`/`jpn-package`
- Theme directory: `territory-proud-painters/` → `jims-painting-nightcliff/`
- PHP `@package`: `TerritoryProudPainters` → `JimsPaintingNightcliff`

**Pre-launch safety:** No live leads exist in any database. Renaming is safe — no migration script needed. If the rebrand is applied to an already-deployed site with real leads, a migration script SHALL be written first (out of scope for this change).

#### Scenario: No tpp_ identifiers remain in theme
- **WHEN** `grep -rn "tpp_\|TPP_\|territory-proud\|TerritoryProud" wordpress-theme/jims-painting-nightcliff/` is run
- **THEN** zero matches

#### Scenario: Shortcode renders form under new name
- **WHEN** the `[jpn_quote_form]` shortcode is placed on a page
- **THEN** the 2-step lead form renders and submits to the `jpn_submit_lead` ajax action

#### Scenario: Old shortcode fails cleanly
- **WHEN** `[tpp_quote_form]` is used (legacy)
- **THEN** no fatal error; shortcode simply does not render (WordPress default for unregistered shortcodes)

---

### Requirement: Schema.org and SEO metadata SHALL reflect new brand
The JSON-LD LocalBusiness structured data SHALL set `name` to "Jim's Painting Nightcliff", `description` to franchise-aligned copy, `url` and `email` to the new domain (pending client confirmation — placeholder `hello@jimspaintingnightcliff.com.au`), and `areaServed` to `["Darwin","Palmerston","Casuarina","Nightcliff","Top End NT"]`.

The `<title>` tag SHALL be "Jim's Painting Nightcliff — Darwin's Trusted Painters | Backed by Jim's Group". The meta description SHALL mention "Jim's Group franchise", "free quote", and "Darwin". OG tags SHALL match. The canonical URL SHALL point to the new domain (placeholder until confirmed).

#### Scenario: JSON-LD name updated
- **WHEN** the page's JSON-LD script is parsed
- **THEN** `json.name === "Jim's Painting Nightcliff"`

#### Scenario: Title tag reflects franchise
- **WHEN** `document.title` is read
- **THEN** it contains "Jim's Painting Nightcliff"

#### Scenario: Old domain removed from canonical
- **WHEN** the `<link rel="canonical">` href is inspected
- **THEN** it does NOT contain "territoryproudpainters"

---

### Requirement: GitHub repository SHALL be renamed
The GitHub repository SHALL be renamed from `territory-proud-painters` to `jims-painting-nightcliff`. The GitHub Pages site SHALL serve from the new URL `https://firozmahamud29.github.io/jims-painting-nightcliff/`. The README SHALL document the new live preview link. The old URL SHALL redirect or 404 (GitHub auto-redirects renamed repos for the main page but not Pages subpaths — client must be notified).

#### Scenario: Repo renamed on GitHub
- **WHEN** `gh repo view firozmahamud29/jims-painting-nightcliff` is run
- **THEN** the repo exists and is public

#### Scenario: Pages serves at new URL
- **WHEN** `curl -sI https://firozmahamud29.github.io/jims-painting-nightcliff/` is run
- **THEN** HTTP 200 returned

#### Scenario: README shows new URL
- **WHEN** README.md is read
- **THEN** the live preview link points to the new `jims-painting-nightcliff` URL, not the old one
