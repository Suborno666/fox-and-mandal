<div class="pbmit-slider-social">
    <ul class="pbmit-social-links">
        <li class="pbmit-social-li pbmit-social-facebook">
            <a href="#" target="_blank">
            <span><i class="pbmit-base-icon-facebook-squared"></i></span>
            </a>
        </li>
        <li class="pbmit-social-li pbmit-social-twitter">
            <a href="#" target="_blank">
            <span><i class="pbmit-base-icon-twitter"></i></span>
            </a>
        </li>
        <li class="pbmit-social-li pbmit-social-instagram">
            <a href="#" target="_blank">
            <span><i class="pbmit-base-icon-instagram"></i></span>
            </a>
        </li>
        <li class="pbmit-social-li pbmit-social-youtube">
            <a href="#" target="_blank">
            <span><i class="pbmit-base-icon-youtube-play"></i></span>
            </a>
        </li>
    </ul>
</div>
<div class="bannerSec hero-slider hero-style">
    <div class="swiper-container">
        <div class="swiper-wrapper">   
            <?php 
                $arr = get_field('banner_images','option');
                foreach($arr as $element):
            ?>
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" style="background-image: url(<?php echo $element['banner_image']['url'];?>);">
                <div class="container">
                    <div data-swiper-parallax="300" class="slide-title">
                        <h4>Fox & Mandal</h4>        
                    </div>
                    <div data-swiper-parallax="400" class="slide-title">
                        <h2><?php echo $element['heading'];?></h2>
                    </div>
                    <div data-swiper-parallax="400" class="slide-text">
                        <p><?php echo $element['paragraph'];?></p>
                    </div>
                </div>
                </div>
                <!-- end slide-inner -->
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <!-- end swiper-slide -->
            <?php
                endforeach;
            ?>
            
        </div>
    </div>
</div>