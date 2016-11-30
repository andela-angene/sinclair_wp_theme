<style>
	.practice-post .panel-text-div{
		background-image: url("<?php echo the_field('cover_image') ?>");
	}
</style>

<?php $current_post_ID = get_the_ID(); ?>
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


<div role="tabpanel" class="practice-post">

	<div class="panel-text-div">
		<div class="panel-text">
			<h1 style="color: <?php the_field('sub_heading_color'); ?>"><?php the_title(); ?></h1>
			<p style="color: <?php the_field('sub_heading_color'); ?>"><?php the_field('sub_heading'); ?></p>
		</div>
	</div>



	<section class="about-post">
		<div class="container bg-white">
			<div class="row">
				<div class="col-sm-9">
					<section class="about-sinclair-wt">
						<div class="row">
							<?php
							$content = split_content();
							?>
							<div class="col-sm-6 ">
								<?php echo wpautop($content[0]); ?>
							</div>
							<div class="col-sm-6 bd-center">
								<?php echo wpautop($content[1]); ?>
							</div>
						</div>

						<div class="news-sidebar pt-20">

							<div class="news-sidebar-item col-sm-6">
								<a target="_blank" href="https://twitter.com">
									<img src="<?php bloginfo('template_url'); ?>/images/news/sinclair-twitter.jpg" alt="">
									<div class="news-sidebar-pinkdiv">
										<div class="text-center">
											<i class="fa fa-twitter"></i><br>
											<p>
												Industrial Internet <br>
												of Things
											</p>
										</div>
									</div>
								</a>
							</div>

							<div class="news-sidebar-item col-sm-6">
								<a target="_blank" href="https://linkedin.com">
									<img src="<?php bloginfo('template_url'); ?>/images/news/sinclair-linked.jpg" alt="">

									<div class="news-sidebar-pinkdiv">
										<div class="text-center">
											<i class="fa fa-linkedin"></i><br>
											<p>
												Industrial Internet <br>
												of Things
											</p>
										</div>
									</div>
								</a>
							</div>
						</div>
					</section>

				</div>
				<div class="col-sm-3">
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

				</div>
			</div>
		</div>
	</section>

	<section class="about-post">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h2><?php the_field('section2_heading'); ?></h2>
					<?php the_field('section2_content'); ?>

				</div>
			</div>
		</div>
	</section>

<!-- NEWS -->
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
				<div class="col-sm-9">
					<h2><?php the_field('section3_heading'); ?></h2>
					<div class="row post-list">
						<div class="col-sm-12">
							<?php the_field('section3_content'); ?>

						</div>
					</div>


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

			</div>
		</div>
	</section>

	<section class="about-post">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h2><?php the_field('section4_heading') ?></h2>

					<?php the_field('section4_content') ?>

				</div>

			</div>
		</div>
	</section>

<!--	Career Positions -->
	<div class="positions">
		<div class="container">
			<div class="positions-heading pink-text text-center">
				<h2>Latest Position Available</h2>
			</div>

			<div class="row positions-show">
			<?php
			$args = array(
				'post_type' => 'careers'
			);

			$post_query = new WP_Query($args);
			if($post_query->have_posts() ) {
			$count = 0;
			while($post_query->have_posts() ) :
			$count++;
			$post_query->the_post();
			if($count <= 2):
			?>

				<div class="col-md-6">
					<div class="header-news-text col-sm-11">
						<h3>
							CAREERS <span class="light-text to-upper"><?php echo get_the_date('| D | F d'); ?></span>
						</h3>
						<h2>
							<?php the_title(); ?>
						</h2>
						<div class="light-text">
							<?php wpautop(the_excerpt()); ?>
						</div>

						<div class="read-more">
							<a class="pink-text" href="javascript:void(0)">
								Read more
							</a> |
							<a class="pink-text" href="javascript:void(0)">Send your CV</a>
						</div>
					</div>
				</div>

			<?php endif; endwhile; } ?>

			</div>


			<div class="positions-hide display-none">
				<div class="row">
					<?php
					$count = 0;
					while($post_query->have_posts() ) :
						$count++;
						$post_query->the_post();
						if($count > 2): ?>

							<div class="col-md-6">
								<div class="header-news-text col-sm-11">
									<h3>
										CAREERS <span class="light-text to-upper"><?php echo get_the_date('| D | F d'); ?></span>
									</h3>
									<h2>
										<?php the_title(); ?>
									</h2>
									<div class="light-text">
										<?php wpautop(the_excerpt()); ?>
									</div>

									<div class="read-more">
										<a class="pink-text" href="javascript:void(0)">
											Read more
										</a> |
										<a class="pink-text" href="javascript:void(0)">Send your CV</a>
									</div>
								</div>
							</div>

					<?php
					    if($count%2 == 0){
						    echo '</div><div class="row">';
					    }
					?>

					<?php endif; endwhile; ?>

				</div>

			</div>


			<div class="positions-btn text-center">
				<a id="positions-btn-show" class="link-rm-default" href="javascript:void(0)"><i class="fox-button-p fa fa-chevron-down"></i></a>

				<a id="positions-btn-hide" class="link-rm-default display-none" href="javascript:void(0)"><i class="fox-button-p fa fa-chevron-up"></i></a>
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

	<section class="about-post">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h2><?php the_field('section3_heading'); ?></h2>
					<div class="row post-list">
						<div class="col-sm-12">
							<?php the_field('section3_content'); ?>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


