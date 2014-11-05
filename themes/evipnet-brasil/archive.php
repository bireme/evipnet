<?php get_header(); ?>

<div class="intern tipos">
	<div class="container">

		<div class="left">
			<div class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display(); ?></div>

			<?php while(have_posts()): the_post(); ?>
				<div class="item">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?= the_post_thumbnail('research-thumb'); ?>
					<p><?php the_excerpt(); ?></p>

					<div class="icons">
						<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-autor.png"> <?php the_author_link(); ?>
						<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-share.png"> Compartilhar
					</div>

					<div style="clear:both"></div>
				</div>

			<?php endwhile; ?>
			
			<?php kriesi_pagination(); ?>
		</div>


		<div class="right side">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) {}; ?>
		</div>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>