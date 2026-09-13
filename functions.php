<?php

/**
 * Theme Function
 */

//Enqueue script and style

function practice_theme_scripts() {

    // style.css
    wp_enqueue_style( 'faisal-css', get_stylesheet_uri() );

    //main.css
    wp_enqueue_style( 
        'main-css', 
        get_template_directory_uri() . '/assets/css/main.css', 
        array(), 
        wp_get_theme()->get( 'Version' ), 
        'all' 
    );

    // assets/js/main.js and jQuery
    wp_enqueue_script( 
        'main-js', 
        get_template_directory_uri() . '/assets/js/main.js', 
        array( 'jquery' ),
        wp_get_theme()->get( 'Version' ), 
        true
    );

    //inline js
    $custom_js = " console.log('Allah Mohan'); ";
    wp_add_inline_script('main-js', $custom_js, 'after');


    //inline css
    $custom_inline_css = '';
    wp_add_inline_style( 'main-css', $custom_inline_css );
    
    // Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap', array(), null );

    // FontAwesome Icons
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0' );

}
add_action( 'wp_enqueue_scripts', 'practice_theme_scripts' );




if(!function_exists('practice_theme_setup')) :
function practice_theme_setup() {

    load_theme_textdomain( 'practice-theme',get_template_directory().'/languages' );

    add_theme_support('post-thumbnails');
    add_theme_support('site-icon');
    //array('post','page','service')
    add_theme_support('post-formats', array('aside','gallery','quate','image','image', 'video', 'audio'));
    add_theme_support( 'custom-logo', array(
        // 'height' => 600,
        // 'width' => 600,
    )); // logo Dynamic

    register_nav_menus(array(
        'primary_menu' => __('Primary Menu','practicetheme'),
        'mobile_menu' => __('Mobile Menu','practicetheme'),
        'footer_menu_1' => __('Footer_Menu_1','practicetheme'),
        'footer_menu_2' => __('Footer_Menu_2','practicetheme')
    )); //menu dynamic


}
endif;
add_action( 'after_setup_theme', 'practice_theme_setup' );



// Register Customizer Settings
require_once get_template_directory() . '/inc/customizer.php';

// Register Sidebars and Widgets
require_once get_template_directory() . '/inc/sidebar-re.php';

//Custom Post type for mission
require_once get_template_directory() .'/inc/custompost-t.php';

