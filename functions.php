<?php

require_once __DIR__ . '/vendor/autoload.php';

use ElegantGlacier\ElegantGlacier;
use ElegantGlacier\Router;

ElegantGlacier::init(__DIR__); 


$router = new Router();

// Define routes
$router->addRoute('GET', '/', 'HomeController@index');
$router->addRoute('GET', '/posts', 'PostController@index');
$router->addRoute('GET', '/posts/:id', 'PostController@show');
$router->addRoute('GET', '/pages', 'PageController@index');
$router->addRoute('GET',  '/pages/:id', 'PageController@show');



// Handle routing
add_action('template_redirect', function() use ($router) {
    $router->matchClassRoute();
});


// Register a custom post type
ElegantGlacier::PostType('portfolio');