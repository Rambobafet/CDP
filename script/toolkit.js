jQuery(function ($) {
	$('#mobNavBtn').click(function() {
		if ( $('nav#navigation > ul').hasClass('desktop') ) {
			$('nav#navigation > ul').removeClass('desktop').addClass('mobile');
			$('div#mobNavScn').removeClass('hidden').addClass('mobile');
		}else{
			$('nav#navigation > ul').removeClass('mobile').addClass('desktop');
			$('div#mobNavScn').removeClass('mobile').addClass('hidden');
		}

	});

	$('#mobNavClose').click(function() {
		$('nav#navigation > ul').removeClass('mobile').addClass('desktop');
		$('div#mobNavScn').removeClass('mobile').addClass('hidden');
	});
});