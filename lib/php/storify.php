<?php
  $page = $_GET['page'];
  $data = json_decode(file_get_contents('http://api.storify.com/v1/stories/Elder_Pliny/a-day-in-pompeii?per_page=50&page='.$page));
  //echo '<br/><img src="'.$data->content->thumbnail.'" width="200"/><br/><br/>';
  if($data->content->elements == NULL) {
	  echo "empty";
	  break;
  }
  $outer = '<ul id="coverage">';

  foreach ( $data->content->elements as $elements )
  	{
		$outer .= '<li class="tweet">';
		
		$image = $elements->attribution->thumbnail;
		$user_name = $elements->attribution->username;
		$date = strtotime($elements->posted_at);
		$date_text = parseTwitterDate($date);
		
      	foreach ( $elements->data as $entry) {
      	  $text = $entry->text;	
		  
          $text = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '<a href="$1" target="_blank">$1</a>',$text);
		  $text = preg_replace('/\B\@([a-zA-Z0-9_]{1,20})/', '<a href="http://twitter.com/$1" target="_blank">$0</a>', $text);
         // $text = preg_replace("/@([0-9a-zA-Z]+)/", "<a href=\"http://twitter.com/$1\" target=\"_blank\">@$1</a><br/><br/>", $text);
			
		  $outer .= '<img style="float:left; margin:10px 10px 10px 0;" src="'. $image .'" /><div style="width:170px; float:left;"><p><a style="font-size:13px; line-height:24px;" href="http://twitter.com/'.$user_name.'" target="_blank">@'.$user_name.'</a><br />'. $text .'<br /><br />' . $date_text . '</p></div><div class="clear"></div>';
          //echo '<p>'.$text.'</p><br /><hr/><br />';
      	}
		$outer .= '<hr/></li>';
  	}
	
	$outer .= "</ul>\n";
	
	
	
	echo $outer;



function parseTwitterDate($tdate) {
    $user_date = strtotime("now");
    $diff = floor(($user_date - $tdate));
    if ($diff <= 1) {return "just now";}
    if ($diff < 20) {return $diff . " seconds ago";}
    if ($diff < 40) {return "half a minute ago";}
    if ($diff < 60) {return "less than a minute ago";}
    if ($diff <= 90) {return "one minute ago";}
    if ($diff <= 3540) {return round($diff / 60) . " minutes ago";}
    if ($diff <= 5400) {return "1 hour ago";}
    if ($diff <= 86400) {return round($diff / 3600) . " hours ago";}
    if ($diff <= 129600) {return "1 day ago";}
    if ($diff < 604800) {return round($diff / 86400) . " days ago";}
    if ($diff <= 777600) {return "1 week ago";}
    return "on " . date("F jS Y H:i:s", $tdate);
}



?>