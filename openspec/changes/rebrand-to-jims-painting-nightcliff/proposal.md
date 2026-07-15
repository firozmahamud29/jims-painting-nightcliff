## Why

Client rebranding from "Territory Proud Painters" (independent) to "Jim's Painting Nightcliff" (official Jim's Group franchise). Current site uses Territory Earth editorial design (terracotta/forest palette, Fraunces serif). Franchise identity demands Jim's red `#ee3127`, sans-serif Rubik typography, official logo asset, and franchise trust signals. Staying on the old identity misrepresents the franchise affiliation and undercuts the national-brand trust halo.

## What Changes

- **Palette swap** — terracotta `#C0552E` / forest `#2C3A2E` / ochre / bone/clay → Jim's red `#ee3127` + white `#ffffff` + charcoal `#181a20`/`#313131`. All CSS tokens updated.
- **Typography swap** — Fraunces (serif display) + Manrope → **Rubik** (headings, matches jims.net) + system/Roboto (body). No serifs anywhere.
- **Logo redesign** — hand-drawn "Territory Proud" wordmark → official Jim's logo asset + "Painting · Nightcliff" text lockup. Never redraw "Jim's".
- **Copy rewrites** — all brand phrases ("Territory proud", "what lasts in the Territory", "Locally owned, Territory proud") → franchise language. Taglines → "Australia's first choice for local painting". Service list aligned to Jim's Painting canonical scope.
- **Trust badges added** — "10,000+ 5-Star Reviews", "Fully Insured", "Police Checked", "Jim's Work Guarantee". Replace or augment current proof points.
- **CTA copy** — "Book Your Free Quote" → "Request a Free Quote" + "Call Now" click-to-call (matches franchisee convention, Perth site pattern).
- **Booking flow** — form destination email + phone placeholder updated. Optional `131 546` secondary number slot.
- **SEO/schema** — JSON-LD LocalBusiness name/description/url/email updated. Title tag, meta description, OG tags rewritten. `areaServed` keeps Darwin-wide, adds Nightcliff as home base.
- **Repo rename** — `territory-proud-painters` → `jims-painting-nightcliff`. New GitHub Pages URL.
- **WordPress theme identifiers** — **BREAKING (no live DB yet, safe to rename freely)**: text-domain `territory-proud-painters` → `jims-painting-nightcliff`; post type `tpp_lead` → `jpn_lead`; option `tpp_options` → `jpn_options`; meta `_tpp_*` → `_jpn_*`; functions `tpp_*` → `jpn_*`; constants `TPP_*` → `JPN_*`; shortcode `[tpp_quote_form]` → `[jpn_quote_form]`; CSS class prefix `.tpp-*` → `.jpn-*`; JS global `TPP` → `JPN`.
- **Theme directory + zip** renamed: `territory-proud-painters/` → `jims-painting-nightcliff/`.
- **Stale elementor.css rebuilt** — current file references dead CSS vars (`--navy`, `--orange`, `--gold`); rebuild against new Jim's palette.

## Capabilities

### New Capabilities
- `franchise-brand-system`: Jim's Group brand identity system — palette tokens, typography stack, logo lockup rules, trust-badge component, franchise copy library. Replaces the ad-hoc "Territory Earth" design system.

### Modified Capabilities
(none — no existing OpenSpec specs in this repo; this is the first change)

## Impact

**Files touched (21):** `index.html`, `css/styles.css`, `js/main.js`, `README.md`, `wordpress-theme/` (entire tree — 16 files), `.github/workflows/deploy.yml` (no brand strings but verify path).

**Identifier surface (DB-stored, no live data yet):** post type slug, option key, 4 meta keys, customizer section ID, 2 nonce names, 1 ajax action, 1 shortcode tag. All safe to rename pre-launch.

**External:** GitHub repo rename (settings-side, breaks old Pages URL). `bloginfo('name')` set in WP Admin (documented, not code).

**Asset dependencies:** official Jim's logo PNG must be sourced (URLs documented in research brief). Fallback: text lockup "Jim's Painting · Nightcliff" until asset provided.

**Risks:**
- Official logo asset not yet in hand — need client or scrape from jimspainting.com.au CDN (permissive franchisee policy documented).
- DB migration N/A (pre-launch), but if rebrand happens after any test leads are saved, those CPT rows become orphaned. Confirm clean DB before deploy.
- Repo rename breaks existing client preview link (`territory-proud-painters` → `jims-painting-nightcliff`). Notify client.

**Non-goals:**
- Not redesigning IA or adding new sections. Same 8-section structure, same before/after slider, same 2-step form mechanics. Rebrand only.
- Not touching the `$1,000 weekly voucher draw` Jim's promo — optional addition, defer to client ask.
- Not integrating Jim's central booking API — form still emails franchisee directly + saves local CPT.
- Not translating copy — English only.
