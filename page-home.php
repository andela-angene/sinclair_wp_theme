<?php get_header(); ?>


<section class="homepage-header">
	<div class="container">

		<div class="row">
			<div class="col-sm-4">
				<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="logo">
			</div>
			<div class="col-sm-8">
				<?php
				    while(have_posts()){
					    the_post();
					    the_content();
					    $current_post_ID = get_the_ID();
				    }
				?>
			</div>
		</div>
		<a class="homepage-chat-logo launch-chatbox" href="javascript:void(0)">
			<img src="<?php bloginfo('template_url'); ?>/images/chat.png" alt="chat">
		</a>


	</div>
</section>

<section class="homepage-content">
	<div class="container">

		<div class="row homepage-content-row">
			<div class="col-md-8">
				<div id="home-header-carousel" class="owl-carousela">

					<div class="item">
						<div class="item-content row">
							<div class="header-news-text col-sm-6">
								<h2>Executive <br> Search:</h2>
								<p>
									<?php the_field('executive_search'); ?>
								</p>


								<div class="read-more">
									<a class="pink-text" href="<?php bloginfo('url');  ?>/executive-search">
										Read more
									</a>
								</div>
							</div>
							<div class="header-news-img col-sm-6">
								<img src="<?php the_field('executive_search_image'); ?>" alt="">
							</div>
						</div>
					</div>

					<div class="item">
						<div class="item-content row">
							<div class="header-news-text col-sm-6">
								<h2>Talent <br> Management:</h2>
								<p>
									<?php the_field('talent_management'); ?>
								</p>


								<div class="read-more">
									<a class="pink-text" href="<?php bloginfo('url');  ?>/talent-management">
										Read more
									</a>
								</div>
							</div>
							<div class="header-news-img col-sm-6">
								<img src="<?php the_field('talent_management_image'); ?>" alt="">
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-4 homepage-trending">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold">
						<div class="homepage-trending-header">
							<h3>Trending</h3>
							<img src="<?php bloginfo('template_url'); ?>/images/logo-single-w.png" alt="logo">
						</div>


						<?php
						$args = array(
							'post_type' => 'post'
						);
						$post_counter = 0;
						$post_query = new WP_Query($args);
						while($post_query->have_posts()): $post_query->the_post();
							$post_counter++;
							if($post_counter <= 4):
								?>

								<div class="trending-item <?php if ($post_counter == 1){echo 'trending-item-active';} ?>">
									<div class="trending-num">
										<span><?php echo $post_counter ?></span>
										<div class="trend80"></div>
									</div>
									<div class="trending-text">
										<a class="link-rm-default" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

									</div>
								</div>

							<?php endif; endwhile; ?>
						
					</div></div>
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

		<div class="row homepage-content-row">
			<div class="col-md-4 home-content-box">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold text-box">
						<div class="home-content-title">
							<h2>THOUGHT <br>LEADERSHIP:</h2>
							<a class="link-rm-default" href="<?php bloginfo('url');  ?>/about-us?page=thought-leadership"><i class="fox-button-d fa fa-chevron-right"></i></a>
						</div>

						<p>02/25/2016</p>
						<p>
							<?php the_field('thought__leadership'); ?>
						</p>

					</div>
				</div>
			</div>
			<div class="col-md-4 home-content-box">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold pink-border">
						<img src="<?php the_field('image1'); ?>" alt="robot">

					</div>
				</div>
			</div>
			<div class="col-md-4 home-content-box">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold text-box">
						<div class="home-content-title">
							<h2>LATEST <br>NEWS:</h2>
							<a class="link-rm-default" href="<?php bloginfo('url');  ?>/news"><i class="fox-button-d fa fa-chevron-right"></i></a>
						</div>

						<p>02/25/2016</p>
						<p>
							<?php the_field('latest_news'); ?>
						</p>

					</div>
				</div>
			</div>
		</div>

		<div class="row homepage-content-row">

			<div class="col-md-4 home-content-box">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold text-box text-box-d">
						<div class="home-content-title">
							<h2>CASE <br>STUDY</h2>
							<a class="link-rm-default" href="<?php bloginfo('url');  ?>/case-studies"><i class="fox-button-l fa fa-chevron-right"></i></a>
						</div>

						<p>
							<?php the_field('case_study'); ?>
						</p>
						<div class="read-more">
							<a class="pink-text" href="javascript:void(0)">
								Find out more
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 home-content-box">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold">
						<img src="<?php the_field('image2'); ?>" alt="robot">

					</div>
				</div>
			</div>
			<div class="col-md-4 home-content-box">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold text-box text-box-d">
						<div class="home-content-title">
							<h2>DOWNLOAD <br>INTRODUTION</h2>
							<a class="link-rm-default" href="<?php bloginfo('url');  ?>/news"><i class="fox-button-l fa fa-chevron-right"></i></a>
						</div>

						<p>
							<?php the_field('download_introduction'); ?>
						</p>
						<div class="read-more">
							<a class="pink-text" href="javascript:void(0)">
								Find out more
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row homepage-content-row">
			<div class="col-md-4 home-content-box">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold text-box">
						<div class="home-content-title">
							<h2>CONTACT <br>US:</h2>
							<a class="link-rm-default" href="<?php bloginfo('url');  ?>/contact"><i class="fox-button-d fa fa-chevron-right"></i></a>
						</div>
						<p>&nbsp;</p>
						<p>
							<?php the_field('contact_us'); ?>
						</p>

					</div>
				</div>
			</div>
			<div class="col-md-4 home-content-box">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold">
						<img src="<?php the_field('image3'); ?>" alt="robot">

					</div>
				</div>
			</div>
			<div class="col-md-4 home-content-box">
				<div class="maintain-aspect-r">
					<div class="maintain-aspect-hold text-box">
						<div class="home-content-title">
							<h2>DOWNLOAD <br>ANNUAL REPORT:</h2>
							<a class="link-rm-default" href="<?php bloginfo('url');  ?>/news"><i class="fox-button-d fa fa-chevron-right"></i></a>
						</div>
						<p>02/25/2016</p>

						<p>
							<?php the_field('download_annual_report'); ?>
						</p>

					</div>
				</div>
			</div>
		</div>

	</div>
</section>



<?php get_footer(); ?>
