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

function cdp_theme_colors() {
	add_theme_support( 'editor-color-palette',
		array(
			array( 'name' => 'Bleu', 'slug'  => 'cdp_blue', 'color' => '#014fff' ),
			array( 'name' => 'Rose', 'slug'  => 'cdp_pink', 'color' => '#e7308f' ),
			array( 'name' => 'Vert', 'slug'  => 'cdp_green', 'color' => '#8fc43c' ),
			array( 'name' => 'Orange', 'slug'  => 'cdp_orange', 'color' => '#ea7700' ),
		)
	);
}
add_action( 'after_setup_theme', 'cdp_theme_colors' );
