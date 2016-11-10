<?php get_header(); ?>
<style>
	.about-tabs .tab-content #core-values .panel-text-div {
		background-image: url("<?php the_field('core_values_cover_image'); ?>");
	}
</style>

<?php
	while(have_posts()): the_post();
	$current_post_ID = get_the_ID();
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


<section id="about-us-page" class="about-us" data-current-post-id="<?php the_ID(); ?>">

	<div class="about-tabs">

		<div class="container">
			<!-- Nav tabs -->
			<ul class="about-tab-links" role="tablist">


				<li role="presentation" class="active col-sm-2 text-center"><a href="#core-values" aria-controls="core-values" role="tab" data-toggle="tab">CORE VALUES <i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#what-we-do" aria-controls="what-we-do" role="tab" data-toggle="tab">WHAT WE DO <i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#management" aria-controls="management" role="tab" data-toggle="tab">MANAGEMENT TEAM<i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#team-strategy" aria-controls="team-strategy" role="tab" data-toggle="tab">STRATEGY <i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#thought-leadership" aria-controls="thought-leadership" role="tab" data-toggle="tab">THOUGHT LEADERSHIP <i class="fa fa-circle"></i></a> </li>

				<li role="presentation" class="col-sm-2 text-center"><a href="#insights" aria-controls="insights" role="tab" data-toggle="tab">INSIGHTS <i class="fa fa-circle"></i></a> </li>
			</ul>
		</div>


		<!-- Tab panes -->
		<div id="about-tab-content" class="tab-content">



			<div role="tabpanel" class="tab-pane fade in active" id="core-values">


				<div class="panel-text-div">
					<div class="panel-text">
						<h1>Core<br>Values</h1>
						<p>
							<?php the_field('sub_heading'); ?>
						</p>
					</div>
				</div>


				<div class="core-values-div">
					<section class="about-post">
						<div class="container">
							<div class="row">
								<div class="col-sm-9">
									<h2><?php the_field('section1_heading'); ?></h2>
									<?php wpautop(the_field('section1_content')); ?>
								</div>


								<div class="col-sm-3 author-sidebar">
									<?php if(!empty(get_field('author_image'))){ ?>
										<img class="about-passport" src="<?php the_field('author_image') ?>" alt="author">
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



					<div class="about-separate-img">
						<img src="<?php the_field('section1_image'); ?>" alt="">
					</div>


					<section class="about-post">
						<div class="container">
							<div class="row">
								<div class="col-sm-9">
									<h2><?php the_field('section2_heading'); ?></h2>
									<?php wpautop(the_field('section2_content')); ?>

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
									<h2><?php the_field('section3_heading'); ?></h2>
									<?php wpautop(the_field('section3_content')); ?>
								</div>


								<div class="col-sm-3 about-read-more">
									<?php
									$post_id = get_field('featured_post')->ID;
									?>
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
					</section>
				</div>
			</div>



			<div role="tabpanel" class="tab-pane fade in" id="what-we-do">

				<div class="container pad0">
					<div class="row">
						<div class="col-sm-6 about-box-half">
							<div class="maintain-aspect-r">
								<div class="maintain-aspect-hold box-half">
									<img src="<?php the_field('what_we_do_cover_image'); ?>" alt="">
									<div class="ab-text-box">
										<?php the_field('what_we_do_sub_heading'); ?>
									</div>
									<div class="logo-div">
										<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-box-half-e">

							<div class="row">
								<div class="col-sm-6 about-box">
									<div class="maintain-aspect-r">
										<div class="maintain-aspect-hold box dark-box">
											<img src="<?php the_field('step1'); ?>" alt="">
											<div class="text-dark-bg">
												Step 1
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 about-box">
									<div class="maintain-aspect-r">
										<div class="maintain-aspect-hold box dark-box">
											<img src="<?php the_field('step2'); ?>" alt="">
											<div class="text-dark-bg">
												Step 2
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6 about-box">
									<div class="maintain-aspect-r">
										<div class="maintain-aspect-hold box dark-box">
											<img src="<?php the_field('step3'); ?>" alt="">
											<div class="text-dark-bg">
												Step 3
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 about-box">
									<div class="maintain-aspect-r">
										<div class="maintain-aspect-hold box dark-box">
											<img src="<?php the_field('step4'); ?>" alt="">
											<div class="text-dark-bg">
												Step 4
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="row about-box-full">
						<div class="col-sm-3 about-box">
							<div class="maintain-aspect-r">
								<div class="maintain-aspect-hold box download-box">
									<div class="download-text">
										About Me PDF
									</div>
									<div class="download-image">
										<img src="<?php bloginfo('template_url'); ?>/images/about-us/download-w.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 about-box">
							<div class="maintain-aspect-r">
								<div class="maintain-aspect-hold box">
									<div class="contact-text">
										<h2>
											<strong>Get in <br> contact <br> with <br> <span class="pink-text italic-text">Us</span></strong>
										</h2>
										<a href="javascript:void(0)">Find out more</a>
									</div>

								</div>
							</div>
						</div>
						<div class="col-sm-3 about-box">
							<div class="maintain-aspect-r">
								<div class="maintain-aspect-hold box dark-box">
									<img src="<?php the_field('step5'); ?>" alt="">
									<div class="text-dark-bg">
										Step 5
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3 about-box">
							<div class="maintain-aspect-r">
								<div class="maintain-aspect-hold box dark-box">
									<img src="<?php the_field('step6'); ?>" alt="">
									<div class="text-dark-bg">
										Step 6
									</div>
								</div>
							</div>
						</div>
					</div>

					<section class="about-post about-box-desc">
						<div class="container">
							<div class="row">
								<div class="col-sm-9">
									<h2><?php the_field('what_we_do_section_heading'); ?></h2>
									<?php the_field('what_we_do_section_content'); ?>


								</div>

							</div>
						</div>
					</section>

				</div>

			</div>




			<div role="tabpanel" class="tab-pane fade in" id="management">

				<div id="management-team" class="container pad0">
					<div class="row">
						<div class="col-sm-6 about-box-half">
							<div class="maintain-aspect-r">
								<div class="maintain-aspect-hold box-half dark-bg">
									<div class="ab-text-box">
										<h2>
											<strong>
												<span class="pink-text">3</span> Developers, <span class="pink-text">2</span> Designers, and <span class="pink-text">1</span> person counting the pennies.
											</strong>
										</h2>
									</div>
									<div class="logo-div">
										<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 about-box-half-e">

							<div class="row">

								<?php
								$args = array(
									'post_type' => 'management_team'
								);
								$team = array();

								$post_query = new WP_Query($args);
								if($post_query->have_posts() ) {
									$post_counter = 0;
									while($post_query->have_posts() ) :
										$post_counter++;
										$post_query->the_post();
										$team_member = array(
											id => get_the_ID(),
											name => get_field('full_name'),
											title => get_field('title'),
											photo => get_field('photo'),
											description => get_field('description'),
											twitter_url => get_field('twitter_url'),
											facebook_url => get_field('facebook_url')
										);
										array_push($team, $team_member);

										?>

									<?php endwhile; }; ?>


								<?php
								    $team_member = $team[0];
								?>
								<div class="col-sm-6 about-box">
									<div class="maintain-aspect-r">
										<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
												<img src="<?php echo $team_member['photo']; ?>" alt="">
												<div class="text-dark-bg">
													<?php echo $team_member['name']; ?>
												</div>
											</div></a>
									</div>
								</div>

								<?php
								$team_member = $team[1];
								?>
								<div class="col-sm-6 about-box">
									<div class="maintain-aspect-r">
										<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
												<img src="<?php echo $team_member['photo']; ?>" alt="">
												<div class="text-dark-bg">
													<?php echo $team_member['name']; ?>
												</div>
											</div></a>
									</div>
								</div>
							</div>

							<div class="row">
								<?php
								$team_member = $team[2];
								?>
								<div class="col-sm-6 about-box">
									<div class="maintain-aspect-r">
										<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
												<img src="<?php echo $team_member['photo']; ?>" alt="">
												<div class="text-dark-bg">
													<?php echo $team_member['name']; ?>
												</div>
											</div></a>
									</div>
								</div>
								<?php
								$team_member = $team[3];
								?>
								<div class="col-sm-6 about-box">
									<div class="maintain-aspect-r">
										<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
												<img src="<?php echo $team_member['photo']; ?>" alt="">
												<div class="text-dark-bg">
													<?php echo $team_member['name']; ?>
												</div>
											</div></a>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="row about-box-full">
						<div class="col-sm-3 about-box">
							<div class="maintain-aspect-r">
								<div class="maintain-aspect-hold box download-box">
									<div class="download-text">
										About Me PDF
									</div>
									<div class="download-image">
										<img src="<?php bloginfo('template_url'); ?>/images/about-us/download-w.jpg" alt="">
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-3 about-box">
							<div class="maintain-aspect-r">
								<div class="maintain-aspect-hold box">
									<div class="contact-text">
										<h2>
											<strong>Get in <br> contact <br> with <br> <span class="pink-text italic-text">Us</span></strong>
										</h2>
										<a href="javascript:void(0)">Find out more</a>
									</div>

								</div>
							</div>
						</div>

						<?php
						$team_member = $team[4];
						?>
						<div class="col-sm-3 about-box">
							<div class="maintain-aspect-r">
								<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
										<img src="<?php echo $team_member['photo']; ?>" alt="">
										<div class="text-dark-bg">
											<?php echo $team_member['name']; ?>
										</div>
									</div></a>
							</div>
						</div>

						<?php
						$team_member = $team[5];
						?>
						<div class="col-sm-3 about-box">
							<div class="maintain-aspect-r">
								<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
										<img src="<?php echo $team_member['photo']; ?>" alt="">
										<div class="text-dark-bg">
											<?php echo $team_member['name']; ?>
										</div>
									</div></a>
							</div>
						</div>
					</div>

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
					<section class="about-post about-box-desc">
						<div class="container">
							<div class="row">
								<div class="col-sm-9">
									<h2><?php the_field('management_section_heading'); ?></h2>

									<?php wpautop(the_field('management_section_content')); ?>


								</div>


								<?php if(is_active_sidebar('read-more')){
									dynamic_sidebar('read-more');
								}; ?>


							</div>
						</div>
					</section>

				</div>

			</div>




			<div role="tabpanel" class="tab-pane fade in" id="team-strategy">
				<div class="container">
					<div class="strategy-header">
						<?php the_field('strategy_section_heading'); ?>
					</div>

					<?php the_field('strategy_section_content'); ?>

					<div class="container-img">
						<img src="<?php bloginfo('template_url'); ?>/images/about-us/strategy-car.jpg" alt="">
					</div>
<!--					Strategy list loop  -->
					<?php for($i=1; $i<=8; $i++){ ?>
					<div class="strategy-list-i">
						<?php the_field('strategy'.$i); ?>
					</div>
					<?php } ?>


				</div>
			</div>



			<div role="tabpanel" class="tab-pane fade in" id="thought-leadership">
				<div class="panel-text-div">
					<div class="panel-text">
						<h1>Thought <br>Leadership</h1>
						<p>
							Vivian Hunt, management partner serves healthcare.<br>
							She helps lead our work in gender diversity
						</p>
					</div>
				</div>
			</div>



			<div role="tabpanel" class="tab-pane fade in" id="insights">
				<div class="panel-text-div">
					<div class="panel-text">
						<h1>Insights</h1>
						<p>
							Vivian Hunt, management partner serves healthcare.<br>
							She helps lead our work in gender diversity
						</p>
					</div>
				</div>
			</div>


		</div>

	</div>

</section>

<?php endwhile; ?>
<?php get_footer(); ?>
