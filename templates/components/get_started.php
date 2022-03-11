<?php 
$row = get_sub_field('steps');
$header = get_sub_field('header');
$header_tag = get_sub_field('header_tag');
?>

<section class="component component_get_started">
    <?php if($row) : ?>
        <div class="row justify-content-md-center">
            <?php echo '<' . $header_tag . '>' . $header . '</' . $header_tag . '>'; ?>
            <?php $i = 1; ?>
            <?php foreach( $row as $row ) : ?>
                <?php 
                $icon = $row['icon'];
                $subheader = $row['subheader'];
                $content = $row['content'];
                ?>
                <div class="col-lg-3 col-sm-12 py-5">
                    <img title="icon" alt="icon" src="<?php echo $icon['url']; ?>">
                    <h3> <?php echo $i . '. ' . $subheader; ?></h3>
                    <p><?php echo $content; ?></p>
                </div>
            <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>