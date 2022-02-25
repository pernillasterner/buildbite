<section id="modul_contact-us" class="modul modul_contact-us">
    <div class="row modul-content">
        <div class="col-4 modul-left">
            <div class="row-auto pt-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Vector.svg" alt="">
                <h4>Contact us</h4>
                <p class="d-flex justify-content-start flex-wrap flex-column">Answering your questions is important to us. Send us a message and we will get back to you within 24h.</p>
            </div>
        </div>
        <div class="col-8 modul-right">
            <a class="close" href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Close.svg" alt=""></a>
           <div class="row form-content">
                <form action="/">
                    <div class="col d-flex">
                        <div class="col-6 p-2">
                            <label for="fname">First name</label>
                            <input type="text" id="fname" name="fname">
                        </div>
                        <div class="col-6 p-2">
                            <label for="lname">Last name</label>
                            <input type="text" id="lname" name="lname">
                        </div>
                    </div>

                    <div class="col d-flex">
                        <div class="col-6 p-2">
                            <label for="email">Your email adress</label>
                            <input type="text" id="email" name="email">
                        </div>
                        <div class="col-6 p-2">
                            <label for="company">Company</label>
                            <input type="text" id="company" name="company">
                        </div>
                    </div>
                    
                    <div class="col p-2 position-relative mb-7">
                        <label for="message">Your message</label>
                        <textarea id="message" name="message" rows="6" cols="50"></textarea>
                        <span>Add an attachement<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Paperclip.svg" alt=""></span>
                    </div>


                    <input class="btn btn-primary float-end" type="submit" value="send message">
                </form>
           </div>
        </div>
    </div>
</section>