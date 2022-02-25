<?php 
$rows = get_sub_field('get_started');

?>
<section id="modul_get-started" class="modul modul_get-started">
    <div class="row modul-content">
        <div class="col-4 modul-left">
            <div class="row-auto pt-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector.svg" alt="">
                <h4>Getting started is easy as 1, 2, 3</h4>
                <ul class="d-flex justify-content-start flex-wrap flex-column">
                    <li>1. Create an account for free</li>
                    <li>2. Invite your clients</li>
                    <li>3. Start building better!</li>
                </ul>
            </div>
            <div class="row contact-info">
                <p>Do you have a question?</p>
                <a href="<?php echo site_url(''); ?>">Contact us</a>
            </div>

        </div>
        <div class="col-8 modul-right">
            <a id="modul_close" class="close" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Close.svg" alt=""></a>
           <div class="row text-center">
               <h2>Start building better with Buildbite today.</h2>
               <p>Try Buildbite for free for 30-day, and finally breaks the traditional construction silos to let everyone collaborate together.</p>
           </div>
           <img src="<?php echo get_template_directory_uri(); ?>/assets/img/get_started.svg" alt="">
        </div>
    </div>
</section>
