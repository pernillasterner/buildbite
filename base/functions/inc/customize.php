<?php

function get_theme_logo() {
    $logotyp_svg = get_field('logotyp_svg', 'option');
    $logotyp_png = get_field('logotyp_png', 'option');
    ?>
    <a href="<?php echo get_site_url(); ?>" class="navbar-brand">
        <!--[if lt IE 9]>
            <img src="<?php echo $logotyp_png['url']; ?>" alt="<?php echo get_bloginfo("name"); ?>" />
        <![endif]-->
        <!--[if gt IE 9]> -->
        <?php 
        $file_url = $logotyp_svg['url'];
        $upload_dir = wp_upload_dir();
        $file_path = str_replace($upload_dir['baseurl'], "",$file_url);
        $file_path = $upload_dir['basedir'].$file_path;
        //$protocol = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
        //$ctx = stream_context_create(array($protocol => array('timeout' => 2)));
        echo file_get_contents($file_path);
        ?>
        <!-- <![endif]-->
    </a>
    <?php
}