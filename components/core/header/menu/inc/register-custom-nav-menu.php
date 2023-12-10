<?php defined( 'ABSPATH' ) || exit; 

// =========================================================================
// Register Custom Nav Menu
// =========================================================================
if ( ! function_exists( 'wpflames_register_nav_menu' ) ) {

	function wpflames_register_nav_menu(){
		register_nav_menus( array(
	    	'secondary_menu' => __( 'Secondary', 'wpflames_theme' ),
		) );
	}
	add_action( 'after_setup_theme', 'wpflames_register_nav_menu', 0 );
}