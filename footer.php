<footer class="site-footer">
    <div class="footer-container">
        <!-- Col 1: About -->
        <div class="footer-col footer-about">
            <h3 class="footer-logo">DragZero<span>.</span></h3>
            <p> <?php echo esc_html(get_theme_mod('footer_about_text')) ?> </p>
            <div class="footer-socials">
                <a href="https://www.facebook.com/profile.php?id=61579770533823"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- Col 2: Company -->
        <div class="footer-col">
            <h4 class="footer-title">Company</h4>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu_1',
                'container'      => false,
                'menu_class'     => 'footer-links',
            )); ?>
        </div>

        <!-- Col 3: Support -->
        <div class="footer-col">
            <h4 class="footer-title">Support</h4>
            <?php wp_nav_menu(array(
                'theme_location' => 'footer_menu_2',
                'container'      => false,
                'menu_class'     => 'footer-links',
            )); ?>
        </div>

        <!-- Col 4: Address -->
        <div class="footer-col footer-address">
            <h4 class="footer-title">Address</h4>
            <p><strong>Location:</strong> Tongi, Gazipur, Dhaka</p>
            <p><strong>Email:</strong> dragzerobangladesh@gmail.com </p>
            <p><strong>Phone:</strong> +8801884977193 </p>
        </div>
    </div>

    <!-- Bottom Copyright Area -->
    <div class="footer-bottom">
        <div class="footer-bottom-container">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
            <p class="developer-credit">Designed & Developed by: <a href="https://www.facebook.com/faisalahmedx/">Faisal Ahmed</a></p>
        </div>
    </div>
</footer>    

    <script src="script.js"></script>
</body>
</html>
    
<?php wp_footer(); ?>
</body>
</html>