<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/home', 'HomeController::index');
$routes->get('/contact', 'HomeController::contact');
$routes->post('/contact', 'HomeController::contact');
$routes->get('/signup', 'HomeController::signup');
$routes->post('/signup', 'HomeController::signup');
