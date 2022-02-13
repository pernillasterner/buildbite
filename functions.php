<?php
// All of the base theme functions
require_once(get_template_directory() . '/base/functions/base-functions.php');
// Theme specific functions
require_once(get_template_directory() . '/inc/custom-functions.php');


// Scripts and styles
function techlove_scripts() {
    // JS    	
    wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array ( 'jquery' ), 1.1, true);

}
add_action( 'wp_enqueue_scripts', 'techlove_scripts',1 );


function buildbite_add_footer_styles() {
    wp_enqueue_style( 'screen', get_template_directory_uri() . '/assets/css/screen.css', array(),'1.0.0', 'screen, print' );
};
add_action( 'get_footer', 'buildbite_add_footer_styles' );
