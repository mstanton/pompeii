<?php
function getStory() {
$data = json_decode(file_get_contents('http://api.storify.com/v1/stories/mrstanton/pompeii-storify'));
echo '<img src="'.$data->content->thumbnail.'" width="100" height="100"/>';


}
//print_r($data);

?>