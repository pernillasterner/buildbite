<?php 
$icon = get_sub_field('icon');
$header = get_sub_field('header');
$content = get_sub_field('content');
$text = get_sub_field('text');
$contact_link = get_sub_field('link');
$row = get_sub_field('main_content');
?>

<section id="modul_get-started" class="modul modul_get-started">
    <div class="row modul-content">
        <div class="col-12 col-md-4 modul-left">
            <div class="row-auto pt-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector.svg" alt="">
                <h4><?php echo $header; ?></h4>
                <div class="d-flex justify-content-start flex-wrap flex-column">
                    <?php echo $content; ?>
                </div>
            </div>
            <a class="close" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Close.svg" alt=""></a>
            <div class="row contact-info">
                <p><?php echo $text; ?></p>
                <a href="<?php echo $contact_link['url']; ?>"><?php echo $contact_link['title']; ?></a>
            </div>
        </div>
        <div class="col-12 col-md-8 modul-right">
            <a class="close" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Close.svg" alt=""></a>
            <?php foreach($row as $row) : ?>
                <?php 
                $header = $row['header']; 
                $text = $row['text'];
                $qr_image = $row['qr-image'];
                ?>
            <div class="row text-center">
                <h2><?php echo $header; ?></h2>
                <p><?php echo $text; ?></p>
            </div>
            <img title="<?php echo $qr_image['title']; ?>" alt="<?php echo $qr_image['title']; ?>" src="<?php echo $qr_image['url']; ?>">
           <?php endforeach; ?>
        </div>
    </div>
</section>