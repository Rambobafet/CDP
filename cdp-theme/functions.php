<?php
require_once get_stylesheet_directory() . '/aria-walker-nav-menu.php';
require_once get_stylesheet_directory() . '/CONSTANT.php';

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

function admin_css() {
	$admin_handle = 'admin_css';
	$admin_stylesheet = get_template_directory_uri() . '/admin.css';

	wp_enqueue_style($admin_handle, $admin_stylesheet);
}
add_action('admin_print_styles', 'admin_css', 11);

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );


function my_fe_scripts() {
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'player', get_template_directory_uri() . '/js/player', ['jquery']);
  wp_enqueue_script( 'ariaMenu', get_template_directory_uri() . '/js/aria-menu', ['jquery']);
  wp_enqueue_script( 'mobileMenu', get_template_directory_uri() . '/js/mobileMenu', ['jquery']);

}
add_action( 'wp_enqueue_scripts', 'my_fe_scripts' );

/**
 * Gutenberg scripts and styles
 * @link https://www.billerickson.net/block-styles-in-gutenberg/
 */
function cdp_gutenberg_scripts() {
	wp_enqueue_script(
		'cdp-editor',
		get_template_directory_uri() . '/js/editor.js',
		array( 'wp-blocks', 'wp-dom' ),
		filemtime( get_template_directory() . '/js/editor.js' ),
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

add_theme_support('editor-styles');
add_editor_style( 'style.css' );

function my_acf_google_map_api( $api ){

	$api['key'] = GMAPS_API_KEY;

	return $api;

}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
add_theme_support( 'title-tag' );