<?php
require_once ('common.php');

$titles = new parser();
$conn = new db('localhost', 'root', 'kongamato', 'nasa');
$conn->putIntoDb($titles->parsedData);