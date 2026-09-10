<?php

get_header();
?>

<section class="container" style="margin: 40px auto;" >

    <?php if( have_posts()): ?>
        <?php while( have_posts()) : the_post(); ?>
        <h2 class= "section-title"><?php the_title(); ?></h2>
        <div class="page-content">
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>
    <?php endif; ?>

</section>

<?php
get_footer();
?>