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