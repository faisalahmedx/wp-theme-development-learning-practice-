<?php get_header(); ?>

<div class="site-main-content-wrapper">
    <div class="container blog-page-layout">
        
        <div class="content-primary">
            
            <header class="search-page-header mb-4">
                <h2 class="search-title">
                    <?php 
                    printf( esc_html__( 'Search Results for: "%s"', 'practice-theme' ), '<span>' . get_search_query() . '</span>' ); 
                    ?>
                </h2>
            </header>

            <?php if ( have_posts() ) : ?>
                
                <div class="search-results-list">
                    <?php while ( have_posts() ) : the_post(); ?>
                        
                        <!-- compact-search-card ক্লাস দিয়ে কাস্টম ডিজাইন -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'compact-search-card' ); ?>>
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="card-thumb">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                                    </a>
                                </div>
                            <?php endif; ?>

                            <div class="card-details">
                                <div class="card-meta">
                                    <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date( 'M j, Y' ); ?></span>
                                    <span><i class="far fa-folder"></i> <?php the_category( ', ' ); ?></span>
                                </div>

                                <h3 class="card-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>

                                <p class="card-excerpt">
                                    <?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); // মাত্র ১৮ ওয়ার্ডে এক্সার্পট ছোট করা হয়েছে ?>
                                </p>

                                <a href="<?php the_permalink(); ?>" class="read-more-link">
                                    <?php _e( 'Read More &rarr;', 'practice-theme' ); ?>
                                </a>
                            </div>

                        </article>

                    <?php endwhile; ?>
                </div>

                <div class="theme-pagination">
                    <?php
                    the_posts_pagination( array(
                        'mid_size'  => 1,
                        'prev_text' => __( '&laquo;', 'practice-theme' ),
                        'next_text' => __( '&raquo;', 'practice-theme' ),
                    ) );
                    ?>
                </div>

            <?php else : ?>

                <div class="no-results-found p-4 text-center">
                    <h3><?php _e( 'Nothing Found', 'practice-theme' ); ?></h3>
                    <p><?php _e( 'Sorry, no posts matched your criteria. Try searching again.', 'practice-theme' ); ?></p>
                    <form role="search" method="get" class="sidebar-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input 
                        type="search" 
                        name="s" 
                        placeholder="<?php esc_attr_e( 'Search...', 'practice-theme' ); ?>" 
                        value="<?php echo get_search_query(); ?>" 
                        required/>
                        <button type="submit"> <i class="fas fa-search"></i> </button>
                    </form>
                </div>

            <?php endif; ?>

        </div> <!-- /.content-primary -->

        <div class="content-secondary">
            <?php get_sidebar(); ?>
        </div>

    </div>
</div>

<?php get_footer(); ?>