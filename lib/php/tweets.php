<?php
  function latest_tweets(){
    //global $post;
    $doc = new DOMDocument();
    $feed = "lib/php/feed.rss"; 
    $doc->load($feed); 

    $outer = '<ul id="tweets">';
    $max_tweets = 30;
    $i = 1;
    foreach ($doc->getElementsByTagName('item') as $node) {
      $tweet = $node->getElementsByTagName('title')->item(0)->nodeValue;
      $link = $node->getElementsByTagName('link')->item(0)->nodeValue;
      
      $tweet = substr($tweet, stripos($tweet, ':') + 1);   // removes the userid before the tweets
      $tweet = preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.]*(\?\S+)?)?)?)@', '<a href="$1">$1</a>', $tweet);
      $tweet = preg_replace("/@([0-9a-zA-Z]+)/", "<a href=\"http://twitter.com/$1\">@$1</a>", $tweet);
     
      $outer .= '<li data="tweet_'.$i.'" class="tweet"><p>'. $tweet .'</p><p style="padding:0 0 7px 0;"><a target="_blank" href="'.$link.'">reply</a></p><hr/></li>';

      if($i++ >= $max_tweets) break;
    }
     $outer .= "</ul>\n";
    return "<div class='post'>".$outer."</div>";
  }
 ?>