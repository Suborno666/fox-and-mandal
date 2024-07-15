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

function fox_and_mandal_custom_menu() {
    register_nav_menu('header-menu-about',__( 'Header Menu About' ));
    register_nav_menu('header-menu-insights',__( 'Header Menu Insights' ));
    register_nav_menu('header-menu-careers',__( 'Header Menu Careers' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
    register_nav_menu('socials-menu',__( 'Socials Menu' ));

}
add_action( 'init', 'fox_and_mandal_custom_menu' );



/**
 * Add Custom Taxonomy
 */
function fox_and_mandal_add_custom_taxonomies() {

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
add_action('init', 'fox_and_mandal_add_custom_taxonomies', 0);

/**
 * Custom Posts
 */
function fox_and_mandal_custom_post() {
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

    register_post_type('saved_forms',[
        'labels'=>[
            'name' => 'Saved Forms',
            'singular_name'=>'Saved Form',
        ],
        'public' => true,
        'has_archive'=> false,
        'menu_icon' => 'dashicons-admin-page',
        'rewrite' => 
        [
            'slug' => 'saved_forms'
        ],
        'supports' => 
        [
            'title','editor','thumbnail'
        ]
    ]);
}
add_action('init', 'fox_and_mandal_custom_post');


/**
 * Adding Widgets
 */

    function fox_and_mandal_wpb_widgets_init() {
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
 
add_action( 'widgets_init', 'fox_and_mandal_wpb_widgets_init' );


function fox_and_mandal_get_acf_cf7_object() {
    return true;
}
add_filter( 'acf_cf7_object', 'fox_and_mandal_get_acf_cf7_object' );


add_action( 'phpmailer_init', 'fox_and_mandal_my_phpmailer_smtp' );
function fox_and_mandal_my_phpmailer_smtp( $phpmailer ) {
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

add_filter('wpcf7_form_tag', 'fox_and_mandal_populate_acf_field_in_cf7', 10, 1);

function fox_and_mandal_populate_acf_field_in_cf7($tag) {
    if ($tag['name'] !== 'menu-713') { 
        return $tag;
    }

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

function fox_and_mandal_save_my_form_data_to_my_cpt($contact_form) {
    
    $submission = WPCF7_Submission::get_instance();
    if (!$submission) {
        return;
    }

    $posted_data = $submission->get_posted_data();
    $uploaded_files = $submission->uploaded_files();

    // Create a new post
    $new_post = array();
    if (isset($posted_data['text-479']) && !empty($posted_data['text-479'])) {
        $new_post['post_title'] = $posted_data['text-479'];
    } else {
        $new_post['post_title'] = 'Message';
    }

    $new_post['post_type'] = 'saved_forms';
    if (isset($posted_data['textarea-414'])) {
        $new_post['post_content'] = $posted_data['textarea-414'];
    } else {
        $new_post['post_content'] = 'No Message was submitted';
    }
    $new_post['post_status'] = 'publish';

    
    if ($post_id = wp_insert_post($new_post)) {
        // Update the meta field for the email
        if (isset($posted_data['email-678']) && !empty($posted_data['email-678'])) {
            update_post_meta($post_id, 'form_email', $posted_data['email-678']);
        }
        if (!empty($uploaded_files)) {
            // move image from temp folder to upload folder
            $file = file_get_contents($uploaded_files['file-658'][0]);
            $image_name = basename($uploaded_files['file-658'][0]);
            $imageUpload = wp_upload_bits( $image_name, null, $file);
            //
            require_once(ABSPATH . 'wp-admin/includes/admin.php');
            // construct array to register this image
            $filename = $imageUpload['file'];
            $attachment = array(
                'post_mime_type' => $imageUpload['type'],
                'post_parent' => $post_id,
                'post_title' => $posted_data['field_title'] . ' - ' .
                    $posted_data['field_contributor'],
                'post_content' => $posted_data['field_info'],
                'post_status' => 'inherit'
            );
            // attach image to this post
            $attachment_id = wp_insert_attachment($attachment, $filename, $post_id);
            if (!is_wp_error($attachment_id)) {
                require_once(ABSPATH . 'wp-admin/includes/image.php');
                $attachment_data = wp_generate_attachment_metadata($attachment_id, $filename);
    
                wp_update_attachment_metadata($attachment_id, $attachment_data);
                set_post_thumbnail($post_id, $attachment_id);
    
                update_field('ad_image', $attachment_id, $post_id);
            }
        }
    } else {
        // The post was not inserted correctly, handle the error if needed
    }
    // wp_die();
}

add_action('wpcf7_mail_sent', 'fox_and_mandal_save_my_form_data_to_my_cpt');

// $link = 'https://wordpress.stackexchange.com/questions/328429/how-to-save-contact-form-7-data-in-custom-post-types-cpt'; 

// $imageLink = 'https://stackoverflow.com/questions/66933665/how-to-process-uploaded-images-in-new-5-4-version-of-contact-form-7-solution';

/**
 * How to trim URL?
 */
// add_filter('term_link','fox_and_mandal_trim_slug',10,3);
// function fox_and_mandal_trim_slug($url,$term,$taxonomy){
//     print_r($url);
//     print_r($term);
//     print_r($taxonomy);
// }


?>
