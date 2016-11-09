<?php get_header(); ?>

<section class="news-header">
	<div class="container">

		<div id="news-header-carousel" class="owl-carousela">


			<?php
			$post_counter = 0;
			while(have_posts()): the_post();
				$post_counter++;
					if($post_counter <= 3):
						?>

						<div class="item">
							<div class="item-content row">
								<div class="header-news-img col-sm-3">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="header-news-text col-sm-9">
									<h2>
										TOP NEWS <span class="light-text">| MON | APRIL 15 </span>
									</h2>
									<h1>
										<?php the_title(); ?>
									</h1>
									<?php the_excerpt(); ?>

									<div class="read-more">
										<a class="pink-text" href="<?php the_permalink(); ?>">
											Read more
										</a> |
										<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
									</div>

								</div>
							</div>
						</div>

					<?php endif; endwhile; ?>
			
			

			<div class="item">
				<div class="item-content row">
					<div class="header-news-img col-sm-3">
						<img src="<?php bloginfo('template_url'); ?>/images/news/tower.jpg" alt="">
					</div>
					<div class="header-news-text col-sm-9">
						<h2>
							TOP NEWS <span class="light-text">| MON | APRIL 15 </span>
						</h2>
						<h1>
							The most popular articles
						</h1>
						<p class="light-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati excepturi iusto dolor officiis placeat, at eligendi cupiditate amet ipsa minima.
						</p>

						<div class="read-more">
							<a class="pink-text" href="<?php bloginfo('url'); ?>/article-news">
								Read more
							</a> |
							<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>

					</div>
				</div>
			</div>

			<div class="item">
				<div class="item-content row">
					<div class="header-news-img col-sm-3">
						<img src="<?php bloginfo('template_url'); ?>/images/news/tower.jpg" alt="">
					</div>
					<div class="header-news-text col-sm-9">
						<h2>
							TOP NEWS <span class="light-text">| MON | APRIL 15 </span>
						</h2>
						<h1>
							The most popular articles
						</h1>
						<p class="light-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati excepturi iusto dolor officiis placeat, at eligendi cupiditate amet ipsa minima.
						</p>

						<div class="read-more">
							<a class="pink-text" href="<?php bloginfo('url'); ?>/article-news">
								Read more
							</a> |
							<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>

					</div>
				</div>
			</div>

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
					<div class="news-box">
						<img src="<?php bloginfo('template_url'); ?>/images/news/soccer.jpg" alt="">

						<p class="news-breadcrumb">
							<span class="pink-text">NEWS/</span> Talent Management
						</p>
						<h3 class="pink-text">
							The Talent Strategy Questions Every Board
						</h3>
						<p>by Nina Bassi</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut totam voluptatibus, repudiandae iure nesciunt sapiente ullam eius fuga ipsa praesentium
						</p>
						<div class="read-more">
							<a class="pink-text" href="<?php bloginfo('url'); ?>/article-news">
								Read more
							</a> |
							<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="news-box">
						<img src="<?php bloginfo('template_url'); ?>/images/news/syria.jpg" alt="">

						<p class="news-breadcrumb">
							<span class="pink-text">NEWS/</span> Talent Management
						</p>
						<h3 class="pink-text">
							The Talent Strategy Questions Every Board
						</h3>
						<p>by Nina Bassi</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut totam voluptatibus, repudiandae iure nesciunt sapiente ullam eius fuga ipsa praesentium
						</p>
						<div class="read-more">
							<a class="pink-text" href="<?php bloginfo('url'); ?>/article-news">
								Read more
							</a> |
							<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="news-box-video  news-box">
						<img src="<?php bloginfo('template_url'); ?>/images/news/womaninhat.jpg" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="news-box">
						<img src="<?php bloginfo('template_url'); ?>/images/news/birds.jpg" alt="">

						<p class="news-breadcrumb">
							<span class="pink-text">NEWS/</span> Talent Management
						</p>
						<h3 class="pink-text">
							The Talent Strategy Questions Every Board
						</h3>
						<p>by Nina Bassi</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut totam voluptatibus,
						</p>
						<div class="read-more">
							<a class="pink-text" href="<?php bloginfo('url'); ?>/article-news">
								Read more
							</a> |
							<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="news-box">
						<img src="<?php bloginfo('template_url'); ?>/images/news/internet.jpg" alt="">

						<p class="news-breadcrumb">
							<span class="pink-text">NEWS/</span> Talent Management
						</p>
						<h3 class="pink-text">
							The Talent Strategy Questions Every Board
						</h3>
						<p>by Nina Bassi</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut totam voluptatibus,
						</p>
						<div class="read-more">
							<a class="pink-text" href="<?php bloginfo('url'); ?>/article-news">
								Read more
							</a> |
							<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="news-box">
						<img src="<?php bloginfo('template_url'); ?>/images/news/trump.jpg" alt="">

						<p class="news-breadcrumb">
							<span class="pink-text">NEWS/</span> Talent Management
						</p>
						<h3 class="pink-text">
							The Talent Strategy Questions Every Board
						</h3>
						<p>by Nina Bassi</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut totam voluptatibus,
						</p>
						<div class="read-more">
							<a class="pink-text" href="<?php bloginfo('url'); ?>/article-news">
								Read more
							</a> |
							<a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-twitter"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-facebook"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-instagram"></i></a> <a class="link-rm-default" href="javascript:void(0)"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
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
