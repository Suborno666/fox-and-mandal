<?php
get_header();
get_template_part('template-parts/single');
global $post_id;
$post_id = get_the_ID();
?>
<!-- Page Content -->
<div class="page-content about-light-section1">		
    <!-- blog Details wrap start-->
    <section class="blog-details-wrap">
        <div class="container">
            <div class="row">						
                <div class="col-md-12">
                    <div class="service-details-container caseStudyDetails mt-0 mb-4">
                        <div class="service-details-img-container pbmit-animation-style2">
                        <img src="<?php echo get_the_post_thumbnail_url($post_id, 'full');?>" alt="">
                        </div>								
                    </div>
                    <h3><?php the_title();?></h3>
                    <p><?php the_content();?></p>
                    

                </div>
            </div>
        </div>
    </section>
    <!-- blog Details wrap end -->
</div>

<!-- Page Content End -->
<?php
get_footer();
?>

