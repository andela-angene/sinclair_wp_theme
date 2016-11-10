<?php // Load the WordPress library.
require_once( '../../../wp-load.php' ); ?>

<div class="row">
	<div class="col-sm-6 about-box-half">
		<div class="maintain-aspect-r">
			<div class="maintain-aspect-hold box-half dark-bg">
				<div class="ab-text-box">
					<h2>
						<strong>
							<span class="pink-text">3</span> Developers, <span class="pink-text">2</span> Designers, and <span class="pink-text">1</span> person counting the pennies.
						</strong>
					</h2>
				</div>
				<div class="logo-div">
					<img src="<?php bloginfo('template_url'); ?>/images/logo-single.png" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6 about-box-half-e">

		<div class="row">

			<?php
			$args = array(
				'post_type' => 'management_team'
			);
			$team = array();

			$post_query = new WP_Query($args);
			if($post_query->have_posts() ) {
				$post_counter = 0;
				while($post_query->have_posts() ) :
					$post_counter++;
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
					array_push($team, $team_member);

					?>

				<?php endwhile; }; ?>


			<?php
			$team_member = $team[0];
			?>
			<div class="col-sm-6 about-box">
				<div class="maintain-aspect-r">
					<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
							<img src="<?php echo $team_member['photo']; ?>" alt="">
							<div class="text-dark-bg">
								<?php echo $team_member['name']; ?>
							</div>
						</div></a>
				</div>
			</div>

			<?php
			$team_member = $team[1];
			?>
			<div class="col-sm-6 about-box">
				<div class="maintain-aspect-r">
					<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
							<img src="<?php echo $team_member['photo']; ?>" alt="">
							<div class="text-dark-bg">
								<?php echo $team_member['name']; ?>
							</div>
						</div></a>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
			$team_member = $team[2];
			?>
			<div class="col-sm-6 about-box">
				<div class="maintain-aspect-r">
					<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
							<img src="<?php echo $team_member['photo']; ?>" alt="">
							<div class="text-dark-bg">
								<?php echo $team_member['name']; ?>
							</div>
						</div></a>
				</div>
			</div>
			<?php
			$team_member = $team[3];
			?>
			<div class="col-sm-6 about-box">
				<div class="maintain-aspect-r">
					<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
							<img src="<?php echo $team_member['photo']; ?>" alt="">
							<div class="text-dark-bg">
								<?php echo $team_member['name']; ?>
							</div>
						</div></a>
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
					<img src="<?php bloginfo('template_url'); ?>/images/about-us/download-w.jpg" alt="">
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

	<?php
	$team_member = $team[4];
	?>
	<div class="col-sm-3 about-box">
		<div class="maintain-aspect-r">
			<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
					<img src="<?php echo $team_member['photo']; ?>" alt="">
					<div class="text-dark-bg">
						<?php echo $team_member['name']; ?>
					</div>
				</div></a>
		</div>
	</div>

	<?php
	$team_member = $team[5];
	?>
	<div class="col-sm-3 about-box">
		<div class="maintain-aspect-r">
			<a href="javascript:void(0)" onclick="$.loadManagementPerson(<?php echo $team_member['id']; ?>)" class="link-rm-default"><div class="maintain-aspect-hold box dark-box">
					<img src="<?php echo $team_member['photo']; ?>" alt="">
					<div class="text-dark-bg">
						<?php echo $team_member['name']; ?>
					</div>
				</div></a>
		</div>
	</div>
</div>

<?php
$args = array(
	'p' => $_GET['id'],
	'post_type' => 'any'
);

$post_query = new WP_Query($args);
if($post_query->have_posts() ) {
	while($post_query->have_posts() ) :
		$post_query->the_post();
		?>

	<?php endwhile; }; ?>
<section class="about-post about-box-desc">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<h2><?php the_field('management_section_heading'); ?></h2>

				<?php wpautop(the_field('management_section_content')); ?>


			</div>


			<?php if(is_active_sidebar('read-more')){
				dynamic_sidebar('read-more');
			}; ?>


		</div>
	</div>
</section>
