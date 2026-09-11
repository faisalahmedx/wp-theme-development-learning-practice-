<?php
/**
 * Hero section content dynamic
 */
function heroiamge_customize_register( $wp_customize ){
    $wp_customize -> add_section ('hero_image', array(
        'title' => __('Hero Section','practice-theme'),
        'priority'  => 30,
        'descriptoin' => __('Customize hero area text and images','practice-theme')
    ));

    $wp_customize -> add_setting('hero_image_setting', array(
        'default' => get_theme_file_uri() . '/assets/images/Community support group.webp'
    ));

    $wp_customize -> add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image_setting', array(
        'label' => __( 'Upload Hero Image', 'practice-theme' ),
        'section' => 'hero_image',
        'setting' => 'hero_image_setting',
    )));

    //hero title 
    $wp_customize -> add_setting('hero_title_setting', array(
        'default' => __('Together We Can Build a <br>
                <span class="gradient-text">DrugZero Bangladesh</span>', 'practice-theme'),
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize -> add_control( 'hero_title_setting',array(
        'label'   => __('Title','practice-theme'),
        'section' => 'hero_image',
        'setting' => 'hero-title_setting',
        'description' => 'you can change hero title from here', 
        'type'     => 'textarea',
    ) );


    //hero description
    $wp_customize -> add_setting('hero_description_setting', array(
        'default' => 'We are a voluntary organization working to prevent drug abuse through awareness, education, and community support.',
    ));
    $wp_customize -> add_control( 'hero_description_setting',array(
        'label'   => __('Description','practice-theme'),
        'section' => 'hero_image',
        'setting' => 'hero_description_setting',
        'description' => 'you can change hero descripton from here', 
        'type'     => 'textarea',
    ) );


    //hero 1st button text
    $wp_customize -> add_setting('hero_button_title', array(
        'default' => 'Make an Impact',
    ));
    $wp_customize -> add_control( 'hero_button_title',array(
        'label'   => __('Button Title','practice-theme'),
        'section' => 'hero_image',
        'setting' => 'hero_button_title', 
        'type'     => 'text',
    ) );


    //hero 1st button url
    $wp_customize -> add_setting('hero_button_url', array(
        'default' => '#help',
    ));
    $wp_customize -> add_control( 'hero_button_url',array(
        'label'   => __('Button URL','practice-theme'),
        'section' => 'hero_image',
        'setting' => 'hero_button_url', 
        'type'     => 'url',
    ) );

}

add_action('customize_register','heroiamge_customize_register');





//Add a section in footer 

function practicetheme_customize_register($wp_customize){

$wp_customize -> add_section('footer_setting',array(
    'title' => __('Footer','practicetheme'),
    'priority' => 150,
));

$wp_customize -> add_setting('footer_about_text', array(
    'default' => 'Need help for your dream Career? Trust us. With DragZero, study becomes a lot easier with us.',
));

$wp_customize -> add_control('footer_about_text', array(
    'lable' => __('About Text', 'practicetheme'),
    'section' => 'footer_setting',
    'settings' => 'footer_about_text',
    'type' => 'textarea'
));
}

add_action('customize_register','practicetheme_customize_register');