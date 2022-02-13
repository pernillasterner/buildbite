<?php
$row = get_sub_field('row');
$header = get_sub_field('header');
?>

<section class="component component_text_image desktop">
    <?php if($row) : ?>
        <div class="row first no-gutters">
            <div class="col left">
                <h2><?php echo $header; ?></h2>
                <?php foreach($row as $row) : ?>
                <?php 
                $content = $row['content'];
                $subheading = $content['subheading'];
                $text = $content['text'];
                $tags = $content['tags'];
                $image = $content['image'];    
                ?>
                <div class="container_content">
                    <h3 class="col-4"><?php echo $subheading; ?></h3>
                    <div class="colr-8 container_text">
                        <h5><?php echo $text; ?></h5>
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
                <?php endforeach; ?>
            </div>
            <div class="col right background-col" style="background-image: url(<?php echo $image['url']; ?>);"></div>
        </div>
    <?php endif; ?>
</section>


