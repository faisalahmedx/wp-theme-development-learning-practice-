<?php
/**
 * The main template file for the Blog Home Page
 *
 * @package YourTheme
 */

get_header(); 
?>

<div class="container blog-home-wrapper">
    
    <!-- Blog Header (Centered Title) -->
    <div class="blog-header">
        <h1 class="blog-title">Our Latest Articles</h1>
        <p class="blog-subtitle">Stay updated with our latest news, stories, and insights.</p>
    </div>

    <!-- Posts Grid (3 Columns) -->
    <div class="blog-grid">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?>>
                    
                    <!-- Thumbnail -->
                    <a href="<?php the_permalink(); ?>" class="blog-thumb-link">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'medium_large', array( 'class' => 'blog-thumb' ) ); ?>
                        <?php else : ?>
                            <img src="https://via.placeholder.com/400x250" alt="Placeholder" class="blog-thumb">
                        <?php endif; ?>
                    </a>

                    <!-- Content -->
                    <div class="blog-card-content">
                        <div class="blog-meta">
                            <span class="meta-date"><?php echo get_the_date(); ?></span>
                        </div>
                        
                        <h2 class="blog-card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        
                        <p class="blog-excerpt">
                            <?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?>
                        </p>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More &rarr;</a>
                    </div>
                </article>

            <?php endwhile; ?>
        <?php else : ?>
            <p class="no-posts">No posts found. Please check back later.</p>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="blog-pagination">
        <?php
        the_posts_pagination( array(
            'mid_size'  => 1,
            'prev_text' => '&laquo; Prev',
            'next_text' => 'Next &raquo;',
        ) );
        ?>
    </div>

</div>

<?php get_footer(); ?>