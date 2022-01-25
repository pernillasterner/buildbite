<header class="site_header">

    <nav class="top_navigation d-flex justify-content-end">
        <?php get_theme_logo(); ?>


        <div class="menu-toppmeny-container">
        <?php $args = array(
            'theme_location'  => 'topmenu',
            'menu_class'      => 'navbar-nav',
            'container'         => false
            // 'fallback_cb'       => false
        );

        wp_nav_menu( $args );
        
        ?>
        <button class="btn get-started-btn">Get started
            <i class="fas fa-arrow-right"></i>
        </button>
        </div>
    </nav>

</header>