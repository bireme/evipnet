<?php

/**
 * Widget de Sobre o Autor
 * 
 * @author Moacir Moda
 */
class SearchWidget extends WP_Widget {
	
	/**
	 * Construtor
	 */
	public function SearchWidget() {
		parent::WP_Widget(false, $name = 'Busca EVIPNet');
	}
	
	/**
	 * Exibição final do Widget (já no sidebar)
	 *
	 * @param array $argumentos Argumentos passados para o widget
	 * @param array $instancia Instância do widget
	 */
	public function widget($argumentos, $instancia) { ?>

		<script>
		function executeSearch(){
            var source = $('input:radio[name=collection]:checked').val();
            $('#searchForm').attr("action", $('#searchForm').attr("action") + "/search/" + source);

            return true;
        }

        
        function evipnet_search_submit() {
        	$("#searchForm").submit();
        }
		</script>

		<h2>Pesquisa na EVIPNet Brasil</h2>

		<form action="http://pesquisa.bvsalud.org/evipnetbr/" name="search" method="get" id="searchForm">
			<input type="text" name="q">
			<a href="javascript:evipnet_search_submit()" id="search-submit"><img src="<?= get_stylesheet_directory_uri(); ?>/img/search-button.jpg"></a>
			<div style="clear:both"></div>

			<!--ul class="radio">
				<li><a href="#"><input type="radio" name="collection" value="evipnet" checked="true"> Fontes BVS</a></li>
				<li><a href="#"><input type="radio" name="collection" value="evipnet-hse"> Health Systems Evidence</a></li>
			</ul-->
			<ul class="links" style="margin-left:418px;">
				<li><a href="http://pesquisa.bvsalud.org/evipnetbr/advanced.php?lang=pt">Busca Avançada</a></li>
				<!--li><a href="#">Ajuda</a></li-->
			</ul>
		</form>
		<div style="clear:both"></div>
	<?php }
	
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

add_action('widgets_init', create_function('', 'return register_widget("SearchWidget");'));

?>