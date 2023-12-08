<?php defined( 'ABSPATH' ) || exit; 

// =========================================================================
// Translate
// =========================================================================
function wpf_filter_gettext( $translated, $original, $domain ) {
    if ( $translated == "Next" ) { $translated = "Következő"; }
return $translated;
}
add_filter( 'gettext', 'wpf_filter_gettext', 10, 3 );