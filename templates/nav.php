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
            
            <select name="lang" id="lang">
                <option value="sv">SV</option>
                <option value="fi">FI</option>
            </select>

            <button class="btn btn-nav open"><?php echo $get_started; ?></button>
        </div>
    </nav>
    
    <div class="mobile_header">
    <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo_brick.svg" alt="">
        <button class="btn btn-nav btn_get-started-mobile open"><?php echo $get_started; ?></button>
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