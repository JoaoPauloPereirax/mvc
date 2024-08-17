<?php
use core\Router;

$router = new Router();

//HOMECONTROLLER
$router->get('/', 'HomeController@index');

//USERS CONTROLLER
$router->get('/new', 'UsersController@add');
$router->post('/new', 'UsersController@addAction');
