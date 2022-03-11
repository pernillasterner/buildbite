<?php 
$icon = get_sub_field('icon'); 
$title = get_sub_field('title'); 
$content = get_sub_field('content');
$list_items = get_sub_field('list_items');

$lang = get_language_attributes();
if(strpos($lang, 'sv-SE')) : 
    $get_started = 'kom igång';
elseif(strpos($lang, 'fi')) :
    $get_started = 'aloita nyt';
else :
    $get_started = 'get started';
endif;
?>

<section id="modul_features" class="modul modul_features modul_show">
    <div class="row modul-content">
        <div class="col-12 col-md-4 modul-left">
            <div class="row-auto pt-6">
                <img title="<?php echo $icon['title']; ?>" alt="<?php echo $icon['title']; ?>" src="<?php echo $icon['url']; ?>">
                <h4><?php echo $title; ?></h4>
            </div>
            <a class="close" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Close.svg" alt=""></a>
            <div class="row"> 
                <button class="btn btn-secondary open"><?php echo $get_started; ?></button>
            </div>
        </div>
        <div class="col-12 col-md-8 modul-right">
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
<?php get_template_part( 'templates/moduls/get_started_modul'); ?>