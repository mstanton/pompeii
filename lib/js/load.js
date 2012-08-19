$(document).ready(function(){

	// social/about tabs
	$('.tab a').click(function(){
        $('.tab_content').hide();
        var network = $(this).attr('data');
        $('.'+network).show();

        return false;
    });

	$('li .tweetinfo').click(function(){

		alert('hi friend!');
	});
});