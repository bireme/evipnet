<?php 

get_header(); 
$tipos = array('youtube', 'flickr', 'vimeo-square', 'instagram', 'picasa', 'pinterest', 'google-plus', 'local');
?>

<div class="intern">
	<div class="container">
		
		<div class="left">
			
			<div class="breadcrumb"><?php if(function_exists('bcn_display')) bcn_display(); ?></div>
			<div class="content">
				<?php while(have_posts()): the_post(); ?>
					
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

					<div class="item">
						
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_title(); ?>
							<?php foreach($current_tipos as $tipo) print '<span class="fa fa-'.$tipo.'"></span> '; ?> 
						</a></h2>
						
						<div class="icons">
							<span class="fa fa-calendar"></span> <?php the_date("d/m/Y à\s H\hi"); ?>
							<span class="fa fa-user"></span> <?php the_author(); ?>
							<span class="fa fa-share-alt"></span> Compartilhar<br>
							<?php if(has_tag()) : ?><span class="fa fa-tag"></span> <?php the_tags(); ?><?php endif; ?>
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