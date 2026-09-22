<?php
//Our Mission 

if(!function_exists('practice_custom_post')){
    function practice_custom_post(){
        register_post_type('our-mission', array(
            'labels' => array(
                'name' => __('Our Mission','practice-theme'),
                'singular_name' => __('Our Mission','practice-theme'),
                'add_new_item' => __('Add New', 'practice-theme'),
                'all_items' => __('All Mission', 'practice-theme'),
                'edit_item' => __('Edit Mission', 'practice-theme'),
            ),
            'public' => true,
            'rewrite' => array( 'slug' =>'our-mission'),
            'supports' => array(
                'title','thumbnail','author','editor','excerpt',
            ),
            'has_archive' => true,
            'hierarchical'      => false,
            'show_in_rest' => true,
            'show_ui' => true,
            // 'menu_icon' => 'dashicons-clipboard',
            'capability_type' => 'post',
            'menu_position' => 20,
            

        ));
    }
}

add_action('init','practice_custom_post');





// 1. Mission Post Type-er jonno Custom Taxonomy Register Kora
function create_mission_custom_taxonomy() {
    $labels = array(
        'name'              => __('Mission Categories','practice-theme'),
        'singular_name'     => __('Mission Category','practice-theme'),
        'search_items'      => __('Search Categories','practice-theme'),
        'all_items'         => 'All Categories',
        'parent_item'       => 'Parent Category',
        'parent_item_colon' => 'Parent Category:',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category Name',
        'menu_name'         => 'Categories',
    );

    $args = array(
        'hierarchical'      => true, // true dile Category-r moto kaj korbe (checkbox thakbe)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true, // Dashboard-e post list column-e category dekhabe
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'mission-category' ), // URL Slug
    );

    register_taxonomy( 'mission_cat', array( 'our-mission' ), $args );
}
add_action( 'init', 'create_mission_custom_taxonomy' );