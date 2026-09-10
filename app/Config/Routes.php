<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

# $routes->get('/', 'Home::index');

# $routes->get('/homepage', 'Home::homepage');

# $routes->get('/homepage/(:any)', 'Home::hm/$1'); 

$routes->get('/', 'Pages::index');
$routes->get('about', 'Pages::about');
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');