<?php
ini_set('display_errors', '1');
require "router.php";

route('/', function(){
	return "Hello, it worked";
});

route('/about', function(){
	return "About us worked too";
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);