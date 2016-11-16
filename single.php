<?php get_header(); ?>


<?php
	while (have_posts()): the_post();
	if(get_post_type() == 'post'){
		get_template_part('template-parts/content', 'post');
	}
		if(get_post_type() == 'practice_post'){
			get_template_part('template-parts/content', 'practice');
		}


	endwhile;
?>


<?php get_footer(); ?>

