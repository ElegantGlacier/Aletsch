<?php

use ElegantGlacier\ElegantGlacier;
use ElegantGlacier\Router;

$router = new Router();

$router->addRoute('GET', '/blogs/:blogID', function ($blogID) {
    echo "My route is working with blogID => $blogID !";
    exit;
});

$router->matchRoute();

// Render the template.
ElegantGlacier::render('index.twig', [
    'title' => 'Welcome to ElegantGlacier',
    'content' => 'This is a sample page using ElegantGlacier.'
]);
