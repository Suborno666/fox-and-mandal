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
 * Add Custom Taxonomy
 */
function add_custom_taxonomies() {

    /**
     * Advocate Designation
     */

    register_taxonomy('advocate_designation', 'advocates', array(
        'hierarchical' => true,
        'labels' => [
            'name' => _x('Advocate Designations', 'taxonomy general name'),
            'singular_name' => _x('Advocate Designation', 'taxonomy singular name'),
            'search_items' => __('Search Advocate Designations'),
            'all_items' => __('All Advocate Designations'),
            'parent_item' => __('Parent Advocate Designation'),
            'parent_item_colon' => __('Parent Advocate Designation:'),
            'edit_item' => __('Edit Advocate Designation'),
            'update_item' => __('Update Advocate Designation'),
            'add_new_item' => __('Add New Advocate Designation'),
            'new_item_name' => __('New Advocate Designation Name'),
            'menu_name' => __('Advocate Designation'),
        ],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'rewrite' => [
            'slug' => 'advocate_designations',
            'with_front' => false,
            'hierarchical' => true
        ],
    ));

    /**
     * Advocate Practice Area
     */

     register_taxonomy('advocate_practice_area', 'advocates', array(
        'hierarchical' => true,
        'labels' => [
            'name' => _x('Advocate Practice Areas', 'taxonomy general name'),
            'singular_name' => _x('Advocate Practice Area', 'taxonomy singular name'),
            'search_items' => __('Search Advocate Practice Areas'),
            'all_items' => __('All Advocate Practice Areas'),
            'parent_item' => __('Parent Advocate Practice Area'),
            'parent_item_colon' => __('Parent Advocate Practice Area:'),
            'edit_item' => __('Edit Advocate Practice Area'),
            'update_item' => __('Update Advocate Practice Area'),
            'add_new_item' => __('Add New Advocate Practice Area'),
            'new_item_name' => __('New Advocate Practice Area Name'),
            'menu_name' => __('Advocate Practice Area'),
        ],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'rewrite' => [
            'slug' => 'advocate_practice_areas',
            'with_front' => false,
            'hierarchical' => true
        ],
    ));
    /**
     * Advocate Office Location
     */

     register_taxonomy('advocate_office_location', 'advocates', array(
        'hierarchical' => true,
        'labels' => [
            'name' => _x('Advocate Office Locations', 'taxonomy general name'),
            'singular_name' => _x('Advocate Office Location', 'taxonomy singular name'),
            'search_items' => __('Search Advocate Office Locations'),
            'all_items' => __('All Advocate Office Locations'),
            'parent_item' => __('Parent Advocate Office Location'),
            'parent_item_colon' => __('Parent Advocate Office Location:'),
            'edit_item' => __('Edit Advocate Office Location'),
            'update_item' => __('Update Advocate Office Location'),
            'add_new_item' => __('Add New Advocate Office Location'),
            'new_item_name' => __('New Advocate Office Location Name'),
            'menu_name' => __('Advocate Office Location'),
        ],
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'rewrite' => [
            'slug' => 'advocate_office_location',
            'with_front' => false,
            'hierarchical' => true
        ],
    ));
}
add_action('init', 'add_custom_taxonomies', 0);

/**
 * Custom Posts
 */
function custom_post() {
    register_post_type('practice', [
        'labels' => [
            'name' => 'Practices',
            'singular_name' => 'Practice',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'practice'],
        'supports' => ['title', 'editor', 'revisions'],
    ]);

    register_post_type('content', [
        'labels' => [
            'name' => 'Contents',
            'singular_name' => 'Content',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'content'],
        'supports' => ['title', 'editor', 'revisions', 'thumbnail'],
    ]);

    register_post_type('advocates', [
        'labels' => [
            'name' => 'Advocates',
            'singular_name' => 'Advocate',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'advocates'],
        'supports' => ['title', 'thumbnail'],
    ]);

    register_post_type('case_studies', [
        'labels' => [
            'name' => 'Case Studies',
            'singular_name' => 'Case Study',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'case_studies'],
        'supports' => ['title', 'editor', 'thumbnail'],
    ]);

    register_post_type('testimonials', [
        'labels' => [
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'testimonials'],
        'supports' => ['title', 'editor'],
    ]);
}
add_action('init', 'custom_post');


/**
 * Adding Widgets
 */

    function wpb_widgets_init() {
        register_sidebar( [
            'name' => __( 'Bottom Sidebar', 'wpb' ),
            'id' => 'sidebar-1',
            'description' => __( 'The main sidebar appears on the bottom on each page except the front page template', 'wpb' ),
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ] );
    }
 
add_action( 'widgets_init', 'wpb_widgets_init' );


function get_acf_cf7_object() {
    return true;
}
add_filter( 'acf_cf7_object', 'get_acf_cf7_object' );


add_action( 'phpmailer_init', 'my_phpmailer_smtp' );
function my_phpmailer_smtp( $phpmailer ) {
    $email = isset($_POST['menu-713'])?$_POST['menu-713']:'';
    $phpmailer->isSMTP();     
    $phpmailer->Host = SMTP_server;  
    $phpmailer->SMTPAuth = SMTP_AUTH;
    $phpmailer->Port = SMTP_PORT;
    $phpmailer->Username = SMTP_username;
    $phpmailer->Password = SMTP_password;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From = SMTP_FROM;
    $phpmailer->FromName = SMTP_NAME;
    $phpmailer->Subject = 'User Details';
    $phpmailer->AltBody = 'To view the message, please use an HTML compatible email viewer!';
    // $phpmailer->addAddress($email,'Me');
}

/**
 * Create an ACF field in CF7
 */

 add_filter('wpcf7_form_tag', 'populate_acf_field_in_cf7', 10, 1);

function populate_acf_field_in_cf7($tag) {
    if ($tag['name'] !== 'menu-713') { 
        return $tag;
    }

    // echo '<pre style="Color:white">';
    // print_r($tag);
    // echo '</pre>';

    // return $tag;

    // Get ACF field value
    $emails = get_field('email_fields', 'option');

    $values = [];
    $labels = [];

    if (is_array($emails) && !empty($emails)) {
        foreach ($emails as $email_item) {
            if (is_array($email_item) && isset($email_item['emails'])) {
                $email = $email_item['emails'];
                $values[] = $email; 
                $labels[] = $email; 
            }
        }
    }

    $tag['values'] = $values;
    $tag['labels'] = $labels;
    $tag['raw_values'] = $values;

    return $tag;
}


function custom_filter_wpcf7_is_tel( $result, $tel ) {

    $result = preg_match( '/^[6-9]\d{9}$/', $tel );
    return $result; 
}


add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 10, 2 );

function custom_tel_validation( $result, $tag ) {
    if ( $tag->name == 'tel-350' ) {
        $phone_number = $_POST[$tag->name];

        if ( !custom_filter_wpcf7_is_tel( true, $phone_number ) ) {

            $result->invalidate( $tag, "Please enter a valid Indian phone number." );
        }
    }
    return $result;
}

add_filter( 'wpcf7_validate_tel*', 'custom_tel_validation', 10, 2 );



?>
