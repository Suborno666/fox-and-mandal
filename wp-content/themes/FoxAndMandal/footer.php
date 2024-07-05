
         
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
                                       <?php 
                                          wp_nav_menu( 
                                             [
                                                'name' => 'Footer Menu',
                                                'container'=>'',
                                                'theme_location'=>'footer-menu'
                                             ]
                                          ); 
                                       ?>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="widget">
                                 <h3 class="widget-title">Social</h3>
                                 <div class="textwidget">
                                    <ul>
                                       <?php 
                                          wp_nav_menu( 
                                            [
                                                'name' => 'Socials Menu',
                                                'container'=>'',
                                                'theme_location'=>'socials-menu'
                                             ]    
                                          ); 
                                       ?>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="widget">
                           <div class="footerLogo">
                              <img src="<?php echo get_field('footer_logo','option')['url'];?>" alt="">
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
                              <div class="pbmit-contact-widget-line widget-address"><?php echo get_field('email','option')?></div>
                              <div class="pbmit-contact-widget-line widget-phone"><?php echo get_field('phone','option')?></div>
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
   <script>

   $(document).ready(()=>{
      $('reset').on('click',function(){
         $("#advocate_office_location").val('').trigger('change');
         $("#advocate_practice_area#advocate_designation").val('').trigger('change');
      })
   })

   $(document).ready(function() {
      var nameField = $('.wpcf7-form-control.wpcf7-text.wpcf7-validates-as-required');

      var hiddenField = $('.wpcf7-form-control.wpcf7-hidden');

      

      nameField.on('input', function() {
         
         var currentValue = $(this).val();

         hiddenField.val(currentValue);

      });
      var email = $('.wpcf7-form-control.wpcf7-select.wpcf7-validates-as-required');
      email.on('change',function(){

         emailField = $(this).val();
         console.log(emailField);
      
      })

   });

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