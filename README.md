# Envosta

The Envosta parent theme — a curated FSE (Full Site Editing) foundation for managed WordPress sites. Every Envosta client site is a small child theme on top of this parent, which means one update here ships to every client site automatically.

**Version:** 1.0.0
**Requires WordPress:** 6.4+
**Requires PHP:** 7.4+
**License:** GPL-2.0-or-later

---

## What ships in this theme

### Design system (theme.json)
- 15 color slugs (base, base-2, contrast variants, primary, accent, muted, border, status colors)
- 3 font families (Inter sans, Source Serif 4, JetBrains Mono) loaded via fontFace
- 10 fluid font sizes from XS through Hero
- 13-step spacing scale
- 5 shadow presets
- Full element and block-level style overrides

### Style variations
Eight color palettes × four typography palettes = **32 instant visual identities**.

**Colors:** Slate (default), Editorial, Earth, Ocean, Rose, Midnight (dark), Forest, Canvas
**Typography:** Bold, Editorial, Clean, Modern

Switch between them in **Appearance → Editor → Styles → Browse styles**. Client child themes pick a starting palette by copying the matching JSON into their own `styles/` folder and overriding specific values.

### Block variations (appear in the editor sidebar)
- **Navigation:** Push Menu / Slide Drawer / Full Canvas / Classic
- **Group:** Tight Section / Spacious Section
- **Cover:** Dim Overlay / Grain Overlay
- **Image:** Rounded / Bordered
- **Button:** Pill / Arrow
- **Quote:** Editorial

Clients pick from these in the block sidebar — no code required.

### Section patterns (9 shipping, extensible)
Located in `/patterns/`:
- `hero-centered`, `hero-split-left`, `hero-split-right`, `hero-fullbleed`
- `features-trio`, `features-grid`
- `content-grid`, `product-grid`
- `about-split`

Additional patterns can be added per client or upstreamed to this parent theme as the library grows.

### WooCommerce integration
Full block-based commerce stack:
- `templates/archive-product.html` — shop listing
- `templates/single-product.html` — product detail
- `templates/page-cart.html` — block-based cart
- `templates/page-checkout.html` — block-based checkout (Shopify-style)
- `templates/taxonomy-product_cat.html` — category pages
- **Cart drawer** (slide-in from right, triggered from header cart icon)
- Branded sale flash, breadcrumbs, notices, account menu
- Aesthetic harmonized with theme.json tokens

### Interactions
- Sticky-scroll header (fades in with backdrop-filter blur on scroll past 40px)
- Reveal-on-scroll animations (IntersectionObserver, respects `prefers-reduced-motion`)
- Cart drawer open/close with auto-open on add-to-cart
- Mobile menu body-class sync for push menu variant

---

## Installation

### On a self-hosted WordPress.org site

1. Zip the `envosta/` folder: `zip -r envosta.zip envosta/`
2. In WordPress admin: **Appearance → Themes → Add New → Upload Theme**
3. Upload `envosta.zip`, activate it.
4. Go to **Appearance → Editor** to explore templates, patterns, and style variations.

### On wp.cloud (Envosta platform hosting)

1. Upload to `wp-content/themes/envosta/` via SFTP or the platform's theme upload API.
2. Activate via wp-admin or WP-CLI: `wp theme activate envosta`.
3. If you're deploying this as the parent for many sites, upload it once to a shared location if your hosting supports that; otherwise upload per-site.

### On WordPress.com (Business plan or higher)

1. Requires Business or Commerce plan (custom theme uploads).
2. Upload via **Appearance → Themes → Upload** in wp-admin (not the Calypso dashboard).

---

## Using Envosta as a parent theme

A client child theme only needs 3-5 files:

```
client-name/
├── style.css           ← declares "Template: envosta"
├── theme.json          ← brand color overrides (small file)
├── patterns/           ← optional, 0-3 custom patterns
└── assets/             ← logo, favicon
```

### Example minimal child `style.css`

```css
/*
Theme Name:  Client Name
Template:    envosta
Version:     1.0.0
*/
```

### Example minimal child `theme.json` (overrides colors only)

```json
{
  "$schema": "https://schemas.wp.org/trunk/theme.json",
  "version": 3,
  "settings": {
    "color": {
      "palette": [
        { "slug": "accent",       "name": "Accent",       "color": "#ff6b35" },
        { "slug": "accent-hover", "name": "Accent Hover", "color": "#e55a2b" }
      ]
    }
  }
}
```

