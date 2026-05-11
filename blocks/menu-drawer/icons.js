/**
 * Envosta — Menu Drawer icon library (editor side).
 *
 * Mirror of envosta_menu_drawer_get_icons() in render.php. Keep these
 * two in sync — same slugs, same SVG inner markup, same strokeOnly
 * flag. Duplication is intentional: this is a JS ES module and PHP
 * can't import it. The alternative would be a build step, which the
 * theme deliberately avoids.
 *
 * Each icon stores raw <svg> inner markup as a string. The editor
 * Picker renders it via element.RawHTML so we can stay JSX-free and
 * compile-free.
 *
 * @package Envosta
 */

const ICONS = {
	hamburger: {
		label: 'Hamburger',
		svg: '<path d="M3 6h18 M3 12h18 M3 18h18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
	},
	menu: {
		label: 'Menu',
		svg: '<path d="M4 7h16 M4 12h16 M4 17h10" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
	},
	dots: {
		label: 'Dots (Horizontal)',
		svg: '<circle cx="5" cy="12" r="2" fill="currentColor"/><circle cx="12" cy="12" r="2" fill="currentColor"/><circle cx="19" cy="12" r="2" fill="currentColor"/>',
	},
	'dots-vertical': {
		label: 'Dots (Vertical)',
		svg: '<circle cx="12" cy="5" r="2" fill="currentColor"/><circle cx="12" cy="12" r="2" fill="currentColor"/><circle cx="12" cy="19" r="2" fill="currentColor"/>',
	},
	grid: {
		label: 'Grid',
		svg: '<rect x="3" y="3" width="7" height="7" rx="1" fill="none" stroke="currentColor" stroke-width="2"/><rect x="14" y="3" width="7" height="7" rx="1" fill="none" stroke="currentColor" stroke-width="2"/><rect x="3" y="14" width="7" height="7" rx="1" fill="none" stroke="currentColor" stroke-width="2"/><rect x="14" y="14" width="7" height="7" rx="1" fill="none" stroke="currentColor" stroke-width="2"/>',
	},
	list: {
		label: 'List',
		svg: '<path d="M8 6h13 M8 12h13 M8 18h13 M3 6h.01 M3 12h.01 M3 18h.01" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>',
	},
	'chevron-down': {
		label: 'Chevron Down',
		svg: '<path d="m6 9 6 6 6-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>',
	},
};

export default ICONS;
