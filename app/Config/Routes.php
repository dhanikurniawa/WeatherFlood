<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Dashboard::index');
$routes->get('/weather', 'Weather::index');
$routes->get('weather/create', 'Weather::create');
$routes->post('weather/store', 'Weather::store');
$routes->get('weather', 'Weather::index');

$routes->get('weather/create', 'Weather::create');
$routes->post('weather/store', 'Weather::store');

$routes->get('weather/edit/(:num)', 'Weather::edit/$1');
$routes->post('weather/update/(:num)', 'Weather::update/$1');

$routes->get('weather/delete/(:num)', 'Weather::delete/$1');

$routes->get('weather/edit/(:num)', 'Weather::edit/$1');
$routes->post('weather/update/(:num)', 'Weather::update/$1');

$routes->get('weather/delete/(:num)', 'Weather::delete/$1');
$routes->post('weather/import', 'Weather::import');
$routes->get('history', 'History::index');

$routes->get('prediction', 'Prediction::index');
$routes->post('prediction/process', 'Prediction::process');

$routes->get('visualisasi', 'Visualization::index');