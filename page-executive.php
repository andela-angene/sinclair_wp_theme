<?php get_header(); ?>

<?php
while(have_posts()): the_post();
$current_post_ID = get_the_ID();
endwhile;
?>
<div class="sticky-register-footer">
	<div class="container">
		<div class="pull-left">
			<p>
				Register to <span class="italic-text">stay updated</span>
				<a href="javascript:void(0)" class="subscribe-stf">Subscribe <i class="fa fa-chevron-right"></i>&nbsp;</a>
			</p>
		</div>
		<div class="pull-right">
			<p>
				Chat <span class="italic-text">with us</span>
				<a class="link-rm-default launch-chatbox" href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/chat.png" alt=""></a>
			</p>
		</div>
	</div>
</div>


<section class=" about-us">

	<div class="about-tabs">

		<div class="container">
			<!-- Nav tabs -->
			<ul class="about-tab-links" role="tablist">
				<li role="presentation" class="active col-sm-2 text-center"><a href="#aquisition" aria-controls="aquisition" role="tab" data-toggle="tab">ACQUISITION <i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#leadership" aria-controls="leadership" role="tab" data-toggle="tab">LEADERSHIP <i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#retention" aria-controls="retention" role="tab" data-toggle="tab">RETENTION <i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#review" aria-controls="review" role="tab" data-toggle="tab">REVIEW <i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#risk" aria-controls="risk" role="tab" data-toggle="tab">RISK <i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#performance" aria-controls="performance" role="tab" data-toggle="tab">PERFORMANCE <i class="fa fa-circle"></i></a> </li>
			</ul>
		</div>


		<!-- Tab panes -->
		<div id="about-tab-content" class="tab-content">



			<div role="tabpanel" class="tab-pane fade in active" id="aquisition">
			</div>



			<div role="tabpanel" class="tab-pane fade in" id="leadership">
			</div>




			<div role="tabpanel" class="tab-pane fade in" id="retention">
			</div>




			<div role="tabpanel" class="tab-pane fade in" id="review">
			</div>



			<div role="tabpanel" class="tab-pane fade in" id="risk">

				<div class="panel-text-div">
					<div class="panel-text">
						<h1>Risk<br>Expertise</h1>
						<p>
							Vivian Hunt, retention partner serves healthcare.<br>
							She helps lead our work in gender diversity
						</p>
					</div>
				</div>



				<section class="about-post">
					<div class="container bg-white">
						<div class="row">
							<?php
							$content = split_content(get_field('risk_section1_content'));
							?>
							<div class="col-sm-9">
								<section class="about-sinclair-wt">
									<div class="row">
										<div class="col-sm-6 ">
											<?php echo wpautop($content[0]); ?>
										</div>
										<div class="col-sm-6 bd-center">
											<?php echo wpautop($content[1]); ?>
										</div>
									</div>
								</section>


							</div>
							<div class="col-sm-3 author-sidebar">
								<?php if(!empty(get_field('author_image'))){ ?>
									<img class="about-passport pink-border" src="<?php the_field('author_image') ?>" alt="author">
								<?php }else{ ?>
									<img class="about-passport" src="<?php bloginfo('template_url'); ?>/images/article-news/article-author.jpg" alt="">
								<?php } ?>

								<h3><?php the_field('author'); ?></h3>

								<p>Date: <strong><?php echo get_the_date('d-n-Y'); ?></strong> <br>
									<?php if(!empty(get_field('office'))){ ?>
										Office: <strong><?php the_field('office'); ?></strong> <br>
									<?php } ?>
									Categories: <strong><?php echo (get_the_category()[0]->name); ?></strong></p>

								<div class="socail-icons">
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="about-post">
					<div class="container">
						<div class="row">
							<div class="col-sm-9">
								<h2><?php the_field('risk_section2_heading') ?></h2>
								<?php the_field('risk_section2_content') ?>

							</div>
						</div>
					</div>
				</section>


				<section class="news-header">
					<div class="container">

						<div id="news-executive-carousel" class="owl-carousela">

							<?php
							$args = array(
								'post_type' => 'post'
							);

							$post_query = new WP_Query($args);
							if($post_query->have_posts() ) {
								$post_counter = 0;
								while($post_query->have_posts() ) :
									$post_counter++;
									$post_query->the_post();
									if($post_counter <= 3):
										?>

										<div class="item">
											<div class="item-content row">
												<div class="header-news-img col-sm-3">
													<?php the_post_thumbnail(); ?>
												</div>
												<div class="header-news-text col-sm-9">
													<h2>
														TOP NEWS <span class="light-text to-upper"><?php echo get_the_date('| D | F d'); ?></span>
													</h2>
													<h1>
														<?php the_title(); ?>
													</h1>
													<div class="light-text">
														<?php the_excerpt(); ?>
													</div>

													<div class="read-more">
														<a class="pink-text" href="<?php the_permalink(); ?>">
															Read more
														</a> |
														<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
													</div>

												</div>
											</div>
										</div>

									<?php endif; endwhile; } ?>

						</div>

					</div>
				</section>


				<?php
				$args = array(
					'p' => $current_post_ID,
					'post_type' => 'any'
				);

				$post_query = new WP_Query($args);
				if($post_query->have_posts() ) {
					while($post_query->have_posts() ) :
						$post_query->the_post();
						?>

					<?php endwhile; }; ?>

				<section class="about-post">
					<div class="container">
						<div class="row">
							<?php
							$content = split_content(get_field('risk_section3_content'));
							?>
							<div class="col-sm-9">
								<h2><?php the_field('risk_section3_heading'); ?></h2>
								<div class="row post-list">
									<div class="col-sm-6">
										<?php echo $content[0]; ?>
									</div>
									<div class="col-sm-6">
										<?php echo $content[1]; ?>
									</div>
								</div>

								<?php echo $content[2]; ?>
								<!--                        about-case-studies -->
								<section class="about-case-studies">
									<div class="row">
										<div class="col-sm-4">
											<div class="about-case">
												<div class="case-box hover-type">
													<a href="javascript:void(0)">
														<div class="case-img ">
															<img src="<?php bloginfo('template_url'); ?>/images/case-images/4.jpg" alt="case study">
														</div>
														<div class="case-hover">
															<h2>Energy</h2>
														</div>
													</a>
												</div>
											</div>

										</div>
										<div class="col-sm-4">
											<div class="about-case">
												<div class="case-box hover-type">
													<a href="javascript:void(0)">
														<div class="case-img">
															<img src="<?php bloginfo('template_url'); ?>/images/case-images/2.jpg" alt="case study">
														</div>
														<div class="case-hover">
															<h2>Agriculture</h2>
														</div>
													</a>
												</div>
											</div>

										</div>
										<div class="col-sm-4">
											<div class="about-case">
												<div class="case-box hover-type">
													<a href="javascript:void(0)">
														<div class="case-img ">
															<img src="<?php bloginfo('template_url'); ?>/images/case-images/12.jpg" alt="case study">
														</div>
														<div class="case-hover">
															<h2>New <br> Market</h2>
														</div>
													</a>
												</div>
											</div>

										</div>
									</div>
								</section>
							</div>


							<?php if(is_active_sidebar('read-more')){
								dynamic_sidebar('read-more');
							}; ?>


						</div>
					</div>
				</section>

				<section class="about-post">
					<div class="container">
						<div class="row">
							<div class="col-sm-9">
								<h2><?php the_field('risk_section4_heading'); ?></h2>
								<?php wpautop(the_field('risk_section4_content')); ?>

							</div>


							<div class="col-sm-3 about-read-more read-more-top-img">
								<?php
								$post_id = get_field('featured_post')->ID;
								?>

								<div class="read-more-div">
									<a href="<?php echo get_post_permalink($post_id); ?>" class="link-rm-default">
										<button class="read-more-btn">READ MORE</button>
									</a>
									<div>
										<strong>
											<?php echo get_excerpt_by_id($post_id); ?>
										</strong>
									</div>
								</div>
							</div>

						</div>
					</div>
				</section>
			</div>



			<div role="tabpanel" class="tab-pane fade in" id="performance">
			</div>


		</div>

	</div>

</section>


<?php get_footer(); ?>
