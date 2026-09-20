<?php
/*
 * Template Name: About Us Page
 */ 
get_header();
?>

<main id="primary" class="site-main about-page">

    <!-- 1. Hero Banner Section -->
    <section class="about-hero section-padding text-center">
        <div class="container">
            <h1 class="page-title">About Us</h1>
            <p class="hero-subtitle">
                    echo 'Working together to build a drug-free, healthy, and safe society for future generations.';
            </p>
        </div>
    </section>

    <!-- 2. Our Story / Introduction Section -->
    <section class="about-story section-padding">
        <div class="container">
            <div class="grid-2-col">
                <div class="story-image">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/school.webp" alt="About Our Organization">
                    <?php endif; ?>
                </div>
                <div class="story-content">
                    <h2 class="section-title">Who We Are</h2>
                    <?php 
                    // WordPress Default Page Content Loop
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Mission & Vision Section -->
    <section class="about-mission-vision section-padding bg-light">
        <div class="container">
            <div class="grid-2-col">
                <div class="info-card">
                    <div class="card-icon">
                        <i class="dashicons dashicons-flag"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To prevent drug abuse through education, community awareness, youth engagement, and supporting individuals on their journey to recovery and rehabilitation.</p>
                </div>
                <div class="info-card">
                    <div class="card-icon">
                        <i class="dashicons dashicons-visibility"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>A healthy, drug-free society where every individual has the opportunity to realize their full potential in a safe and supportive environment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Core Values Section -->
    <section class="about-values section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Our Core Values</h2>
                <p class="section-subtitle">The principles that guide our work and community initiatives.</p>
            </div>
            <div class="values-grid">
                <div class="value-item">
                    <h4>Compassion</h4>
                    <p>Providing non-judgmental support and care to individuals and families affected by substance abuse.</p>
                </div>
                <div class="value-item">
                    <h4>Integrity</h4>
                    <p>Maintaining transparency, accountability, and ethics in all our voluntary activities.</p>
                </div>
                <div class="value-item">
                    <h4>Community Action</h4>
                    <p>Empowering local communities, schools, and youth to stand together against drug addiction.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>