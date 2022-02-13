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
            <button id="modul_open" class="btn btn-nav open">get started</button>

            <?php get_template_part( 'templates/moduls/get_started'); ?>
            <?php //get_template_part( 'templates/moduls/contact_us'); ?>
            <?php // get_template_part( 'templates/moduls/' . get_row_layout()); ?>

        </div>
    </nav>
<!-- 
    <div class="main_navigation">
        <?php $args = array(
            'theme_location'    => 'sidemenu',
            'menu_class'        => 'navbar-nav',
            'container'         => false,
            'fallback_cb'       => false
            // 'walker'            => new Sidemenu_Walker()
        ); ?>

        <nav>
            <button class="navbar_close" title="<?php _e('Stäng sidomeny', 'buildbite'); ?>"></button>
            <?php wp_nav_menu( $args ); ?>
        </nav>
    </div> -->

</header>