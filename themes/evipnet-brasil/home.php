<?php get_header(); ?>

<div class="home">
	<div class="container">
		<div class="left">
			<div class="widget search">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('search') ) {}; ?>
				<div style="clear:both"></div>
			</div>

			<div class="widget produtos">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('produtos') ) {}; ?>
				<div style="clear:both"></div>
			</div>

			<div class="widget">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('mapa') ) {}; ?>
			</div>

			<div class="widget destaques">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sub-produtos') ) {}; ?>
			</div>

		</div>
		
		<div class="right side">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) {}; ?>
		</div>
		<div style="clear:both"></div>
	</div>
</div>

<?php get_footer(); ?>