<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'User\Home::index');
$routes->get('/about', 'User\About::index');
$routes->get('/product', 'User\Product::index');
$routes->get('/gallery', 'User\Gallery::index');
$routes->get('/contact', 'User\Contact::index');
$routes->get('/service', 'User\Service::index');

$routes->get('/admin/login/', 'Admin\Login::index');
$routes->post('/admin/login/process', 'Admin\Login::process');
$routes->get('/admin/logout', 'Admin\Logout::process');
$routes->get('/admin/dashboard', 'Admin\Dashboard::index');

$routes->get('/admin/gallery', 'Admin\Gallery::index');

$routes->get('/admin/product', 'Admin\Product::index');
$routes->get('/admin/product/create', 'Admin\Product::create');
$routes->post('/admin/product/insert', 'Admin\Product::insert');
$routes->get('/admin/product/edit/(:any)', 'Admin\Product::edit/$1');
$routes->get('/admin/product/delete/(:any)', 'Admin\Product::delete/$1');
$routes->post('/admin/product/update/(:any)', 'Admin\Product::update/$1');

$routes->get('/admin/new-product', 'Admin\NewProduct::index');
$routes->get('/admin/new-product/create', 'Admin\NewProduct::create');
$routes->post('/admin/new-product/insert', 'Admin\NewProduct::insert');
$routes->get('/admin/new-product/edit/(:any)', 'Admin\NewProduct::edit/$1');
$routes->get('/admin/new-product/delete/(:any)', 'Admin\NewProduct::delete/$1');
$routes->post('/admin/new-product/update/(:any)', 'Admin\NewProduct::update/$1');

$routes->get('/admin/about', 'Admin\About::index');
$routes->get('/admin/about/create', 'Admin\About::create');
$routes->post('/admin/about/insert', 'Admin\About::insert');
$routes->get('/admin/about/edit/(:any)', 'Admin\About::edit/$1');
$routes->get('/admin/about/delete/(:any)', 'Admin\About::delete/$1');
$routes->post('/admin/about/update/(:any)', 'Admin\About::update/$1');

$routes->get('/admin/values', 'Admin\Values::index');
$routes->get('/admin/values/create', 'Admin\Values::create');
$routes->post('/admin/values/insert', 'Admin\Values::insert');
$routes->get('/admin/values/edit/(:any)', 'Admin\Values::edit/$1');
$routes->get('/admin/values/delete/(:any)', 'Admin\Values::delete/$1');
$routes->post('/admin/values/update/(:any)', 'Admin\Values::update/$1');

$routes->get('/admin/gallery', 'Admin\Gallery::index');
$routes->get('/admin/gallery/create', 'Admin\Gallery::create');
$routes->post('/admin/gallery/insert', 'Admin\Gallery::insert');
$routes->get('/admin/gallery/edit/(:any)', 'Admin\Gallery::edit/$1');
$routes->get('/admin/gallery/delete/(:any)', 'Admin\Gallery::delete/$1');
$routes->post('/admin/gallery/update/(:any)', 'Admin\Gallery::update/$1');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
