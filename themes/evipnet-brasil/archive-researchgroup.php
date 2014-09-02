<?php get_header(); ?>

<div class="intern researchs">
	<div class="container">

		<div class="left">
			<div class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display(); ?></div>

			<?php while(have_posts()): the_post(); ?>
				<div class="item">
					<h2><?php the_title(); ?></h2>
					<?= the_post_thumbnail('research-thumb'); ?>
					<p><?php the_excerpt(); ?></p>

					<div class="icons">
						<a href="mailto:<?php the_field('email'); ?>"><img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-mail.png"> Contactar Grupo de Pesquisa</a>
						<a href="<?php the_permalink(); ?>"><img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-folder.png"> Ver Síntese de Evidência</a>
					</div>
				</div>

			<?php endwhile; ?>
		</div>

		<div class="right side">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) {}; ?>
		</div>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>