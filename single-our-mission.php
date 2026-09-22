<?php
/**
 * Template for displaying single Mission posts
 */

get_header();
?>

<main id="primary" class="site-main single-mission-page">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            
            // কাস্টম মেটা বক্স থেকে ইমেজ নিয়ে আসা (যদি থাকে)
            $custom_img = get_post_meta( get_the_ID(), '_mission_custom_image', true );
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('mission-details-card'); ?>>
                
                <!-- 1. Post Header Title -->
                <header class="entry-header text-center">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on">
                            <i class="dashicons dashicons-calendar-alt"></i> <?php echo get_the_date(); ?>
                        </span>
                    </div>

                    <div class="mission-category-badge">
                        <?php
                        $terms = get_the_terms( get_the_ID(), 'mission_cat' );
                        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                            foreach ( $terms as $term ) {
                                echo '<a href="' . esc_url( get_term_link( $term ) ) . '" class="cat-link">' . esc_html( $term->name ) . '</a> ';
                            }
                        }
                        ?>
                    </div>
                </header>

                <!-- 2. Post Image (Custom Meta Image or Featured Image) -->
                <div class="mission-featured-image">
                    <?php 
                    if ( ! empty( $custom_img ) ) : ?>
                        <img src="<?php echo esc_url( $custom_img ); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php elseif ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/1.webp" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                </div>

                <!-- 3. Main Content -->
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <!-- 4. Back to Home / Missions Link -->
                <footer class="entry-footer text-center">
                    <a href="<?php echo esc_url( home_url('/#mission') ); ?>" class="btn-back">
                        &larr; Back to Missions
                    </a>
                </footer>

            </article>

            <?php
        endwhile;
        ?>
    </div>
</main>

<?php
get_footer();
?>