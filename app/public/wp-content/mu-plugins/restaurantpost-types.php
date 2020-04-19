<?php

    // ADD FEATURE IMAGES TO POST TYPE MENU
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 50, 50, true );

    // MENU POST TYPE
    function restaurant_post_types(){
        register_post_type('menus',array(
            'supports' => array('title', 'editor','thumbnail', 'excerpt', 'custom-fields'),
            'public' => true,
            'labels' => array(
                'name' => "Menus",
                'add_new_item' => 'Add New Menu',
                'edit_item' => 'Edit Menu',
                'all_items' => 'All Menus',
                'singular_name' => "Menu",
                'rewrite'=> array('slug' => 'events' ),
                'has_archive' => true,
            ),
            'menu_icon' => 'dashicons-carrot'
        ));

        // DEALS POST TYPE
        register_post_type('deal',array(
            'supports' => array('title', 'editor'),
            'rewrite'=> array('slug' => 'deal' ),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
            'name' => "Deals",
            'add_new_item' => 'Add New Deal',
            'edit_item' => 'Edit Deal',
            'all_items' => 'All Deals',
            'singular_name' => "Deal"
            ),
            'menu_icon' => 'dashicons-awards'
        ));

        // REVIEWS POST TYPE
    register_post_type('reviews',array(
        'supports' => array('title', 'editor'),
        'rewrite'=> array('slug' => 'deal' ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' => "Reviews",
        'add_new_item' => 'Add New Review',
        'edit_item' => 'Edit Review',
        'all_items' => 'All Reviews',
        'singular_name' => "Review"
        ),
        'menu_icon' => 'dashicons-testimonial'
    ));
    }

    add_action('init', 'restaurant_post_types');

?>