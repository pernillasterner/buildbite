<?php
$footer_icons = $row['icons'];
if($footer_icons) :
?>
<div class="col-6">
    <ul>
        <?php foreach($footer_icons as $icon) : ?>
            <?php if( get_field($icon['icon'], 'option') ) : ?>
                <li>
                    <a href="<?php echo get_field($icon['icon'], 'option'); ?>" target="_blank" title="<?php echo $icon['link']?>" rel="nofollow">
                        <?php
                        switch( $icon['icon'] ) {
                            case "linkedin";
                                echo '<a class="pl-1" href="'. $icon['link'] .'" target=”_blank” rel=”nofollow”><img title="linkedin" alt="linkedin" src="' . get_template_directory_uri() .'/assets/img/Linkedin.svg"></a>';
                                break;
                            case "twitter";
                                echo '<a class="pl-1" href="'. $icon['link'] .'" target=”_blank” rel=”nofollow”><img title="twitter" alt="twitter" src="' . get_template_directory_uri() .'/assets/img/Twitter.svg"></a>';
                                break;
                            case "instagram";
                                echo '<a class="pl-1" href="'. $icon['link'] .'" target=”_blank” rel=”nofollow”><img title="instagram" alt="instagram" src="' . get_template_directory_uri() .'/assets/img/Instagram.svg"></a>';
                                break;
                        }
                        ?>
                    </a>
                </li>       
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>