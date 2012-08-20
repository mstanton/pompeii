$(document).ready(function(){

	// social/about tabs
	$('.tab a').click(function(){
        $('.tab_content').hide();
        var network = $(this).attr('data');
        $('.'+network).show();

        return false;
    });

	$('li.tweet').click(function(){
		var tweetnumber = $(this).attr('data');
		//alert(tweetnumber);
		if(tweetnumber === "tweet_1") {
			$('#tweetModalOne').show();
			$('#overlay').show();
		}
		else {
			// do nothing
		}
	});

	$('#tweetClose').click(function(){

		$('.tweet_modal').hide();
		$('#overlay').hide();
	});



	// JUMP SLIDER
	//grab the width and calculate left value
	var item_width = $('#slides li').outerWidth(); 
	var left_value = item_width * (-1); 
        
    //move the last item before first item, just in case user click prev button
	$('#slides li:first').before($('#slides li:last'));
	
	//set the default item to the correct position 
	$('#slides ul').css({'left' : left_value});

    //if user clicked on prev button
	$('#prev').click(function() {

		//get the right position            
		var left_indent = parseInt($('#slides ul').css('left')) + item_width;

		//slide the item            
		$('#slides ul:not(:animated)').animate({'left' : left_indent}, 200,function(){    

            //move the last item and put it as first item            	
			$('#slides li:first').before($('#slides li:last'));           

			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});           
		return false; 
	});

 
    //if user clicked on next button
	$('#next').click(function() {
		
		//get the right position
		var left_indent = parseInt($('#slides ul').css('left')) - item_width;
		
		//slide the item
		$('#slides ul:not(:animated)').animate({'left' : left_indent}, 200, function () {
            
            //move the first item and put it as last item
			$('#slides li:last').after($('#slides li:first'));                 	
			
			//set the default item to correct position
			$('#slides ul').css({'left' : left_value});
		
		});
		         
		return false;
		
	});        



});