<?php get_header() ?>

<!-- BLOG & SIDEBAR MAIN WRAPPER -->
<div class="site-main-content-wrapper">
    <div class="container blog-page-layout">
        

    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <!-- Main Post & Comments Content -->
        <div class="content-primary">
            <article class="single-post-card">
                <h1 class="post-main-title"> <?php the_title(); ?> </h1>
                
                <div class="post-meta-bar">
                    <span><i class="far fa-calendar-alt"></i> <?php the_date(); ?></span>
                    <span><i class="far fa-user"></i> By <?php the_author(); ?></span>
                    <!-- <span><i class="far fa-comment"></i> 4 Comments</span> -->
                </div>

                <div class="post-featured-img">
                    <?php the_post_thumbnail('full'); ?>
                </div>

                <div class="post-article-body">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
            endwhile;
        endif;
            ?>

            <!-- Comments Area -->
            <section class="post-comments-box">
            
            <?php 
                $comment_Count = get_comments_number();
            if( $comment_Count > 0 ): ?>
                <h3>Comments ( <?php echo esc_html($comment_Count); ?> )</h3>';
                <?php endif; ?>
        
                    <?php 
                        $parent_comments = get_comments(array(
                            'post_id' => get_the_ID(),
                            'status' => 'approve',
                            'order' => 'ASC',
                            'parent' => 0
                        )); 
                     ?>

                <?php if( $parent_comments ): ?>
                    <ul class="comments-list-items">
                        <?php foreach ( $parent_comments as $comment ): ?>
                            <li class="comment-row" id="comment-<?php echo esc_attr( $comment->comment_ID ); ?>">
                        
                            <div class="comment-user-avatar">
                            <?php echo get_avatar( $comment->comment_author_email, 40 ); ?>
                            </div>
                        
                            <div class="comment-user-text">
                            <div class="comment-meta-head">
                                <span class="c-name"><?php echo esc_html( $comment -> comment_author ); ?></span>
                                <span class="c-date"><?php echo esc_html(get_comment_date( 'M j, Y', $comment ));?></span>
                            </div>
                            <p><?php echo esc_html( $comment -> comment_content ); ?></p>
                        </div>
                    </li>
                        <?php endforeach; ?> 
                    </ul>
                <?php endif; ?>


                <!-- Comment Form -->
                <div class="comment-reply-form">
                    <h4>Leave a Comment</h4>
                    <?php 
                        comment_form(array(
                            'fields' => array(
                                'author' => '<div class="form-grid-2">
                                            <input type="text" id="author" name="author" placeholder="Your Name *" required>',
                                'email' => ' <input type="email" id="email" name="email" placeholder="Your  Email *" required></div>'
                            ),
                            'comment_field' => '<textarea id="comment" name="comment" rows="4" placeholder="Write your comment..." required></textarea>',

                            'class_submit' => 'btn btn-primary',
                            'label_submit' => 'Post Comment'
                        ));
                     ?>
                </div>
            </section>
        </div>

        <!-- Sidebar Area -->
        <?php get_sidebar(); ?>

    </div>
</div>


<?php get_footer() ?>