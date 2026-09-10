<?php
/**
 * Register Sidebar and Widget Areas
 */


function practicetheme_register_sidebar(){
    register_sidebar(array(
        'name'          => __('Blog Sidebar','practice-theme'),
        'id'            => 'main_sidebar',
        'description'   => __('Widgets added here will appear in your sidebar.','practice-theme'),
        'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
        'after_widget'  => '</div>',
        'before_title' => '<h4 class="widget-heading">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init','practicetheme_register_sidebar');