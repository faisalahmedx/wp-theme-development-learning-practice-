<?php
/**
 * Template for displaying Custom Mission Category Archive Pages
 */

get_header();
?>

<main id="primary" class="site-main category-archive-page section-padding">
    <div class="container">

        <!-- Category Header -->
        <header class="page-header text-center margin-bottom-40">
            <h1 class="page-title">
                Category: <?php single_term_title(); ?>
            </h1>
            <?php if ( get_the_archive_description() ) : ?>
                <div class="archive-description">
                    <?php echo get_the_archive_description(); ?>
                </div>
            <?php endif; ?>
        </header>

        <!-- Missions Grid Loop -->
        <div class="activities-grid">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();
            ?>
                    <div class="activity-card">
                        <a href="<?php the_permalink(); ?>" class="card-link">
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/1.webp" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>

                            <div class="card-body">
                                <h3><?php the_title(); ?></h3>
                                <div class="card-text">
                                    <?php echo esc_html( wp_trim_words( get_the_excerpt(), 15, '...' ) ); ?>
                                </div>
                            </div>

                        </a>
                    </div>
            <?php
                endwhile;
            else :
                echo '<p class="text-center">No missions found in this category.</p>';
            endif;
            ?>
        </div>

        <!-- Pagination -->
        <div class="archive-pagination margin-top-40 text-center">
            <?php
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => '&laquo; Previous',
                'next_text' => 'Next &raquo;',
            ) );
            ?>
        </div>

    </div>
</main>

<?php
get_footer();
?>