<?php

$routes = [];

function route($action, $callback){

	global $routes;

	$routes[$action] = $callback;

	$action = trim($action, '/');

}

function dispatch($action){

	global $routes;

	$callback = $routes[$action];

	echo call_user_func($callback);

}