<?php
$rows = get_sub_field('row');
$header = get_sub_field('header');
?>

<section id="why_buildbite" class="component component_text_image desktop">
    <?php if($rows) : ?>
        <div class="row first no-gutters">
            <div class="col left">
                <h2><?php echo $header; ?></h2>
                <?php $y = 0; ?>
                <?php foreach($rows as $row) : ?>
                <?php 
                $content = $row['content'];
                $subheading = $content['subheading'];
                $text = $content['text'];
                $tags = $content['tags'];
                ?>
                <div id="text_image_container" class="container_content text_image_container<?php echo '-' . $y; ?>">
                    <h3 id="text_image_subheading" class="col-4 text_image_subheading<?php echo '-' . $y; ?>"><?php echo $subheading; ?></h3>
                    <div class="col-8 container_text">
                        <h5><?php echo $text; ?></h5>
                        <?php foreach($tags as $tag) : ?>
                            <!-- <div class="row d-inline-block mb-1 mt-1">
                                <ul>
                                    <li class="mr-1"><h6><?php //echo $tag['tag']; ?></h6></li>
                                </ul> -->
                            <!-- </div> -->
                        <?php endforeach; ?>
                        <?php for($i = 0; $i < 3; $i++) : ?>
                            <div class="row d-inline-block mb-1 mt-2">
                                <ul>
                                    <li class="mr-1"><h6><?php echo $tags[$i]['tag']; ?></h6></li>
                                </ul>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
                <?php $y++; ?>
                <?php endforeach; ?>
            </div>
            <div id="image-container" class="col right position-relative">
            <?php $i = 0; ?>
            <?php foreach($rows as $row) : ?>
                <?php 
                $content = $row['content'];
                $image = $content['image']; 
                ?>
                 <div id="background-img<?php echo '-' . $i; ?>" class="background-col" style="background-image: url(<?php echo $image['url']; ?>);"></div>
                <?php $i++; ?>
            <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>


