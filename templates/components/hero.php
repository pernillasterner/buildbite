<?php $hero_content = get_sub_field('content'); ?>
<?php $linear_gradient = 'linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 80%)'; ?>

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
        
        <div class="hero_image" style="background-image: <?php echo $linear_gradient; ?>, url('<?php echo (!empty($main_image)) ? $main_image['url'] : ''; ?>')"></div>

        <div class="row hero_content">
            <div class="col-md">
                <?php if($header) : ?>
                    <?php echo '<' . $header_tag . '>' . $header . '</' . $header_tag . '>'; ?>
                <?php endif; ?>
                <?php if($preamble) : ?>
                    <p><?php echo $preamble; ?></p>
                <?php endif; ?>
                <?php if($button) : ?>
                    <button class="btn btn-secondary open"><?php echo $button['title']; ?></button>
                <?php endif; ?>
            </div>
            <div class="col-md">
                <?php if($qr_image) : ?>
                    <img class="qr-code" title="qr-code" alt="qr-code" src="<?php echo $qr_image['url']; ?>">
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>