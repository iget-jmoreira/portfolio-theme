$(function() {
    $('a').bind('click',function(event){
        var $anchor = $(this);
      	$('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top - 70}, 1000,'swing');
    });
});

$("#show_menu").click(function(){
	$(".menu-items").slideToggle(400);
});

$(".menu-items ul li").click(function(){
	if($(window).width() <= 768){	
		$(".menu-items").slideToggle(400);
	}
});

/*
*	Função para esconder modal e elementos internos
*/
$("div.black-back").click(function(){
	$(this).addClass("hidden");
	$('div.template-hidden').hide();
});
/*
*	Função para abrir modal e exibir imagens de um album selecionado
*/
$("div.templates").click(function(){
	if($(this).attr('id')){
		$('div.black-back').removeClass("hidden");
		var name = $(this).attr('id');
		$('div#'+name+'.template-hidden').toggle();
	}
});
/*
*	Função para exibir imagem selecionada em tamanho grande
*/
$(".images-list img").click(function(){
	$("img#currentImg").attr('src', $(this).attr('src'));
	var imgWidth = $("div.template-hidden").width() / 2;
	$("div.template-hidden").css("margin-left", "50%").css("margin-left", "-="+imgWidth);
	$("img#currentImg").fadeIn(2000);
});