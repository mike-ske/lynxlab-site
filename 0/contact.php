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
    <div class="fg_center co_ctre" data-aos="fade-up" data-aos-duration="3000">
        <h1 class="abt_h1">We are always ready to answer all your questions.</h1>
    </div>
</section>
<!-- END OF CONTACT SECTION -->


<!-- FORM SECTION -->
<section class="bg_main" id="risk_centres">
    <div class="fg_center form">

        <div class="frm_txt">
            <h3 class="abt_h1" data-aos="fade-up" data-aos-duration="3300">Contact us/Bookings</h3>
            <p class="frm_body" data-aos="fade-up" data-aos-duration="3300">
                We are here to serve you with what you need 
                and answer all your questions. 
                All calls are encrypted end-to-end and no information is
                shared with unauthorized parties. 
            </p>
        </div>
        
        <div class="main_from">
            
            <form id="form" method="POST" action="inc/manage_contact" name="form">
                
                <label for="fullname"  data-aos="fade-up" data-aos-duration="3200">Name</label>
                <div class="form_group"  data-aos="fade-up" data-aos-duration="3200">
                    <input type="text" name="fullname" id="fullname" class="fullname" onkeyup="checkform()">
                    
                </div>
                <span id="ct_err" class="f_er"></span>

                <label for="email"  data-aos="fade-up" data-aos-duration="3200">Email</label>
                <div class="form_group"  data-aos="fade-up" data-aos-duration="3200">
                    <input type="email" name="email" id="email" class="email" onkeyup="checkform()">
                </div>
                <span id="ct_err" class="e_er"></span>

                <label for="message"  data-aos="fade-up" data-aos-duration="3200">Message</label>
                <div class="form_group"  data-aos="fade-up" data-aos-duration="3200">
                    <textarea name="message" id="message" class="message" onkeyup="checkform()"></textarea>
                </div>
                <span id="ct_err" class="m_er"></span>

                <input type="submit" id="output" name="send" class="send_mssg" value="Send message" disabled="disabled">
                <div class="msg" id="respond">this is the message</div>
            </form>
        </div>
    </div>
</section>
<!-- END OF FORM SECTION -->

<!-- MAP SECTION -->

<iframe  class="bg_main" id="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.243737256612!2d3.3454325147291115!3d6.616611723909644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93d05507f23b%3A0xb2a07808c7b83a15!2sLynx%20DNA%20Laboratory%20%7C%20Private%20Paternity%20DNA%20Testing%20Centre%20in%20Nigeria!5e0!3m2!1sen!2sng!4v1627416288662!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy"></iframe>





<!-- ==================== CONNECT SECTION ======================== -->
<section class="bg_main" id="connect">
    <div class="fg_center conn">
        
        <div class="connect__1" data-aos="fade-up" data-aos-duration="3400">
            <div class="title">
                <h2 class="sub__title con__title ">Be sure and stay sure</h2>
            </div>
        </div>

        <div class="connect_btn" data-aos="fade-up" data-aos-duration="3400">
            <a href="contact" class="cnt_btn ctb_1">Book Appointment</a>
            <a href="bookings" class="cnt_btn ctb_2">Become a Collection Agent</a>
        </div>


    </div>

</section>

<!-- ==================== END CONNECT SECTION ======================== -->


<?php require 'footer.php' ?>
