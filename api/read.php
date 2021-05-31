<?php
//headers
header('Access-Control-Allow-Origin:*');
header('Content-Type : application/json');

//initializing our api
include_once('../core/initialize.php');

//instatiate post.

$post = new Post($db);

//blog post query;
?>