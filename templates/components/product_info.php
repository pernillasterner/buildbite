<?php 
$rows = get_sub_field('row');
$header = get_sub_field('header');
$header_tag = get_sub_field('header_tag');
?>

<?php 
$lang = get_language_attributes();
if(strpos($lang, 'sv-SE')) : 
    $learn_more = 'lär dig mer';
elseif(strpos($lang, 'fi')) :
    $learn_more = 'lue lisää';
else :
    $learn_more = 'learn more';
endif;
?>

<section id="features" class="component component_product_info carousel">
    <?php if($rows) : ?>
        <div class="row carousel__track-container no-gutters">
            <?php echo '<' . $header_tag . '>' . $header . '</' . $header_tag . '>'; ?>
            <span class="carousel__button carousel__button--left"></span>
            <span class="carousel__button carousel__button--right"></span>
            <div class="row slider-row carousel__track">
                <?php $i = 1; ?>
                <?php foreach( $rows as $row ) : ?>
                    <?php 
                    $icon = $row['icon'];
                    $subheader = $row['subheader'];
                    $content = $row['content'];
                    $link = $row['link'];
                    ?>
                    <div class="col col-sm bg-white carousel__slide">
                        <img title="icon" alt="icon" src="<?php echo $icon['url']; ?>">
                        <h3> <?php echo $i . '. ' . $subheader; ?></h3>
                        <p><?php echo $content; ?></p>
                        <div class="row subscribe-links">
                            <?php if($link) : ?>
                            <a class="btn btn-link-primary open-features" href="<?php echo $link['url']; ?>"><h6><?php echo $learn_more; ?></h6></a>                   
                            <?php endif; ?>
                        </div>
                    </div>
                <?php $i++; ?>
                <?php endforeach; ?>
            </div>
            <ul class="carousel__nav">
                <?php foreach( $rows as $row ) : ?>
                    <li class="carousel__indicator"></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</section>