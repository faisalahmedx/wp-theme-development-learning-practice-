<?php
/**
 * Hero section content dynamic
 */
function heroiamge_customize_register( $wp_customize ){
    $wp_customize -> add_section ('hero_image', array(
        'title' => __('Hero Section','practice-theme'),
        'priority'  => 30,
        'descriptoin' => __('Customize hero area text and images','$wp_customize')
    ));

    $wp_customize -> add_setting('hero_image_setting', array(
        'default' => get_theme_file_uri() . '/assets/images/Community support group.webp'
    ));

    $wp_customize -> add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image_setting', array(
        'label' => __( 'Upload Hero Image', 'practice-theme' ),
        'section' => 'hero_image',
        'setting' => 'hero_image_setting',
    )));

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