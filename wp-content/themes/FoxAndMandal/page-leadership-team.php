<?php
    get_header();
    get_template_part('template-parts/teamMembers');
    global $wp;
    $current_url = home_url(add_query_arg(array(), $wp->request)); 
?>


<!-- Page Content -->
<div class="page-content about-light-section1">

    <!-- Team form section start -->
    <section class="team-form-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="team-form-container">
                        <h4>Search People</h4>
                        <form class="row g-3" role="search" method="get" action="<?php echo esc_url( $current_url ); ?>">

                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Search" value="<?php echo isset($_GET['SearchKey'])?$_GET['SearchKey']:''; ?>" name="SearchKey" title="Search for:" />
                            </div>

                            <div class="col-md-3">
                                <select name="advocate_designation" id="advocate_designation" class="form-control">
                                    <option value="">Select Designation</option>
                                    <?php
                                    $selected_designation = isset($_GET['advocate_designation']) ? $_GET['advocate_designation'] : '';
                                    $terms = get_terms(array(
                                        'taxonomy' => 'advocate_designation',
                                        'hide_empty' => false, 
                                    ));

                                    if ($terms && !is_wp_error($terms)) {
                                        foreach ($terms as $term) {
                                            $selected = ($selected_designation == $term->slug) ? 'selected' : '';
                                            echo "<option value='{$term->slug}' {$selected}>{$term->name}</option>";
                                        }
                                    } else {
                                        echo '<option value="">No designation available</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="advocate_practice_area" id="advocate_practice_area" class="form-control">
                                    <option value="">Select Practice Area</option>
                                    <?php
                                    $selected_practice_area = isset($_GET['advocate_practice_area']) ? $_GET['advocate_practice_area'] : '';
                                    $terms = get_terms(array(
                                        'taxonomy' => 'advocate_practice_area',
                                        'hide_empty' => false,
                                    ));

                                    if ($terms && !is_wp_error($terms)) {
                                        foreach ($terms as $term) {
                                            $selected = ($selected_practice_area == $term->slug) ? 'selected' : '';
                                            echo "<option value='{$term->slug}' {$selected}>{$term->name}</option>";
                                        }
                                    } else {
                                        echo '<option value="">No practice available</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select name="advocate_office_location" id="advocate_office_location" class="form-control">
                                    <option value="">Select Office Location</option>
                                    <?php
                                    $selected_office_location = isset($_GET['advocate_office_location']) ? $_GET['advocate_office_location'] : '';
                                    $terms = get_terms(array(
                                        'taxonomy' => 'advocate_office_location',
                                        'hide_empty' => false,
                                    ));

                                    if ($terms && !is_wp_error($terms)) {
                                        foreach ($terms as $term) {
                                            $selected = ($selected_office_location == $term->slug) ? 'selected' : '';
                                            echo "<option value='{$term->slug}' {$selected}>{$term->name}</option>";
                                        }
                                    } else {
                                        echo '<option value="">No location available</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <div class="form-btn-group">
                                    <button class="form-btn-dark">Search</button>
                                    <button class="form-btn-light" id="resetButton" type="button">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team form section end -->

    <!-- Team Cards Wrapper start -->
    <section class="team-card-wrap">
        <div class="container">
            <div class="row g-3">
                <?php 
                $search_advocate_key = isset($_GET['SearchKey']) ? sanitize_text_field($_GET['SearchKey']) : '';

                $tax_query = array('relation' => 'AND');
                if (!empty($_GET['advocate_designation'])) {
                    $tax_query[] = 
                        ['taxonomy' => 'advocate_designation',
                        'field' => 'slug',
                        'terms' => sanitize_text_field($_GET['advocate_designation']),
                        ];
                }
                if (!empty($_GET['advocate_practice_area'])) {
                    $tax_query[] = [
                        'taxonomy' => 'advocate_practice_area',
                        'field' => 'slug',
                        'terms' => sanitize_text_field($_GET['advocate_practice_area']),
                    ];
                }
                if (!empty($_GET['advocate_office_location'])) {
                    $tax_query[] = [
                        'taxonomy' => 'advocate_office_location',
                        'field' => 'slug',
                        'terms' => sanitize_text_field($_GET['advocate_office_location']),
                    ];
                }

                $args = [
                    'post_type' => 'advocates',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                    's' => $search_advocate_key,
                    'tax_query' => $tax_query,
                ];

                $advocate = new WP_Query($args);

                if ($advocate->have_posts()):
                    while($advocate->have_posts()): $advocate->the_post();
                ?>

                <div class="col-md-4 pbmit-animation-style6 pbmit-animation-style6 teamCardHolder">
                    <div class="team-card">
                        <div class="team-card-img">
                            <img src="<?php the_post_thumbnail_url('thumbnail');?>" alt="">
                        </div>
                        <div class="team-card-info">
                            <?php
                                $terms = get_the_terms($advocate->ID, 'advocate_designation');
                                if ($terms && !is_wp_error($terms)) {
                                    $term_names = array();
                                    foreach ($terms as $term) {
                                        $term_names[] = $term->name;
                                    }
                                    echo '<h6>'.implode(', ', $term_names).'</h6>';
                                } else {
                                    echo 'No designation';
                                }
                            ?> 
                            <h5><?php the_title();?></h5>
                            <div class="team-card-bottom">
                                <ul>
                                    <li>
                                        <span>Designation:</span> 
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'advocate_designation');
                                        if ($terms && !is_wp_error($terms)) {
                                            $term_names = array();
                                            foreach ($terms as $term) {
                                                $term_names = $term->name;
                                            }
                                            echo $term_names;
                                        } else {
                                            echo 'No designation';
                                        }
                                        ?> 
                                    </li>
                                    <li><span>Phone:</span> <?php echo get_field('phone', get_the_ID()); ?></li>
                                    <li><span>Email:</span> <?php echo get_field('email', get_the_ID()); ?></li>
                                </ul>
                            </div>
                            <div class="team-social-links">
                            <?php 
                                $Socials = get_field('social_links');
                                if (is_array($Socials) && !empty($Socials)):
                                    foreach ($Socials as $social) :
                            ?>
                                    <a href="<?php echo $social['social_link_url']?>"><i class="<?php echo $social['choose_social_link_type']?>"></i></a>
                            <?php
                                    endforeach;
                                else:
                                    ?>
                                    <h6>no social links</h6>
                                    <?php
                                endif;
                                ?>                                
                            </div>
                            <div class="team-cta">
                                <a href="javascript:void(0)" class="pbmit-btn pbmit-btn-inline pbmit-btn-sm quick-info">
                                    <span>Quick Info</span>
                                </a>
                                <a href="<?php the_permalink()?>" class="pbmit-btn pbmit-btn-inline pbmit-btn-sm">
                                    <span>Full Bio</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team-CardinfoQ">
                        <div class="qDetails">
                            <img src="<?php the_post_thumbnail_url('thumbnail');?>" alt="">
                        
                            <?php
                                $terms = get_the_terms($advocate->ID, 'advocate_designation');
                                if ($terms && !is_wp_error($terms)) {
                                    $term_names = array();
                                    foreach ($terms as $term) {
                                        $term_names =  $term->name;
                                    }
                                    echo '<h6>'.$term_names.'</h6>';
                                } else {
                                    echo 'No designation';
                                }
                            ?> 
                            
                            <h5><?php the_title();?></h5>
                        </div>
                        <p><?php echo wp_trim_words(get_the_content(),16);?></p>
                        <h6>Practice Areas</h6>
                        <ul>
                            <li>Aerospace & Defence</li>
                            <li>Corporate M&A</li>
                            <li>Dispute Resolution</li>
                            <li>Education</li>
                        </ul>
                    </div>
                </div>
                <?php
                    endwhile;
                else:
                    echo '<p>No results found.</p>';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</div>
<?php
    get_footer();
?>

<script>
    $(document).ready(()=>{
        $('#resetButton').on('click',function(){

            $("#advocate_office_location").val('');
            $("#advocate_designation").val('');
            $("#advocate_practice_area").val('');
            
            var currentWindow = window.location.href.split('?')[0];
            window.location.href = currentWindow;

        })
    })
</script>
