<?php get_header(); ?>

<div class="intern">
	<div class="container">
		<?php while(have_posts()): the_post(); ?>

		<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>