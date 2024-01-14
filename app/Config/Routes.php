<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AuthController::index');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');
$routes->get('register', 'AuthController::register');
$routes->post('signup', 'AuthController::signup');

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
	$routes->get('dashboard', 'Home::index');

	// DATA USERS AREA
	$routes->get('data-users', 'UserController::index');

	// BIODATA AREA
	$routes->get('biodata-pelamar', 'BiodataController::index');
	$routes->get('biodata-pelamar/new', 'BiodataController::new');
	$routes->post('biodata-pelamar/add', 'BiodataController::add');
	$routes->get('biodata-pelamar/view/(:num)/(:any)/(:any)', 'BiodataController::view/$1/$2/$3');
	$routes->get('biodata-pelamar/edit/(:num)/(:any)/(:any)', 'BiodataController::edit/$1/$2/$3');
	$routes->post('biodata-pelamar/update/(:num)', 'BiodataController::update/$1');
	$routes->get('biodata-pelamar/delete/(:num)', 'BiodataController::delete/$1');
});

$routes->group('user', ['filter' => 'auth'], function ($routes) {
	$routes->get('dashboard', 'Home::user');

	$routes->get('biodata-pelamar', 'BiodataController::index');
	$routes->get('biodata-pelamar/formulir', 'BiodataController::isiFormulir');
	$routes->post('biodata-pelamar/formulir', 'BiodataController::add');
});