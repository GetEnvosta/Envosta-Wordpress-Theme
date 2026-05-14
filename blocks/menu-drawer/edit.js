/**
 * Envosta — Menu Drawer block editor.
 *
 * Registers the envosta/menu-drawer block, renders a preview of the
 * chosen trigger icon, and exposes a sidebar Icon Picker so designers
 * can swap icons without touching code.
 *
 * Loaded as a CLASSIC editor script (block.json's editorScript), not
 * a Script Module — so it works on every WP 6.5+ install regardless
 * of which @wordpress/* modules are exposed. No build step.
 *
 * The icon library inlined below is the MIRROR of the PHP icon
 * library in render.php's envosta_menu_drawer_get_icons(). If you
 * add/edit/remove an icon, update BOTH files AND the triggerIcon
 * enum in block.json. (icons.js used to live separately for module
 * imports — removed since this script can't import.)
 *
 * @package Envosta
 */

( function ( wp ) {
	'use strict';

	if ( ! wp || ! wp.blocks ) return;

	var registerBlockType                    = wp.blocks.registerBlockType;
	var useBlockProps                        = wp.blockEditor.useBlockProps;
	var InspectorControls                    = wp.blockEditor.InspectorControls;
	var PanelBody                            = wp.components.PanelBody;
	var SelectControl                        = wp.components.SelectControl;
	var TextControl                          = wp.components.TextControl;
	var RangeControl                         = wp.components.RangeControl;
	var el                                   = wp.element.createElement;
	var Fragment                             = wp.element.Fragment;
	var RawHTML                              = wp.element.RawHTML;
	var __                                   = wp.i18n.__;

	var ICONS = {
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

	function IconPreview( props ) {
		var slug = props.slug;
		var size = props.size || 24;
		var icon = ICONS[ slug ] || ICONS.hamburger;
		return el(
			'span',
			{
				className: 'envosta-menu-drawer__icon-preview',
				style: { display: 'inline-flex', width: size, height: size, lineHeight: 0 },
			},
			el(
				'svg',
				{
					xmlns: 'http://www.w3.org/2000/svg',
					viewBox: '0 0 24 24',
					width: size,
					height: size,
					focusable: 'false',
					'aria-hidden': 'true',
				},
				el( RawHTML, null, icon.svg )
			)
		);
	}

	function Edit( props ) {
		var attributes    = props.attributes;
		var setAttributes = props.setAttributes;
		var triggerIcon   = attributes.triggerIcon;
		var triggerLabel  = attributes.triggerLabel;
		var iconSize      = attributes.iconSize;

		var blockProps = useBlockProps( { className: 'envosta-menu-drawer' } );

		var iconOptions = Object.keys( ICONS ).map( function ( slug ) {
			return { label: ICONS[ slug ].label || slug, value: slug };
		} );

		return el(
			Fragment,
			null,
			el(
				InspectorControls,
				null,
				el(
					PanelBody,
					{ title: __( 'Trigger', 'envosta' ), initialOpen: true },
					el( SelectControl, {
						label: __( 'Icon', 'envosta' ),
						value: triggerIcon,
						options: iconOptions,
						onChange: function ( value ) { setAttributes( { triggerIcon: value } ); },
					} ),
					el( RangeControl, {
						label: __( 'Icon size (px)', 'envosta' ),
						value: iconSize,
						min: 16,
						max: 48,
						step: 1,
						onChange: function ( value ) { setAttributes( { iconSize: value } ); },
					} ),
					el( TextControl, {
						label: __( 'Label (optional)', 'envosta' ),
						help: __( 'Text shown next to the icon. Leave blank for an icon-only button.', 'envosta' ),
						value: triggerLabel,
						onChange: function ( value ) { setAttributes( { triggerLabel: value } ); },
					} )
				)
			),
			el(
				'div',
				blockProps,
				el(
					'button',
					{
						type: 'button',
						className: 'envosta-menu-drawer__trigger',
						'aria-label': triggerLabel || __( 'Open menu', 'envosta' ),
						onClick: function ( e ) { e.preventDefault(); },
					},
					el( IconPreview, { slug: triggerIcon, size: iconSize } ),
					triggerLabel
						? el( 'span', { className: 'envosta-menu-drawer__trigger-label' }, triggerLabel )
						: null
				)
			)
		);
	}

	registerBlockType( 'envosta/menu-drawer', {
		edit: Edit,
		save: function () { return null; }, // server-rendered via render.php
	} );

} )( window.wp );
