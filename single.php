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



<section class="article-header ">
	<?php while (have_posts()): the_post();; ?>
	<h1>
		<?php the_title(); ?>
	</h1>

	<p class="small"><?php the_field('news-subtitle'); ?></p>

	<p class="article-author"><strong><?php the_author(); ?></strong></p>
	<p class="artice-date"><?php the_date(); ?></p>

</section>

<section class="about-post article-post article-post-top-border">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2><?php the_field('news-section-1-heading'); ?></h2>
				<div class="article-news-content">
					<?php
						the_content();
					?>

				</div>
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
	<img src="<?php the_field('news-section-1-image'); ?>" alt="">
</div>

<section class="about-post">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2><?php the_field('news-section-2-heading'); ?></h2>
				<div class="article-news-content">
					<?php the_field('news-section-2-content'); ?>
				</div>


			</div>

				<?php if(is_active_sidebar('read-more')){
					dynamic_sidebar('read-more');
				}; ?>

				
			</div>
		</div>
	</div>
</section>

<div class="about-separate-img">
	<img src="<?php the_field('news-section-2-image'); ?>" alt="">
</div>

<section class="about-post article-post">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2><?php the_field('news-section-3-heading'); ?></h2>

				<?php the_field('news-section-3-content'); ?>

			</div>
			
			
			<div class="col-sm-3 about-read-more read-more-top-img">
				<?php
				    $post_id = get_field('featured_post')->ID;
				?>
				
				<?php echo get_the_post_thumbnail($post_id); ?>
				<div class="read-more-div">
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
	</div>
</section>

<?php endwhile; ?>


<?php get_footer(); ?>

