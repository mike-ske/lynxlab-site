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



<!-- BOOKINGS SECTION -->
<section class="bg_main" id="books_centres">
    <div class="fg_center co_ctre">
        <!-- <h1 class="abt_h1">We are always ready to answer all your questions.</h1> -->
    </div>
</section>
<!-- END OF BOOKINGS SECTION -->


<!-- FORM SECTION -->
<section class="bg_main" id="book_centres">
    <div class="fg_center form">

        <div class="frm_txt">
            <h3 class="abt_h1">Join Lynx Agents and get extra revenue</h3>
            <p class="frm_body">
                By joining Lynx agents, you will get first 
                hand information on DNA while
                you make extra revenue for yourself
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

                <label for="company">Company</label>
                <div class="form_group">
                    <input type="text" name="company" id="company" class="company">
                </div>

                <label for="phone">Phone</label>
                <div class="form_group">
                    <input type="number" name="phone" id="phone" class="phone">
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


<?php require 'modal-section.php' ?>

<?php require 'footer.php' ?>
