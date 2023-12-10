<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Featured Image
// =============================================================
function featured_image(){
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'full', array('class' => 'archive-card-img') );
	} else{
        echo '<img src="'.get_stylesheet_directory_uri().'/images/placeholder.jpg" alt="placeholder">';
    }
}

function add_featured_image(){
	if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'gallery', array('class' => 'archive-card-img') );
	} else{
        echo '<img src="'.get_stylesheet_directory_uri().'/images/placeholder.jpg" alt="placeholder">';
    }
}
