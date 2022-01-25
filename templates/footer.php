<?php
$footer_columns = get_field('footer_columns', 'option');
$prefix = 'templates/components/globals/';
if($footer_columns):
?>
<footer class="site_footer <?php if(is_404()) : ?>site_footer_404<?php endif; ?>">
    <div class="container-fluid">
        <div class="row pb-6">
            <div class="col-lg-6 col-4"><img title="linkedin" alt="linkedin" src="<?php echo get_template_directory_uri() .'/assets/img/Brick.svg'; ?>"></div>
            <div class="col-lg-6 col-8">
                <?php foreach ( $footer_columns as $column ): if($column): $col = $column['column']; ?>
                    <div class="row">
                    <?php 
                        foreach($col as $row): 
                            if($row['item_tyoe'] === 'title'): 
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
        <div class="row">
            <div class="col-6">
                <p class="copyright">©BuildBite <?php echo date("Y"); ?>  •  All Rights Reserved.</p>
            </div>
            <div class="col-6 text-end">
                <a class="pl-1 text-decoration-underline" href="<?php echo site_url('/terms-of-use'); ?>" target="_blank" title="Terms of use" rel="nofollow">Terms of use</a>
                <a class="pl-1 text-decoration-underline" href="<?php echo site_url('/privacy-policy'); ?>" target="_blank" title="Privacy Policy" rel="nofollow">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>
<?php endif; ?>