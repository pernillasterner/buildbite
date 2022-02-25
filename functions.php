<?php
// All of the base theme functions
require_once(get_template_directory() . '/base/functions/base-functions.php');
// Theme specific functions
require_once(get_template_directory() . '/inc/custom-functions.php');


// Scripts and styles
// function techlove_scripts() {
//     // JS    	
//     wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.js', array ( 'jquery' ), 1.1, true);

// }
// add_action( 'wp_enqueue_scripts', 'techlove_scripts',1 );


function buildbite_add_footer_styles() {
    wp_enqueue_style( 'screen', get_template_directory_uri() . '/assets/css/screen.css', array(),'1.0.0', 'screen, print' );
};
add_action( 'get_footer', 'buildbite_add_footer_styles' );





add_action( 'wp_enqueue_scripts', function() {
	$handle  = 'ps-import-module-one-handle';
	$src     = get_stylesheet_directory_uri() . '/assets/js/app.js';
	$deps    = [];
	$version = '1.0.0';
	wp_enqueue_script( $handle, $src, $deps, $version, true );

} );

/**
 *Script that import modules must use a script tag with type="module", 
 * so let's set it for the script.
 */
add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) {

	switch ( $handle ) {
		case 'ps-import-module-one-handle':
			return '<script type="module" src="' . esc_url( $src ) . '"></script>';
			break;

		default:
			return $tag;
			break;
	}

}, 10, 3 );