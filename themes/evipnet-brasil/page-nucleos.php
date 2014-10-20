<?php
// Template name: Núcleos de Evidência

if(isset($_GET['mode']) and $_GET['mode'] == 'json') {

	$output = array();

	$posts = get_posts("post_type=nucleo&posts_per_page=-1");
	foreach($posts as $post) {
		
		$item = array();
		$item['name'] = $post->post_title;
		$item['id'] = $post->ID;
		$item['latitude'] = (float) get_field('latitude', $post->ID);
		$item['longitude'] = (float) get_field('longitude', $post->ID);
		$item['permalink'] = get_the_permalink($post->ID);

		$output[] = $item;
	}
	
	print json_encode($output, JSON_PRETTY_PRINT);
	die;
}

get_header(); ?>

<div class="intern nucleos">
	<div class="container">
		
		<div class="left">
			
			<h2>Núcleos de Evidência</h2>
			<div class="content">
				<div id="mapa" style="height: 500px; width: 700px"></div>
 
		        <!-- Maps API Javascript -->
		        <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBHSn4suUOIa8aajAqlat9lw52nTjcL6Es&sensor=false"></script>
		        <script src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/infobox/1.1.13/src/infobox.js"></script>
				<script src="<?= get_stylesheet_directory_uri(); ?>/js/mapa.js"></script>
			</div>

		</div>

		<div class="right side">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) {}; ?>
		</div>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>


?>