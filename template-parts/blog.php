<section id="blog" class="section-padding bg-light">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title"><?php esc_html_e( 'Latest News & Articles', 'practice-theme' ); ?></h2>
            <p class="section-subtitle"><?php esc_html_e( 'Stay updated with our latest awareness campaigns, community success stories, and expert insights.', 'practice-theme' ); ?></p>
        </div>

        <!-- Blog Grid Layout -->
        <div class="blog-grid">
            <?php
            $recent_posts = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ) );

            if ( $recent_posts->have_posts() ) :
                while ( $recent_posts->have_posts() ) : $recent_posts->the_post();
            ?>

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

                                <span><i class="far fa-user"></i> By <?php the_author(); ?></span>
                            </div>

                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            
                            <p class="card-text">
                                <?php echo esc_html( wp_trim_words( get_the_excerpt(), 15, '...' ) ); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More &rarr;</a>
                        </div>
                    </article>

            <?php 
                endwhile;
                wp_reset_postdata(); // কাস্টম কুয়েরির ডাটা রিসেট
            else : 
            ?>
                <p><?php esc_html_e( 'No posts found.', 'practice-theme' ); ?></p>
            <?php endif; ?>
        </div>

        <!-- Dynamic View All Button -->
        <div class="help-button text-center mt-4">
            <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-primary">
                <?php esc_html_e( 'View All', 'practice-theme' ); ?>
            </a>
        </div>

    </div>
</section>