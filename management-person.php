<?php
// Load the WordPress library.
require_once( '../../../wp-load.php' );

$args = array(
	'p' => $_GET['id'],
	'post_type' => 'any'
);

$post_query = new WP_Query($args);
if($post_query->have_posts() ) {
	while($post_query->have_posts() ) :
		$post_query->the_post();
		$team_member = array(
			id => get_the_ID(),
			name => get_field('full_name'),
			title => get_field('title'),
			photo => get_field('photo'),
			description => get_field('description'),
			twitter_url => get_field('twitter_url'),
			facebook_url => get_field('facebook_url')
		);
		?>

	<?php endwhile; }; ?>


<div class="row">
	<div class="col-sm-6 about-box-half">
		<div class="maintain-aspect-r">
			<div class="maintain-aspect-hold box-half dark-bg">
				<div class="ab-text-box">
					<h2><strong><?php echo $team_member['name']; ?></strong></h2>
					<h2><strong class="pink-text"><?php echo $team_member['title']; ?></strong></h2>
				</div>
				<img src="<?php echo $team_member['photo']; ?>" alt="">
			</div>
		</div>
	</div>
	<div class="col-sm-6 about-box-half">
		<div class="maintain-aspect-r">
			<div class="maintain-aspect-hold box-half dark-bg">
				<div class="ab-text-box">
					<h2 >
						<span class="light-text">
						<?php echo $team_member['description']; ?>
						</span>
					</h2>
				</div>
			</div>
		</div>
	</div>

</div>

<div class="row about-box-full">
	<div class="col-sm-3 about-box">
		<div class="maintain-aspect-r">
			<div class="maintain-aspect-hold box download-box">
				<div class="download-text">
					About Me PDF
				</div>
				<div class="download-image">
					<img src="../wp-content/themes/sinclairfox/images/about-us/download-w.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-3 about-box">
		<div class="maintain-aspect-r">
			<div class="maintain-aspect-hold box">
				<div class="contact-text">
					<h2>
						<strong>Get in <br> contact <br> with <br> <span class="pink-text italic-text">Us</span></strong>
					</h2>
					<a href="javascript:void(0)">Find out more</a>
				</div>

			</div>
		</div>
	</div>
	<div class="col-sm-3 about-box">
		<div class="maintain-aspect-r">
			<a target="_blank" href="<?php echo $team_member['twitter_url']; ?>" class="link-rm-default">
				<div class="maintain-aspect-hold box social-box">
					<i class="fa fa-twitter"></i>
				</div>
			</a>
		</div>
	</div>
	<div class="col-sm-3 about-box">
		<div class="maintain-aspect-r">
			<a target="_blank" href="<?php echo $team_member['facebook_url']; ?>" class="link-rm-default">
				<div class="maintain-aspect-hold box social-box">
					<i class="fa fa-facebook"></i>
				</div>
			</a>
		</div>
	</div>
</div>

<section class="about-post about-box-desc">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2>Every day brings new choices.</h2>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur in ex beatae maiores dolore vitae expedita aut! Pariatur alias, hic, earum inventore quisquam animi harum atque, consequuntur dignissimos corporis nostrum officiis vel porro tempore, vero nesciunt maiores voluptatem aliquam exercitationem accusamus commodi ratione laudantium. Quasi earum, alias magni id sit, eaque, tenetur similique velit est dignissimos adipisci. Eos facilis soluta impedit quisquam autem, architecto totam repellendus, nam inventore, dolor molestiae, perferendis dolore hic non laudantium recusandae aut in quo sed ea! Soluta magnam et quibusdam nesciunt amet perspiciatis enim quam rem, provident qui accusantium ut iste illum suscipit esse quaerat saepe porro quae illo accusamus eius, aut fugit autem? Illum nisi minima, laboriosam sapiente delectus aperiam laborum vitae ea, quaerat.
				</p>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur in ex beatae maiores dolore vitae expedita aut! Pariatur alias, hic, earum inventore quisquam animi harum atque, consequuntur dignissimos corporis nostrum officiis vel porro tempore, vero nesciunt maiores voluptatem aliquam exercitationem accusamus commodi ratione laudantium. Quasi earum, alias magni id sit, eaque, tenetur similique velit est dignissimos adipisci. Eos facilis soluta impedit quisquam autem, architecto totam repellendus, nam inventore, dolor molestiae, perferendis dolore hic non laudantium recusandae aut in quo sed ea! Soluta magnam et quibusdam nesciunt amet perspiciatis enim quam rem, provident qui accusantium ut iste illum suscipit esse quaerat saepe porro quae illo accusamus eius, aut fugit autem? Illum nisi minima, laboriosam sapiente delectus aperiam laborum vitae ea, quaerat.
				</p>


			</div>

		</div>
	</div>
</section>
