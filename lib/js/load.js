$(document).ready(function(){


	$('#link_credit').click(function(){
		$
		$('#overlay').fadeIn(1000);
		$('#creditsModal').fadeIn(2000);

		return false;
	});




	$('.close').click(function(){
		$('.modal').fadeOut(1000);
		$('#overlay').fadeOut(2000);
	});

	$('#overlay').click(function(){
		$('.modal').fadeOut(1000);
		$(this).fadeOut(2000);
	});


	// social/about tabs
	$('.tab a').click(function(){
        $('.tab').removeClass('active');
        $(this).parent().addClass('active');
        $('.tab_content').hide();
        var network = $(this).attr('data');
        $('.'+network).fadeIn(700);
        return false;
    });
});