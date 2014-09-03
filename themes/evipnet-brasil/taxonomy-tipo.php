<?php get_header(); 

$tipos = array('youtube', 'flickr', 'vimeo-square', 'instagram', 'picasa', 'pinterest', 'google-plus', 'local');
?>

<div class="intern tipos">
	<div class="container">

		<div class="left">
			<div class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display(); ?></div>

			<?php while(have_posts()): the_post(); ?>
				<div class="item">

					<?php 
					$current_tipos = array();
					foreach(get_the_terms(get_the_ID(), 'tipo') as $tipo){
						if(in_array($tipo->slug, $tipos)) {
							if($tipo->slug == "local") {
								$current_tipos[] = "wordpress";
							} else {
								$current_tipos[] = $tipo->slug;
							}
						} 
					}
					?>

					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_title(); ?>
						<?php foreach($current_tipos as $tipo) print '<span class="fa fa-'.$tipo.'"></span> '; ?> 
					</a></h2>

					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?= the_post_thumbnail('research-thumb'); ?></a>
					<p><?php the_excerpt(); ?></p>

					<div class="icons">
						<span class="fa fa-user"></span> <?php the_author_link(); ?>
						<span class="fa fa-share-alt"></span> Compartilhar
					</div>

					<div style="clear:both"></div>
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