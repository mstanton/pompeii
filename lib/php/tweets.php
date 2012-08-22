<?php
  function latest_tweets(){
    //global $post;
    $doc = new DOMDocument();
    $feed = "lib/php/feed.rss"; 
    $doc->load($feed); 

    $outer = '<ul id="tweets">';
    $max_tweets = 10;
    $i = 1;
    foreach ($doc->getElementsByTagName('item') as $node) {
      $tweet = $node->getElementsByTagName('title')->item(0)->nodeValue;
      
      //$tweet = substr($tweet, stripos($tweet, ':') + 1);   // removes the userid before the tweets
      $tweet = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '<a href="$1">$1</a>', $tweet);
      $tweet = preg_replace("/@([0-9a-zA-Z]+)/", "<a href=\"http://twitter.com/$1\">@$1</a>", $tweet);
     
      $outer .= '<li data="tweet_'.$i.'" class="tweet"><p>'. $tweet .'</p></li>';

      if($i++ >= $max_tweets) break;
    }
     $outer .= "</ul>\n";
    return "<div class='post'>".$outer."</div>";
  }
 ?>