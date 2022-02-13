<?php 

function theme_setup() {
    load_theme_textdomain( 'buildbite', get_template_directory() );


    // Navigation menu
    register_nav_menus( array(
        'topmenu' => __( 'Toppmeny', 'buildbite' ),
        'sidemenu' => __( 'Sidomeny', 'buildbite' )
    ));

    // Add line break to WYSIWYG block
    add_shortcode('br', 'add_linebreak_shortcode');
    function add_linebreak_shortcode() {
        return '<br />';
    }

     // Theme support
     add_theme_support( 'post-thumbnails' );
     add_theme_support( "title-tag" );
     add_theme_support( 'automatic-feed-links' );
     add_editor_style();

    // Filters
    add_filter('the_generator', '__return_false');

    // Remove
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );


}
add_action( 'init', 'theme_setup' );