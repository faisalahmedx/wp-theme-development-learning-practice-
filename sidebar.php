<aside class="sidebar-container">

    <?php dynamic_sidebar('main_sidebar') ?>
    
            <!-- Search Widget -->
            <div class="widget-box">
                <h4 class="widget-heading"><?php _e('Search','practice-theme'); ?></h4>
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

            <!-- Recent Posts Widget -->
            <div class="widget-box">
                <h4 class="widget-heading">Recent Posts</h4>
                <?php
                $recent_posts = wp_get_recent_posts( array(
                    'numberposts' => 5,
                    'post_status' => 'publish', 
                ) );

                if ( ! empty( $recent_posts ) ) :
                    foreach ( $recent_posts as $post ) :
                        $post_id = $post['ID'];
                        ?>
                <div class="sidebar-recent-post">
                <?php if ( has_post_thumbnail( $post_id ) ) : ?>
                    <a href="<?php echo esc_url( get_permalink( $post_id ) ); ?>">
                        <?php echo get_the_post_thumbnail( $post_id, array( 70, 70 ) ); ?>
                    </a>
                <?php else : ?>
                    <img src="https://placehold.co/70x70/11552C/FFFFFF?text=Post" alt="<?php echo esc_attr( $post['post_title'] ); ?>">
                <?php endif; ?>

                <div>
                    <h5>
                        <a href="<?php echo esc_url( get_permalink( $post_id ) ); ?>">
                            <?php echo esc_html( $post['post_title'] ); ?>
                        </a>
                    </h5>
                    <span><?php echo esc_html( get_the_date( 'M j, Y', $post_id ) ); ?></span>
                </div>
                
                 </div>
                <?php 
                endforeach;
                wp_reset_query(); // গ্লোবাল কুয়েরি ক্লিয়ার করা
                else : ?>
                <p>No recent posts found.</p>
                <?php endif; ?>
            </div>
            
        <!-- Categories Widget -->
        <div class="widget-box">
            <h4 class="widget-heading">Categories</h4>
            <ul class="sidebar-category-list">
            <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC'
            ) );

            if ( ! empty( $categories ) ) {
                foreach ( $categories as $category ) {
                    echo '<li>';
                    echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">';
                    echo '<span>' . esc_html( $category->name ) . '</span>';
                    echo '<span class="cat-count">' . $category->count . '</span>';
                    echo '</a>';
                    echo '</li>';
                }
            } else {
                echo '<li><p>No categories found.</p></li>';
            }
            ?>
            </ul>
        </div>

            <!-- Tags Widget -->
            <div class="widget-box">
                <h4 class="widget-heading">Tags</h4>
                <div class="sidebar-tag-cloud">
                    <?php
                    $tags = get_tags( array(
                        'hide_empty' => true,
                    ) );

                    if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
                        foreach ( $tags as $tag ) {
                            echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '">' . esc_html( $tag->name ) . '</a>';
                        }
                    } else {
                        echo '<p>No tags found.</p>';
                    }
                    ?>
                </div>
            </div>
        </aside>
