<header class="site_header bg-color">

<?php 
$lang = get_language_attributes();
if(strpos($lang, 'sv-SE')) : 
    $get_started = 'kom igång';
elseif(strpos($lang, 'fi')) :
    $get_started = 'aloita nyt';
else :
    $get_started = 'get started';
endif;
?>

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
            
            <a href="<?php echo site_url('moduls/get-started'); ?>" class="btn btn-nav btn_get-started-mobile"><?php echo $get_started; ?></a>
        </div>
    </nav>
    
    <div class="mobile_header">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_brick.svg" alt="">
        <a href="<?php echo site_url('moduls/get-started'); ?>" class="btn btn-nav btn_get-started-mobile"><?php echo $get_started; ?></a>
        <button class="navbar_close" title="">
            <div class="bar"></div>
        </button>
    </div>
          
    <div class="main_navigation">
        
        <?php $args = array(
            'theme_location'    => 'sidemenu',
            'menu_class'        => 'navbar-nav',
            'container'         => false,
            'fallback_cb'       => false
        ); ?>

        <nav class="main-nav">
            <div class="nav-top">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_brick.svg" alt="">
                <?php wp_nav_menu( $args ); ?>
            </div>
            <div class="nav-footer">
                <p>Try Buildbite for free, and start to build better today.</p>
                <button class="btn btn-nav btn-download">Download the buildbite app</button>
            </div>
        </nav>
    </div>
</header>