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
            

            <select name="lang_dropdown" id="dropdown">
                <option value="en" >&#x1F1EC;&#x1F1E7;</option>
                <option value="se">&#x1F1F8;&#x1F1EA;</option>
                <option value="fi">&#x1F1EB;&#x1F1EE;</option>
            </select>           
    
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
                <select name="lang_dropdown" id="dropdown_mobile">
                    <option value="en" >&#x1F1EC;&#x1F1E7;</option>
                    <option value="se">&#x1F1F8;&#x1F1EA;</option>
                    <option value="fi">&#x1F1EB;&#x1F1EE;</option>
                </select>
                <?php wp_nav_menu( $args ); ?>
            </div>
            <div class="nav-footer">
                <p>Try Buildbite for free, and start to build better today.</p>
                <button class="btn btn-nav btn-download">Download the buildbite app</button>
            </div>
        </nav>
    </div>
</header>