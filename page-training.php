<?php get_header(); ?>

<div class="top-tabs">

	<div class="container">
		<!-- Nav tabs -->
		<ul class="about-tab-links">


			<li class="col-sm-2 text-center"><a href="#">DEVELOPMENT <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="#">MARKETABILITY <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="#">PROTECTION <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="#">JOIN <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="#">SPRINGBOARD <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="#">TRANSITION <i class="fa fa-circle"></i></a> </li>
		</ul>
	</div>

</div>


<section class="training-headerpic">
	<img src="<?php bloginfo('template_url'); ?>/images/training/horserider.jpg" alt="training">
</section>


<section class="executive">
	<div class="container">

		<div class="row">
			<div class="col-md-6 ">
				<div class="row">
					<div class="col-xs-6 text-box text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold sinclair-text-logo">
								<img src="<?php bloginfo('template_url'); ?>/images/training/sinclair.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-xs-6 text-box text-box-sm">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3 class="pink-text">TRENDING TOPICS</h3>

								<div class="line-div-l">The new consumer <a href="#">></a></div>
								<div class="line-div-l">Internet of Things <a href="#">></a></div>
								<div class="line-div-l">Organizing for the future <a href="#">></a></div>
								<div class="line-div-l">The new consumer <a href="#">></a></div>
								<div class="line-div-l">Internet of Things <a href="#">></a></div>
								<div class="line-div-l">Organizing for the future <a href="#">></a></div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="row">
					<?php
					while(have_posts()):
					the_post();
					$content = split_content();
					?>
					<div class="col-xs-6 text-box text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">

								<?php echo wpautop($content[0]); ?>
							</div>
						</div>
					</div>
					<div class="col-xs-6 text-box text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<?php echo wpautop($content[1]); ?>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-6 text-box text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">

							</div>
						</div>
					</div>
					<div class="col-xs-6 text-box pink-hover-bd text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Training <br>Courses:</h3>
								<p>
									<?php the_field('training_courses'); ?>
								</p>
								<div class="text-box-read-more">
									<a href="javascript:void(0)">Find out more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 text-box pink-hover-bd text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Our <br>Philosophy:</h3>
								<p>
									<?php the_field('our_philosophy'); ?>
								</p>
								<div class="text-box-read-more">
									<a href="javascript:void(0)">Find out more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 text-box pink-hover-bd text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Specialised <br>Recruitment:</h3>
								<p>
									<?php the_field('specialised_recruitment'); ?>
								</p>
								<div class="text-box-read-more">
									<a href="javascript:void(0)">Find out more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 image-box">
				<img src="<?php bloginfo('template_url'); ?>/images/training/ballons.jpg" alt="">
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 image-box">
				<img src="<?php bloginfo('template_url'); ?>/images/training/apply.jpg" alt="">
			</div>
			<div class="col-md-6 pad0">
				<div class="col-xs-6 text-box pink-hover-bd text-box-sm gray-box-l">
					<div class="maintain-aspect-r">
						<div class="maintain-aspect-hold">
							<h3>Mentorship and <br>Succession:</h3>
							<p>
								<?php the_field('mentorship_and_succession'); ?>
							</p>
							<div class="text-box-read-more">
								<a href="javascript:void(0)">Find out more</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 text-box pink-hover-bd text-box-sm gray-box-l">
					<div class="maintain-aspect-r">
						<div class="maintain-aspect-hold">
							<h3>Business <br>Development:</h3>
							<p>
								<?php the_field('business_development'); ?>
							</p>
							<div class="text-box-read-more">
								<a href="javascript:void(0)">Find out more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-6 text-box text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<a href="<?php bloginfo('url');  ?>/training"><h3 class="pink-text">VIEW OUR NEWS ABOUT TRAINING:</h3></a>

								<div class="line-div">The new consumer <a href="#">></a></div>
								<div class="line-div">Internet of Things <a href="#">></a></div>
								<div class="line-div">Organizing for the future <a href="#">></a></div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 text-box pink-hover-bd text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Candidate <br>Generation:</h3>
								<p>
									<?php the_field('candidate_generation'); ?>
								</p>
								<div class="text-box-read-more">
									<a href="javascript:void(0)">Find out more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-6 text-box text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<a href="<?php bloginfo('url');  ?>/case-studies"><h3 class="pink-text">VIEW OUR TRAINING CASE STUDIES:</h3></a>

								<div class="line-div">The new consumer <a href="#">></a></div>
								<div class="line-div">Internet of Things <a href="#">></a></div>
								<div class="line-div">Organizing for the future <a href="#">></a></div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/training/ladder.jpg" alt="ladder">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
