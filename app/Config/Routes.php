<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get('/login', 'Home::login',['filter'=> 'noauth']);
$routes->get('/signup', 'Home::signup',['filter'=> 'noauth']);
$route['auth/login_process'] = 'auth/login_process';

