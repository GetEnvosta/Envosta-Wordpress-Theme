# Envosta Parent

A WordPress FSE parent theme. Snapshot of [Automattic's Assembler](https://github.com/Automattic/themes/tree/trunk/assembler) at **v0.0.29** with a thin layer of Envosta-specific additions on top. Envosta client sites are built as child themes of this one.

The architecture is deliberate: every Assembler-origin file is kept **byte-for-byte identical** to upstream so future Assembler updates can be ported by diffing one repo against the other. All Envosta logic lives in clearly-labeled additions.

---

## File inventory

This is the single source of truth for "what's mine vs. what came from Assembler." When porting a future Assembler update, this table answers in seconds what to compare and what to leave alone.

### ✅ Files I OWN — Envosta-created, edit freely

| Path | Purpose |
|---|---|
| `blocks/menu-drawer/block.json` | Block manifest. Attributes, icon picker enum, script-module wiring. |
| `blocks/menu-drawer/render.php` | Server-side render. Trigger button + Interactivity-API drawer. Hosts the PHP icon library. |
| `blocks/menu-drawer/view.js` | Frontend Interactivity-API store (`envosta/menu-drawer`). Handles open/close/Escape + body scroll lock. |
| `blocks/menu-drawer/edit.js` | Editor UI. Icon picker sidebar control. Loaded as a Script Module so it can `import` icons.js. |
| `blocks/menu-drawer/icons.js` | JS icon library. Mirror of `render.php`'s `envosta_menu_drawer_get_icons()`. |
| `blocks/menu-drawer/style.css` | Frontend drawer styles. |
| `blocks/menu-drawer/editor.css` | Editor-only block styles (hide the drawer overlay in canvas). |
| `parts/menu-drawer.html` | Editable template part — the drawer's contents (nav, search, social, etc.). |
| `assets/css/utilities.css` | Visibility (`hide-on-mobile/tablet/desktop`, `show-if-logged-in/out`) + `grainy` texture utilities. |
| `inc/envosta-additions.php` | All Envosta PHP — block registration, template-part area, body class, render filter, GitHub updater. |
| `README.md` | This file. |
| `CHANGELOG.md` | Versioned change log. |
| `.gitignore` | Git ignore rules. |
| `LICENSE` | GPL-2.0 license. |

### ⚠️ Files I MODIFY on top of Assembler — touch with care

Four files are modified relative to upstream. All modifications are additive and localized.

| Path | What's modified | Where the modification lives |
|---|---|---|
| `style.css` | Theme header comment block replaced with Envosta header (theme name, version 1.0.0, description, etc.). | Lines 1–15 (the opening `/* … */` comment). The CSS below the header is unmodified Assembler. |
| `functions.php` | Single `require __DIR__ . '/inc/envosta-additions.php';` appended after the last Assembler line, under a clearly marked `ENVOSTA ADDITIONS` block. | Final ~15 lines of the file. Everything above the marker is unmodified Assembler. |
| `screenshot.png` | Replaced with Envosta-branded screenshot. | Whole file. |
| `theme.json` | One entry appended to `templateParts` array assigning `parts/menu-drawer.html` to the custom `menu-drawer` area. Structural (template-part registration), not a design-token change — design tokens still belong in child themes. | Inside `templateParts`, single object added after the existing `header` / `footer` entries. |

### 🚫 Files I DO NOT TOUCH — pristine Assembler

Treat the paths below as read-only. If you find yourself wanting to modify any of them, **stop** and either (a) accomplish the change via a hook from `inc/envosta-additions.php` or (b) document a deliberate exception in `CHANGELOG.md`.

```
assets/fonts/**
parts/header.html
parts/footer.html
patterns/**
readme.txt
screenshot.png
styles/**
templates/**
theme.json
```

(`assets/css/` and `assets/js/` may contain Envosta-created files alongside any Assembler-origin assets; check git blame.)

---

## Verifying the inventory is honest

After making any change, you can confirm only the expected Assembler files have been touched:

```bash
# From the repo root, with upstream Assembler cloned to ../assembler
diff -rq ../assembler/ . --exclude=.git --brief
```

Every line of output should reference one of:
- `style.css` (header changed)
- `functions.php` (additions appended)
- `.gitignore` (additions appended)
- An OWN file from the table above (new in Envosta)

**Anything else is a violation of the minimize-upstream-touches rule.**

---

## Porting a future Assembler update

When Automattic ships Assembler v0.0.30 (or later), this is the canonical port procedure:

1. **Clone the new upstream** to a sibling directory:
   ```bash
   git clone --depth 1 --filter=blob:none --sparse https://github.com/Automattic/themes.git /tmp/upstream
   cd /tmp/upstream && git sparse-checkout set assembler
   ```

2. **Check the new version number** in `/tmp/upstream/assembler/style.css` so you know what you're porting to.

3. **Diff against your working repo:**
   ```bash
   diff -rq /tmp/upstream/assembler/ . --exclude=.git
   ```

4. **For each Assembler-origin file that differs** (excluding `style.css` and `functions.php`): copy the upstream version verbatim into this repo. The OWN files and the modifications in `style.css` / `functions.php` are unaffected.

5. **For `style.css`**: take the upstream version, then re-apply the Envosta header (lines 1–15).

6. **For `functions.php`**: take the upstream version, then re-append the `ENVOSTA ADDITIONS` block (final ~15 lines).

7. **Update the snapshot version** in this README's intro line, `CHANGELOG.md`, and `style.css`'s `Tested up to:`.

8. **Smoke-test** the Menu Drawer block, the visibility utilities, and the GitHub updater. Commit.

---

## Architecture of the Envosta additions

### The Menu Drawer block

Mirrors how WooCommerce's Mini-Cart block works:

| WooCommerce | Envosta |
|---|---|
| `woocommerce/mini-cart` block (cart icon) | `envosta/menu-drawer` block (icon picker — hamburger / menu / dots / grid / list / chevron) |
| Click → drawer slides in | Click → drawer slides in (Interactivity API store) |
| Drawer contents = `mini-cart` template part | Drawer contents = `menu-drawer` template part |
| `mini-cart` registered as its own template-part area | `menu-drawer` registered as its own template-part area |

Authors drop the Menu Drawer block in their header, pick an icon, and edit the drawer's contents via Site Editor — just like the mini-cart.

### Utility classes

Listed in `assets/css/utilities.css`. Apply via the block editor's **Advanced → Additional CSS class** field. Stack any combination.

| Class | Effect |
|---|---|
| `hide-on-mobile` | Hidden below 600px |
| `hide-on-tablet` | Hidden 600–959px |
| `hide-on-desktop` | Hidden at 960px and up |
| `hide-if-logged-in` | Block is removed entirely (server-side) for authenticated users |
| `hide-if-logged-out` | Block is removed entirely (server-side) for guest users |
| `show-if-logged-in` | Visible only to authenticated users |
| `show-if-logged-out` | Visible only to guest users |
| `grainy` | Adds a film-grain noise overlay to the block's background |
| `grain-subtle` / `grain-strong` | Tunes `grainy`'s intensity |

### GitHub release updater

`envosta_github_theme_update()` in `inc/envosta-additions.php` polls `api.github.com/repos/GetEnvosta/Envosta-Wordpress-Theme/releases/latest` and surfaces new releases via the standard WP theme-update UI. Cached for 12h. To ship an update: tag a release on GitHub, attach the theme zip, and connected sites pick it up on their next update check.

---

## Development workflow

```bash
# Clone
git clone git@github.com:GetEnvosta/Envosta-Wordpress-Theme.git envosta-parent
cd envosta-parent

# Optional: get upstream Assembler for porting / diffing
git clone --depth 1 --filter=blob:none --sparse https://github.com/Automattic/themes.git /tmp/automattic-themes
cd /tmp/automattic-themes && git sparse-checkout set assembler && cd -
```

For live preview while iterating, use [WordPress Playground](https://playground.wordpress.net/) with the theme URL:

```
https://playground.wordpress.net/?theme=https://github.com/GetEnvosta/Envosta-Wordpress-Theme&storage=browser
```

That spins up a real WP install in the browser, pulling the latest commit from GitHub on each load.

---

## Requirements

- **WordPress 6.5+** (required for `viewScriptModule` / `editorScriptModule` and the Interactivity API as bundled).
- **PHP 7.4+**.

---

## License

GPL-2.0-or-later, inherited from upstream Assembler. See `LICENSE`.
