<?php
/*
Plugin Name: CPT Maker
Description: This is my first plugin! It makes a new admin menu link!
Author: Suborno
*/

/**
 * Create a Custom Post Type and Custom Table
 */
function create_a_cpt() {

    register_post_type('recipies', [
        'labels' => [
            'name' => __('Recipies'),
            'singular_name' => __('Recipie'),
            'add_new' => _x('Add Recipie', 'recipie'),
            'add_new_item' => __('Add New Recipie'),
            'new_item' => __('New Recipie'),
        ],
        'supports' => [
            'title',
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-food',
        'rewrite' => [
            'slug' => 'recipie',
        ],
    ]);
}
add_action('init', 'create_a_cpt');

function create_custom_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . "recipies";
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        post_id bigint(20) ,
        time datetime DEFAULT '0000-00-00 00:00:00',
        name VARCHAR(255) DEFAULT 'Null',
        description VARCHAR(255),
        recipie text,
        url varchar(55) DEFAULT 'None',
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
register_activation_hook(__FILE__, 'create_custom_table');

/**
 * Add Meta fields to Recipie CPT
 */
function add_recipie_meta_box() {
    add_meta_box(
        'recipie_meta_box', // Unique ID
        'Recipie Details', // Box title
        'display_recipie_meta_box', // Content callback, must be of type callable
        'recipies', // Post type
        'normal', // Context
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'add_recipie_meta_box');

/**
 * Display Meta fields
 */
function display_recipie_meta_box($post) {

    $custom_image_id = get_post_meta($post->ID, 'custom_image_id', true);
    $custom_image_url = wp_get_attachment_image_url($custom_image_id, 'thumbnail');
    
    $meta_values = get_post_meta($post->ID, 'unique_mb_details_id', true);

    ?>
    <p>
        <label for="custom_image_id">Upload Custom Image:</label><br>
        <input type="hidden" name="custom_image_id" id="custom_image_id" value="<?php echo esc_attr($custom_image_id); ?>">
        <button type="button" class="upload_image_button">Select Image</button><br>
        <img id="custom_image_preview" src="<?php echo esc_url($custom_image_url); ?>" style="max-width: 300px;">
    </p>
    <p>
        <label for="unique_mb_details_id">Details</label><br>
        <input type="text" name="unique_mb_details_id" id="unique_mb_details_id" value="<?php echo esc_attr($meta_values); ?>" class="regular-text">
    </p>
    <script>
        jQuery(document).ready(function($) {
            $('.upload_image_button').click(function() {
                var custom_uploader = wp.media({
                    title: 'Select Custom Image',
                    button: {
                        text: 'Select'
                    },
                    multiple: false
                });

                custom_uploader.on('select', function() {
                    var attachment = custom_uploader.state().get('selection').first().toJSON();
                    $('#custom_image_id').val(attachment.id);
                    $('#custom_image_preview').attr('src', attachment.url);
                });

                custom_uploader.open();
            });
        });
    </script>
    <?php
}

/**
 * Save Meta fields data and insert into custom table
 */
function save_recipie_meta_box($post_id) {

    // Check the user's permissions.
    if ('recipies' == $_POST['post_type']) {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    global $wpdb;

    // Save the meta box data
    $custom_image_id = '';
    $unique_mb_details_id = '';
    
    if (isset($_POST['custom_image_id'])) {
        $custom_image_id = sanitize_text_field($_POST['custom_image_id']);
        update_post_meta($post_id, 'custom_image_id', $custom_image_id);
    }

    if (isset($_POST['unique_mb_details_id'])) {
        $unique_mb_details_id = sanitize_text_field($_POST['unique_mb_details_id']);
        update_post_meta($post_id, 'unique_mb_details_id', $unique_mb_details_id);
    }

    // Insert/Update data in custom table
    $table_name = $wpdb->prefix . "recipies";
    $time = current_time('mysql');

    $data = [
        'post_id' => $post_id,
        'time' => $time,
        'name'=>get_the_title($post_id)
        // 'description' => get_post_meta($post_id,''),
        'recipie' => $unique_mb_details_id,
        'url' => wp_get_attachment_url($custom_image_id)
    ];
    $wpdb->insert($table_name,$data);

    $existing_entry = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE post_id = %d", $post_id));

    if ($existing_entry) {
        $wpdb->update(
            $table_name,
            $data,
            ['post_id' => $post_id]
        );
    } else {
        $wpdb->insert(
            $table_name,
            $data
        );
    }
}
add_action('save_post', 'save_recipie_meta_box');
function bt_disable_autosave () {
    wp_deregister_script('autosave');
}
add_action('admin_init', 'bt_disable_autosave');
?>
