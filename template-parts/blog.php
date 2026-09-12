
<section id="blog" class="section-padding bg-light">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title">Latest News & Articles</h2>
            <p class="section-subtitle">Stay updated with our latest awareness campaigns, community success stories, and expert insights.</p>
        </div>

        <!-- Blog Grid Layout -->
        <div class="blog-grid">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
                        <div class="blog-image">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium_large', array( 'alt' => get_the_title() ) ); ?>
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></span>

                                <span><i class="far fa-user"></i> 
                                By <?php the_author(); ?></span>
                            </div>

                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            
                            <?php the_excerpt(); ?>

                            <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More &rarr;</a>
                        </div>
                    </article>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php esc_html_e( 'No posts found.' ); ?></p>
                <?php endif; ?>


        </div>

        <div class="help-button">
            <a href="<?php echo get_post_type_archive_link('post'); ?>" class="btn btn-primary"><?php _e( 'View All', 'practice-theme' ); ?></a>
        </div>

    </div>
</section>