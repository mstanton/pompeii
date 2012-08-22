$(document).ready(function(){

	$('#scrollbar1').tinyscrollbar();	




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
        $('.tab_content').hide();
        var network = $(this).attr('data');
        $('.'+network).show();
        return false;
    });

	/*$('li.tweet').click(function(){
		var tweetnumber = $(this).attr('data');
		//alert(tweetnumber);
		if(tweetnumber === "tweet_1") {
			$('#tweetModalOne').show();
			$('#overlay').show();
		}
		else {
			// do nothing
		}
	});*/








});