<?php

$data = json_decode(file_get_contents('http://api.storify.com/v1/stories/storify/testimonials'));

//echo '<img src="'.$data->content->thumbnail.'" width="100" height="100"/>';

print_r($data);

?>