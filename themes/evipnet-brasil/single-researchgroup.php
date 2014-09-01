<?php get_header(); ?>

<div class="intern">
	<div class="container">
		
		<div class="left">
			
			<div class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display(); ?></div>
			<div class="content">
				<?php while(have_posts()): the_post(); ?>
					<div class="item">
						<h2><?php the_title(); ?></h2>
						
						<?php if(get_field('document')): ?>
							<div class="downloads"><a target="_blank" href="<?php the_field('document'); ?>">
								<img src="<?= get_stylesheet_directory_uri(); ?>/img/button-baixar-documento.png"></a>
							</div>
						<?php endif; ?>

						<div class="icons">
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-calendar.png"> <?php the_date("d/m/Y à\s H\hi"); ?>
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-autor.png"> <?php the_author(); ?>
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-share.png"> Compartilhar<br>
							<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-tag.png"> <?php the_tags(); ?>
						</div>

						<div style="clear:both"></div>
						<p><?php the_content(); ?></p>

						<h3>Participantes</h3>
						<ul class="participantes">
						<?php foreach(get_field( "participantes" ) as $participante): ?>
							<li>
								<h4><?= $participante->post_title; ?></h4>
								<p>
									<?= the_field('cargo', $participante->ID); ?><br>
									<?= the_field('instituicao', $participante->ID); ?><br>
									<a href="mailto: <?= the_field('email', $participante->ID); ?>" class='contato'>Contato</a>
								</p>
							</li>
						<?php endforeach; ?>
						</ul>
						<div style="clear:both"></div>
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