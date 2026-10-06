# Ricky Tools - Build Roadmap

## Delivered (up to v1.17.0)
- Architecture, namespaced autoloader, guarded module bootstrap
- Design system, header, footer, homepage (hero, trust band, category cards, per-category product rows)
- WooCommerce integration: uniform cards, badges, AJAX add-to-cart, mini-cart drawer, live search
- Shop filters (category, brand, price, stock) with filter chips and custom sorting
- Single product: delivery/trust block, Specifications + FAQ tabs, recently viewed, sticky add-to-cart bar, Order on WhatsApp
- Cart, checkout and thank-you trust elements
- Security hardening, SEO meta + JSON-LD schema (steps aside for Yoast / Rank Math / AIOSEO)
- Auto-created, Merchant-Center-ready policy pages and menus
- Merchant Compliance Inspector (WooCommerce > Merchant Compliance)
- One Click Demo Import package (`demo/content.xml`, 42 products)
- TGMPA plugin installer, Customizer, translation template
- Child theme (`ricky-tools-child/`) and Ricky WebP Optimizer plugin

## Next
1. Compare page (deep-link + compare plugin styling).
2. Per-template critical CSS for 95+ mobile PageSpeed.
3. Full `.pot` string extraction (`wp i18n make-pot`).
4. RTL stylesheet (`theme.min-rtl.css`).
5. QA matrix: cross-browser/device checklist and WCAG 2.2 AA audit.
6. PHPCS (WordPress-Extra) + PHPStan clean run and theme-check pass.
