<?php 
$row = get_sub_field('row');
$header = get_sub_field('header');
?>

<section class="component component_text_image tablet">
    <?php if($row) : ?>
        <div class="row no-gutters pl-3">
            <h2><?php echo $header; ?></h2>
            <?php foreach($row as $row) : ?>
                <?php
                    $content = $row['content'];
                    $subheading = $content['subheading'];
                    $text = $content['text'];
                    $tags = $content['tags'];
                    $image = $content['image'];
                ?>
                <?php if($subheading) : ?>
                <div class="row container justify-content-between no-gutters ">
                    <div class="col-12 col-sm-6">
                        <div class="col-12 subheading"><h3><?php echo $subheading; ?></h3></div>
                        <div class="col-12 subcontent">
                            <div class="row"><h5><?php echo $text; ?></h5></div>
                            <?php //foreach($tags as $tag) : ?>
                            <!-- <div class="row d-inline-block mb-1 mt-1">
                                <ul>
                                    <li class="mr-1"><h6><?php //echo $tag['tag']; ?></h6></li>
                                </ul> -->
                            <!-- </div> -->
                        <?php //endforeach; ?>
                        <?php for($i = 0; $i < 3; $i++) : ?>
                            <div class="row d-inline-block mb-1 mt-2">
                                <ul>
                                    <li class="mr-1"><h6><?php echo $tags[$i]['tag']; ?></h6></li>
                                </ul>
                            </div>
                        <?php endfor; ?>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 background-col" style="background-image: url(<?php echo $image['url']; ?>);"></div>
                </div>
                <?php endif; ?>    
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>