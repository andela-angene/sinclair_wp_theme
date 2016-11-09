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

<div class="wrapper talent-management">

	<section class="header">

		<div class="header-text text-center">
			<div class="small">Arthur Schopenhauer</div>

			<p>
				<?php
				while(have_posts()){
					the_post();
					the_content();
				}
				?>
			</p>
		</div>

	</section>

	<section class="case-studies offset-section">
		<div class="container">

			<ul class="case-boxes clearfix masonry" id="case-grid">

				<li class="case-box text-type">
					<div class="case-img">
						<img src="<?php bloginfo('template_url'); ?>/images/case-images/empty-long.jpg" alt="case study">
					</div>
					<div class="the-text">
						<div>
							<?php the_field('long_text_box') ?>
						</div>

						<p>
							<?php the_field('long_text_box_content') ?>
						</p>

						<a href="javascript:void(0)">Find out more</a>
					</div>
				</li>

				<li class="case-box hover-type">
					<a href="javascript:void(0)">
						<div class="case-img ">
							<img src="<?php the_field('development'); ?>" alt="case study">
						</div>
						<div class="case-hover">
							<h2>Development</h2>
						</div>
					</a>
				</li>

				<li class="case-box hover-type">
					<a href="javascript:void(0)">
						<div class="case-img">
							<img src="<?php the_field('marketability'); ?>" alt="case study">
						</div>
						<div class="case-hover">
							<h2>Marketability</h2>
						</div>
					</a>
				</li>

				<li class="case-box hover-type">
					<a href="javascript:void(0)">
						<div class="case-img ">
							<img src="<?php the_field('protection'); ?>">
						</div>
						<div class="case-hover">
							<h2>Protection</h2>
						</div>
					</a>
				</li>

				<li class="case-box text-type">
					<div class="case-img">
						<img src="<?php bloginfo('template_url'); ?>/images/case-images/empty.jpg" alt="case study">
					</div>
					<div class="the-text">
						<div>
							<?php the_field('short_text_box') ?>
						</div>

						<p>
							<?php the_field('short_text_box_content') ?>
						</p>

						<a href="javascript:void(0)">Find out more</a>
					</div>
				</li>

				<li class="case-box hover-type">
					<div class="case-box-covered"></div>
					<a href="javascript:void(0)">
						<div class="case-img ">
							<img src="<?php the_field('join'); ?>" alt="case study">
						</div>
						<div class="case-hover">
							<h2>Join</h2>
						</div>
					</a>
				</li>

				<li class="case-box video-type ">
					<a href="javascript:void(0)">
						<div class="case-img ">
							<img src="<?php bloginfo('template_url'); ?>/images/talent/vid.jpg" alt="case study">
						</div>


					</a>
				</li>

				<li class="case-box hover-type">
					<a href="javascript:void(0)">
						<div class="case-img ">
							<img src="<?php the_field('springboard'); ?>" alt="case study">
						</div>
						<div class="case-hover">
							<h2>Springboard</h2>
						</div>
					</a>
				</li>

				<li class="case-box hover-type case-box-dld-pdf">
					<div class="case-box-covered"></div>
					<a href="javascript:void(0)">
						<div class="case-img ">
							<img src="<?php bloginfo('template_url'); ?>/images/case-images/empty.jpg" alt="case study">
						</div>
						<div class="case-hover-dld">
							<img src="<?php bloginfo('template_url'); ?>/images/talent/download-logo.jpg" alt="dld">
						</div>
						<div class="case-hover">
							<h2 class="pink-text">About Us PDF</h2>
						</div>
					</a>
				</li>

				<li class="case-box hover-type">
					<a href="javascript:void(0)">
						<div class="case-img ">
							<img src="<?php the_field('transition'); ?>" alt="case study">
						</div>
						<div class="case-hover">
							<h2>Transition</h2>
						</div>
					</a>
				</li>



				<li class="case-box text-type">
					<div class="case-img">
						<img src="<?php bloginfo('template_url'); ?>/images/case-images/empty.jpg" alt="case study">
					</div>
					<div class="the-text">
						<div>
							<span class="pink-text">CONTACT</span>/Talent Management
						</div>

						<p>
							Get in <br>
							contact <br>
							with <br>
							<span class="pink-text italic-text">US</span>
						</p>

						<a href="javascript:void(0)">Find out more</a>
					</div>
				</li>


			</ul>

		</div>
	</section>

</div>

<?php get_footer(); ?>
