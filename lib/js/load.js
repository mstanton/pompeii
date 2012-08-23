$(document).ready(function(){

	$('#scrollbar1').tinyscrollbar({
		lockscroll: true,
		sizethumb: 15
	});
	$('#scrollbar2').tinyscrollbar({
		lockscroll: true,
		sizethumb: 15
	});
	$('#scrollbar3').tinyscrollbar({
		lockscroll: true,
		sizethumb: 15
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

        if(network == 'locations') {
        	$('.locations').css('left', 0);
        }

       if(network == 'coverage') {
        	$('.coverage').css('left', 0);
        }

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