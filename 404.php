<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <div class="error-card">
                <h1 class="page-title">404 - Page Not Found</h1>
                <div class="error-message">
                    <p>The requested page does not exist. Please try again or go back to the <a href="<?php echo esc_url(home_url('/')); ?>">homepage</a>.</p>
                </div>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>

