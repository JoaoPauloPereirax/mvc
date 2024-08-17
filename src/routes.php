<?php
use core\Router;

$router = new Router();

//HOMECONTROLLER
$router->get('/', 'HomeController@index');

//USERS CONTROLLER
$router->get('/new', 'UsersController@add');
$router->get('/user/{id}/edit', 'UsersController@edit');
$router->get('/user/{id}/del', 'UsersController@del');

$router->post('/new', 'UsersController@addAction');
$router->post('/user/{id}/edit', 'UsersController@editAction');


