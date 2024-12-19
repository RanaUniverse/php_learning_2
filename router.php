<?php
// Router for PHP's built-in server
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Route requests to the correct file
if ($uri === '/' || $uri === '/index.php') {
    require 'index.php';
} elseif ($uri === '/about') {
    require 'about.html';
} elseif ($uri === '/help') {
    require 'help.html';
} else {
    // Handle 404
    http_response_code(404);
    echo "<h1>404 - Page Not Found</h1>";
}
