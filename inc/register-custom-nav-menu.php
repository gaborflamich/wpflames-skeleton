<?php defined( 'ABSPATH' ) || exit; 

// =========================================================================
// Register Custom Nav Menu
// =========================================================================
if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'secondary_menu' => __( 'Secondary Menu', 'wpflames_theme' ),
	    	'desktop_menu'  => __( 'Desktop Menu', 'wpflames_theme' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}