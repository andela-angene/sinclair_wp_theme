<?php get_header(); ?>

<section class="news-header">
	<div class="container">

		<div id="news-header-carousel" class="owl-carousela">



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

<section class="news">
	<div class="container">

		<div class="col-sm-8 news-main">
			<h1 class="pink-text">RECENT NEWS:</h1>

			<div class="news-filters">
				<div class="row">
					<div class="col-xs-3"><a href="javascript:void(0)" class="news-filter-btn news-active-filter">FILTER <i class="fa fa-chevron-down"></i></a></div>
					<div class="col-xs-3"><a href="javascript:void(0)" class="news-filter-btn">FILTER <i class="fa fa-chevron-down"></i></a></div>
					<div class="col-xs-3"><a href="javascript:void(0)" class="news-filter-btn">FILTER <i class="fa fa-chevron-down"></i></a></div>
					<div class="col-xs-3"><a href="javascript:void(0)" class="news-filter-btn">FILTER <i class="fa fa-chevron-down"></i></a></div>
				</div>
				<div class="row">
					<div class="col-xs-3"><a href="javascript:void(0)" class="news-filter-btn">FILTER <i class="fa fa-chevron-down"></i></a></div>
					<div class="col-xs-3"><a href="javascript:void(0)" class="news-filter-btn">FILTER <i class="fa fa-chevron-down"></i></a></div>
					<div class="col-xs-3"><a href="javascript:void(0)" class="news-filter-btn">FILTER <i class="fa fa-chevron-down"></i></a></div>
					<div class="col-xs-3"><a href="javascript:void(0)" class="news-filter-btn">FILTER <i class="fa fa-chevron-down"></i></a></div>
				</div>
			</div>

			<div class="row news-content">
				<div class="col-sm-6">


					<?php
						$counter = 0;
					    while(have_posts()): the_post();
						    $counter++;
						    if($counter%2 != 0):
					?>

					<div class="news-box">
						<?php if(has_post_thumbnail()){
							the_post_thumbnail('full');
						}
						 ?>

						<p class="news-breadcrumb">
							<span class="pink-text">NEWS/</span> <?php echo (get_the_category()[0]->name); ?>
						</p>
						<a href="<?php the_permalink(); ?>">
							<h3 class="pink-text">
								<?php the_title(); ?>
							</h3>
						</a>

						<p>by <?php the_author(); ?></p>
						<div class="new-the-content">
							<?php the_excerpt(); ?>
						</div>
						<div class="read-more">
							<a class="pink-text" href="<?php the_permalink(); ?>">
								Read more
							</a> |
							<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>


					<?php endif; endwhile; ?>

				</div>
				<div class="col-sm-6">
					<?php
					$counter = 0;
					while(have_posts()): the_post();
						$counter++;
						if($counter%2 == 0):
							?>

							<div class="news-box">
								<?php if(has_post_thumbnail()){
									the_post_thumbnail('full');
								}
								?>

								<p class="news-breadcrumb">
									<span class="pink-text">NEWS/</span> <?php echo (get_the_category()[0]->name); ?>
								</p>
								<a href="<?php the_permalink(); ?>">
									<h3 class="pink-text">
										<?php the_title(); ?>
									</h3>
								</a>

								<p>by <?php the_author(); ?></p>
								<div class="new-the-content">
									<?php the_excerpt(); ?>
								</div>
								<div class="read-more">
									<a class="pink-text" href="<?php the_permalink(); ?>">
										Read more
									</a> |
									<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>


						<?php endif; endwhile; ?>
				</div>
			</div>
		</div>


		<div class="col-sm-4 news-sidebar">

			<h2 class="pink-text news-sidebar-header">Stay Connected</h2>

			<div class="news-sidebar-item">
				<a target="_blank" href="https://twitter.com">
					<img src="<?php bloginfo('template_url'); ?>/images/news/sinclair-twitter.jpg" alt="">
					<div class="news-sidebar-pinkdiv">
						<i class="fa fa-twitter"></i>
					</div>
				</a>


			</div>
			<div class="news-sidebar-item">
				<a target="_blank" href="https://linkedin.com">
					<img src="<?php bloginfo('template_url'); ?>/images/news/sinclair-linked.jpg" alt="">

					<div class="news-sidebar-pinkdiv">
						<i class="fa fa-linkedin"></i>
					</div>
				</a>
			</div>
			<div class="news-sidebar-item">
				<a target="_blank" href="https://facebook.com">
					<img src="<?php bloginfo('template_url'); ?>/images/news/sinclair-facebook.jpg" alt="">

					<div class="news-sidebar-pinkdiv">
						<i class="fa fa-hand-o-right"></i>
					</div>
				</a>
			</div>

		</div>

	</div>
</section>

<?php get_footer(); ?>
