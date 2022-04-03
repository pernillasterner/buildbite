<?php
$rows = get_sub_field('row');
$header = get_sub_field('header');
$total_tags = 8;
?>

<section id="why_buildbite" class="component component_text_image desktop">
<h2><?php echo $header; ?></h2>
    <?php if($rows) : ?>
        <div class="row first no-gutters">
            <div class="col left">
                <?php $y = 0; ?>
                <?php foreach($rows as $row) : ?>
                <?php 
                $content = $row['content'];
                $subheading = $content['subheading'];
                $text = $content['text'];
                $tags = $content['tags'];
                ?>
                <div id="text_image_container" class="container_content">
                    <h3 id="text_image_subheading" class="col-4"><?php echo $subheading; ?></h3>
                    <div class="col-8 container_text">
                        <h5 class="mb-2"><?php echo $text; ?></h5>
                        <!-- Only display selected tags -->
                        <?php for($i = 0; $i <= $total_tags; $i++) : ?>
                            <?php if( isset($tags[$i]['tag']) &&  $tags[$i]['show_tag_on_desktop'] ) : ?>
                                <div class="row d-inline-block mb-1">
                                    <ul>
                                        <li class="mr-1"><h6><?php echo $tags[$i]['tag']; ?></h6></li>
                                    </ul>
                                </div>
                            <?php endif; ?>
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
                 <div id="background-img" class="background-col" style="background-image: url(<?php echo $image['url']; ?>);"></div>
                <?php $i++; ?>
            <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
</section>