<?php


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

function fox_and_mandal_enqueue_links(){

    // <-----------------------css HEADER ------------------->

    //                                            Bootstrap
    wp_enqueue_style('css-bootStrap',get_template_directory_uri().'/css/bootstrap.min.css',[],'5.2.0','all');

    //                                          Font Awesome
    wp_enqueue_style('css-fontAwesome',get_template_directory_uri().'/css/fontawesome.css',[],'4.7.0','all');

    //                                            Flaticon
    wp_enqueue_style('css-flatIcon',get_template_directory_uri().'/css/flaticon.css',[],'6.5.4','all');

    //                                          optico Icons
    wp_enqueue_style('css-opticoIcons',get_template_directory_uri().'/css/pbminfotech-base-icons.css',[],'','all');

    //                                            Themify
    wp_enqueue_style('css-Themify',get_template_directory_uri().'/css/themify-icons.css',[],'','all');

    //                                             Swiper
    wp_enqueue_style('css-Slider',get_template_directory_uri().'/css/swiper.min.css',[],'','all');
    
    //                                              Slide
    wp_enqueue_style('css-Slide',get_template_directory_uri().'/css/slick.css',[],'','all');

    //                                           Magnific PopUp
    wp_enqueue_style('css-MagnificPopUp',get_template_directory_uri().'/css/magnific-popup.css',[],'','all');

    //                                            Swiper Link
    wp_enqueue_style('css-SwiperLink','https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css',[],'','all');
    
    //                                                AOS
    wp_enqueue_style('css-AOS',get_template_directory_uri().'/css/aos,css',[],'','all');

    //                                           Shortcode CSS
    wp_enqueue_style('css-ShortCode',get_template_directory_uri().'/css/shortcode.css',[],'','all');

    //                                             Base CSS
    wp_enqueue_style('css-base',get_template_directory_uri().'/css/base.css',[],'','all');
    
    //                                             Style CSS
    wp_enqueue_style('css-styleSheet',get_template_directory_uri().'/css/style.css',[],'','all');

    //                                           Responsive CSS
    wp_enqueue_style('css-styleSheetResponsive',get_template_directory_uri().'/css/responsive.css',[],'','all');

    //                                       Revolution Style Sheet
    wp_enqueue_style('css-RevolutionStyle',get_template_directory_uri().'/revolution/rs6.css',[],'','all');


    //                                     <------------Footer---------->
    wp_enqueue_script('js-LIST',get_template_directory_uri()."/js/jquery.min.js",[],'3.6.0',true);

    wp_enqueue_script('js-LIST',get_template_directory_uri()."/js/popper.min.js",[],'3.6.0',true);

    wp_enqueue_script('js-bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',[],'',true);

    wp_enqueue_script('js-jqueryWaypoints',get_template_directory_uri().'/js/jquery.waypoints.min.js',[],'',true);

    wp_enqueue_script('js-JqueryAppearJs',get_template_directory_uri().'/js/jquery.appear.min.js',[],'',true);

    wp_enqueue_script('js-JqueryNuminateJs',get_template_directory_uri().'/js/numinate.min.js',[],'',true);

    wp_enqueue_script('js-LIST',get_template_directory_uri()."/js/swiper.min.js",[],'3.6.0',true);

    wp_enqueue_script('js-jqueryMagnificPopup',get_template_directory_uri().'/js/jquery.magnific-popup.min.js',[],'',true);

    wp_enqueue_script('js-jqueryCirclePogress',get_template_directory_uri().'/js/circle-progress.js',[],'',true);

    wp_enqueue_script('js-Countdown',get_template_directory_uri()."/js/jquery.countdown.min.js",[],'',true);

    wp_enqueue_script('js-aos',get_template_directory_uri().'/js/aos.js',[],'',true);

    wp_enqueue_script('js-circleProgress',get_template_directory_uri(),'/js/circle-progress.min.js',[],'',true);

    wp_enqueue_script('js-gsap',get_template_directory_uri(),'/js/gsap.js',[],'',true);

    wp_enqueue_script('js-ScrollTrigger',get_template_directory_uri().'/js/ScrollTrigger.js',[],'',true);

    wp_enqueue_script('js-SplitText',get_template_directory_uri().'/js/SplitText.js',[],'',true);

    wp_enqueue_script('js-slick',get_template_directory_uri().'/js/slick.js',[],'',true);

    wp_enqueue_script('js-cursor',get_template_directory_uri().'/js/cursor.js',[],'',true);

    wp_enqueue_script('js-magnetic',get_template_directory_uri()."/js/magnetic.js'",[],'3.6.0',true);

    wp_enqueue_script('js-hammer',get_template_directory_uri().'/js/hammer.min.js',[],'',true);

    wp_enqueue_script('js-timeline',get_template_directory_uri().'/js/timeline.js',[],'',true);

    wp_enqueue_script('js-swiperCloudfare',"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js",[],'',true);

    wp_enqueue_script('js-tiltCloudfare','https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js',[],'',true);

    wp_enqueue_script('js-gsap-animation',get_template_directory_uri(),'/js/gsap-animation.js',[],'',true);

    wp_enqueue_script('js-scripts',get_template_directory_uri(),'/js/scripts.js',[],'',true);


    wp_enqueue_script('js-revolutionRslider',get_template_directory_uri().'/revolution/rslider.js',[],'',true);

    wp_enqueue_script('js-revolutionRbTools',get_template_directory_uri().'/revolution/rbtools.min.js',[],'',true);

    wp_enqueue_script('js-revolutionRe6',get_template_directory_uri(),'/revolution/re6.min.js',[],'',true);


}
add_action('wp_enqueue_scripts','fox_and_mandal_enqueue_links');

?>