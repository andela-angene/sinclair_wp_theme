<?php get_header(); ?>

<div class="top-tabs">

	<div class="container">
		<!-- Nav tabs -->
		<ul class="about-tab-links">


			<li class="col-sm-2 text-center"><a href="#">ACQUISITION <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="#">LEADERSHIP <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="#">RETENTION <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="#">REVIEW <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="<?php bloginfo('url');  ?>/executive?page=risk">RISK <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="#">PERFORMANCE <i class="fa fa-circle"></i></a> </li>
		</ul>
	</div>

</div>

<section class="executive">
	<div class="container">

		<div class="row column-991">
			<?php
			while(have_posts()):
			the_post();
			$content = split_content();
			?>
			<div class="col-md-6 text-box text-box-100">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold">
						<div class="col-sm-6 text-box-left">
							<?php echo wpautop($content[0]); ?>
						</div>
						<div class="col-sm-6 text-box-left">
							<?php echo wpautop($content[1]); ?>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<div class="col-md-6 image-box ">
				<img src="<?php bloginfo('template_url'); ?>/images/executive/1.jpg" alt="executive">
			</div>
		</div>

		<div class="row column-991">
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/2.jpg" alt="executive">
					</div>
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/3.jpg" alt="executive">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/5.jpg" alt="executive">
					</div>
					<div class="col-xs-6 text-box pink-hover-bd text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Leadership:</h3>
								<p>
									<?php the_field('leadership'); ?>
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
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/4.jpg" alt="executive">
					</div>
					<div class="col-xs-6 text-box pink-hover-bd text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Acquisition:</h3>
								<p>
									<?php the_field('acquisition'); ?>
								</p>
								<div class="text-box-read-more">
									<a href="javascript:void(0)">Find out more</a>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 text-box pink-hover-bd text-box-sm">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Retention:</h3>
								<p>
									<?php the_field('retention'); ?>
								</p>
								<div class="text-box-read-more">
									<a href="javascript:void(0)">Find out more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/6.jpg" alt="executive">
					</div>
				</div>
			</div>
		</div>

		<div class="row column-991">
			<div class="col-md-6 column-992">
				<div class="row">
					<div class="col-xs-6 text-box pink-hover-bd text-box-sm gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Review:</h3>
								<p>
									<?php the_field('review'); ?>
								</p>
								<div class="text-box-read-more">
									<a href="javascript:void(0)">Find out more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 text-box text-box-sm view-our-case">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3 class="pink-text">VIEW OUR CASE STUDIES ON EXECUTIVE SEARCH:</h3>

								<div class="line-div">The new consumer <a href="#">></a></div>
								<div class="line-div">Internet of Things <a href="#">></a></div>
								<div class="line-div">Organizing for the future <a href="#">></a></div>

							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/7.jpg" alt="executive">
					</div>
					<div class="col-xs-6 text-box pink-hover-bd text-box-sm">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Risk:</h3>
								<p>
									<?php the_field('risk'); ?>
								</p>
								<div class="text-box-read-more">
									<a href="javascript:void(0)">Find out more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 text-box text-box-sm pink-hover-bd gray-box-l">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold">
								<h3>Performance:</h3>
								<p>
									<?php the_field('performance'); ?>
								</p>
								<div class="text-box-read-more">
									<a href="javascript:void(0)">Find out more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-6 text-box text-box-sm view-our-case">
						<div class="maintain-aspect-r">
							<div class="maintain-aspect-hold ">
								<h3 class="pink-text">VIEW OUR CASE STUDIES ON EXECUTIVE SEARCH:</h3>

								<div class="line-div">The new consumer <a href="#">></a></div>
								<div class="line-div">Internet of Things <a href="#">></a></div>
								<div class="line-div">Organizing for the future <a href="#">></a></div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 column-992">
				<div class="row">
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/8.jpg" alt="executive">
					</div>
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/9.jpg" alt="executive">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/10.jpg" alt="executive">
					</div>
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/11.jpg" alt="executive">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/12.jpg" alt="executive">
					</div>
					<div class="col-xs-6 image-box">
						<img src="<?php bloginfo('template_url'); ?>/images/executive/13.jpg" alt="executive">
					</div>
				</div>
			</div>
		</div>


	</div>
</section>

<?php get_footer(); ?>
