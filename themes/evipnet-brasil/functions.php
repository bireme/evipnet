<?php

// THIS THEME USES wp_nav_menu() IN TWO LOCATIONS FOR CUSTOM MENU.
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'primary' => 'Topo',
		  'foot_menu' => 'Footer'
		)
	);
}

show_admin_bar(false); 

?>