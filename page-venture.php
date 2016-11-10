<?php get_header(); ?>


<div class="top-tabs">

	<div class="container">
		<!-- Nav tabs -->
		<ul class="about-tab-links">


			<li class="col-sm-3 text-center"><a href="#">PORTFOLIO <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-3 text-center"><a href="#">TEAM <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-3 text-center"><a href="#">STRATEGY <i class="fa fa-circle"></i></a> </li>

			<li class="col-sm-3 text-center"><a href="#">INVESTMENT CRITERIA <i class="fa fa-circle"></i></a> </li>

		</ul>
	</div>

</div>
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


<section class="about-us-cover">
	<img src="<?php the_field('cover_image'); ?>" alt="venture">
</section>


<section class="about-sinclair-wt">
	<div class="container">
		<div class="row">
			<?php
			while(have_posts()):
			the_post();
			$content = split_content();
			?>
			<div class="col-sm-4">
				<?php echo wpautop($content[0]); ?>
				<br>

				<a href="<?php bloginfo('url'); ?>/case-studies"><h3 class="pink-text">VIEW OUR TRAINING CASE STUDIES:</h3></a>

				<div class="line-div">The new consumer <a href="#">></a></div>
				<div class="line-div">Internet of Things <a href="#">></a></div>
				<div class="line-div">Organizing for the future <a href="#">></a></div>
			</div>
			<div class="col-sm-4">
				<?php echo wpautop($content[1]); ?>
			</div>
			<div class="col-sm-4">
				<?php echo wpautop($content[2]); ?>
				<br><br>
				<a href="<?php bloginfo('url'); ?>/case-studies"><h3 class="pink-text">VIEW OUR TRAINING CASE STUDIES:</h3></a>

				<div class="line-div">The new consumer <a href="#">></a></div>
				<div class="line-div">Internet of Things <a href="#">></a></div>
				<div class="line-div">Organizing for the future <a href="#">></a></div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<section class="practices venture">
	<div class="container">

		<div class="row practice-item-r venture-up0 venture-item">
			<div class="col-sm-4 text-box ">
				<h1>Portfolio: <br> &nbsp;</h1>
				<p>
					<?php the_field('portfolio'); ?>
				</p>
				<div class="text-box-read-more">
					<a href="javascript:void(0)">Find out more</a>
				</div>
			</div>
			<div class="col-sm-8 venture-image pad0">
				<img src="<?php the_field('portfolio_image'); ?>" alt="">
			</div>
		</div>

		<div class="row practice-item-l venture-up1 venture-item">
			<div class="col-sm-4 text-box ">
				<h1>Team: <br> &nbsp;</h1>
				<p>
					<?php the_field('team'); ?>
				</p>
				<div class="text-box-read-more">
					<a href="javascript:void(0)">Find out more</a>
				</div>
			</div>
			<div class="col-sm-8 venture-image pad0">
				<img src="<?php the_field('team_image'); ?>" alt="">
			</div>
		</div>

		<div class="row practice-item-r venture-up2 venture-item">
			<div class="col-sm-4 text-box ">
				<h1>Strategy:<br> &nbsp;</h1>
				<p>
					<?php the_field('strategy'); ?>
				</p>
				<div class="text-box-read-more">
					<a href="javascript:void(0)">Find out more</a>
				</div>
			</div>
			<div class="col-sm-8 venture-image pad0">
				<img src="<?php the_field('strategy_image'); ?>" alt="">
			</div>
		</div>

		<div class="row practice-item-l venture-up3 venture-item">
			<div class="col-sm-4 text-box ">
				<h1>INVESTMENT <br> CRITERIA:</h1>
				<p>
					<?php the_field('investment'); ?>
				</p>
				<div class="text-box-read-more">
					<a href="javascript:void(0)">Find out more</a>
				</div>
			</div>
			<div class="col-sm-8 venture-image pad0">
				<img src="<?php the_field('investment_image'); ?>" alt="">
			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>
