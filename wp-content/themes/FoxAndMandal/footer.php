         <!-- footer -->
         <footer class="footer site-footer">
            <div class="pbmit-footer-widget-area">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 col-lg-4">
                        <div class="row">
                           <div class="col-md-8">
                              <div class="widget pbmit-two-column-menu">
                                 <h2 class="widget-title">Quick Links</h2>
                                 <div class="textwidget">
                                    <ul>
                                       <li><a href="#">Home</a></li>
                                       <li><a href="#">About Us</a></li>
                                       <li><a href="#">Services</a></li>
                                       <li><a href="#">Case Studies</a></li>
                                       <li><a href="#">Career</a></li>
                                       <li><a href="#">Alumni</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="widget">
                                 <h3 class="widget-title">Social</h3>
                                 <div class="textwidget">
                                    <ul>
                                       <li><a href="#">Facebook</a></li>
                                       <li><a href="#">Twitter</a></li>
                                       <li><a href="#">Linkedin</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="widget">
                           <div class="footerLogo">
                              <img src="images/about-1.jpg" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="widget last-col-widget">
                           <h2>Stop informing.<br>Start inspiring.</h2>
                           <p>Let’s Stay in Touch</p>
                           <div class="pbmit-footer-newsletter">
                              <input type="email" name="EMAIL" placeholder="Enter your Email" required="">
                              <button type="submit" value="Sign up">
                                 <i class="pbmit-base-icon-right-arrow-1"></i>
                              </button>
                          </div>
                          <h3 class="widget-title">Contact</h3>
                           <div class="pbmit-contact-widget-lines">
                              <div class="pbmit-contact-widget-line widget-address">calcutta@foxandmandal.co.in</div>
                              <div class="pbmit-contact-widget-line widget-phone">+ 91 33 2248 4843</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="pbmit-footer-section">
               <div class="container">
                  <div class="pbmit-footer-text-inner">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="pbmit-footer-copyright-text-area"> Copyright © 2023 
                              <a href="#">Fox and Mandal</a>, All Rights Reserved.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class=" pbmit-footer-menu-area">
                              <div class="menu-copyright-menu-container">
                                 <p>Powered by <a href="">PromotEdge</a></p>
                              </div>
                           </div>
                        </div>			
                     </div>
                  </div>
               </div>
            </div>	
         </footer>
         <!-- footer End -->

   </div>
   <!-- page wrapper End -->

   <!-- Search Box Start Here -->
   <div class="pbmit-search-overlay">
      <div class="pbmit-icon-close"></div>
      <div class="pbmit-search-outer"> 
         <form class="pbmit-site-searchform">
            <input type="search" class="form-control field searchform-s" name="s" placeholder="Type Word Then Press Enter">
            <button type="submit">
               <i class="pbmit-base-icon-search-1"></i>
            </button>
         </form>
      </div>
   </div>
   <!-- Search Box End Here -->

     <?php
     wp_footer()
     ?>
      <!-- JS
         ============================================ -->
      <!-- jQuery JS -->
      <!-- <script src="js/jquery.min.js"></script> -->
      <!-- Popper JS -->
      <!-- <script src="js/popper.min.js"></script> -->
      <!-- Bootstrap JS -->
      <!-- <script src="js/bootstrap.min.js"></script> -->
      <!-- jquery Waypoints JS -->
      <!-- <script src="js/jquery.waypoints.min.js"></script> -->
      <!-- jquery Appear JS -->
      <!-- <script src="js/jquery.appear.js"></script> -->
      <!-- Numinate JS -->
      <!-- <script src="js/numinate.min.js"></script> -->
      <!-- Slick JS -->
      <!-- <script src="js/swiper.min.js"></script> -->
      <!-- Magnific JS -->
      <!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
      <!-- Circle Progress JS -->
      <!-- <script src="js/circle-progress.js"></script> -->
      <!-- countdown JS -->
      <!-- <script src="js/jquery.countdown.min.js"></script>  -->
      <!-- AOS -->
      <!-- <script src="js/aos.js"></script> -->
      <!-- Circle Progres -->
      <!-- <script src='js/circle-progress.min.js'></script>    -->
      <!-- GSAP -->
      <!-- <script src='js/gsap.js'></script> -->
      <!-- Scroll Trigger -->
      <!-- <script src='js/ScrollTrigger.js'></script> -->
      <!-- Split Text -->
      <!-- <script src='js/SplitText.js'></script> -->
      <!--slick slider-->
      <!-- <script src='js/slick.js'></script> -->
      <!-- Cursor -->      
      <!-- <script src='js/cursor.js'></script> -->
      <!-- Magnetic -->
      <!-- <script src='js/magnetic.js'></script> -->
      <!-- Hammer -->
      <!-- <script src='js/hammer.min.js'></script> -->
      <!-- Timeline -->
      <!-- <script src='js/timeline.js'></script> -->
      <!-- GSAP Animation -->
      <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script> -->
      <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js'></script> -->
      
      <!-- <script src='js/gsap-animation.js'></script>         -->
      <!-- Scripts JS -->
      <!-- <script src="js/scripts.js"></script> -->
      <!-- Revolution JS -->
      <!-- <script src="revolution/rslider.js"></script>
      <script src="revolution/rbtools.min.js"></script>
      <script src="revolution/rs6.min.js"></script> -->
      <script>
         
    // HERO SLIDER
    var menu = [];
    jQuery('.swiper-slide').each( function(index){
        menu.push( jQuery(this).find('.slide-inner').attr("data-text") );
    });
    var interleaveOffset = 0.5;
    var swiperOptions = {
        loop: true,
        speed: 1000,
        parallax: true,
        autoplay: {
            delay: 6500,
            disableOnInteraction: false,
        },
        watchSlidesProgress: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        on: {
            progress: function() {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    var slideProgress = swiper.slides[i].progress;
                    var innerOffset = swiper.width * interleaveOffset;
                    var innerTranslate = slideProgress * innerOffset;
                    swiper.slides[i].querySelector(".slide-inner").style.transform =
                    "translate3d(" + innerTranslate + "px, 0, 0)";
                }      
            },

            touchStart: function() {
              var swiper = this;
              for (var i = 0; i < swiper.slides.length; i++) {
                swiper.slides[i].style.transition = "";
              }
            },

            setTransition: function(speed) {
                var swiper = this;
                for (var i = 0; i < swiper.slides.length; i++) {
                    swiper.slides[i].style.transition = speed + "ms";
                    swiper.slides[i].querySelector(".slide-inner").style.transition =
                    speed + "ms";
                }
            }
        }
    };

    var swiper = new Swiper(".swiper-container", swiperOptions);

    // DATA BACKGROUND IMAGE
    var sliderBgSetting = $(".slide-bg-image");
    sliderBgSetting.each(function(indx){
        if ($(this).attr("data-background")){
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });
      </script>

   </body>

</html>