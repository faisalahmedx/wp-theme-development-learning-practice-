<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package YourTheme
 */

get_header(); 
?>

<div class="container error-404-wrapper">
    <div class="error-404-content">
        
        <!-- Big 404 Text -->
        <div class="error-code">404</div>
        
        <!-- Error Message -->
        <h1 class="error-title">Oops! Page Not Found</h1>
        <p class="error-text">
            The page you are looking for might have been removed, had its name changed, 
            or is temporarily unavailable. Let's get you back on track.
        </p>

        <!-- Search Form -->
        <div class="error-search">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="search-field" placeholder="Search for something..." value="<?php echo get_search_query(); ?>" name="s" />
                <button type="submit" class="search-submit">Search</button>
            </form>
        </div>

        <!-- Back to Home Button -->
        <div class="error-actions">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-primary">
                &larr; Back to Homepage
            </a>
        </div>

    </div>
</div>

<?php get_footer(); ?>