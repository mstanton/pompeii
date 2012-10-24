$(document).ready(function(){


	$('#link_credit').click(function(){
		$
		$('#overlay').fadeTo('normal', 0.7);
		$('#creditsModal').fadeIn(1500);

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


	// *************************************************************** 
	// 	STORIFY PAGING	
	// ***************************************************************

	$("#coverage_content").load("lib/php/storify.php?page=1");
      var url_string_next = "<a id='next_page' href='javascript:void(0);'>Next Page &raquo;</a><br />";
      var url_string_prev = "<a id='prev_page' href='javascript:void(0);'>&laquo; Previous Page</a><br />";
      function prev_page() {
        $("#coverage_content").load("lib/php/storify.php?page=1");
        $(".coverage_buttons").html(url_string_next);
        $("#next_page").click(function() {
          next_page();  
        });
      }
      
      function next_page() {
        $("#coverage_content").load("lib/php/storify.php?page=2");
        $(".coverage_buttons").html(url_string_prev);
        $("#prev_page").click(function() {
          prev_page();  
        });
      }

      $.ajax({
        url: 'lib/php/storify.php?page=2',
        success: function(data) {
          if(data != "empty"){
            $(".coverage_buttons").html(url_string_next);
            $("#next_page").click(function() {
              next_page();
            });
          }
        }
      });

    /* *************************************************************** */



});