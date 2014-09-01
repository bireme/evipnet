<?php get_header(); ?>

<div class="home">
	<div class="container">
		<div class="left">
			<div class="widget search">
				<h2>Pesquisa na EVIPNet Brasil</h2>
				<form action="">
					<input type="text" name="q">
					<a href="#" id="search-submit"><img src="<?= get_stylesheet_directory_uri(); ?>/img/search-button.jpg"></a>
					<div style="clear:both"></div>

					<ul class="radio">
						<li><a href="#"><input type="radio"> Fontes BVS</a></li>
						<li><a href="#"><input type="radio"> Health Systems Evidence</a></li>
					</ul>
					<ul class="links">
						<li><a href="#">Busca Avançaca</a></li>
						<li><a href="#">Ajuda</a></li>
					</ul>
				</form>
				<div style="clear:both"></div>
			</div>

			<div class="widget">
				<img src="<?= get_stylesheet_directory_uri(); ?>/img/item2.jpg">
			</div>

			<div class="widget">
				<img src="<?= get_stylesheet_directory_uri(); ?>/img/item3.jpg">
			</div>

			<div class="widget destaques">
				<ul>
					<li>
						<img src="http://placehold.it/230x100">
						<h3>Prioridade de Saúde</h3>
						<ul>
							<li><a href="#">Mortalidade Perinatal</a></li>
							<li><a href="#">Mortalidade Materna</a></li>
							<li><a href="#">Uso de Crack</a></li>
							<li><a href="#">Nutrição e Micronutrientes</a></li>
						</ul>
					</li>
					<li>
						<img src="http://placehold.it/230x100">
						<h3>Capacitação</h3>
						<ul>
							<li><a href="#">Mortalidade Perinatal</a></li>
							<li><a href="#">Mortalidade Materna</a></li>
							<li><a href="#">Uso de Crack</a></li>
							<li><a href="#">Nutrição e Micronutrientes</a></li>
						</ul>
					</li>
					<li>
						<img src="http://placehold.it/230x100">
						<h3>Recursos de Informação</h3>
						<ul>
							<li><a href="#">Mortalidade Perinatal</a></li>
							<li><a href="#">Mortalidade Materna</a></li>
							<li><a href="#">Uso de Crack</a></li>
							<li><a href="#">Nutrição e Micronutrientes</a></li>
						</ul>
					</li>

				</ul>
			</div>

		</div>
		
		<div class="right side">
			
			<div class="widget destaques">destaques</div>
			<div class="widget noticias">
				<h2>Notícias</h2>
				<ul>
					<li>
						<a href="#">
							<img src="http://placehold.it/90x90">
							<h3>Espirito Santo</h3>
							<p class="excerpt">Evidência Científica na qualidade do gestor é apresentada no CONASEMS 2014</p>
							<div class="data">24/07/2014</div>
						</a>
						<div style="clear:both"></div>
					</li>	
					<li>
						<a href="#">
							<img src="http://placehold.it/90x90">
							<h3>Espirito Santo</h3>
							<p class="excerpt">Evidência Científica na qualidade do gestor é apresentada no CONASEMS 2014</p>
							<div class="data">24/07/2014</div>
						</a>
						<div style="clear:both"></div>
					</li>	
					<li>
						<a href="#">
							<img src="http://placehold.it/90x90">
							<h3>Espirito Santo</h3>
							<p class="excerpt">Evidência Científica na qualidade do gestor é apresentada no CONASEMS 2014</p>
							<div class="data">24/07/2014</div>
						</a>
						<div style="clear:both"></div>
					</li>	
				</ul>

			</div>
		</div>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>