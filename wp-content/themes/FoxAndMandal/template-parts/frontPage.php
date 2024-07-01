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
        </div>
        <!-- end swiper-slide -->
        <?php
            endforeach;
        ?>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>