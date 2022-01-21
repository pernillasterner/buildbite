<?php

function buildbite_add_footer_styles() {
    wp_enqueue_style( 'screen', get_template_directory_uri() . '/assets/css/screen.css', array(),'1.0.0', 'screen, print' );
};
add_action( 'get_footer', 'buildbite_add_footer_styles' );