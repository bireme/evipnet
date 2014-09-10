$ = jQuery;
$(function(){
	
	// PRODUTOS
	// pega imagens
	var a = $(".widget.produtos li.block img");

	// remove box com imagens
	$(".widget.produtos li.block").each(function(){
		if($(this).find('img').length > 0) {
			$(this).remove();
		}
	});

	// adiciona imagens dentro dos outros boxes
	$(".widget.produtos li.block").each(function(num){
		$(this).html(a[num].outerHTML + $(this).html());
	});

	// SUBPRODUTOS
	// pega imagens
	var a = $(".widget.destaques li.block img");

	// remove box com imagens
	$(".widget.destaques li.block").each(function(){
		if($(this).find('img').length > 0) {
			$(this).remove();
		}
	});

	// adiciona imagens dentro dos outros boxes
	$(".widget.destaques li.block").each(function(num){
		$(this).html(a[num].outerHTML + $(this).html());
	});

});