<?php
function getStory() {
  $data = json_decode(file_get_contents('http://api.storify.com/v1/stories/Elder_Pliny/a-day-in-pompeii'));
  //echo '<br/><img src="'.$data->content->thumbnail.'" width="200"/><br/><br/>';


  foreach ( $data->content->elements as $elements )
  	{
      	foreach ( $elements->data as $entry) {
      		$text = $entry->text;	

          $text = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '<a href="$1" target="_blank">$1</a>',$text);
          $text = preg_replace("/@([0-9a-zA-Z]+)/", "<a href=\"http://twitter.com/$1\" target=\"_blank\">@$1</a><br/><br/>", $text);

          echo '<p>'.$text.'</p>';
      	}
  	}
}



function displayEntry() {


}


?>