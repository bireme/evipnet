<?php get_header(); ?>

<div class="intern">
	<div class="container">
		
		<div class="left">
			
			<div class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display(); ?></div>
			<div class="content">
				<?php while(have_posts()): the_post(); ?>
					<div class="item">
						<p><?php the_content(); ?></p>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="widget destaques">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sub-produtos') ) {}; ?>
			</div>

		</div>

		<div class="right side">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) {}; ?>
		</div>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>