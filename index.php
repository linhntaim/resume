<?php
define('ROOT_PATH', __DIR__);
define('REL_PATH', str_replace('index.php', '', $_SERVER['PHP_SELF']));

function url($relativePath) {
	return str_replace('\\', '/', REL_PATH . $relativePath);
}

function fullUrl($relativePath) {
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
    return $uri . url($relativePath);
}

function view() {
	$requestSegments = explode('/', str_replace(REL_PATH, '', $_SERVER['REQUEST_URI']));
	switch($requestSegments[0]) {
		case 'vi':
			include 'vi.php';
			exit(0);
		case 'en':
		default:
			include 'en.php';
			exit(0);
	}
}

view();