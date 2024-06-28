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
                            $args=
                            [
                            
                                'post_type' => 'Post',
                                'post_status' => 'publish',
                                'posts_per_page'=>-1,
                                'order'=>'ASC',
                                
                            ];
                            $loop = new WP_Query($args); 
                            while($loop->have_posts()):
                                $loop->the_post();
                            ?>
								<div class="col-md-4">
									<article class="pbmit-blog-style-1">
										<div class="post-item blog-item">
											<div class="pbmit-featured-container">
												<div class="pbmit-featured-img-wrapper">
													<div class="pbmit-featured-wrapper">
													<img src="<?php echo get_the_post_thumbnail_url($loop->ID, 'full');?>"  class="img-fluid" alt="">
													</div>
												</div>
											</div>
											<div class="pbminfotech-box-content">
												
												<div class="pbmit-box-content-wrapper">
													<h3 class="pbmit-post-title">
													<a href="#"><?php the_title()?></a>
													</h3>
													<div class="pbminfotech-box-desc-text">
													<?php the_excerpt()?>		
													</div>
													<a href="<?php the_permalink();?>" class="pbmit-btn pbmit-btn-inline">
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

								<h4 class="sidebar-title">&nbsp;Search</h4>
								<div class="search-box search-box-blog"   id="s-cover">
									<input type="text" name="" id="" placeholder="Search">
									<button>
										<div id="s-circle"></div>
										<span></span>
									</button>
								</div>
								<div class="category-container">
									<h4 class="sidebar-title">&nbsp;Categories</h4>
									<ul class="sidebar-list">
                                        <?php
                                        $categories = get_categories();
                                        foreach($categories as $category) {
                                           echo '<li><a href="' . get_category_link($category->term_id) . '"></li>' . $category->name . '</a></div>';
                                        }
                                        ?>
										<!-- <li class="active"><a href="#">All</a></li>
										<li><a href="#">Banking and Finance</a></li>
										<li><a href="#">Corporate and Commercial</a></li>
										<li><a href="#">Dispute Resolution | Arbitration</a></li>
										<li><a href="#">Insolvency and Bankruptcy</a></li>
										<li><a href="#">Real Estate</a></li>
										<li><a href="#">Project | Infrastructure | Government Advisory</a></li>
										<li><a href="#">Succession | Estate Planning</a></li> -->
									</ul>
								</div>

								<div class="tag-container">
									<h4 class="sidebar-title">&nbsp;Tag</h4>
									<div class="tag-items">
										<a href="#">Business</a>
										<a href="#">Child</a>
										<a href="#">Criminal</a>
										<a href="#">Defense</a>
										<a href="#">Dismissed</a>
										<a href="#">Family</a>
										<a href="#">Finance</a>
										<a href="#">Law</a>
									</div>
								</div>

								<div class="archives-container">
									<h4 class="sidebar-title">&nbsp;Archives</h4>
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