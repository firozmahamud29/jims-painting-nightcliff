=== Territory Proud Painters ===
Contributors: qiicreative
Requires at least: 6.0
Tested up to: 6.6
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
Tags: elementor, business, lead-generation, painting-contractor, rtl-language-support

== Description ==

Elementor-ready WordPress child theme for Territory Proud Painters (Darwin NT).
Extends the "Hello Elementor" parent theme with the brand design system, a 2-step
lead-generation form with admin-side lead storage, and conversion-focused components.

= Features =

* 2-step quote form (job details → contact details) with admin-ajax handling
* Leads stored as a custom post type + emailed to the recipient address
* Brand design system (Poppins + Inter, orange/navy palette)
* Elementor Pro Theme Builder locations (header, footer) registered
* Smart front-page: renders the pre-built landing page until you build with Elementor
* Mobile floating CTA, scroll-to-top, scroll-spy nav, FAQ accordion, package tabs
* Customizer panel for contact details (phone, email, social, lead recipient)

== Installation ==

1. Install and activate the parent theme "Hello Elementor"
   (Appearance → Themes → Add New → search "Hello Elementor").
2. Install and activate Elementor + Elementor Pro.
3. Upload this theme: Appearance → Themes → Add New → Upload Theme
   → choose territory-proud-painters.zip → Install → Activate.
4. Go to Settings → Reading → set front page to display "A static page"
   and pick (or create) a page named "Home".
5. The pre-built landing page is live. Edit with Elementor when you're ready.

== Customizer ==

Appearance → Customize → TPP — Contact Details
to set phone, email, address, social links, and lead recipient email.

== Shortcodes ==

[tpp_quote_form]  →  renders the 2-step lead form anywhere.

== Lead Management ==

Leads land in the WP admin sidebar → "Quote Leads".
Each lead stores: name, phone, email, address, painting type, property type,
suburb, preferred start date, rooms/size. The recipient also receives an email.

== Changelog ==

= 1.0.0 =
* Initial release.
