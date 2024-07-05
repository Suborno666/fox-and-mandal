<?php

get_header();


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
                              
                                 <p><?php the_content();?></p>
                              
                              <p></p>
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

                           <?php 
                           $args=
                           [
                           
                              'post_type' => 'advocates',
                              'post_status' => 'publish',
                              'posts_per_page'=>-1,
                              'order'=>'ASC',
                              
                           ];
                           $advocate = new WP_Query($args);
                           while($advocate->have_posts()):
                              $advocate->the_post();
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
                                             <a href="#"><?php the_title(); ?></a></h3>
                                          <div class="pbminfotech-team-position">
                                             <div class="pbminfotech-box-team-position">
                                             <?php
                                             $terms = get_the_terms($advocate->ID, 'advocate_designation');
                                             if ($terms && !is_wp_error($terms)) {
                                                   $term_names = array();
                                                   foreach ($terms as $term) {
                                                      $term_names[] = $term->name;
                                                   }
                                                   echo implode(', ', $term_names);
                                             } else {
                                                   echo 'No designation';
                                             }
                                             ?>                                             </div>
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
                        <!-- Slide1 -->
                        <?php
                        $args=
                        [
                        
                           'post_type' => 'testimonials',
                           'post_status' => 'publish',
                           'posts_per_page'=>-1,
                           'order'=>'ASC',
                           
                        ];
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                           $loop->the_post();
                        ?>
                        ?>
                        <div class="swiper-slide">
                            <article class="pbmit-testimonial-style-1">
                              <div class="pbminfotech-post-item">
                                 <div class="pbmit-featured-wrapper">
                                    <img src="images/testimonial/testimonial-03.jpg" class="img-fluid" alt="">
                                 </div>
                                 <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-desc">
                                       <blockquote class="pbminfotech-testimonial-text">
                                          <div class="at-above-post-homepage addthis_tool"></div>
                                          <p>“<?php the_content();?>”</p>
                                          <div class="at-below-post-homepage addthis_tool"></div>
                                       </blockquote>
                                    </div>
                                    <div class="pbminfotech-box-author">
                                       <h3 class="pbminfotech-box-title"><?php echo get_field('name',$loop->ID)?></h3>
                                       <div class="pbminfotech-testimonial-detail"><?php echo get_field('profession',$loop->ID)?></div>
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
               <div class="client-section-home1">
                  <div class="container-fluid">
                     <div class="swiper-slider marquee">
                        <div class="swiper-wrapper">
                           <?php
                           $data = get_field('clients',$id);
                           foreach($data as $clients):
                              // echo "<pre>";
                              // print_r($clients);
                           ?>
                           <div class="swiper-slide">
                              <article class="pbmit-client-style-1">
                                 <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide"><?php echo $clients['title']?></h4>
                                    <div class="pbmit-client-hover-img">
                                       <img src="<?php echo $clients['image']['url']?>" class="img-fluid"  alt="">
                                    </div>
                                    <div class="pbmit-featured-wrapper">
                                       <img src="<?php echo $clients['image']['url']?>" class="img-fluid" alt="">
                                    </div>
                                 </div>
                              </article>
                           </div>
                           <?php
                           endforeach;
                           ?>
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
                     
                     <a href="<?php echo get_the_permalink(226);?>" class="pbmit-btn mt-4">
                        <span>More</span>
                     </a>
                           
                  </div>
               </div>
               <div class="swiper-wrapper">
                  <?php
                  $args=
                  [
                  
                     'post_type' => 'Post',
                     'post_status' => 'publish',
                     'posts_per_page'=>-1,
                     'order'=>'ASC',
                     
                  ];
                  $loop = new WP_Query($args); 
                  while($loop->have_posts()):
                     $loop->the_post();
                     $categories = get_the_category();
                  ?>
                  <div class="swiper-slide" style="background: url(<?php echo get_the_post_thumbnail_url($loop->ID, 'full');?>);">
                     <img src="<?php echo get_the_post_thumbnail_url($loop->ID, 'full');?>" class="entity-img" />
                     <div class="content">
                        <div class="pbmit-meta-container">
                           <span class="pbmit-date-wrapper pbmit-meta-line">
                           <span class="pbmit-post-date"><?php echo  date("Y/m/d");?></span>
                           </span>
                           <span class="pbmit-meta-category pbmit-meta-line">
                              <a href="#" rel="category tag">
                              <?php 
                                 if (!empty($categories)) {
                                    foreach ($categories as $category) {
                                          echo '<a href="' . esc_url(get_category_link($category->term_id)) . '" rel="category tag">' . esc_html($category->name) . '</a> ';
                                    }
                                 }
                              ?>
                              </a>
                           </span>
                        </div>
                     <p class="title" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7"><a href="<?php echo the_permalink();?>"><?php the_title()?></a></p>
                     <!-- <span class="caption" data-swiper-parallax="-20%">Case 1</span> -->
                     </div>
                  </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata();?>
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
                              <h2 class="pbmit-title"><?php echo get_field('careers_title',$id);?></h2>
                           </div>                              
                           <p><?php echo get_field('careers_paragraph',$id);?></p>                        
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-4">
                        <div class="portfolio-btn">
                           <a href="<?php echo get_field('link_for_new_careers',$id);?>" class="pbmit-btn pbmit-btn-inline">
                              <span>Join with Us</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         <!-- Page Content End -->
         
<?php
get_footer();
?>