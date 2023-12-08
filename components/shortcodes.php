<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Button Shortcode 
// =============================================================
function btn_shortcode( $atts, $content = null ) {
    $a = shortcode_atts( array(
        'class'  =>  '',
        'href'  =>  '#',
        'text' => ''
    ), $atts );
 
    return '<a class="btn-cta ' . esc_attr($a['class']) . '" href="' . esc_attr($a['href']) . '">' . esc_attr($a['text']) . '</a>';
}
add_shortcode( 'button', 'btn_shortcode' );

// =============================================================
// Button Back 
// =============================================================
function btn_back_home() {
    ob_start();
    echo '<a class="btn-cta back" href="'.site_url().'">
            <span>
                <svg id="arrow-left" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M447.1 256C447.1 273.7 433.7 288 416 288H109.3l105.4 105.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448s-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L109.3 224H416C433.7 224 447.1 238.3 447.1 256z"/></svg>
            </span> Vissza a főoldalra
        </a>';
    return ob_get_clean();
}
add_shortcode('backhome', 'btn_back_home');