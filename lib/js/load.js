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
        $('.tab_content').hide();
        var network = $(this).attr('data');
        $('.'+network).fadeIn(700);
        return false;
    });


	$('li.tweet').click(function(){
		var tweetnumber = $(this).attr('data');		
		if(tweetnumber == "tweet_2") {
			$('#overlay').fadeIn(1000);
			$('#tweet_2Modal').fadeIn(1500);	
		}
		if(tweetnumber == "tweet_3") {
			$('#overlay').fadeIn(1000);
			$('#tweet_3Modal').fadeIn(1500);	
		}
		if(tweetnumber == "tweet_4") {
			$('#overlay').fadeIn(1000);
			$('#tweet_4Modal').fadeIn(1500);	
		}
		if(tweetnumber == "tweet_6") {
			$('#overlay').fadeIn(1000);
			$('#tweet_6Modal').fadeIn(1500);	
		}
		if(tweetnumber == "tweet_9") {
			$('#overlay').fadeIn(1000);
			$('#tweet_9Modal').fadeIn(1500);	
		}		
		if(tweetnumber == "tweet_16") {
			$('#overlay').fadeIn(1000);
			$('#tweet_16Modal').fadeIn(1500);	
		}
		if(tweetnumber == "tweet_19") {
			$('#overlay').fadeIn(1000);
			$('#tweet_19Modal').fadeIn(1500);	
		}
		if(tweetnumber == "tweet_22") {
			$('#overlay').fadeIn(1000);
			$('#tweet_22Modal').fadeIn(1500);	
		}
		if(tweetnumber == "tweet_25") {
			$('#overlay').fadeIn(1000);
			$('#tweet_25Modal').fadeIn(1500);	
		}
		if(tweetnumber == "tweet_26") {
			$('#overlay').fadeIn(1000);
			$('#tweet_26Modal').fadeIn(1500);	
		}
		else {
			// do nothing
		}
	});

});