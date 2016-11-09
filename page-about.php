<?php get_header(); ?>


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




<div class="top-tabs">

	<div class="container">
		<!-- Nav tabs -->
		<ul class="about-tab-links">


			<li class="col-sm-2 text-center"><a href="<?php bloginfo('url');  ?>/about-us?page=core-values">CORE VALUES <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="<?php bloginfo('url');  ?>/about-us?page=what-we-do">WHAT WE DO <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="<?php bloginfo('url');  ?>/about-us?page=management">MANAGEMENT TEAM<i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="<?php bloginfo('url');  ?>/about-us?page=team-strategy">STRATEGY <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="<?php bloginfo('url');  ?>/about-us?page=thought-leadership">THOUGHT LEADERSHIP <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-2 text-center"><a href="<?php bloginfo('url');  ?>/about-us?page=insights">INSIGHTS <i class="fa fa-circle"></i></a> </li>
		</ul>
	</div>

</div>



<section class="about-us-cover">
	<img src="<?php the_field('cover_image'); ?>" alt="about us">
</section>


<section class="about-sinclair">
	<div class="container">
		<div class="row">
			<?php
			while(have_posts()):
				the_post();
				$content = split_content();
			?>
			<div class="col-sm-4">
				<?php echo wpautop($content[0]); ?>
			</div>
			<div class="col-sm-4">
				<?php echo wpautop($content[1]); ?>
			</div>
			<div class="col-sm-4">
				<?php echo wpautop($content[2]); ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>


<section class="about-percent">
	<div data-appear-top-offset="-200" id="showCircles" class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="about-percent-wrap">
					<div class="about-circle">
						<div id="circle1"></div>
						<h2><strong>40%</strong></h2>
					</div>
					<h2>
						<?php the_field('stat-1-heading'); ?>
					</h2>
					<p>
						<?php the_field('stat-1-content'); ?>
					</p>
				</div>

			</div>
			<div class="col-sm-4">
				<div class="about-percent-wrap">
					<div class="about-circle">
						<div id="circle2"></div>
						<h2><strong>60%</strong></h2>
					</div>
					<h2>
						<?php the_field('stat-2-heading'); ?>
					</h2>
					<p>
						<?php the_field('stat-2-content'); ?>
					</p>
				</div>

			</div>
			<div class="col-sm-4">
				<div class="about-percent-wrap">
					<div class="about-circle">
						<div id="circle3"></div>
						<h2><strong>90%</strong></h2>
					</div>

					<h2>
						<?php the_field('stat-3-heading'); ?>
					</h2>
					<p>
						<?php the_field('stat-3-content'); ?>
					</p>
				</div>

			</div>
		</div>
	</div>
</section>





<section class="about-menu-list">

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="about-case">
					<div class="case-box hover-type">
						<a href="<?php bloginfo('url');  ?>/about-us?page=team-strategy">
							<div class="case-img ">
								<img src="<?php the_field('our_strategy'); ?>" alt="case study">
							</div>
							<div class="case-hover">
								<h1>Our <br>Strategy</h1>

								<div class="about-case-more">Find out more</div>

								<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo">
							</div>

						</a>
					</div>
				</div>

			</div>
			<div class="col-sm-4">
				<div class="about-case">
					<div class="case-box hover-type">
						<a href="<?php bloginfo('url');  ?>/about-us?page=core-values">
							<div class="case-img">
								<img src="<?php the_field('core_values'); ?>" alt="case study">
							</div>
							<div class="case-hover">
								<h1>Core <br>Values</h1>

								<div class="about-case-more">Find out more</div>

								<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo">
							</div>
						</a>
					</div>
				</div>

			</div>
			<div class="col-sm-4">
				<div class="about-case">
					<div class="case-box hover-type">
						<a href="<?php bloginfo('url');  ?>/about-us?page=management">
							<div class="case-img ">
								<img src="<?php the_field('management'); ?>" alt="case study">
							</div>
							<div class="case-hover">
								<h1>Management <br>Team</h1>

								<div class="about-case-more">Find out more</div>

								<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo">
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="about-case">
					<div class="case-box hover-type">
						<a href="<?php bloginfo('url');  ?>/about-us?page=what-we-do">
							<div class="case-img ">
								<img src="<?php the_field('what_we_do'); ?>" alt="case study">
							</div>
							<div class="case-hover">
								<h1>What <br>We Do</h1>

								<div class="about-case-more">Find out more</div>

								<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo">
							</div>

						</a>
					</div>
				</div>

			</div>
			<div class="col-sm-4">
				<div class="about-case">
					<div class="case-box hover-type">
						<a href="<?php bloginfo('url');  ?>/about-us?page=thought-leadership">
							<div class="case-img">
								<img src="<?php the_field('thought_leadership'); ?>" alt="case study">
							</div>
							<div class="case-hover">
								<h1>Thought <br>Leadership</h1>

								<div class="about-case-more">Find out more</div>

								<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo">
							</div>
						</a>
					</div>
				</div>

			</div>
			<div class="col-sm-4">
				<div class="about-case">
					<div class="case-box hover-type">
						<a href="<?php bloginfo('url');  ?>/about-us?page=insights">
							<div class="case-img ">
								<img src="<?php the_field('insights'); ?>" alt="case study">
							</div>
							<div class="case-hover">
								<h1>Insights <br>&nbsp;</h1>

								<div class="about-case-more">Find out more</div>

								<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo">
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>

</section>


<?php get_footer(); ?>
