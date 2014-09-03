<?php

show_admin_bar(false); 
add_theme_support( 'post-thumbnails' ); 

add_image_size( 'homepage-thumb', 90, 90, true ); // (cropped)
add_image_size( 'research-thumb', 200, 200, true ); // (cropped)

// THIS THEME USES wp_nav_menu() IN TWO LOCATIONS FOR CUSTOM MENU.
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'primary' => 'Topo',
		  'foot_menu' => 'Footer'
		)
	);
}

function evipnet_widgets_init() {
	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => "Busca",
		'id' => 'search',
	    'before_widget' => '',
	    'after_widget' => '',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>',
	)); 

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => "Produtos",
		'id' => 'produtos',
	    'before_widget' => '',
	    'after_widget' => '',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>',
	)); 

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => "Mapa",
		'id' => 'map',
	    'before_widget' => '',
	    'after_widget' => '',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>',
	)); 

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => "Sub Produtos",
		'id' => 'sub-produtos',
	    'before_widget' => '',
	    'after_widget' => '',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>',
	)); 

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => "Barra Lateral",
		'id' => 'sidebar',
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>',
	)); 
}

add_action( 'widgets_init', 'evipnet_widgets_init' );

// widgets
include_once "widget/noticias.php";
include_once "widget/search.php";

// theme options
include_once "theme-options.php";


?>