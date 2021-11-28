<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', [], true, 'screen');

wp_enqueue_script('jquery');
wp_enqueue_script( 'toolkit', get_template_directory_uri() . '/js/toolkit', ['jquery']);
wp_enqueue_script( 'player', get_template_directory_uri() . '/js/player', ['jquery', 'toolkit']);


/**
 * Gutenberg scripts and styles
 * @link https://www.billerickson.net/block-styles-in-gutenberg/
 */
function cdp_gutenberg_scripts() {
	wp_enqueue_script(
		'cdp-editor',
		get_template_directory_uri() . '/js/editor.js',
		array( 'wp-blocks', 'wp-dom' ),
		filemtime( get_template_directory_uri() . '/js/editor.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'cdp_gutenberg_scripts' );
