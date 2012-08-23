<?php
function getStory() {
  $data = json_decode(file_get_contents('http://api.storify.com/v1/stories/Elder_Pliny/a-day-in-pompeii'));
  echo '<img src="'.$data->content->thumbnail.'" width="50" height="50"/><br/>';


  foreach ( $data->content->elements as $elements )
  	{
      	foreach ( $elements->data as $entry) {
      		$text = $entry->text;	
      		processString($text);



      	}
  	}
}

function processString($s) {
   $s = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '<a href="$1">$1</a>',$s);
   $s = preg_replace("/@([0-9a-zA-Z]+)/", "<a href=\"http://twitter.com/$1\">@$1</a><br/><br/>", $s);
  
    echo $s;

   return $s;
}


?>