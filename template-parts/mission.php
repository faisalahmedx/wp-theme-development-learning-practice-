<section id="mission" class="section-padding bg-light">
    <div class="container">
        
        <div class="section-header">
            <h2 class="section-title">Our Mission & Activities</h2>
            <p class="section-subtitle">
                Our mission is to raise awareness about the dangers of drug abuse and help build a healthier, safer society.
            </p>
        </div>

        <div class="activities-grid">
        <?php
        $mission_query = new WP_Query( array(
            'post_type'      => 'our_mission',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));

        if ( $mission_query->have_posts() ) :
            while ( $mission_query->have_posts() ) : $mission_query->the_post();
        ?>
                <div class="activity-card">

                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/1.webp" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>

                    <div class="card-body">
                        <h3><?php esc_html(the_title()); ?></h3>
                        <div class="card-text">
                            <?php echo esc_html( wp_trim_words( get_the_excerpt(), 15, '...' ) ); ?>
                        </div>
                    </div>

                </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No mission activities found.</p>';
        endif;
        ?>
        </div>

    </div>
</section>