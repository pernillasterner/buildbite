<?php
$footer_columns = get_field('footer_columns', 'option');
$prefix = 'templates/components/globals/';
if($footer_columns):
?>

<?php 
$lang = get_language_attributes();
if(strpos($lang, 'sv-SE')) : 
    $all_rights = 'Alla rättigheter förbehålls.';
    $terms      = 'Användarvillkor';
    $policy    = 'Dataskydd';
elseif(strpos($lang, 'fi')) :
    $all_rights = 'Kaikki oikeudet pidätetään.';
    $terms      = 'Käyttöehdot';
    $policy    = 'Tietosuoja';
else :
    $all_rights = 'All Rights Reserved';
    $terms      = 'Terms of Use';
    $policy    = 'Privacy Policy';
endif;
?>

<footer class="site_footer <?php if(is_404()) : ?>site_footer_404<?php endif; ?>">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-4 col-12 pb-5"><img class="logo" title="buildbite" alt="buildbite" src="<?php echo get_template_directory_uri() .'/assets/img/Brick.svg'; ?>"></div>
            <div class="col-lg-6 col-sm-8 col-12">
                <?php foreach ( $footer_columns as $column ): if($column): $col = $column['column']; ?>
                    <div class="row">
                    <?php 
                        foreach($col as $row): 
                            if($row['item_type'] === 'title'): 
                                echo $row['title'];
                            elseif($row['item_type'] === 'wysiwyg'):
                                include(locate_template($prefix.'footer-columns--wysiwyg.php'));
                            elseif($row['item_type'] === 'icons'):
                                include(locate_template($prefix.'footer-columns--icons.php')); 
                            endif;
                        endforeach; ?>
                    </div>
                <?php endif; endforeach; ?> 
            </div>
        </div>
        <div class="row terms-info">
            <div class="col-sm-6 col-12">
                <p class="copyright">© Buildbite <?php echo date("Y"); ?>   •   <?php echo $all_rights; ?></p>
            </div>
            <div class="col-sm-6 col-12 text-end">
                <a class="pl-1 text-decoration-underline" href="<?php echo site_url('/terms-of-use'); ?>" target="_blank" title="<?php echo $terms; ?>" rel="nofollow"><?php echo $terms; ?></a>
                <a class="pl-1 text-decoration-underline" href="<?php echo site_url('/privacy-policy'); ?>" target="_blank" title="<?php echo $policy; ?>" rel="nofollow"><?php echo $policy; ?></a>
            </div>
        </div>
    </div>
</footer>
<?php endif; ?>