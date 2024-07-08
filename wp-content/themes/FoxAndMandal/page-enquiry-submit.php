<?php 
get_header();
get_template_part('template-parts/teamMembers');
?>

<h3>Submit your concern in here</h3>
<!-- <div class="col-lg-6"> -->
    <!-- <div class="formWrapFx"> -->
        <?php echo do_shortcode('[contact-form-7 id="dfa8d13" title="Contact Form"]');?>
    </div>
</div>
<?php get_footer();?>