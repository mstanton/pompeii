#!/usr/bin/php
<?php
	$file = "feed.rss";

	unlink($file);
	$feed = file_get_contents('http://twitter.com/statuses/user_timeline/elder_pliny.rss');

	$openfile = fopen($file, "w") or die("can't open file");
	fwrite($openfile, $feed);
	fclose($file);
?>