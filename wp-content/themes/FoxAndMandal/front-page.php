<?php

get_header();

global $id;
$id = get_the_ID();

?>

         <!-- Page Content -->
         <div class="page-content">
            
            <!-- Welcome --> 

            <!-- Welcome End -->  

            <!-- About Start --> 
            <section class="aboutSec">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="about-right-section-home3">
                           <div class="pbmit-animation-style1">
                              <img src="<?php echo get_field('logo_image_about')['url'];?>" class="img-fluid" alt="">
                           </div>
                           <div class="about-heading">
                              <p>Founded in 1896 by John Kerr Fox and Gokul Chandra Mandal, Fox & Mandal (F&M) is one of India’s oldest law firms. We have remained committed to the service of our clients, team, and the legal community since our incorporation. At F&M, we have achieved the rare distinction of thriving for 125 years in an ecosystem where longevity has all but disappeared.</p>
                              <p>Our legacy is the cornerstone of our practice. We use our wealth of experience to provide reliable and effective solutions to our clients. We began with 2 partners in our office by the Calcutta High Court in 1896.</p>
                           </div>
                        </div> 
                     </div>
                     <div class="col-md-6">
                        <div class="about-section-3 pbmit-bg-color-white">
                           <div class="pbmit-heading animation-style2">
                              <h4 class="mb-4">Our Story</h4>
                              <h2 class="pbmit-title">Growth is the result of willingly Adapting to the changing world.</h2>
                              <a href="#" class="pbmit-btn mt-4">
                                 <span>Read More</span>
                              </a>
                           </div>
                           
                           <div class="position-relative">
                              <div class="pbmit-animation-style1">
                                 <img src="<?php echo get_field('logo_image_about_2',$id)['url'];?>" class="img-fluid" alt="">
                              </div>
                              <div class="about-us-main-home3">
                                 <div class="pbmit-ihbox pbmit-ihbox-style-4">
                                    <div class="pbmit-ihbox-box">
                                    </div>
                                    <div class="pbmit-ihbox-headingicon">
                                       <div class="pbmit-ihbox-headingicon-inner"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- About End -->

            <!-- Service Start -->
            <section class="pbmit-element-service-style-4">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <?php 
                        $args=
                        [
                        
                           'post_type' => 'practice',
                           'post_status' => 'publish',
                           'posts_per_page'=>-1,
                           'order'=>'ASC',
                           
                        ];
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                           $loop->the_post();
                        ?>
                        <div class="pbmit-sticky">
                           <div class="pbmit-heading text-left animation-style2">
                              <h2 class="pbmit-title"><?php the_title();?></h2>
                           </div>
                           <p><?php the_content();?></p>
                           <a href="#" class="pbmit-btn pbmit-btn-inline">
                              <span>All Services</span>
                           </a>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata(); 
                        ?>
                     </div>
                     <div class="col-md-6">
                        <?php 
                        $args=
                        [
                        
                           'post_type' => 'content',
                           'post_status' => 'publish',
                           'posts_per_page'=>-1,
                           'order'=>'ASC',
                           
                        ];
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                           $loop->the_post();
                        ?>
                        <article class="pbmit-service-style-4">
                           <div class="serviceBox pbminfotech-post-item d-flex justify-content-between">
                              <div class="innerBox d-flex justify-content-between align-items-center">
                                 <div class="pbminfotech-post-item-inner">
                                    <div class="pbminfotech-box-content">
                                       <div class="pbminfotech-box-content-inner">
                                          <h3 class="pbmit-service-title"><a href=""><?php the_title()?></a></h3>
                                       </div>
                                    </div>
                                    <div class="pbmit-service-content">
                                       <div class="at-above-post-homepage addthis_tool"></div>
                                       <p>
                                          <?php the_content();?>
                                       </p>
                                       <div class="at-below-post-homepage addthis_tool"></div>
                                       <p>
                                       </p>
                                    </div>
                                    <div class="pbmit-service-btn">
                                       <a class="btn-arrow" href="<?php the_permalink();?>">
                                          <span class="pbmit-arrow"></span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="pbmit-service-icon">
                                    <img src="<?php the_post_thumbnail_url('thumbnail');?>" alt="">	
                                 </div>
                              </div>
                           </div>
                        </article>
                        <?php                       
                        endwhile;
                        wp_reset_postdata(); 
                        ?>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Service End -->   

      
            <!--count about start-->
            <section class="section-lgt pbmit-element-split-slide-style-1 numberSec" data-cursor="white-color">
               <div class="container">
                  
                  <div class="pbmit-element-split-slide-wrapper">
                    
                           <div class="pbmit-sticky">
                              <div class="pbmit-heading text-left bg-color-dark animation-style2">
                                 <h2 class="pbmit-title">Our numbers that speak</h2>
                              </div>                           
                           </div>
                        
                     <div class="row pbmit-bg-imgbox">
                        <div class="col-lg-7 col-md-12">
                           <div class="pbmit-bg-imgbox">
                              <div class="pbmit-img">
                                 <?php 
                                    $arr =get_field('client_statistics');
                                    foreach ($arr as $element):

                                       // var_dump($element);
                                 ?>
                                 <div class="pbmit-split-slide-item-image">
                                    <img src="<?php echo $element['image']['url']?>" alt="<?php echo $element['image']['alt']?>">
                                 </div>
                                 <?php 
                                    endforeach;
                                 ?>
                              </div>
                              
                           </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                           <div class="pbmit-contentbox">
                           <?php 
                              $arr =get_field('client_statistics');
                              foreach ($arr as $element):
                           ?>
                              <div class="pbmit-split-slide-wrapper">
                                 <div class="pbmit-split-slide-box">
                                    <div class="pbmit-split-responsive-image">  
                                       <div class="pbmit-split-slide-item-image">
                                          <img src="<?php echo $element['image']['url']?>" alt="<?php echo $element['image']['alt']?>">
                                       </div>                                 
                                       <div class="pbmit-icon-box-wrapper d-flex align-items-center">
                                          <div class="pbmit-ihbox-icon">
                                             <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <?php echo $element['logo']?>
                                             </div>
                                          </div>
                                          <div class="pbmit-split-slide-number">
                                             <h4><?php echo $element['numbers']?>+</h4>
                                          </div>
                                       </div>
                                       <div class="pbmit-split-slide-title">
                                          <h4><?php echo $element['heading']?></h4>
                                       </div>
                                       <div class="pbmit-split-slide-desc"><?php echo $element['paragraph']?></div>
                                    </div>
                                 </div>
                              </div>
                           <?php
                              endforeach;
                           ?>
                           </div>
                        </div>
                     </div>
                  </div>  
               </div>
            </section>
            <!--count about end-->

            
            <!-- Team Start -->
            <section class="teamWrap pbmit-element-team-style-2" data-cursor="global-color">
               <div class="container-fluid">
                  <div class="pbmit-heading text-center animation-style2">
                     <h2 class="pbmit-title">Our Core Team</h2>
                  </div>
                  
                     <div class="swiper teamSwiper">
                        <div class="swiper-wrapper">
                           
                           <!-- Slide1 -->
                           <?php 
                           $data = get_field('advocate',$id);

                           foreach($data as $advocate):
                           ?>
                           <div class="swiper-slide">
                              <article class="pbmit-team-style-2">
                                 <div class="pbminfotech-post-item">
                                    <div class="pbminfotech-team-image-box">
                                       <div class="pbminfotech-box-social-links">
                                          <ul class="pbmit-social-links pbmit-team-social-links">
                                             <li class="pbmit-social-li pbmit-social-facebook">
                                                <a href="#" title="Facebook" target="_blank">
                                                   <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                                </a>
                                             </li>
                                             <li class="pbmit-social-li pbmit-social-twitter">
                                                <a href="#" title="Twitter" target="_blank">
                                                   <span><i class="pbmit-base-icon-twitter"></i></span>
                                                </a>
                                             </li>
                                             <li class="pbmit-social-li pbmit-social-instagram">
                                                <a href="#" title="Instagram" target="_blank">
                                                   <span><i class="pbmit-base-icon-instagram"></i></span>
                                                </a>
                                             </li>
                                             <li class="pbmit-social-li pbmit-social-youtube">
                                                <a href="#" title="Youtube" target="_blank">
                                                   <span><i class="pbmit-base-icon-youtube-play"></i></span>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="pbmit-featured-img-wrapper">
                                          <div class="pbmit-featured-wrapper">
                                             <img src="<?php echo get_the_post_thumbnail_url($advocate->ID, 'full'); ?>" class="img-fluid" alt="">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                       <div class="pbminfotech-box-content-inner">
                                          <h3 class="pbmit-team-title">
                                             <a href="#"><?php echo $advocate->post_title; ?></a></h3>
                                          <div class="pbminfotech-team-position">
                                             <div class="pbminfotech-box-team-position"><?php echo get_field('advocate_profession',$advocate->ID); ?></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </article>
                           </div>
                           <?php
                           endforeach;
                           // wp_reset_postdata();
                           ?>
                        </div>
                        
                        
                     </div>
                     
                     <!-- <div class="temNav nav-style-one">
                        <div class="project-next next"><i class="icon arrow-next"></i></div>
                        <div class="project-prev prev"><i class="icon arrow-prev"></i></div>
                     </div>  -->
                  
                  <div class="portfolio-btn">
                     <a href="<?php the_permalink()?>" class="pbmit-btn pbmit-btn-inline">
                        <span>View All Team</span>
                     </a>
                  </div>
               </div>
            </section>
            <!-- Team End -->


            <section class="blog-section-home2" data-cursor="global-color">
               <div class="container">
                  <div class="pbmit-heading bg-color-dark animation-style2">
                     <h2 class="pbmit-title">Our Case Study</h2>
                  </div>
                  <div class="swiper-slider" data-autoplay="false" data-dots="false" data-arrows="false" data-columns="3" data-margin="30" data-effect="slide">
                     <div class="swiper-wrapper">
                        <?php 
                        $args=
                        [
                        
                           'post_type' => 'case_studies',
                           'post_status' => 'publish',
                           'posts_per_page'=>-1,
                           'order'=>'ASC',
                           
                        ];
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                           $loop->the_post();
                        ?>
                        <div class="swiper-slide">
                           <!-- Slide1 -->
                           <article class="pbmit-blog-style-1">
                              <div class="post-item">
                                 <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-img-wrapper">
                                       <div class="pbmit-featured-wrapper">
                                          <img src="<?php echo get_the_post_thumbnail_url($loop->ID, 'full');  ?>" class="img-fluid" alt="">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="pbminfotech-box-content">
                                    
                                    <div class="pbmit-box-content-wrapper">
                                       <h3 class="pbmit-post-title">
                                          <a href="#"><?php the_title();?></a>
                                       </h3>
                                       <div class="pbminfotech-box-desc-text">
                                          <?php the_content();?>			
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </article>
                        </div>
                        <?php 
                           endwhile;
                           wp_reset_postdata(); 
                        ?>
                     </div>
                  </div>                   
               </div>
            </section>

            <!-- Testimonial Start -->
            <section class="testimonail-section-home1" data-cursor="white-color">
               <div class="container">
                  <div class="swiper-slider pbmit-element-testimonial-style-1" data-loop="true" data-autoplay="false" data-dots="false" data-arrows="true" data-columns="1" data-margin="30" data-effect="slide">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Slide1 -->
                            <article class="pbmit-testimonial-style-1">
                              <div class="pbminfotech-post-item">
                                 <div class="pbmit-featured-wrapper">
                                    <img src="images/testimonial/testimonial-03.jpg" class="img-fluid" alt="">
                                 </div>
                                 <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-desc">
                                       <blockquote class="pbminfotech-testimonial-text">
                                          <div class="at-above-post-homepage addthis_tool"></div>
                                          <p>“”</p>
                                          <div class="at-below-post-homepage addthis_tool"></div>
                                       </blockquote>
                                    </div>
                                    <div class="pbminfotech-box-author">
                                       <h3 class="pbminfotech-box-title">Sourav Agarwal</h3>
                                       <div class="pbminfotech-testimonial-detail">Managing director of company</div>
                                    </div>
                                 </div>
                              </div>
                           </article>
                        </div>
                        <div class="swiper-slide">
                           <!-- Slide2 -->
                           <article class="pbmit-testimonial-style-1">
                             <div class="pbminfotech-post-item">
                                <div class="pbmit-featured-wrapper">
                                   <img src="images/testimonial/testimonial-01.jpg" class="img-fluid" alt="">
                                </div>
                                <div class="pbminfotech-box-content">
                                   <div class="pbminfotech-box-desc">
                                      <blockquote class="pbminfotech-testimonial-text">
                                         <div class="at-above-post-homepage addthis_tool"></div>
                                         <p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.”</p>
                                         <div class="at-below-post-homepage addthis_tool"></div>
                                      </blockquote>
                                   </div>
                                   <div class="pbminfotech-box-author">
                                       <h3 class="pbminfotech-box-title">Binay Agarwal</h3>
                                       <div class="pbminfotech-testimonial-detail">Manager and founder</div>                                      
                                   </div>
                                </div>
                             </div>
                          </article>
                        </div>
                        <div class="swiper-slide">
                           <!-- Slide3 -->
                           <article class="pbmit-testimonial-style-1">
                           <div class="pbminfotech-post-item">
                              <div class="pbmit-featured-wrapper">
                                 <img src="images/testimonial/testimonial-02.jpg" class="img-fluid" alt="">
                              </div>
                              <div class="pbminfotech-box-content">
                                 <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                       <div class="at-above-post-homepage addthis_tool"></div>
                                       <p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et.”</p>
                                       <div class="at-below-post-homepage addthis_tool"></div>
                                    </blockquote>
                                 </div>
                                 <div class="pbminfotech-box-author">
                                    <h3 class="pbminfotech-box-title">Benjamin Sardar</h3>
                                    <div class="pbminfotech-testimonial-detail">Co founder and CEO</div>
                                 </div>
                              </div>
                           </div>
                           </article>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="client-section-home1">
                  <div class="container-fluid">
                     <div class="swiper-slider marquee">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide">
                              <article class="pbmit-client-style-1">
                                 <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">client 07</h4>
                                    <div class="pbmit-client-hover-img">
                                       <img src="images/client/client-hover-01.png" class="img-fluid"  alt="">
                                    </div>
                                    <div class="pbmit-featured-wrapper">
                                       <img src="images/client/client-white-01.png" class="img-fluid" alt="">
                                    </div>
                                 </div>
                              </article>
                           </div>
                           <div class="swiper-slide">
                              <article class="pbmit-client-style-1">
                                 <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">client 06</h4>
                                    <div class="pbmit-client-hover-img">
                                       <img src="images/client/client-hover-01.png" class="img-fluid"  alt="">
                                    </div>
                                    <div class="pbmit-featured-wrapper">
                                       <img src="images/client/client-white-01.png" class="img-fluid" alt="">
                                    </div>
                                 </div>
                              </article>
                           </div>
                           <div class="swiper-slide">
                              <article class="pbmit-client-style-1">
                                 <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">client 05</h4>
                                    <div class="pbmit-client-hover-img">
                                       <img src="images/client/client-hover-01.png" class="img-fluid"  alt="">
                                    </div>
                                    <div class="pbmit-featured-wrapper">
                                       <img src="images/client/client-white-01.png" class="img-fluid" alt="">
                                    </div>
                                 </div>
                              </article>
                           </div>
                           <div class="swiper-slide">
                              <article class="pbmit-client-style-1">
                                 <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">client 04</h4>
                                    <div class="pbmit-client-hover-img">
                                       <img src="images/client/client-hover-01.png" class="img-fluid"  alt="">
                                    </div>
                                    <div class="pbmit-featured-wrapper">
                                       <img src="images/client/client-white-01.png" class="img-fluid" alt="">
                                    </div>
                                 </div>
                              </article>
                           </div>
                           <div class="swiper-slide">
                              <article class="pbmit-client-style-1">
                                 <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">client 03</h4>
                                    <div class="pbmit-client-hover-img">
                                       <img src="images/client/client-hover-01.png" class="img-fluid"  alt="">
                                    </div>
                                    <div class="pbmit-featured-wrapper">
                                       <img src="images/client/client-white-01.png" class="img-fluid" alt="">
                                    </div>
                                 </div>
                              </article>
                           </div>
                           <div class="swiper-slide">
                              <article class="pbmit-client-style-1">
                                 <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">client 02</h4>
                                    <div class="pbmit-client-hover-img">
                                       <img src="images/client/client-hover-01.png" class="img-fluid"  alt="">
                                    </div>
                                    <div class="pbmit-featured-wrapper">
                                       <img src="images/client/client-white-01.png" class="img-fluid" alt="">
                                    </div>
                                 </div>
                              </article>
                           </div>
                           <div class="swiper-slide">
                              <article class="pbmit-client-style-1">
                                 <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">client 01</h4>
                                    <div class="pbmit-client-hover-img">
                                       <img src="images/client/client-hover-01.png" class="img-fluid"  alt="">
                                    </div>
                                    <div class="pbmit-featured-wrapper">
                                       <img src="images/client/client-white-01.png" class="img-fluid" alt="">
                                    </div>
                                 </div>
                              </article>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Testimonial End -->

            <!-- Blog Start -->
            <section class="case-swiper-container loading">
               <div class="row">
                  <div class="pbmit-heading text-center animation-style2 mb-5">
                     <h2 class="pbmit-title mb-5">News and Blogs</h2>
                  </div>
               </div>
               <div class="swiper-wrapper">
                 <div class="swiper-slide" style="background: url(images/case-study/case-1.jpg);">
                   <img src="images/case-study/case-1.jpg" class="entity-img" />
                   <div class="content">
                     <div class="pbmit-meta-container">
                        <span class="pbmit-date-wrapper pbmit-meta-line">
                        <span class="pbmit-post-date">May . 17 . 2022</span>
                        </span>
                        <span class="pbmit-meta-category pbmit-meta-line">
                           <a href="#" rel="category tag">Corporate</a>
                        </span>
                     </div>
                     <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><a href="#">Sed ut perspiciatis unde omnis iste natus</a></p>
                     <!-- <span class="caption" data-swiper-parallax="-20%">Case 1</span> -->
                   </div>
                 </div>
                 <div class="swiper-slide" style="background: url(images/case-study/case-2.jpg);">
                  <img src="images/case-study/case-2.jpg" class="entity-img" />
                  <div class="content">
                     <div class="pbmit-meta-container">
                        <span class="pbmit-date-wrapper pbmit-meta-line">
                        <span class="pbmit-post-date">May . 17 . 2022</span>
                        </span>
                        <span class="pbmit-meta-category pbmit-meta-line">
                           <a href="#" rel="category tag">Corporate</a>
                        </span>
                     </div>
                    <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><a href="#">Sed ut perspiciatis unde omnis iste natus</a></p>
                    <!-- <span class="caption" data-swiper-parallax="-20%">Case 2</span> -->
                  </div>
                </div>
                <div class="swiper-slide" style="background: url(images/case-study/case-3.jpg);">
                  <img src="images/case-study/case-3.jpg" class="entity-img" />
                  <div class="content">
                     <div class="pbmit-meta-container">
                        <span class="pbmit-date-wrapper pbmit-meta-line">
                        <span class="pbmit-post-date">May . 17 . 2022</span>
                        </span>
                        <span class="pbmit-meta-category pbmit-meta-line">
                           <a href="#" rel="category tag">Corporate</a>
                        </span>
                     </div>
                    <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><a href="#">Sed ut perspiciatis unde omnis iste natus</a></p>
                    <!-- <span class="caption" data-swiper-parallax="-20%">Case 3</span> -->
                  </div>
                </div>
                <div class="swiper-slide" style="background: url(images/case-study/case-4.jpg);">
                  <img src="images/case-study/case-4.jpg" class="entity-img" />
                  <div class="content">
                     <div class="pbmit-meta-container">
                        <span class="pbmit-date-wrapper pbmit-meta-line">
                        <span class="pbmit-post-date">May . 17 . 2022</span>
                        </span>
                        <span class="pbmit-meta-category pbmit-meta-line">
                           <a href="#" rel="category tag">Corporate</a>
                        </span>
                     </div>
                    <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><a href="#">Sed ut perspiciatis unde omnis iste natus</a></p>
                    <!-- <span class="caption" data-swiper-parallax="-20%">Case 4</span> -->
                  </div>
                </div>
                <div class="swiper-slide" style="background: url(images/case-study/case-2.jpg);">
                  <img src="images/case-study/case-2.jpg" class="entity-img" />
                  <div class="content">
                     <div class="pbmit-meta-container">
                        <span class="pbmit-date-wrapper pbmit-meta-line">
                        <span class="pbmit-post-date">May . 17 . 2022</span>
                        </span>
                        <span class="pbmit-meta-category pbmit-meta-line">
                           <a href="#" rel="category tag">Corporate</a>
                        </span>
                     </div>
                    <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><a href="#">Sed ut perspiciatis unde omnis iste natus</a></p>
                    <!-- <span class="caption" data-swiper-parallax="-20%">Case 5</span> -->
                  </div>
                </div>
               </div>
               
               <!-- If we need pagination -->
               <div class="swiper-pagination"></div>
               <!-- If we need navigation buttons -->
               <div class="swiper-button-prev swiper-button-white"></div>
               <div class="swiper-button-next swiper-button-white"></div>
             </section>
            <!-- Blog End -->

            </div>
            <section class="careerWrap">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-12 col-lg-8">
                        <div class="">
                           <div class="pbmit-heading text-left bg-color-dark animation-style2">
                              <h2 class="pbmit-title">Explore Exciting Career Opportunities</h2>
                           </div>                              
                           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>                        
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-4">
                        <div class="portfolio-btn">
                           <a href="#" class="pbmit-btn pbmit-btn-inline">
                              <span>Join with Us</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         <!-- Page Content End -->

         <!-- footer -->
         <!-- <footer class="footer site-footer">
            <div class="footer-wrap pbmit-footer-big-area">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">								
                        <div class="pbmit-footer-logo">
                           <img src="images/logo.png" alt="Attorly Demo 1">
                        </div>                        
                     </div>			
                  </div>
               </div>
            </div>
            <div class="pbmit-footer-widget-area">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 col-lg-3">
                        <div class="widget pbmit-two-column-menu">
                           <h2 class="widget-title">Quick Links</h2>
                           <div class="textwidget">
                              <ul>
                                 <li><a href="#">Home</a></li>
                                 <li><a href="#">About Us</a></li>
                                 <li><a href="#">Awards</a></li>
                                 <li><a href="#">Testimonials</a></li>
                                 <li><a href="#">Case Studies</a></li>
                                 <li><a href="#">Alumni</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-2">
                        <div class="pbmit-two-widget">
                           <div class="widget">
                              <h3 class="widget-title">Support</h3>
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
                     <div class="col-md-6 col-lg-3">
                        <div class="widget">
                           <h3 class="widget-title">Contact</h3>
                           <div class="pbmit-contact-widget-lines">
                              <div class="pbmit-contact-widget-line widget-address">calcutta@foxandmandal.co.in</div>
                              <div class="pbmit-contact-widget-line widget-phone">+ 91 33 2248 4843</div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-4">
                        <div class="widget">
                           <h2>Stop informing.<br>Start inspiring.</h2>
                           <p>Let’s Stay in Touch</p>
                           <div class="pbmit-footer-newsletter">
                              <input type="email" name="EMAIL" placeholder="Enter your Email" required="">
                              <button type="submit" value="Sign up">
                                 <i class="pbmit-base-icon-right-arrow-1"></i>
                              </button>
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
                           <div class="pbmit-footer-copyright-text-area"> Copyright © 2022 
                              <a href="#">Fox and Mandal</a>, All Rights Reserved.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class=" pbmit-footer-menu-area">
                              <div class="menu-copyright-menu-container">
                                 <ul class="pbmit-footer-menu">
                                    <li class="menu-item">
                                       <a href="#">Services</a>
                                    </li>
                                    <li class="menu-item">
                                       <a href="#">Blogs</a>
                                    </li>
                                    <li class="menu-item">
                                       <a href="#">Careers</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>			
                     </div>
                  </div>
               </div>
            </div>	
         </footer> -->
         <!-- footer End -->
         
<?php
get_footer();
?>