<?php 
$rows = get_sub_field('row');
$header = get_sub_field('header');
$header_tag = get_sub_field('header_tag');
?>

<section class="component component_product_info carousel">
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
                                <?php 
                                // echo $link['url'];
                                // echo $link['title'];
                                ?>
                            <a class="btn btn-link-primary open" href="<?php echo $link['url']; ?>"><h6>learn more</h6></a>
                            <!-- <button id="modul_open" class="btn btn-nav open">learn more</button> -->
                            <?php //get_template_part( 'templates/moduls/features'); ?>
                            <button id="modul_open" class="btn btn-nav open">get started</button>
                            <?php get_template_part( 'templates/moduls/futures'); ?>
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