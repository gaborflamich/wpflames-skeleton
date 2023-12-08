<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Remove accents from uploaded filenames
// =============================================================
function wpflames_sanitize_file_name( $filename ) {

	// Remove chars with accents etc, also replaces € with E.
	$sanitized_filename = remove_accents( $filename );
	
	// Remove every character except A-Z a-z 0-9 . - _ and spaces.
	$sanitized_filename = preg_replace( '/[^A-Za-z0-9-_\.[:blank:]]/', '', $sanitized_filename );

	// Replace spaces (blanks) with an underscore.
	$sanitized_filename = preg_replace( '/[[:blank:]]+/', '_', $sanitized_filename );

	return $sanitized_filename;
}
add_filter( 'sanitize_file_name', 'wpflames_sanitize_file_name', 10, 1 );
