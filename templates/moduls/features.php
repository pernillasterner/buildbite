<?php 
$icon = get_sub_field('icon'); 
$title = get_sub_field('title'); 
$content = get_sub_field('content');
$list_items = get_sub_field('list_items');
?>
<section id="modul_features" class="modul modul_features modul_show">
    <div class="row modul-content">
        <div class="col-3 modul-left">
            <div class="row-auto pt-6">
                <img title="<?php echo $icon['title']; ?>" alt="<?php echo $icon['title']; ?>" src="<?php echo $icon['url']; ?>">
                <h4><?php echo $title; ?></h4>
            </div>
            <div class="row">
                <a href="" class="btn btn-secondary">get started</a>
                <!-- <button id="modul_open" class="btn btn-nav open">get started</button> -->
            </div>
        </div>
        <div class="col-9 modul-right">
            <a class="close" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Close.svg" alt=""></a>
           <div class="col">
                <h2><?php echo $content; ?></h2>
                <?php if($list_items) : ?>
                    <ul class="project-list">
                        <?php foreach($list_items as $item) : ?>
                            <li><?php echo $item['list_item']; ?></li>
                        <?php endforeach; ?>
                </ul>
                <?php endif; ?>
           </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/iPhone.svg" alt="">
        </div>
    </div>
</section>