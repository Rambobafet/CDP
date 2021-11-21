<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

wp_enqueue_style( 'main', './style.css', [], true, 'screen');

wp_enqueue_script('jquery');
wp_enqueue_script( 'toolkit', '.js/toolkit', ['jquery']);
wp_enqueue_script( 'player', '.js/player', ['jquery'; 'toolkit']);
