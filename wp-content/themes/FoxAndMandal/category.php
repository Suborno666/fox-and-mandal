<?php
get_header()
?>
		<!-- Page Content -->
		<div class="page-content about-light-section1">		
			<!-- Blog Container Start -->
			<div class="blog-wrapper">
				<div class="container">
					<div class="row">
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
						<div class="col-md-3 offset-md-1">
							<aside class="sidebar-right">

								<h4 class="sidebar-title">//&nbsp;Search</h4>
								<div class="search-box search-box-blog"   id="s-cover">
									<input type="text" name="" id="" placeholder="Search">
									<button>
										<div id="s-circle"></div>
										<span></span>
									</button>
								</div>
								<div class="category-container">
									<h4 class="sidebar-title">//&nbsp;Categories</h4>
									<ul class="sidebar-list">
									<?php
										// Get all categories
										$categories = get_categories();

										// Check if there are any categories
										if (!empty($categories)) {
											// Loop through each category and display its name
											foreach($categories as $category) {
												?>
												<li>
													<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
														<?php echo esc_html($category->name); ?>
													</a>
												</li>
												<?php
											}
										} else {
											echo '<li>No categories found.</li>';
										}
									?>
									</ul>
								</div>


								<div class="tag-container">
									<h4 class="sidebar-title">//&nbsp;Tag</h4>
									<div class="tag-items">
									<?php
										// Get all categories
										$tags = get_tags();

										// Check if there are any categories
										if (!empty($tags)) {
											// Loop through each category and display its name
											foreach($tags as $tag) {
												?>
													<a href="<?php echo esc_url(get_category_link($tag->term_id)); ?>">
														<?php echo esc_html($tag->name); ?>
													</a>
												<?php
											}
										} else {
											echo '<p>No tags found.</p>';
										}
									?>
									</div>
								</div>

								<div class="archives-container">
									<h4 class="sidebar-title">//&nbsp;Archives</h4>
									<div class="card-2-container">
										<div class="card-2">
											<div class="card-2-img">
												<img src="images/avatar/img-02.jpg" alt="">
											</div>										
											<div class="card-2-info">
												<h5>John Doe</h5>
												<p>Libero justo laoreet sit amet 
													cursus sit amet dictum sit.</p>
											</div>
										</div>
										<div class="card-2">
											<div class="card-2-img">
												<img src="images/avatar/img-01.jpg" alt="">
											</div>										
											<div class="card-2-info">
												<h5>John Doe</h5>
												<p>Libero justo laoreet sit amet 
													cursus sit amet dictum sit.</p>
											</div>
										</div>
										<div class="card-2">
											<div class="card-2-img">
												<img src="images/avatar/img-02.jpg" alt="">
											</div>										
											<div class="card-2-info">
												<h5>John Doe</h5>
												<p>Libero justo laoreet sit amet 
													cursus sit amet dictum sit.</p>
											</div>
										</div>
											
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
			<!-- Blog Container End -->
		</div>
		<!-- Page Content End -->
<?php 
get_footer();
?>