<?php defined( 'ABSPATH' ) || exit; 

add_action('wpflames_header_right', 'desktop_menu_right');
add_action('wpflames_header_right', 'toggle');
add_action('wpflames_after_header', 'mobile_menu');
add_action('wpflames_after_header', 'desktop_menu_bottom');
add_action('wpflames_header_top', 'desktop_menu_top');

