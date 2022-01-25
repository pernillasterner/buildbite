<?php 

function theme_setup() {


    // Navigation menu
    register_nav_menus( array(
        'topmenu' => __( 'Toppmeny', 'buildbite' )
    ));

    // Add line break to WYSIWYG block
    add_shortcode('br', 'add_linebreak_shortcode');
    function add_linebreak_shortcode() {
        return '<br />';
    }


}
add_action( 'init', 'theme_setup' );