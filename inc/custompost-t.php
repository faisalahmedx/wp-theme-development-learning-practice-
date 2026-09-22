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