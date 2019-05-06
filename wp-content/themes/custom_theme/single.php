<?php get_header(); ?>
<?php if (have_posts()):
		while (have_posts()):
			the_posts();
			the_content();
		endwhile;
	endif; ?>
<?php fprevious_post_link(); ?>
<?php next_post_link(); ?>
<?php get_footer(); ?>
