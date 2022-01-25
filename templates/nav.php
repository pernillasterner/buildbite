<header class="site_header">

    <nav class="top_navigation">
        <?php get_theme_logo(); ?>


        <div class="menu-toppmeny-container">
            <?php $args = array(
                'theme_location'  => 'topmenu',
                'menu_class'      => 'navbar-nav',
                'container'       => false,
                'fallback_cb'     => false
            );

            wp_nav_menu( $args );
            
            ?>
            <button class="btn btn-nav">get started</button>
        </div>
    </nav>

</header>