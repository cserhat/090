<?php

require ('../App/Autoloader.php') ;
require ('../App/Views/includes/header.php');

App\Autoloader::register();

$router = new App\Routes\Router($_GET['url']);
$controller = new App\Controllers\Controller;

$router->get('', function(){require '../App/Views/home.php';});
$router->get('/home', function(){require '../App/Views/home.php';});
$router->get('/article/:id', function($id){require '../App/Views/article.php'; });
$router->get('/nouvelle-article', function(){require '../App/Views/add-new-post.php';});
$router->post('/nouvelle-article', function(){require '../App/Views/add-new-post.php';});

$router->run();
