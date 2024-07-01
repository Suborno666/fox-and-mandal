<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}

function fox_and_mandal_theme_supports(){
add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','fox_and_mandal_theme_supports');

function fox_and_mandal_enqueue_links(){

    wp_enqueue_style('css-bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',[],'','all');
    wp_enqueue_style('css-fontawesome',get_template_directory_uri().'/css/fontawesome.css',[],'','all');
    wp_enqueue_style('css-flaticon',get_template_directory_uri().'/css/flaticon.css',[],'','all');
    wp_enqueue_style('css-pbminfotech-base-icons',get_template_directory_uri().'/css/pbminfotech-base-icons.css',[],'','all');
    wp_enqueue_style('css-themify-icons',get_template_directory_uri().'/css/themify-icons.css',[],'','all');
    wp_enqueue_style('css-swiper',get_template_directory_uri().'/css/swiper.min.css',[],'','all');
    wp_enqueue_style('css-slick',get_template_directory_uri().'/css/slick.css',[],'','all');
    wp_enqueue_style('css-magnific-popup',get_template_directory_uri().'/css/magnific-popup.css',[],'','all');
    wp_enqueue_style('css-swiper.min',"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css",[],'','all');
    wp_enqueue_style('css-aos',get_template_directory_uri().'/css/aos.css',[],'','all');
    wp_enqueue_style('css-shortcode',get_template_directory_uri().'/css/shortcode.css',[],'','all');
    wp_enqueue_style('css-base',get_template_directory_uri().'/css/base.css',[],'','all');
    wp_enqueue_style('css-style',get_template_directory_uri().'/css/style.css',[],'','all');
    wp_enqueue_style('css-responsive',get_template_directory_uri().'/css/responsive.css',[],'','all');
    wp_enqueue_style('css-revolution',get_template_directory_uri().'/revolution/rs6.css',[],'','all');


    wp_enqueue_script('js-jquery',get_template_directory_uri().'/js/jquery.min.js',[],'',true);
    wp_enqueue_script('js-popper',get_template_directory_uri().'/js/popper.min.js',[],'',true);
    wp_enqueue_script('js-bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',[],'',true);
    wp_enqueue_script('js-waypoints',get_template_directory_uri().'/js/jquery.waypoints.min.js',[],'',true);
    wp_enqueue_script('js-appear',get_template_directory_uri().'/js/jquery.appear.js',[],'',true);
    wp_enqueue_script('js-numinate',get_template_directory_uri().'/js/numinate.min.js',[],'',true);
    wp_enqueue_script('js-swiper',get_template_directory_uri().'/js/swiper.min.js',[],'',true);
    wp_enqueue_script('js-magnific-popup',get_template_directory_uri().'/js/jquery.magnific-popup.min.js',[],'',true);
    wp_enqueue_script('js-circle-progress',get_template_directory_uri().'/js/circle-progress.js',[],'',true);
    wp_enqueue_script('js-countdown',get_template_directory_uri().'/js/jquery.countdown.min.js',[],'',true);
    wp_enqueue_script('js-aos',get_template_directory_uri().'/js/aos.js',[],'',true);
    wp_enqueue_script('js-circle-progress',get_template_directory_uri().'/js/circle-progress.min.js',[],'',true);
    wp_enqueue_script('js-gsap',get_template_directory_uri().'/js/gsap.js',[],'',true);
    wp_enqueue_script('js-ScrollTrigger',get_template_directory_uri().'/js/ScrollTrigger.js',[],'',true);
    wp_enqueue_script('js-SplitText',get_template_directory_uri().'/js/SplitText.js',[],'',true);
    wp_enqueue_script('js-slick',get_template_directory_uri().'/js/slick.js',[],'',true);
    wp_enqueue_script('js-cursor',get_template_directory_uri().'/js/cursor.js',[],'',true);
    wp_enqueue_script('js-magnetic',get_template_directory_uri().'/js/magnetic.js',[],'',true);
    wp_enqueue_script('js-hammer',get_template_directory_uri().'/js/hammer.min.js',[],'',true);
    wp_enqueue_script('js-timeline',get_template_directory_uri().'/js/timeline.js',[],'',true);
    wp_enqueue_script('js-swiper',"https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js",'',true);
    wp_enqueue_script('js-tilt.jquery',"https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js",'',true);
    wp_enqueue_script('js-gsap-animation',get_template_directory_uri().'/js/gsap-animation.js',[],'',true);
    wp_enqueue_script('js-scripts',get_template_directory_uri().'/js/scripts.js',[],'',true);
    wp_enqueue_script('js-rslider',get_template_directory_uri().'/revolution/rslider.js',[],'',true);
    wp_enqueue_script('js-rbtools',get_template_directory_uri().'/revolution/rbtools.min.js',[],'',true);
    wp_enqueue_script('js-rs6',get_template_directory_uri().'/revolution/rs6.min.js',[],'',true);
}
add_action('wp_enqueue_scripts','fox_and_mandal_enqueue_links');


/**
 * Creating Header Menu
 */

function custom_menu() {
    register_nav_menu('header-menu-about',__( 'Header Menu About' ));
    register_nav_menu('header-menu-insights',__( 'Header Menu Insights' ));
    register_nav_menu('header-menu-careers',__( 'Header Menu Careers' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
    register_nav_menu('socials-menu',__( 'Socials Menu' ));

}
add_action( 'init', 'custom_menu' );


/**
 * 
 * Custom Posts
 */

add_action('init', 'custom_post');
function custom_post() {
    
    register_post_type('practice',
        [
            'labels'                => [
                'name'               => 'Practices',
                'singular_name'      => 'Practice',
            ],
            'public'                => true,
            'has_archive'           => true,
            'rewrite'               => ['slug' => 'practice'],
            'supports'              => ['title', 'editor', 'revisions'],
        ]
    );

    register_post_type('content',
        [
            'labels'=>[
                'name'=>'Contents',
                'singular_name'=>'content',
            ],
            'public'=>true,
            'has_archive'=>true,
            'rewrite'=>['slug'=>'content'],
            'supports'=>['title', 'editor', 'revisons','thumbnail', ],
        ]
    );

    register_post_type('Advocates',
        [
            'labels'=>[
                'name'=>'Advocates',
                'singular_name'=>'advocate',
            ],
            'public'=>true,
            'has_archive'=>true,
            'rewrite'=>['slug'=>'content'],
            'supports'=>['title','thumbnail', ],
        ]

        
    );

    register_post_type('case_studies',
        [
            'labels'=>[
                'name'=>'Case Studies',
                'singular_name'=>'case study',
            ],
            'public'=>true,
            'has_archive'=>true,
            'rewrite'=>['slug'=>'content'],
            'supports'=>['title','editor','thumbnail', ],
        ]
    
    );

    register_post_type('testimonials',
        [
            'labels'=>[
                'name'=>'Testimonials',
                'singular_name'=>'testimonial',
            ],
            'public'=>true,
            'has_archive'=>true,
            'rewrite'=>['slug'=>'content'],
            'supports'=>['title','editor'],
        ]

    );
}
?>
