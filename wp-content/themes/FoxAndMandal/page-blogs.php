<?php
get_header();
get_template_part('template-parts/archive');
global $wp;
$current_url = home_url(add_query_arg(array(), $wp->request)); 
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
								$search_key = isset($_GET['SearchKey']) ? sanitize_text_field($_GET['SearchKey']) : '';
								$Search_Args = [
									's' => $search_key,
									'post_type' => 'Post',
								];
								
								$args=
								[
									'post_type' => 'Post',
									'post_status' => 'publish',
									'posts_per_page'=>-1,
									'order'=>'ASC',
								];
								if($search_key=''){
									$loop = new WP_Query($args);
								}else{
									$loop = new WP_Query($Search_Args);
								}
								while($loop->have_posts()):
									$loop->the_post();
								?>
								<div class="col-md-4">
									<article class="pbmit-blog-style-1">
										<div class="post-item blog-item">
											<div class="pbmit-featured-container">
												<div class="pbmit-featured-img-wrapper">
													<div class="pbmit-featured-wrapper">
													<img src="<?php echo get_the_post_thumbnail_url($loop->ID, 'full')?>" class="img-fluid" alt="">
													</div>
												</div>
											</div>
											<div class="pbminfotech-box-content">
												
												<div class="pbmit-box-content-wrapper">
													<h3 class="pbmit-post-title">
													<a href="<?php the_permalink();?>"><?php the_title()?></a>
													</h3>
													<div class="pbminfotech-box-desc-text">
													<?php echo wp_trim_words(get_the_excerpt(),15);?>	
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
								wp_reset_postdata();
								?>
	
							</div>							
						</div>
						<div class="col-md-3 offset-md-1">
							<aside class="sidebar-right">

								<h4 class="sidebar-title">//&nbsp;Search</h4>
								<div class="search-box search-box-blog" id="s-cover">
									<form role="search" method="get" class="search-form" action="<?php echo esc_url( $current_url ); ?>">
										<label>
											<input type="search" class="search-field" placeholder="Search" value="<?php echo get_search_query() ?>" name="SearchKey" title="Search for:" />
										</label>
										<button type="submit">
											<div id="s-circle"></div>
											<span></span>
										</button>
									</form>
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
										
									<?php 
										if ( is_active_sidebar( 'sidebar-1' ) ) : 
										?>
											<div id="secondary" class="widget-area" role="complementary">
												<?php 
												dynamic_sidebar( 'sidebar-1' ); 
												?>
											</div>
										<?php 
										endif; 
									?>
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