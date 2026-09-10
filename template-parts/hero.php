<section id="hero" class="hero-section">
        <div class="container hero-container">
            <div class="hero-content">
                <p id="destroy">⚡ “Addiction = Destroy” ⚡</p>
                <h1 class="hero-title">
                <?php echo wp_kses_post( get_theme_mod( 'hero_title_setting', 'Together We Can Build a <br><span class="gradient-text">DrugZero Bangladesh</span>') ); ?>
                </h1>
                <p>We are a voluntary organization working to prevent drug abuse through awareness, education, and community support.</p>
                <div class="hero-buttons">
                    <a href="#help" class="btn btn-primary">Make an Impact</a>
                    <a href="#contact" class="btn btn-secondary">Get Support</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="<?php echo esc_url(get_theme_mod('hero_image_setting', get_theme_file_uri() . '/assets/images/Community support group.webp')); ?>" alt="<?php echo esc_attr( get_bloginfo('name')); ?>">
            </div>
        </div>
    </section>