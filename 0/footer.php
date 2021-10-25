
<!-- ==================== FOOTER SECTION ======================== -->
<section class="bg_main ft__bg">
    <div class="fg_center footer">

        <div class="ft__caption">
            
            <div class="sec_ft">

                <div class="ft_logo">
                    <a href="./">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>

                <div class="ft_involved">
                    <h3 class="in_text">
                        9b, James Oluleye Crescent, Harmony Enclave Estate, off Adeniyi Jones Avenue, Ikeja, Lagos.
                    </h3>

                    <ul class="ft__01">
                        <li class="ft__list" style="display:flex;align-items:center;justify-content:left">
                            <i class="icofont-phone-circle"></i>+2349010001990, +2349010001992
                        </li> 
                        <li class="ft__list" style="display:flex;align-items:center">
                            <i class="icofont-send-mail"></i>info@lynxlaboratories.com.ng
                        </li> 
                       
                        <li class="ft__list">
                            <div class="ftIcons">
                                <a href="https://web.facebook.com/LYNXDNA/?_rdc=1&_rdr" target="_blank" class="ic_1"><i class='bx bxl-facebook-circle' ></i></a>
                                <a href="https://twitter.com/DnaLynx?s=09" target="_blank" class="ic_1"><i class='bx bxl-twitter' ></i></a>
                                <a href="https://instagram.com/lynxdna?utm_medium=copy_link" target="_blank" class="ic_1"><i class='bx bxl-instagram' ></i></a>
                                <p class="ic_txt">lynxdna</p>
                            </div>
                        </li> 
                    </ul>
                </div>
            </div>
            

         

            <div class="ft_about">
                <h3 class="in_text">RELATED LINKS</h3>

                <ul class="ft__01">
                    <li class="ft__list active_2">
                        <a href="./" class="inv_1">Home</a>
                    </li> 
                    <li class="ft__list">
                        <a href="dna-service" class="inv_1">Our Services</a>
                    </li> 
                    <li class="ft__list">
                        <a href="about-us" class="inv_1">About us</a>
                    </li> 
                    <li class="ft__list">
                        <a href="faqs" class="inv_1">FAQS</a>
                    </li> 
                </ul>

            </div>

            <div class="ft_about">
                <h3 class="in_text">OTHER LINKS</h3>

                <ul class="ft__01">
                    <li class="ft__list active_2">
                        <a href="collection-centers" class="inv_1">Collection Centres</a>
                    </li> 
                    <li class="ft__list">
                        <a href="blog" class="inv_1">Blog</a>
                    </li> 
                    <li class="ft__list">
                        <a href="contact" class="inv_1">Contact Us</a>
                    </li> 
                </ul>

            </div>

     
        </div>

        <hr>
        
        <div class="ft_copy">
            <h3 class="copy__1">© Copyright © Lynx Laboratories <?php echo date('Y')?>. All rights reserved. <a href="collection-centers" class="cct">Collection Centre</a></h3>
        </div>

        <!-- MODALS SECTIONS -->
            <div class="overlay" style="width:auto; height:auto" id="ovrlay">
                <div class="modals" id="mail_modal">
                
                    <div class="close" id='close'>
                        <div id="support">
                            <img src="img/support.jpeg" alt="">
                        </div>
                        <i class='bx bx-x' ></i>
                    </div>
                    
                    <form id="mail_msg" method="POST" action="inc/manage_mail" name="sendForm">
                        <p id="intro">Welcome to lynxlaboratories, how may we help you?..</p>
                        <div class="form_group">
                            <input type="email" name="email" id="email" class="email_1" placeholder="Your email" onkeyup="checkfield()">
                            
                        </div>
                        <span id="ct_err" class="mail_er"></span>
                        
                        <div class="form_group">
                            <input type="number" name="phone" id="phone" class="phone_1" placeholder="Your phone number" onkeyup="checkfield()">
                            
                        </div>
                        <span id="ct_err" class="phone_er"></span>

                        
                        <div class="form_group">
                        <textarea name="message" style="height: 150px;" class="message_1" id="message" placeholder="Message..." onkeyup="checkfield()"></textarea>
                        
                        </div>
                        <span id="ct_err" class="msg_er"></span>

                        
                        <input type="submit" value="Send message" name="send" disabled="disabled" style="padding:0px" id="pick" >
                    </form>

                </div>
            </div> 


        <!-- END OF MODALS SECTIONS -->
        <div class="modals_btn">
            <a href="https://api.whatsapp.com/send?phone=2349010001992" target="_blank" class="whtsap"><i class="icofont-brand-whatsapp"></i> </a>
            <a class="mail" id="mail_icon"><i class='bx bx-mail-send' ></i> </a>
        </div>
        <script>
            let modal = document.getElementById('mail_modal');
            let mail = document.getElementById('mail_icon');
            let close = document.getElementById('close');
            // let ovrlay = document.getElementById('ovrlay');
            let ovrlay = document.querySelector('.overlay');

            ovrlay.addEventListener('click', function () {
                // mail.style.display = "flex";
                // ovrlay.style.display = "none";
                // modal.classList.remove('pop_up');
            })

            close.addEventListener('click', function () {
                if (modal.classList.contains('pop_up')) 
                {
                    modal.classList.remove('pop_up');
                    mail.style.display = "flex";
                    ovrlay.style.display = "none";
                }
                else
                {
                    modal.classList.toggle('pop_up');
                }
            })
            mail.addEventListener('click', function () {
                modal.classList.toggle('pop_up');
                mail.style.display = "none";
                ovrlay.style.display = "block";
                
            })


        </script>
        <div class="top__btn">
            <a href="#" class="top"> <i class='bx bx-chevron-up' ></i></a>
        </div>

      
    
    </div>
</section>
<!-- ==================== END FOOTER SECTION ======================== -->



<!-- ================ SCROLL ANNIMATION =============== -->
<script src="aos/dist/aos.js"></script>


<script src="splide/dist/js/splide.min.js"></script>
<!-- ==================== JS Slider (Courosel) SECTION ======================== -->

<script src="js/main.js"></script>
<script src="js/request.js"></script>


<!-- jQuery -->
<script src="packed/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->

 <!-- Bootstrap core JavaScript-->
<script src="packed/vendor/jquery/jquery.min.js"></script>
<script src="packed/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="packed/vendor/jquery/jquery.min.js"></script>
<script src="packed/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SWEAT ALERT scripts -->
    <script src="packed/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="packed/plugins/toastr/toastr.min.js"></script>
<script src="js/main.js"></script>



<!-- ======== MAIN ICON SCRIPT ========= -->
<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>

<!-- Bootstrap core JavaScript -->
<script src="blog/vendor/jquery/jquery.min.js"></script>
<script src="blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="blog/assets/js/custom.js"></script>
    <script src="blog/assets/js/owl.js"></script>
    <script src="blog/assets/js/slick.js"></script>
    <script src="blog/assets/js/isotope.js"></script>
    <script src="blog/assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


    <?php
        if (isset($_SESSION['status']) && isset($_SESSION['status_code'])) 
        {
    ?>
     <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'bottom',
            showConfirmButton: false,
            timer: 3000
        })

        Swal.fire({
            icon: "<?php echo $_SESSION['status_code']?>",
            text: "<?php echo $_SESSION['status']?>",
            title: "<?php echo $_SESSION['status_title']?>",
            showConfirmButton: true,
        });
    </script>
    <?php 
        unset($_SESSION['status']);
    }; 
    ?>

</body>

</html>
