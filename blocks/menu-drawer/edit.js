/**
 * Envosta — Menu Drawer block editor.
 *
 * Registers the envosta/menu-drawer block, renders a preview of the
 * chosen trigger icon, and exposes a sidebar Icon Picker so designers
 * can swap icons without touching code.
 *
 * Loaded as a Script Module (block.json's editorScriptModule). This
 * file imports the icon library from ./icons.js natively — no
 * webpack, no build step. WordPress 6.5+ resolves the relative path.
 *
 * WP package APIs (blocks, block-editor, components, element, i18n)
 * are pulled from the global window.wp namespace. They're not yet
 * exposed as Script Modules across all supported WP versions, so
 * using globals keeps the block working everywhere WP 6.5+ runs.
 *
 * @package Envosta
 */

import ICONS from './icons.js';

const { registerBlockType }                   = window.wp.blocks;
const { useBlockProps, InspectorControls }    = window.wp.blockEditor;
const { PanelBody, SelectControl, TextControl, RangeControl } = window.wp.components;
const { createElement: el, RawHTML, Fragment } = window.wp.element;
const { __ }                                  = window.wp.i18n;

function IconPreview( { slug, size = 24 } ) {
	const icon = ICONS[ slug ] || ICONS.hamburger;
	return el(
		'span',
		{
			className: 'envosta-menu-drawer__icon-preview',
			style: { display: 'inline-flex', width: size, height: size },
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

function Edit( { attributes, setAttributes } ) {
	const { triggerIcon, triggerLabel, iconSize } = attributes;
	const blockProps = useBlockProps( { className: 'envosta-menu-drawer' } );

	const iconOptions = Object.keys( ICONS ).map( ( slug ) => ( {
		label: ICONS[ slug ].label || slug,
		value: slug,
	} ) );

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
					onChange: ( value ) => setAttributes( { triggerIcon: value } ),
				} ),
				el( RangeControl, {
					label: __( 'Icon size (px)', 'envosta' ),
					value: iconSize,
					min: 16,
					max: 48,
					step: 1,
					onChange: ( value ) => setAttributes( { iconSize: value } ),
				} ),
				el( TextControl, {
					label: __( 'Label (optional)', 'envosta' ),
					help: __( 'Text shown next to the icon. Leave blank for an icon-only button.', 'envosta' ),
					value: triggerLabel,
					onChange: ( value ) => setAttributes( { triggerLabel: value } ),
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
					onClick: ( e ) => e.preventDefault(),
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
	save: () => null, // server-rendered via render.php
} );
