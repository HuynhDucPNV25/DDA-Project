<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    URL_ROOT. URL_SUB .'/HomePage' =>  APP_ROOT. '/Controllers/HomePage/HomePage.php',
    URL_ROOT . URL_SUB . '/' =>  APP_ROOT . '/Controllers/HomePage/HomePage.php',
    URL_ROOT. URL_SUB .'/Register' =>  APP_ROOT. '/Controllers/Register/Register.php',
    URL_ROOT . URL_SUB . '/Login' =>  APP_ROOT . '/Controllers/Register/Register.php',
    URL_ROOT . URL_SUB . '/Best seller' =>  APP_ROOT . '/Controllers/BestSaller/BestSeller.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'Views/Errors/404.php';
   die();
}
