<?php

show_admin_bar(false); 
add_theme_support( 'post-thumbnails' ); 

add_image_size( 'homepage-thumb', 90, 90, true ); // (cropped)
add_image_size( 'research-thumb', 97, 97, true ); // (cropped)
add_image_size( 'destaque-primario-thumb', 220, 180, true ); // (cropped)
add_image_size( 'destaque-secundario-thumb', 230, 180, true ); // (cropped)

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
	    'before_widget' => '<li class="block">',
	    'after_widget' => '</li>',
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
	    'before_widget' => '<li class="block">',
	    'after_widget' => '</li>',
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

	if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => "Rodapé",
		'id' => 'footer',
	    'before_widget' => '',
		'after_widget'  => '',
	    'before_title' => '<h2>',
	    'after_title' => '</h2>',
	)); 
}
add_action( 'widgets_init', 'evipnet_widgets_init' );

function kriesi_pagination($pages = '', $range = 2) {  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

// widgets
include_once "widget/noticias.php";
include_once "widget/search.php";

// theme options
include_once "theme-options.php";


?>