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
            <a href="" class="btn btn-nav">get started</a>
        </div>
    </nav>

</header>