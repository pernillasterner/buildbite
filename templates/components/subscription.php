<?php 
$row = get_sub_field('subscriptions'); 
?>

<section class="component component_subscription">
    <?php if($row) : ?>
        <div class="row justify-content-md-center no-gutters">
            <?php foreach( $row as $row ) : ?>
                <?php 
                $heading = $row['heading'];
                $price = $row['price'];
                $period = $row['period'];
                $notification = $row['notification'];
                $benefits = $row['benefits'];
                $start_trial_btn = $row['start_trial-btn'];
                $learn_more_btn = $row['learn_more-btn'];
                ?>
                <div class="col-sm p-5 subscription-item">
                    <div class="row">
                        <h5><?php echo $heading; ?></h5>
                        <p class="price"><?php echo $price; ?>€<span>/<?php echo $period; ?></span></p>
                        <p class="notification"><?php echo $notification; ?></p>
                    </div>
                    <hr class="my-4">
                    <div class="row pb-4">
                        <ul>
                            <?php foreach($benefits as $item) : ?>
                                <li><?php echo $item['benefit']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="row subscribe-links">
                        <a class="btn btn-primary" href="<?php echo $start_trial_btn['url']; ?>"><?php echo $start_trial_btn['title']; ?></a>
                        <a href="<?php echo $learn_more_btn['url']; ?>"><h6><?php echo $learn_more_btn['title']; ?> -> </h6></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>