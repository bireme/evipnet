<?php get_header(); ?>

<div class="intern">
	<div class="container">
		
		<div class="left">
			
			<div class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display(); ?></div>
			<div class="content">
				<?php while(have_posts()): the_post(); ?>
					<div class="item">
						<h2><?php the_title(); ?></h2>
						
						<div class="icons">
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-calendar.png"> <?php the_date("d/m/Y à\s H\hi"); ?>
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-autor.png"> <?php the_author(); ?>
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-share.png"> Compartilhar<br>
							<?php if(has_tag()) : ?><img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-tag.png"> <?php the_tags(); ?><?php endif; ?>
						</div>

						<div style="clear:both"></div>
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>
			</div>
		</div>

		<div class="right side">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) {}; ?>
		</div>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>