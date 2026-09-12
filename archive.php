<?php
/**
 * Archive Template (Full Width - 3 Columns)
 *
 * @package YourTheme
 */

get_header(); 
?>

<div class="container archive-wrapper">
    
    <!-- Archive Header (Centered Title) -->
    <div class="archive-header">
        <?php
        the_archive_title( '<h1 class="archive-title">', '</h1>' );
        the_archive_description( '<div class="archive-description">', '</div>' );
        ?>
    </div>

    <!-- Posts Grid (3 Columns) -->
    <div class="archive-grid">
        <?php if ( have_posts() ) : ?>
            <?php 
            // পোস্ট কাউন্ট করার জন্য একটি ভেরিয়েবল
            $post_count = 0; 
            while ( have_posts() ) : the_post(); 
                $post_count++;
                // ৯টি পোস্টের পর লুপ বন্ধ করে দেব (যদি WordPress সেটিংসে বেশি পোস্ট থাকে)
                if ( $post_count > 9 ) break; 
            ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'archive-card' ); ?>>
                    
                    <!-- Thumbnail -->
                    <a href="<?php the_permalink(); ?>" class="archive-thumb-link">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'medium_large', array( 'class' => 'archive-thumb' ) ); ?>
                        <?php else : ?>
                            <img src="https://via.placeholder.com/400x250" alt="Placeholder" class="archive-thumb">
                        <?php endif; ?>
                    </a>

                    <!-- Content -->
                    <div class="archive-card-content">
                        <div class="archive-meta">
                            <span class="meta-date"><?php echo get_the_date(); ?></span>
                            <span class="meta-cat"><?php the_category( ', ' ); ?></span>
                        </div>
                        
                        <h2 class="archive-card-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        
                        <p class="archive-excerpt">
                            <?php echo wp_trim_words( get_the_excerpt(), 12, '...' ); ?>
                        </p>
                        
                        <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More &rarr;</a>
                    </div>
                </article>

            <?php endwhile; ?>
        <?php else : ?>
            <p class="no-posts">No posts found in this archive.</p>
        <?php endif; ?>
    </div>

    <!-- Pagination -->
    <div class="archive-pagination">
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