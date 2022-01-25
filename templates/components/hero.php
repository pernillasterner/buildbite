<?php $hero_content = get_sub_field('content'); ?>


<section class="component component_hero big">
    <?php foreach( $hero_content as $content ) : ?>
        <?php 
            $main_image = $content['image'];
            $header = $content['header'];
            $header_tag = $content['header_tag'];
            $preamble = $content['preamble'];
            $btn_link = $content['button_link'];
        ?>
            <div class="hero_image" style="background-image: url('<?php echo (!empty($main_image)) ? $main_image['url'] : ''; ?>');">
        </div>

        <div class="row hero_content">
            <div class="col-8">
                <?php if($header) : ?>
                    <?php echo '<' . $header_tag . '>' . $header . '</' . $header_tag . '>'; ?>
                <?php endif; ?>
                <?php if($preamble) : ?>
                    <p><?php echo $preamble; ?></p>
                <?php endif; ?>
            </div>
            <div class="col-4">
                <img title="qr-code" alt="qr-code" src="<?php echo get_template_directory_uri() .'/assets/img/qr-code_hero.svg'; ?>">
            </div>
        </div>
    <?php endforeach; ?>
</section>