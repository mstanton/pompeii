<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Show Latest Tweets Using PHP JQuery Demo</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	
	<script type="text/javascript">
		/*function tweetRender( prospectID )
		{
		 prospectID.delay() .fadeIn() .delay(2000).fadeOut(
					   function(){
						   if(prospectID.next().length > 0)
						   {tweetRender( prospectID.next() );}
						   else
						   {tweetRender( prospectID.siblings(':first'));}
								 
						 }
					 );
		}

		$(function(){
		$('#tweets li').hide();
		tweetRender( $('#tweets li:first') );*/

		});
	</script>
	
	<style type="text/css">
		body{font-family:Arial;color:#000000;font-size:12px;}
		a{color:#000000; font-weight:bold;}
		#wrapper{width:500px; margin:10px auto;}
	</style>
	
</head>

<body>
<div id="wrapper">
	
	<?php
	function latest_tweets(){
	//global $post;
	$doc = new DOMDocument();
	$meta='mrstanton';
	$feed = "http://twitter.com/statuses/user_timeline/$meta.rss"; 
	$doc->load($feed); 

	  $outer = '<ul id="tweets">';
	  $max_tweets = 15;
	  $i = 1;
	  foreach ($doc->getElementsByTagName('item') as $node) {
		$tweet = $node->getElementsByTagName('title')->item(0)->nodeValue;
		//if you want to remove the userid before the tweets then uncomment the next line.
		//$tweet = substr($tweet, stripos($tweet, ':') + 1);   
		$tweet = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', 
			  '<a href="$1">$1</a>', $tweet);
		$tweet = preg_replace("/@([0-9a-zA-Z]+)/", 
			  "<a href=\"http://twitter.com/$1\">@$1</a>", 
			  $tweet);
	 
		$outer .= "<li>". $tweet . "</li>\n";
		
	 
		if($i++ >= $max_tweets) break;
	  }
	   $outer .= "</ul>\n";
	  return "<div class='post'>".$outer."</div>";
	}
	echo latest_tweets();
	?>
</div>
</body>
</html>
