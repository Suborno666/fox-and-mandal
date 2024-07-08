<!doctype html>
<html class="no-js" lang="en">
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Fox and Mandal | Home</title>
      <meta name="robots" content="noindex, follow">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> 
      <?php
        wp_head();
      ?>     
   </head>
   <body>
      <!-- page wrapper -->
      <div class="page-wrapper">
         <!-- Header Main Area -->
         <!-- Sidebar Menu -->
         <div class="sidebarWrap">
            <div class="sideBarList row">
               
            <ul class="listMwrap col-lg-6"> 
               <?php
                  $menus = get_field('add_menu','option');
                  foreach($menus as $menu):
                  ?>
                  <li class="menu_list <?php echo ($menu['child_menu']>0)?'has-sub':''; ?>" >
                     <img src="<?php echo $menu['parent_logo'];?>" alt=""> 
                     <div class="subWrapF">
                        <a href="<?php echo $menu['menu_label'];?>"><?php echo $menu['menu_label'];?></a>
                  <?php if($menu['child_menu']>0): ?>
                           <ul class="subwrapUl">
                              <?php foreach($menu['child_menu'] as $childMenu):?>
                                 <li><a href="<?php echo $childMenu['child_url']?>"><?php echo $childMenu['child_label']?></a></li>
                              <?php endforeach ?>
                           </ul>
                  <?php endif ?>
                     </div>
                  </li>
                  <?php   
                  endforeach;
               ?>               
            </ul>
               <div class="col-lg-6">
                  <div class="formWrapFx">
                     <h3>Let us help you better with your queries.</h3>
                     <?php
                        $p = do_shortcode('[contact-form-7 id="1d26938" title="Header Contact Form"]');
                        echo $p;                     
                        // $emails = get_field('email_fields', 'option');
                        // var_dump($emails); 
                     ?>
                     <!-- <form>
                        
                     </form> -->
                  </div>
                  <div>
                     <?php
                     global $field_output;
                     if (!empty($field_output)) {
                         echo $field_output; 
                     }
                     ?>
                  </div>
                  <div class="quickF">
                     <h4>Get in Touch</h4>
                     <p><?php echo get_field('address','option')?>​</p>
                        <div class="addRM">
                           <a href="tel:913322484843"><?php echo get_field('number','option');?></a>
                           <a href="mailto:calcutta@foxandmandal.co.in"><?php echo get_field('email','option');?></a>
                        </div>
                        <div class="socialM">
                           <?php 
                           $data = get_field('socials','option');
                           foreach($data as $media):
                           ?>
                           <a href="<?php echo $media['link']?>"><?php echo $media['name']?></a>
                           <?php 
                           endforeach;
                           ?>
                        </div>
                  </div>
               </div>
               
            </div>
         </div>
         <header class="site-header header-style-1">
            <div class="site-header-menu">
               <div class="container-fluid g-0">
                  <div class="row g-0">
                     <div class="col-md-12">
                        <div class="d-flex align-items-center justify-content-between">
                           <div class="d-flex align-items-center justify-content-between header-content">
                              <div class="site-branding pbmit-logo-area">
                                 <h1 class="site-title">
                                    <a href="<?php echo get_field('logo_url','option');?>">
                                       <img class="logo-img" src="<?php echo get_field('logo','option')['url'];?>" alt="attorly">
                                    </a>
                                 </h1>
                              </div>
                           </div>
                           <div class="pbmit-right-box">
                              <div class="site-navigation d-none">
                                 <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                       <!-- Toggle Button --> 
                                       <button class="navbar-toggler" type="button">
                                          <i class="pbmit-base-icon-menu-1"></i>
                                       </button>
                                    </div>
                                    <div class="pbmit-mobile-menu-bg"></div>
                                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                       <div class="pbmit-menu-wrap">
                                          <span class="closepanel">
                                             <i class="pbmit-base-icon-close-circular-button-symbol"></i>
                                          </span>
                                          <ul class="navigation clearfix">
                                             <li class="active">
                                                <a href="#">Home</a>
                                                <!-- <ul class="sub-menu">
                                                   <li class="active"><a href="#">Home page 01</a></li>
                                                   <li><a href="#">Home page 02</a></li>
                                                   <li><a href="#">Home page 03</a></li>
                                                   <li><a href="#">Home page 04</a></li>
                                                </ul> -->
                                             <li class="dropdown">
                                                <a href="#">About Us</a>
                                                <ul>
                                                   <li><a href="#">Our Journey</a></li>
                                                   <li><a href="#">Mission, Vision, Objectives</a></li>
                                                   <li><a href="#">Leadership Team</a></li>
                                                   <li><a href="#">Awards & Recognitions</a></li>
                                                </ul>
                                             <li>
                                                <a href="#">Practice Areas</a>
                                                <!-- <ul>
                                                   <li><a href="#">Service Detail</a></li>
                                                </ul>
                                                <li>
                                                   <a href="#">Portfolio</a>
                                                   <ul>
                                                      <li><a href="portfolio-style-1.html">Portfolio Style 1</a></li>
                                                      <li><a href="portfolio-style-2.html">Portfolio Style 2</a></li>
                                                      <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                   </ul> -->
                                             </li> 
                                             <li><a href="#">Our Team</a></li>                                            
                                             <li class="dropdown">
                                                <a href="#">Insights</a>
                                                <ul>
                                                   <li><a href="#">Case Studies</a></li>
                                                   <li><a href="#">Blogs</a></li>
                                                   <li><a href="#">News & Media</a></li>
                                                </ul>
                                             </li>
                                             <li class="dropdown">
                                                <a href="#">Career</a>
                                                <ul>
                                                   <li><a href="#">Alumni</a></li>
                                                </ul>
                                             </li>
                                             <li><a href="#">Contacts</a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </nav>
                              </div>
                              <div class="hamBurgerIc">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 200 200">
                                    <g stroke-width="6.5" stroke-linecap="round">
                                      <path
                                        d="M72 82.286h28.75"
                                        fill="#009100"
                                        fill-rule="evenodd"
                                        stroke="#fff"
                                      />
                                      <path
                                        d="M100.75 103.714l72.482-.143c.043 39.398-32.284 71.434-72.16 71.434-39.878 0-72.204-32.036-72.204-71.554"
                                        fill="none"
                                        stroke="#fff"
                                      />
                                      <path
                                        d="M72 125.143h28.75"
                                        fill="#009100"
                                        fill-rule="evenodd"
                                        stroke="#fff"
                                      />
                                      <path
                                        d="M100.75 103.714l-71.908-.143c.026-39.638 32.352-71.674 72.23-71.674 39.876 0 72.203 32.036 72.203 71.554"
                                        fill="none"
                                        stroke="#fff"
                                      />
                                      <path
                                        d="M100.75 82.286h28.75"
                                        fill="#009100"
                                        fill-rule="evenodd"
                                        stroke="#fff"
                                      />
                                      <path
                                        d="M100.75 125.143h28.75"
                                        fill="#009100"
                                        fill-rule="evenodd"
                                        stroke="#fff"
                                      />
                                    </g>
                                  </svg>
                              </div>
                              <div class="pbmit-header-search-btn">
                                 <a href="#"><i class=" pbmit-base-icon-search-1"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- pbmit-header-overlay -->
            <div class="pbmit-slider-social">
            </div>
            <?php
               if(is_front_page()): 
            ?>
            <?php get_template_part('template-parts/frontPage')?>

            <?php
            endif;
            ?>
          <!-- end of hero slider -->
      </header>
      <!-- Header Main Area End Here -->
         <!-- Title Bar -->
