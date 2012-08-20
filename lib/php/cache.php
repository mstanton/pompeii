<?php
	$file = "feed.rss";
	$feed = file_get_contents('http://twitter.com/statuses/user_timeline/mrstanton.rss');

	$openfile = fopen($file, "w") or die("can't open file");

	fwrite($openfile, $feed);

	fclose($file);
?>