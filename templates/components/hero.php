<?php $hero_content = get_sub_field('content'); ?>


<section class="component component_hero big">
    <?php foreach( $hero_content as $content ) : ?>
        <?php 
            $main_image     = $content['image'];
            $header         = $content['header'];
            $header_tag     = $content['header_tag'];
            $preamble       = $content['preamble'];
            $button         = $content['button'];
            $qr_image       = $content['qr_image'];
        ?>
        
        <div class="hero_image" style="background-image: url('<?php echo (!empty($main_image)) ? $main_image['url'] : ''; ?>')"></div>

        <div class="row hero_content">
            <div class="col-8">
                <?php if($header) : ?>
                    <?php echo '<' . $header_tag . '>' . $header . '</' . $header_tag . '>'; ?>
                <?php endif; ?>
                <?php if($preamble) : ?>
                    <p><?php echo $preamble; ?></p>
                <?php endif; ?>
                <?php if($button) : ?>
                    <a href="<?php $button['link']; ?>" class="btn btn-hero"><?php echo $button['title']; ?></a>
                <?php endif; ?>
            </div>
            <div class="col-4">
                <img title="qr-code" alt="qr-code" src="<?php echo $qr_image['url']; ?>">
            </div>
        </div>
    <?php endforeach; ?>
</section>