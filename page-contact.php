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


<div class="wrapper">

	<section class="contact-header">

		<img src="<?php bloginfo('template_url'); ?>/images/contact/needle.png" alt="">

	</section>

	<section class="contact offset-section">
		<div class="container">

			<!--                   Contact row ldn -->
			<div class="row contact-img-a">
				<div class="col-md-6">
					<div class="contact-img contact-img-ldn1">
						<div class="contact-fadeIn">
							<div class="wrap-contact">
								<h3><?php the_field('location1_ad') ?></h3>
								<p class="gray-text"><?php the_field('location1_email') ?></p>

								<a href="javascript:void(0)">Find out more</a>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-img contact-img-ldn2">
						<div class="contact-slideIn">
							<h1><?php the_field('location1') ?></h1>
						</div>
					</div>
				</div>
			</div>


			<!--                   Contact row sgp -->
			<div class="row contact-img-a">
				<div class="col-md-6">
					<div class="contact-img contact-img-sgp1">
						<div class="contact-fadeIn">
							<div class="wrap-contact">
								<h3><?php the_field('location2_ad') ?></h3>
								<p class="gray-text"><?php the_field('location2_email') ?></p>

								<a href="javascript:void(0)">Find out more</a>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-img contact-img-sgp2">
						<div class="contact-slideIn">
							<h1><?php the_field('location2') ?></h1>
						</div>
					</div>
				</div>
			</div>


			<!--                   Contact row del-->
			<div class="row contact-img-a">





				<div class="col-md-6">
					<div class="contact-img contact-img-del1">
						<div class="contact-fadeIn">
							<div class="wrap-contact">
								<h3><?php the_field('location3_ad') ?></h3>
								<p class="gray-text"><?php the_field('location3_email') ?></p>

								<a href="javascript:void(0)">Find out more</a>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-img contact-img-del2">
						<div class="contact-slideIn">
							<h1><?php the_field('location3') ?></h1>
						</div>
					</div>
				</div>
			</div>

			<!--                   Contact row cwb-->
			<div class="row contact-img-a">
				<div class="col-md-6">
					<div class="contact-img contact-img-cwb1">
						<div class="contact-fadeIn">
							<div class="wrap-contact">
								<h3><?php the_field('location4_ad') ?></h3>
								<p class="gray-text"><?php the_field('location4_email') ?></p>

								<a href="javascript:void(0)">Find out more</a>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-img contact-img-cwb2">
						<div class="contact-slideIn">
							<h1><?php the_field('location4') ?></h1>
						</div>
					</div>
				</div>
			</div>

			<!--                   Contact row chi-->
			<div class="row contact-img-a">
				<div class="col-md-6">
					<div class="contact-img contact-img-chi1">
						<div class="contact-fadeIn">
							<div class="wrap-contact">
								<h3><?php the_field('location5_ad') ?></h3>
								<p class="gray-text"><?php the_field('location5_email') ?></p>

								<a href="javascript:void(0)">Find out more</a>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-img contact-img-chi2">
						<div class="contact-slideIn">
							<h1><?php the_field('location5') ?></h1>
						</div>
					</div>
				</div>
			</div>

			<!--                   Contact row nbo-->
			<div class="row contact-img-a">
				<div class="col-md-6">
					<div class="contact-img contact-img-nbo1">
						<div class="contact-fadeIn">
							<div class="wrap-contact">
								<h3><?php the_field('location6_ad') ?></h3>
								<p class="gray-text"><?php the_field('location6_email') ?></p>

								<a href="javascript:void(0)">Find out more</a>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-img contact-img-nbo2">
						<div class="contact-slideIn">
							<h1><?php the_field('location6') ?></h1>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

</div>

<?php get_footer(); ?>
