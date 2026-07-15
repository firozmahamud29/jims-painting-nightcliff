# Jim's Painting Nightcliff — WordPress Theme (Elementor Pro Ready)

A child theme of **Hello Elementor**, built for the Jim's Painting Nightcliff
landing page. Ships with a working 2-step lead form, lead storage, and the full
pre-built landing page as a visual fallback — so the site looks perfect on day
one, and you can rebuild any section visually in Elementor Pro when ready.

---

## 📦 What's in this folder

```
jims-painting-nightcliff/
├── style.css                    ← WP theme header (child of hello-elementor)
├── functions.php                ← loads inc/ + shortcodes/
├── front-page.php               ← smart Elementor-aware front page
├── header.php                   ← default header (or use Elementor Pro Header)
├── footer.php                   ← default footer (or use Elementor Pro Footer)
├── readme.txt                   ← WP-standard readme
├── inc/
│   ├── setup.php                ← theme supports, menus, Customizer, Elementor locations
│   ├── enqueue.php              ← loads fonts, theme.css, elementor.css, theme.js
│   ├── form-handler.php         ← registers "jpn_lead" CPT + admin-ajax handler + email
│   └── shortcodes.php           ← loads shortcodes/
├── shortcodes/
│   └── quote-form.php           ← [jpn_quote_form] — the 2-step form
├── templates/
│   └── landing-page.php         ← pre-built landing page (fallback layout)
└── assets/
    ├── css/
    │   ├── theme.css            ← full brand design system (identical to standalone)
    │   └── elementor.css        ← utility classes for Elementor editing
    └── js/
        └── theme.js             ← all interactions + admin-ajax form submit
```

---

## 🚀 Installation (5 minutes)

### Step 1 — Install plugins
In WP Admin → **Plugins → Add New**:
- Install + activate **Elementor** (free)
- Install + activate **Elementor Pro** (license needed)

### Step 2 — Install parent theme
**Appearance → Themes → Add New** → search **"Hello Elementor"** → Install → Activate.

### Step 3 — Install this child theme
Zip the `jims-painting-nightcliff` folder, then:
**Appearance → Themes → Add New → Upload Theme** → choose the zip → Install → Activate.

### Step 4 — Set the front page
**Settings → Reading** → "Your homepage settings" → **A static page** → select (or create) **"Home"**.

### Step 5 — Configure contact details
**Appearance → Customize → JPN — Contact Details** → enter phone, email, address, social URLs, and the lead recipient email.

✅ **You're live.** The pre-built landing page now renders with your contact details wired in.

---

## ✏️ Editing with Elementor

### To rebuild the front page visually:
1. Go to **Pages → Home → Edit with Elementor**.
2. Build your layout. The pre-built fallback stops rendering the moment Elementor detects content.
3. Drag a **Shortcode widget** wherever you want the form, paste `[jpn_quote_form]`, done.

### Elementor utility classes (Advanced tab → CSS Classes):
| Class | Effect |
|---|---|
| `tpp-bg-navy` `tpp-bg-cream` `tpp-bg-orange` | Brand backgrounds |
| `tpp-pad-lg` `tpp-pad-md` `tpp-pad-sm` | Section paddings |
| `tpp-container` `tpp-narrow` | Content widths |
| `tpp-h1` `tpp-h2` `tpp-h3` | Brand typography |
| `tpp-btn` `tpp-btn-outline` | Buttons |
| `tpp-card` | Card with brand shadow |
| `tpp-stars` | Gold star colour |
| `tpp-text-orange` `tpp-text-gold` `tpp-text-white` | Text colours |

### Header & Footer
Default header/footer render out of the box. To customise visually:
**Templates → Theme Builder → Header (or Footer) → Add New** → set display condition "Entire Site".

---

## 📧 The Lead Form

**How it works:**
1. Visitor fills the 2-step form.
2. JS POSTs to `admin-ajax.php` (action: `jpn_submit_lead`).
3. WP creates a **Lead** post (custom post type) with all fields as meta.
4. WP emails the recipient (Customizer → "Lead Form Recipient Email").
5. Reply-To is set to the visitor — sales team can hit Reply.

**Where leads appear:**
WP Admin sidebar → **Quote Leads** — sortable list with Name, Phone, Email, Type, Suburb, Date columns.

**Drop the form anywhere:**
```
[jpn_quote_form]
[jpn_quote_form title="Get a Commercial Quote"]
```

---

## 🛠️ Technical notes

- **Parent theme:** Hello Elementor (Elementor's official blank canvas).
- **No build step** — plain PHP/CSS/JS, fully readable.
- **WP Coding Standards** compliant (sanitisation, nonces, escaping).
- **Accessibility:** skip-link, ARIA on tabs/accordion/form, focus states, reduced-motion.
- **Performance:** Google Fonts preconnected, no jQuery dependency for theme.js.

---

## ❓ Troubleshooting

**Form returns "0" or "Forbidden"**
→ Make sure the Customizer recipient email is set, and that wp_mail works on Hostinger (it does by default).

**Pre-built page won't go away after editing in Elementor**
→ Refresh permalinks: Settings → Permalinks → Save Changes.

**Header looks doubled**
→ You have both the default header AND an Elementor Pro header condition. Edit the Elementor header's Display Conditions to "Entire Site" only.

---

Built by **Qii Creative** for Jim's Painting Nightcliff · Darwin, NT · 2026.
