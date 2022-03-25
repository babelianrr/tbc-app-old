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
$routes->setDefaultController('Login');
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
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');

// $routes->get('/news/view/(:any)', 'News::view/$1');
// $routes->get('/news/edit/(:any)', 'News::edit/$1');
// $routes->get('/news', 'News::index');
// $routes->match(['get', 'post'], '/creoleisnotalanguage', 'News::create');

$routes->get('/character', 'Codex::index');
$routes->get('/pendant', 'Codex::pendant');

$routes->get('/character/evolution', 'Cevo::index');
$routes->get('/character/evolution/(:any)', 'Cevo::detail/$1');
$routes->get('/character/awaken', 'Cawk::index');
$routes->get('/character/awaken/(:any)', 'Cawk::detail/$1');
$routes->get('/character/2022', 'C2022::index');
$routes->get('/character/2022/(:any)', 'C2022::detail/$1');
$routes->get('/character/2021', 'C2021::index');
$routes->get('/character/2021/(:any)', 'C2021::detail/$1');
$routes->get('/character/2020', 'C2020::index');
$routes->get('/character/2020/(:any)', 'C2020::detail/$1');
$routes->get('/character/2019', 'C2019::index');
$routes->get('/character/2019/(:any)', 'C2019::detail/$1');

$routes->get('/pendant/2022', 'P2022::index');
$routes->get('/pendant/2022/(:any)', 'P2022::detail/$1');
$routes->get('/pendant/2021', 'P2021::index');
$routes->get('/pendant/2021/(:any)', 'P2021::detail/$1');
$routes->get('/pendant/2020', 'P2020::index');
$routes->get('/pendant/2020/(:any)', 'P2020::detail/$1');
$routes->get('/pendant/2019', 'P2019::index');
$routes->get('/pendant/2019/(:any)', 'P2019::detail/$1');



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
