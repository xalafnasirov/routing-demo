<?php

$request_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;

if ($request_uri === '/blogs/add/' || $request_uri === '/blogs/add') {
	
	$route = '/blogs_add.php';
	
} 
	
else {
	
	$route = '/404.php';
	
}

require __DIR__ . $route;