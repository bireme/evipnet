<?php get_header(); ?>

<div class="home">
	<div class="container">
		<div class="left">
			<div class="widget search">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('search') ) {}; ?>

				<!-- <h2>Pesquisa na EVIPNet Brasil</h2>
				<form action="">
					<input type="text" name="q">
					<a href="#" id="search-submit"><img src="<?= get_stylesheet_directory_uri(); ?>/img/search-button.jpg"></a>
					<div style="clear:both"></div>

					<ul class="radio">
						<li><a href="#"><input type="radio"> Fontes BVS</a></li>
						<li><a href="#"><input type="radio"> Health Systems Evidence</a></li>
					</ul>
					<ul class="links">
						<li><a href="#">Busca Avançada</a></li>
						<li><a href="#">Ajuda</a></li>
					</ul>
				</form>
				<div style="clear:both"></div> -->
			</div>

			<div class="widget produtos">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('produtos') ) {}; ?>

				<!-- <ul>
					<li class="block">
						<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-recursos-metodologicos.png">
						<h3>Recursos Metodológicos</h3>
						<ul>
							<li><a href="#">Ferramenta SUPPORT</a></li>
							<li><a href="#">Wiki para Síntese de Evidências</a></li>
							<li><a href="#">Relatório Anual 2013</a></li>
							<li><a href="#">EVIPNet na prática</a></li>
						</ul>
					</li>
					<li class="block">
						<img src="<?= get_stylesheet_directory_uri(); ?>/img/icon-produtos.png">						
						<h3>Síntese de Evidências para Políticas de Saúde</h3>
						<ul>
							<li><a href="#">Redução de Mortalidade Perinatal</a></li>
							<li><a href="#">Prevenção e controle da pressão arterial</a></li>
							<li><a href="#">Prevenção de dengue no espaço urbano</a></li>
						</ul>
					</li>
				</ul>
				<div style="clear:both"></div> -->
			</div>

			<div class="widget">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('mapa') ) {}; ?>
				<!-- <img src="<?= get_stylesheet_directory_uri(); ?>/img/item3.jpg"> -->
			</div>

			<div class="widget destaques">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sub-produtos') ) {}; ?>
				<!-- <ul>
					<li class="block">
						<img src="http://placehold.it/230x100">
						<h3>Prioridade de Saúde</h3>
						<ul>
							<li><a href="#">Mortalidade Perinatal</a></li>
							<li><a href="#">Mortalidade Materna</a></li>
							<li><a href="#">Uso de Crack</a></li>
							<li><a href="#">Nutrição e Micronutrientes</a></li>
						</ul>
					</li>
					<li class="block">
						<img src="http://placehold.it/230x100">
						<h3>Capacitação</h3>
						<ul>
							<li><a href="#">Mortalidade Perinatal</a></li>
							<li><a href="#">Mortalidade Materna</a></li>
							<li><a href="#">Uso de Crack</a></li>
							<li><a href="#">Nutrição e Micronutrientes</a></li>
						</ul>
					</li>
					<li class="block">
						<img src="http://placehold.it/230x100">
						<h3>Recursos de Informação</h3>
						<ul>
							<li><a href="#">Mortalidade Perinatal</a></li>
							<li><a href="#">Mortalidade Materna</a></li>
							<li><a href="#">Uso de Crack</a></li>
							<li><a href="#">Nutrição e Micronutrientes</a></li>
						</ul>
					</li>
				</ul> -->
			</div>

		</div>
		
		<div class="right side">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) {}; ?>
		</div>
	</div>
	<div style="clear:both"></div>
</div>

<?php get_footer(); ?>