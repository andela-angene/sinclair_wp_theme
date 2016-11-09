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

	<h1>
		University of Woterloo Engineer <br>
		Builds <span class="pink-text">3D Printer</span> for Bone
	</h1>

	<p class="small">Including a range of plastics, ceramics and metals like titanium with varying results</p>

	<p class="article-author"><strong>Henry Smith</strong></p>
	<p class="artice-date">April 25 20116</p>

</section>

<section class="about-post article-post article-post-top-border">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2>Builds 3D printer for bone.</h2>
				<div class="article-news-content">
					<?php
					    while (have_posts()): the_post();
						the_content();
						endwhile;
					?>

				</div>
			</div>
			<div class="col-sm-3 author-sidebar">
				<img class="about-passport" src="<?php bloginfo('template_url'); ?>/images/article-news/article-author.jpg" alt="">
				<h3>Vivian Hunt</h3>

				<p>Date: <strong>11-8-2016</strong> <br>
					Office: <strong>London</strong> <br>
					Categories: <strong>Technology</strong></p>

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
	<img src="<?php bloginfo('template_url'); ?>/images/article-news/turn-tap.jpg" alt="">
</div>

<section class="about-post">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2><?php the_field("article-news-1-heading"); ?></h2>
				<div class="article-news-content">
					<?php the_field("article-news-1-content"); ?>
				</div>


			</div>
			<div class="col-sm-3 about-read-more">
				<button class="read-more-btn">READ MORE</button>

				<ul>
					<li>Sean Parker gives $250 Million donation to help institution Cure Cancer</li>
					<li>Sean Parker gives $250 Million donation to help institution Cure Cancer</li>
					<li>Sean Parker gives $250 Million donation to help institution Cure Cancer</li>
					<li>Sean Parker gives $250 Million donation to help institution Cure Cancer</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="about-separate-img">
	<img src="<?php the_field("article-news-1-image"); ?>" alt="">
</div>

<section class="about-post article-post">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2>Lorem Ipsum is simply dummy text.</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur in ex beatae maiores dolore vitae expedita aut! Pariatur alias, hic, earum inventore quisquam animi harum atque, consequuntur dignissimos corporis nostrum officiis vel porro tempore, vero nesciunt maiores voluptatem aliquam exercitationem accusamus commodi ratione laudantium. Quasi earum, alias magni id sit, eaque, tenetur similique velit est dignissimos adipisci. Eos facilis soluta impedit quisquam autem, architecto totam repellendus, nam inventore, dolor molestiae, perferendis dolore hic non laudantium recusandae aut in quo sed ea! Soluta magnam et quibusdam nesciunt amet perspiciatis enim quam rem, provident qui accusantium ut iste illum suscipit esse quaerat saepe porro quae illo accusamus eius, aut fugit autem? Illum nisi minima, laboriosam sapiente delectus aperiam laborum vitae ea, quaerat.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur in ex beatae maiores dolore vitae expedita aut! Pariatur alias, hic, earum inventore quisquam animi harum atque, consequuntur dignissimos corporis nostrum officiis vel porro tempore, vero nesciunt maiores voluptatem aliquam exercitationem accusamus commodi ratione laudantium. Quasi earum, alias magni id sit, eaque, tenetur similique velit est dignissimos adipisci. Eos facilis soluta impedit quisquam autem, architecto totam repellendus, nam inventore, dolor molestiae, perferendis dolore hic non laudantium recusandae aut in quo sed ea! Soluta magnam et quibusdam nesciunt amet perspiciatis enim quam rem, provident qui accusantium ut iste illum suscipit esse quaerat saepe porro quae illo accusamus eius, aut fugit autem? Illum nisi minima, laboriosam sapiente delectus aperiam laborum vitae ea, quaerat.
				</p>

			</div>
			<div class="col-sm-3 about-read-more read-more-top-img">
				<img src="<?php bloginfo('template_url'); ?>/images/article-news/article-hand.jpg" alt="">
				<div class="read-more-div">
					<button class="read-more-btn">READ MORE</button>
					<div>
						<strong>
							Sean Parker gives $250 Million donation to help institution Cure Cancer
						</strong>
					</div>
				</div>


			</div>
		</div>
	</div>
</section>


<?php get_footer(); ?>
