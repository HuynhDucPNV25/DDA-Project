<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$routes = [
    URL_ROOT. URL_SUB .'/' =>  APP_ROOT. '/Controllers/HomePage/HomePage.php',
    '/post' => 'controllers/post/post.controller.php',
    '/project' => 'controllers/project/project.controller.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
   http_response_code(404);
   require 'views/errors/404.php';
   die();
}
