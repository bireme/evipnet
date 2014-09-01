<?php

/**
 * Widget de Sobre o Autor
 * 
 * @author Moacir Moda
 */
class NoticiasWidget extends WP_Widget {
	
	/**
	 * Construtor
	 */
	public function NoticiasWidget() {
		parent::WP_Widget(false, $name = 'Notícias');
	}
	
	/**
	 * Exibição final do Widget (já no sidebar)
	 *
	 * @param array $argumentos Argumentos passados para o widget
	 * @param array $instancia Instância do widget
	 */
	public function widget($argumentos, $instancia) {
		
		query_posts("posts_per_page=5"); ?>

		<div class="widget noticias">
			<h2>Notícias</h2>
			<ul>
				<?php while(have_posts()): the_post(); ?>
					<li>
						<a href="<?= get_permalink(); ?>">
							<?php the_post_thumbnail('homepage-thumb'); ?>
							
							<h3><?php the_category(', '); ?></h3>
							<p class="excerpt"><?php the_title(); ?></p>
							<div class="data"><?php the_date("m-d-Y"); ?></div>
						</a>
						<div style="clear:both"></div>
					</li>	
				<?php endwhile; ?>
			</ul>
		</div>
		<?php wp_reset_query();
	}
	
	/**
	 * Salva os dados do widget no banco de dados
	 *
	 * @param array $nova_instancia Os novos dados do widget (a serem salvos)
	 * @param array $instancia_antiga Os dados antigos do widget
	 * 
	 * @return array $instancia Dados atualizados a serem salvos no banco de dados
	 */
	public function update($nova_instancia, $instancia_antiga) {
		$instancia = array_merge($instancia_antiga, $nova_instancia);
		
		return $instancia;
	}
	
	/**
	 * Formulário para os dados do widget (exibido no painel de controle)
	 *
	 * @param array $instancia Instância do widget
	 */
	public function form($instancia) {
		print "<p>Este widget não possui configurações.</p>";
	}
}

add_action('widgets_init', create_function('', 'return register_widget("NoticiasWidget");'));

?>