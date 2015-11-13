$(function() {
    $('a').bind('click',function(event){
        var $anchor = $(this);
        console.log($($anchor.attr('href')).offset().top);
      	$('html, body').stop().animate({scrollTop: $($anchor.attr('href')).offset().top - 90}, 1000,'swing');
    });
});