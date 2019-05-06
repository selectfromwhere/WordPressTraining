<?php get_header(); ?>
/**
 * Template Name: Custom_Template
 */
<?php if (have_posts()):
		while (have_posts()):
			the_posts();
			the_content();
		endwhile;
	endif; ?>
<?php get_footer(); ?>
