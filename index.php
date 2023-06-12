<?php

// Routing
$url = isset($_GET['url']) ? $_GET['url'] : '/';
$routes = [
    '/' => 'HomeController@index',
];

if (isset($routes[$url])) {
    $routeParts = explode('@', $routes[$url]);
    $controllerName = $routeParts[0];
    $methodName = $routeParts[1];

    // Load the corresponding controller file
    require_once 'controllers/' . $controllerName . '.php';

    // Create an instance of the controller
    $controller = new $controllerName();

    // Call the corresponding method
    $controller->$methodName();
} else {
    // Page not found
    echo '404 Not Found';
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
