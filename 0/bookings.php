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

        <div class="frm_txt" data-aos="fade-up" data-aos-duration="3200">
            <h3 class="abt_h1">Join Lynx Agents and get extra revenue</h3>
            <p class="frm_body">
                Do you own or manage a private clinic/ Laboratory and would like to work with us?
                <br> Do you own a clinic / Laboratory or are you a private doctor / nurse?

                <br> <b>Why not Join Lynx sample collection network?</b> 

                <br> With full training and some of the best rates for sample collection, we are sure to guarantee satisfactory relationship.
                Be sure to get first-hand information on DNA while making extra income for yourself.

            </p>
        </div>
        
        <div class="main_from">
            <form id="agency" method="POST" action="inc/manage_booking" name="form">
                <label for="fullname" data-aos="fade-up" data-aos-duration="3200">Name</label>
                <div class="form_group" >
                    <input type="text" name="fullname" id="fullname" class="fullname" onkeyup="checkform()">
                </div>
                <span id="ag_err" class="f_er"></span>

                <label for="email" data-aos="fade-up" data-aos-duration="3200">Email</label>
                <div class="form_group" data-aos="fade-up" data-aos-duration="3200">
                    <input type="email" name="email" id="email" class="email" onkeyup="checkform()">
                </div>
                <span id="ag_err" class="e_er"></span>

                <label for="company" data-aos="fade-up" data-aos-duration="3200">Company</label>
                <div class="form_group" data-aos="fade-up" data-aos-duration="3200">
                    <input type="text" name="company" id="company" class="company" onkeyup="checkform()">
                </div>
                <span id="ag_err" class="c_er"></span>

                <label for="phone" data-aos="fade-up" data-aos-duration="3200">Phone</label>
                <div class="form_group" data-aos="fade-up" data-aos-duration="3200">
                    <input type="number" name="phone" id="phone" class="phone" onkeyup="checkform()">
                </div>
                <span id="ag_err" class="p_er"></span>

                <label for="message" data-aos="fade-up" data-aos-duration="3200">Message</label>
                <div class="form_group" data-aos="fade-up" data-aos-duration="3200">
                    <textarea name="message" id="message" class="message" onkeyup="checkform()"></textarea>
                </div>
                <span id="ag_err" class="m_er"></span>


                <input type="submit" name="send" id="send" class="send_mssg" value="Send message" disabled="disabled">
       
            </form>
        </div>
    </div>
</section>
<!-- END OF FORM SECTION -->


<!-- ==================== CONNECT SECTION ======================== -->
<section class="bg_main" id="connect">
    <div class="fg_center conn">
        
        <div class="connect__1" data-aos="fade-up" data-aos-duration="3400">
            <div class="title">
                <h2 class="sub__title con__title ">Unveil the real you!</h2>
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
