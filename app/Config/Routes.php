<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::view/home');

// ruta para el login
$routes->get('/', 'AuthController::login');
$routes->get('/dashboard', 'Dashboard::index');

// rutas para panel de administracion
$routes->get('/clientes', 'Cliente::index');
$routes->get('/agregar_sitio', 'AgregarSitio::index');
$routes->get('/lista_sitios', 'ListaSitios::index');

// Rutas de las paginas estaticas, evita que la url tenga informacion
$routes->get('/home', 'Pages::view/home');
$routes->get('/features', 'Pages::view/features');
$routes->get('/pricing', 'Pages::view/pricing');
$routes->get('/faqs', 'Pages::view/faqs');
$routes->get('/about', 'Pages::view/about');

// Rutas para la APIREST que maneja los usuarios
// $routes->get('/touristicplace', 'Touristicplace::index');
$routes->resource('touristicplace');
$routes->resource('customers');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
