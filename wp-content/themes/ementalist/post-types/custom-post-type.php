<?php


    $labels = array(
        'name' => __( 'Brochures' ),
        'singular_name' => __( 'Brochure' ),
        'menu_name' => __( 'Brochures' ),
        'name_admin_bar' => __( 'Brochure' ),
        'add_new' => __( 'Add New Brochure' ),
        'add_new_item' => __( 'Add New Brochure' ),
        'edit_item' => __( 'Edit Brochure' ),
        'new_item' => __( 'New Brochure' ),
        'view_item' => __( 'View Brochure' ),
        'all_items' => __( 'All Brochures' ),
        'search_items' => __( 'Search Brochures' ),
        'not_found' => __( 'No brochures found.' ),
        'not_found_in_trash' => __( 'No brochures found in Trash.' ),
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'brochure' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest' => true, // For Gutenberg editor
    );
    
    register_post_type( 'brochure', $args );

