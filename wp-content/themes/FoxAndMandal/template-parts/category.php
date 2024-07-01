<div class="col-md-8">							
	<div class="row g-3">
	<?php
		if (have_posts()) :
			while (have_posts()) : the_post();
	?>
			<div class="col-md-4">
				<article class="pbmit-blog-style-1">
					<div class="post-item blog-item">
						<div class="pbmit-featured-container">
							<div class="pbmit-featured-img-wrapper">
								<div class="pbmit-featured-wrapper">
								<img src="<?php the_post_thumbnail_url('thumbnail');?>" class='img-fluid' alt="">	
								</div>
							</div>
						</div>
						<div class="pbminfotech-box-content">
							
							<div class="pbmit-box-content-wrapper">
								<h3 class="pbmit-post-title">
								<a href="<?php the_permalink();?>"><?php the_title()?></a>
								</h3>
								<div class="pbminfotech-box-desc-text">
								<?php the_excerpt();?>	
								</div>
								<a href="#" class="pbmit-btn pbmit-btn-inline">
								<span>Read More</span>
								</a>
							</div>
						</div>
					</div>
				</article>
			</div>
	<?php
			endwhile;
		endif;
	?>

	</div>							
</div>

						