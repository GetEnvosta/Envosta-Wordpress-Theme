# Changelog

All notable changes to Envosta Parent are tracked here. The format follows [Keep a Changelog](https://keepachangelog.com/en/1.1.0/) and the project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

---

## [1.0.1] — 2026-05-11

- **Editor compatibility fix:** switched `block.json`'s `editorScriptModule` to the classic `editorScript`. The modern Script Modules path for editor scripts didn't load reliably across all WP 6.5–6.6 versions, leaving the Menu Drawer block falling back to its server render in the canvas. The frontend `view.js` is still a Script Module (Interactivity API).
- **Drawer UX parity with WC Mini Cart:** matched WC's 0.3s ease-in-out animation timing, expanded panel width to `min(90vw, 480px)`, and moved all visual chrome (bg, padding, content width) from the panel CSS onto the menu-drawer template part's outer Group so authors edit it at drawer width with the theme's color variation applied.
- **Default `parts/header.html`** replaced with the Envosta canonical header layout: site-logo + title (left, desktop), navigation (center, desktop), WC mini-cart + menu-drawer trigger (right, with the drawer trigger mobile-only). Uses the `hide-*` visibility utilities.
- **Default header.html portability:** dropped the hard-coded `{"ref":9}` from the navigation block (fresh installs now render WP's standard nav placeholder), and swapped site-title's textColor from the old `theme-5` slug to Assembler's canonical `contrast` slug so it renders correctly on all default and variation palettes.
- **Menu Drawer template-part area** now properly registered in `theme.json`'s `templateParts` array. Without this declaration WP was assigning the part to "uncategorized" regardless of our PHP filter. `theme.json` is now in the README's MODIFY list (structural change, not a design-token edit).
- **Envosta screenshot** restored — the v1.0.0 reset accidentally pulled Assembler's stock screenshot.
- **Bumped version 1.0.0 → 1.0.1** so cached editor JS (`edit.js?ver=1.0.0`) is invalidated for installs upgrading from the brief snapshot.

## [1.0.0] — 2026-05-11

First clean baseline. Built as a thin Envosta-specific layer on top of upstream Assembler.

**Snapshot of:** Automattic Assembler **v0.0.29** ([trunk](https://github.com/Automattic/themes/tree/trunk/assembler)).

### Added

- **`envosta/menu-drawer` block** (`blocks/menu-drawer/`).
  Mirrors the WooCommerce Mini-Cart architecture: a trigger button + a slide-in drawer whose contents come from an editable template part. Built on the Interactivity API (`store('envosta/menu-drawer')`, `actions.toggle`, `actions.close`, `actions.handleKeydown`). Block sidebar exposes an icon picker with seven preset icons (`hamburger`, `menu`, `dots`, `dots-vertical`, `grid`, `list`, `chevron-down`), an icon-size range, and an optional text label.

  - **Note on icon duplication:** the icon library lives in **two** files — `blocks/menu-drawer/icons.js` for the editor and `envosta_menu_drawer_get_icons()` in `blocks/menu-drawer/render.php` for the frontend. They must stay in sync (same slugs, same SVG markup). This duplication is intentional — `icons.js` is a JS ES module and PHP can't import it; the alternative would be a build step, which this theme deliberately avoids. To add a new icon: update both files **and** add the slug to the `triggerIcon` enum in `block.json`.

- **`menu-drawer` template part** (`parts/menu-drawer.html`).
  Default contents: search field, vertical navigation, separator, social-links row. Authors edit it in Site Editor like any other template part.

- **`menu-drawer` template-part area.**
  Registered via `default_wp_template_part_areas` filter and surfaced via a `get_block_templates` filter (`envosta_register_template_part_areas` + `envosta_add_menu_drawer_template_part`). Mirrors how WooCommerce registers its `mini-cart` area.

- **Utility CSS classes** (`assets/css/utilities.css`):
  - **Responsive visibility:** `hide-on-mobile`, `hide-on-tablet`, `hide-on-desktop`
  - **Auth-state visibility:** `show-if-logged-in`, `show-if-logged-out` (CSS-only, key off body class) and `hide-if-logged-in`, `hide-if-logged-out` (server-side block removal via `render_block` filter)
  - **Texture:** `grainy` (with `grain-subtle` / `grain-strong` intensity modifiers) — adds a film-grain SVG noise overlay

- **GitHub release auto-updater** (`envosta_github_theme_update`).
  Polls `api.github.com/repos/GetEnvosta/Envosta-Wordpress-Theme/releases/latest`, caches the response for 12h, and surfaces new releases via WP's native theme-update UI. The standard distribution path for an indie premium theme — Automattic's Assembler doesn't need this because it ships through wp.org, but Envosta does.

- **Body class** `envosta-logged-in` / `envosta-logged-out` (`envosta_logged_in_body_class`) — drives the `show-if-*` CSS utilities.

### Changed

Only two upstream Assembler files are modified. Both modifications are additive and localized — see `README.md`'s "Files I MODIFY" table for exact locations.

- **`style.css`** — opening theme header comment replaced with Envosta header. Theme name, author, version (1.0.0), description, requires-PHP bump to 7.4, requires-WP bump to 6.5. CSS below the header is unchanged.
- **`functions.php`** — single `require __DIR__ . '/inc/envosta-additions.php';` appended at end of file under an `ENVOSTA ADDITIONS` block. No upstream functions modified in place.

### Removed

- Previous experimental files unrelated to this architecture (51 patterns, mini-cart hijack JS, dashboard widget, scroll utilities, modified header/footer/theme.json/styles, `envosta-studio-setup.php`, etc.) were wiped before applying the v1.0.0 baseline. Earlier exploration is preserved in git history on the `main` branch prior to the `reset/v1.0.0-alignment` merge.

### Notes for future ports

When porting a future Assembler release: see `README.md` → "Porting a future Assembler update." Diff this repo against upstream, restore any drifted Assembler files, then re-apply the two `style.css` / `functions.php` modifications.
