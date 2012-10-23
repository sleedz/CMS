String.prototype.escapeDiacritics = function()
{
    return this.replace(/ą/g, 'a').replace(/Ą/g, 'a')
        .replace(/ć/g, 'c').replace(/Ć/g, 'c')
        .replace(/ę/g, 'e').replace(/Ę/g, 'e')
        .replace(/ł/g, 'l').replace(/Ł/g, 'l')
        .replace(/ń/g, 'n').replace(/Ń/g, 'n')
        .replace(/ó/g, 'o').replace(/Ó/g, 'o')
        .replace(/ś/g, 's').replace(/Ś/g, 's')
        .replace(/ż/g, 'z').replace(/Ż/g, 'z')
        .replace(/ź/g, 'z').replace(/Ź/g, 'u')
        .replace(/\s/g, '_').toLowerCase();
}

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

	$('#select-content-element').change(function() {
		var selected = $(this).find(':selected');
		console.log();
	});

	$('#section-box-open').fancybox({
		content: $('#section-box-content')
	});

	$('.section-select').click(function() { 
		$('#section-holder').val($(this).attr('href'));
		$('#section-box-open').val($(this).text());
		$.fancybox.close();

		return false;
	});

	$('#category-parent-box').fancybox({
		content: $('#category-parent-box-content')
	});

	$('.category-parent-select').click(function() { 
		$('#category-parent-holder').val($(this).attr('href'));
		$('#category-parent-box').val($(this).text());
		$.fancybox.close();

		return false;
	});

	$('#category-title').keyup(function() {
		$('#category-url').val($(this).val().escapeDiacritics());
	});

});