<!--	Testimonials -->
	<div class="about-post">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h2>What Our Clients <span class="pink-text">Say About Us</span></h2>
					<p>
						If you have any additional questions or require further clarification, please do not hesitate to <span class="pink-text">call me or send me an email</span>
					</p>
					<br>

					<!--                 testimonials      -->
					<section class="about-case-studies">
						<div class="row">

							<?php
							for($i = 0; $i <= 3; $i++){
								$client = get_field('client'.$i);
								$client_photo = get_field('client'.$i.'_photo');
								$client_about = get_field('client'.$i.'_about');
								$client_topic = get_field('client'.$i.'_topic');
								$client_testimonial = get_field('client'.$i.'_testimonial');
							if(!empty($client) && !empty($client_photo)): ?>

								<div class="col-sm-4">
									<h2><?php echo $client ?></h2>
									<div class="about-case">
										<div class="case-box hover-type-2" data-photo='<?php echo $client_photo ?>' data-name='<?php echo $client ?>'>
											<a href="javascript:void(0)">
												<div class="case-img ">
													<img src="<?php echo $client_photo ?>" alt="case study">
												</div>
												<div class="case-hover">
													<h2>Read <br> More</h2>
												</div>
											</a>
											<div style="display:none">
												<div class="testimonial-about">
													<?php echo $client_about ?>
												</div>
												<div class="testimonial-topic">
													<?php echo $client_topic ?>
												</div>
												<div class="testimonial-content">
													<?php echo $client_testimonial ?>
												</div>
											</div>
										</div>
									</div>

								</div>

							<?php endif;} ?>

						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

	<section class="about-post" >
		<div class="container " style="margin-top: 0; padding-top: 0;">
			<div class="row">
				<div class="col-sm-9">
					<h2><?php the_field('section5_heading'); ?></h2>
					<div class="row post-list">
						<div class="col-sm-12">
							<?php the_field('section5_content'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="about-post">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">
					<h2>DROP US AN EMAIL</h2>
					<p>
						If you have any additional questions or require further clarification, please do not hesitate to <span class="pink-text">call me or send me an email</span>
					</p>
					<br>

					<!--                        about-case-studies -->
					<section class="about-case-studies">
						<div class="row">

							<?php
							$contact = get_field('contact1_name');
							$contact_photo = get_field('contact1_photo');
							if(!empty($contact) && !empty($contact_photo)): ?>
							<div class="col-sm-4">
								<h2><?php echo  $contact ?></h2>
								<div class="about-case">
									<div class="case-box hover-type">
										<a href="javascript:void(0)">
											<div class="case-img ">
												<img src="<?php echo $contact_photo ?>" alt="case study">
											</div>
											<div class="case-hover">
												<img src="<?php bloginfo('template_url'); ?>/images/practices/mail-phone.png" alt="">
											</div>
										</a>
									</div>
								</div>
							</div>
							<?php endif; ?>


							<?php
							$contact = get_field('contact2_name');
							$contact_photo = get_field('contact2_photo');
							if(!empty($contact) && !empty($contact_photo)): ?>
								<div class="col-sm-4">
									<h2><?php echo  $contact ?></h2>
									<div class="about-case">
										<div class="case-box hover-type">
											<a href="javascript:void(0)">
												<div class="case-img ">
													<img src="<?php echo $contact_photo ?>" alt="case study">
												</div>
												<div class="case-hover">
													<img src="<?php bloginfo('template_url'); ?>/images/practices/mail-phone.png" alt="">
												</div>
											</a>
										</div>
									</div>
								</div>
							<?php endif; ?>

							<?php
							$contact = get_field('contact3_name');
							$contact_photo = get_field('contact3_photo');
							if(!empty($contact) && !empty($contact_photo)): ?>
								<div class="col-sm-4">
									<h2><?php echo  $contact ?></h2>
									<div class="about-case">
										<div class="case-box hover-type">
											<a href="javascript:void(0)">
												<div class="case-img ">
													<img src="<?php echo $contact_photo ?>" alt="case study">
												</div>
												<div class="case-hover">
													<img src="<?php bloginfo('template_url'); ?>/images/practices/mail-phone.png" alt="">
												</div>
											</a>
										</div>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</section>

				</div>

			</div>
		</div>
	</section>
</div>


<!-- Modal Testimonials-->
<div class="modal fade" id="testimonials" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content testimonials">
			<div class="row">


				<div class="col-xs-6">
					<div class="register-desc">
						<button class="sinclair-btn"><i class="fa fa-chevron-left"></i></button>
						<br>
						<div class="pop-photo-clip">
							<img src="images/practices/adam-rose.jpg" alt="register">
						</div>

						<div class="h2 popup-client-name">Adam Ross</div>
						<div id="testimonial-about">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut qui sint, accusamus est odit, commodi praesentium soluta illo laboriosam nesciunt dolore, libero doloremque facilis rem, provident officiis ratione expedita non!
							</p>
						</div>

						<div class="socail-icons text-center">
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</div>
					</div>

				</div>
				<div class="col-xs-6"><div class="register-form-div">
						<div class="register-form">
							<h2 id="testimonial-topic" class="text-center">A Real
								<strong class="pink-text">
									Success
								</strong>
							</h2>
							<div id="testimonial-content">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam error quisquam, dolorem in quis nostrum beatae ipsa magni illo, iure, culpa officiis dolor dolore vel impedit voluptatibus aliquam perferendis at!
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam error quisquam, dolorem in quis nostrum beatae ipsa magni illo, iure, culpa officiis dolor dolore vel impedit voluptatibus aliquam perferendis at!
								</p>
							</div>


						</div>

						<div class="registerPopup-tags">
							<p>
								<span>TAGS:</span> Education, pasta, mandarina, nonna Rina, Challenge, Water, Food, Nutella
							</p>
						</div>
					</div></div>


			</div>
		</div>
	</div>
</div>
