<?php
// Template Name: Galeria Multimídia
get_header(); ?>

<div class="intern gallery">
	<div class="container">
		
		<div class="left">
			
			<h2>Galeria Multimídia</h2>
			<div class="content">

				<div class="widget primario">
					<?php 
					query_posts("destaque_primario=1&posts_per_page=1");
					while(have_posts()): the_post(); 
					?>
						<div class="item">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('destaque-primario-thumb'); ?>
								<h3><?php the_title(); ?></h3>
							</a>
							<p><?php the_excerpt(); ?></p>
						</div>
						<div style="clear:both"></div>
					<?php endwhile; ?>
				</div>
				<div class="widget secundario">

					<?php 
					query_posts("destaque_secundario=2&posts_per_page=6");
					while(have_posts()): the_post(); 
					?>
						<div class="item">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('destaque-secundario-thumb'); ?>
								<h3><?php the_title(); ?></h3>
							</a>
							<p><?php echo substr(get_the_excerpt(), 0,90); ?> [...]</p>
						</div>
					<?php endwhile; ?>
					<div style="clear:both"></div>

				</div>
			</div>

		</div>

		<div class="right side">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) {}; ?>
		</div>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>