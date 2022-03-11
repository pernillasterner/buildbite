<?php 
$header = get_sub_field('header');
$header_tag = get_sub_field('header_tag');
$text = get_sub_field('text');
$qr_image = get_sub_field('qr-image');
$image = get_sub_field('image');
?>

<section class="component component_right_image">
    <div class="row justify-content-md-center">
        <div class="col-sm">
            <?php echo '<' . $header_tag . '>' . $header . '</' . $header_tag . '>'; ?>
            <?php echo '<p>' . $text . '</p>'; ?>
            <img class="qr-image" title="qr-image" alt="qr-image" src="<?php echo $qr_image['url']; ?>">
            <button id="modul_open_hero" href="<?php echo $button['link']; ?>" class="btn btn-primary btn-download">download the buildbite app</button>
        </div>


        <div class="col-sm d-flex flex-column-reverse align-items-end">
            <img title="image" alt="image" class="image" src="<?php echo $image['url']; ?>">
        </div>
    </div>
</section>