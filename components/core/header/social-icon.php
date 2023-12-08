<?php defined( 'ABSPATH' ) || exit; 

// =========================================================================
// ADD SOCIAL ICON TO NAV MENU
// =========================================================================
function wdm_add_menu_items( $menu, $args ) {
    // check if it is the 'primary' navigation menu
    if ( 'primary' === $args->theme_location || 'handheld' === $args->theme_location)
    {
      // add the search form
      ob_start();
      $menu  .= '
      <li class="menu-item icon-fb">
        <a href="" target="_blank">
          <i class="icon icon-facebook"></i>
        </a>
      </li>
      ';
      ob_get_clean();
    }
    return $menu;
}
add_filter( 'wp_nav_menu_items', 'wdm_add_menu_items', 10, 2 );