That's it. Every pattern, template, block variation, and Woo integration from Envosta inherits automatically.

---

## File structure

```
envosta/
├── style.css                        ← theme header
├── theme.json                       ← design system
├── functions.php                    ← enqueues + module loader
├── readme.txt                       ← WordPress theme readme
├── README.md                        ← this file
│
├── inc/
│   ├── theme-supports.php           ← WP theme supports
│   ├── block-variations.php         ← register block styles + variations
│   └── woocommerce.php              ← Woo hooks + cart drawer
│
├── parts/
│   ├── header.html                  ← site header with cart icon
│   └── footer.html                  ← 4-column footer
│
├── templates/
│   ├── index.html                   ← blog fallback
│   ├── front-page.html              ← homepage
│   ├── page.html                    ← generic page
│   ├── single.html                  ← blog post
│   ├── archive.html                 ← archive
│   ├── 404.html                     ← error page
│   ├── search.html                  ← search results
│   ├── page-landing.html            ← no-chrome landing
│   ├── page-full-width.html         ← full-width page
│   ├── archive-product.html         ← Woo shop
│   ├── single-product.html          ← Woo product detail
│   ├── page-cart.html               ← Woo block cart
│   ├── page-checkout.html           ← Woo block checkout
│   └── taxonomy-product_cat.html    ← Woo category pages
│
├── patterns/
│   ├── hero-centered.php
│   ├── hero-split-left.php
│   ├── hero-split-right.php
│   ├── hero-fullbleed.php
│   ├── features-trio.php
│   ├── features-grid.php
│   ├── content-grid.php
│   ├── product-grid.php
│   └── about-split.php
│
├── styles/
│   ├── colors/
│   │   ├── 01-slate.json
│   │   ├── 02-editorial.json
│   │   ├── 03-earth.json
│   │   ├── 04-ocean.json
│   │   ├── 05-rose.json
│   │   ├── 06-midnight.json
│   │   ├── 07-forest.json
│   │   └── 08-canvas.json
│   │
│   └── typography/
│       ├── bold.json
│       ├── editorial.json
│       ├── clean.json
│       └── modern.json
│
└── assets/
    ├── css/
    │   ├── supplemental.css         ← scroll nav, drawer, reveals, Woo overrides
    │   └── editor.css               ← editor preview styles
    └── js/
        ├── interactions.js          ← scroll state + reveal-on-scroll
        ├── mobile-menu.js           ← push menu + cart drawer
        └── block-variations.js      ← editor-side nav variations
```

---

## Extending the theme

### Adding a new pattern

1. Create `patterns/your-pattern.php`
2. Include the pattern header:

```php
<?php
/**
 * Title: Your Pattern Name
 * Slug: envosta/your-pattern-slug
 * Categories: envosta-content
 * Description: What this pattern does.
 * Viewport Width: 1440
 */
?>
<!-- wp:group ... -->
```

3. WordPress auto-registers it — no code changes needed elsewhere.

### Adding a new block style

Add to `inc/block-variations.php`:

```php
register_block_style( 'core/button', array(
    'name'  => 'envosta-btn-ghost',
    'label' => __( 'Ghost', 'envosta' ),
) );
```

Then add matching CSS to `assets/css/supplemental.css`:

```css
.wp-block-button.is-style-envosta-btn-ghost .wp-block-button__link {
    background: transparent;
    border: 1px solid currentColor;
}
```

### Adding a new style variation (color or typography)

Drop a new JSON file into `styles/colors/` or `styles/typography/`. It appears automatically in **Site Editor → Styles → Browse styles**.

---

## Versioning philosophy

This theme is the foundation for many client sites. Breaking changes affect all of them. Follow semver strictly:

- **Patch (1.0.x):** bug fixes, CSS tweaks, non-breaking additions
- **Minor (1.x.0):** new patterns, new block variations, new style presets, new hooks
- **Major (x.0.0):** anything that could change existing client rendering — color slug renames, pattern slug changes, removed templates, etc.

Major version bumps should include a migration guide for child themes.

---

## Credits

Envosta is built by [Envosta](https://envosta.com). It draws inspiration from the Assembler theme by Automattic (GPL-2.0+), Twenty Twenty-Four (GPL-2.0+), and the broader WordPress block theme ecosystem. All borrowed code is modified and redistributed under GPL-2.0-or-later.

---

## License

GPL-2.0-or-later. See `readme.txt` for the full license notice. You are free to use, modify, and redistribute this theme under the terms of the GPL.
