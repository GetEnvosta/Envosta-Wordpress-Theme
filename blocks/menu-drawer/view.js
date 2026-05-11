/**
 * Envosta — Menu Drawer block frontend (Interactivity API store).
 *
 * Registered as a Script Module (WP 6.5+) via block.json's
 * viewScriptModule, so this file is loaded as an ES module with no
 * bundler required. Native browser-resolvable import.
 *
 * @package Envosta
 */

import { store, getContext } from '@wordpress/interactivity';

const SCROLL_LOCK_CLASS = 'envosta-drawer-open';

store( 'envosta/menu-drawer', {
	actions: {
		toggle() {
			const context = getContext();
			context.isOpen = ! context.isOpen;
			if ( context.isOpen ) {
				document.body.classList.add( SCROLL_LOCK_CLASS );
			} else {
				document.body.classList.remove( SCROLL_LOCK_CLASS );
			}
		},
		close() {
			const context = getContext();
			if ( ! context.isOpen ) return;
			context.isOpen = false;
			document.body.classList.remove( SCROLL_LOCK_CLASS );
		},
		handleKeydown( event ) {
			if ( event.key !== 'Escape' && event.key !== 'Esc' ) return;
			const context = getContext();
			if ( ! context.isOpen ) return;
			context.isOpen = false;
			document.body.classList.remove( SCROLL_LOCK_CLASS );
		},
	},
} );
