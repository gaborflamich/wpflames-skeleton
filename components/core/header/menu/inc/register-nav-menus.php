<?php defined( 'ABSPATH' ) || exit; 

// =========================================================================
// Register Custom Nav Menu
// =========================================================================
if ( ! function_exists( 'wpflames_register_nav_menu' ) ) {

	function wpflames_register_nav_menu(){
		register_nav_menus( array(
	    	'menu-top' => esc_html__( 'Header Top', 'wpflames' ),
	    	'menu-right' => esc_html__( 'Header Right', 'wpflames' ),
	    	'menu-bottom' => esc_html__( 'Header After', 'wpflames' ),
	    	'menu-mobile' => esc_html__( 'Mobile', 'wpflames' ),
		) );
	}
	add_action( 'after_setup_theme', 'wpflames_register_nav_menu', 0 );
}