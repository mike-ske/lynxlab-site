<?php require 'header.php' ?>
<?php require 'nav.php' ?>


<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>  
<!-- ***** Preloader End ***** -->


<!-- CONTACT SECTION -->
<section class="bg_main" id="con_centres">
    <div class="fg_center co_ctre">
        <h1 class="abt_h1">We are always ready to answer all your questions.</h1>
    </div>
</section>
<!-- END OF CONTACT SECTION -->


<!-- FORM SECTION -->
<section class="bg_main" id="risk_centres">
    <div class="fg_center form">

        <div class="frm_txt">
            <h3 class="abt_h1">Contact us/Bookings</h3>
            <p class="frm_body">
                We are here to serve you with what you need 
                and answer all your questions. 
                All calls are encrypted end-to-end and no information is
                shared with unauthorized parties. 
            </p>
        </div>
        
        <div class="main_from">
            <form>
                <label for="fullname">Name</label>
                <div class="form_group">
                    <input type="text" name="fullname" id="fullname" class="fullname">
                </div>
                
                <label for="email">Email</label>
                <div class="form_group">
                    <input type="email" name="email" id="email" class="email">
                </div>
                <label for="message">Message</label>
                <div class="form_group">
                    <textarea name="message" id="message" class="message"></textarea>
                </div>
                <input type="submit" id="send" class="send_mssg" value="Send message">
            </form>
        </div>
    </div>
</section>
<!-- END OF FORM SECTION -->

<!-- MAP SECTION -->
<section class="bg_main" id="frame">
    <iframe src="" frameborder="0"></iframe>
</section>

<?php require 'modal-section.php' ?>

<?php require 'footer.php' ?>
