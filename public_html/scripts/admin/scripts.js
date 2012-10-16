$(document).ready(function(){
	var el_default = $('#top-left-navi li[class=active]');
	$('#top-left-navi li').hover(function(){
		
		var anhor = $(this).children('a');
		$('.top-sub-navi-content.active').removeClass('active');
		$('.top-sub-navi-content#'+$(anhor).attr('sub')).addClass('active');
	});
	
	$('#top-navi').hover(function(){}, function(){
		$('.top-sub-navi-content.active').removeClass('active');
		$('.top-sub-navi-content#'+$(el_default).attr('sub')).addClass('active');
	});
});