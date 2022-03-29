<?php
// Our custom post type function
function create_post_types() {
 
    register_post_type( 'modul',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Moduls' ),
                'singular_name' => __( 'Modul' ),
                'add_new_item' => __( 'Add New Modul' ),
                'add_new' => __( 'Add New' ),
                'edit_item' => __( 'Edit Modul' ),
                'all_items' => __( 'All Moduls' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'moduls'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_post_types' );
