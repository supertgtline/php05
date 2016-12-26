<?php
$images = array('jump', 'dance', 'money', 'cry', 'hello');
$i = rand(0, count($images)-1);
$selectedImage = "../smiley/{$images[$i]}.gif";
?>