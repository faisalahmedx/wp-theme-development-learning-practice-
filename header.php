<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> </title>
    
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header id="header">
        <div class="container header-container">

            <div class="logo">
                <a href="<?php echo esc_url(home_url('/')) ; ?>">
                    <?php if( has_custom_logo() ): ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php esc_attr(get_bloginfo('name')) ; ?>">
                    <?php endif ; ?>
                </a>
            </div>
            
            <div class="mobile-toggle" id="mobile-toggle">
                <i class="fas fa-bars"></i>
            </div>

            <nav class="nav-menu" id="nav-menu">
                <?php wp_nav_menu(array(
                        'theme_location' => 'Primary menu'

                    ))?>
                <a href="#help" class="btn btn-primary">Join as Volunteer</a>
            </nav>
        </div>
    </header>