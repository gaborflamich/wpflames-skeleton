<?php defined( 'ABSPATH' ) || exit; 

// =========================================================================
// ADD SOCIAL ICON TO NAV MENU
// =========================================================================
function add_custom_menu_item ($items, $args) {
  ob_start();
  $items .= '<li id="menu-item-5000" class="menu-item menu-item-type-post_type menu-item-object-page last">';
      $items .= '<a href="#"><i class="icon icon-phone"></i></a>';
  $items .= '</li>';
  ob_get_clean();
  return $items;
}
add_filter( 'wp_nav_menu_items', 'add_custom_menu_item', 10, 2 );