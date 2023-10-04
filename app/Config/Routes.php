<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'homeController::index');
$routes->get('/contact', 'homeController::contact');
$routes->get('/about', 'homeController::about');
$routes->get('/productDetails/(:any)', 'homeController::productDetails/$1');


$routes->get('/login', 'AdminController::login');
$routes->post('/authlog', 'AdminController::authlog');
$routes->get('/register', 'AdminController::register');
$routes->post('/authreg', 'AdminController::authreg');
$routes->get('/logout', 'AdminController::logout');

//admin
$routes->get('/admin', 'SAController::admin', ['filter' => 'authGuard']);
$routes->post('/save', 'SAController::save');
$routes->get('/delete/(:any)', 'SAController::delete/$1');
$routes->get('/edit/(:any)', 'SAController::edit/$1');
