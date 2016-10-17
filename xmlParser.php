<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

$languages = simplexml_load_file("https://www.nasa.gov/rss/dyn/lg_image_of_the_day.rss");

var_dump($languages);

?>