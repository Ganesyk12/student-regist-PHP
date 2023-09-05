<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Home Controller
$routes->get('/',           'Home::home');
$routes->get('home',        'Home::home');
$routes->get('dashboard',   'Home::dashboard');
$routes->get('info',        'Home::info');
$routes->get('pengumuman',  'Home::pengumuman');
$routes->get('contact',     'Home::contact');
$routes->get('success',     'Home::success');
// 
$routes->get('coba',     'Home::coba');

// Auth Login
$routes->get('login',       'Login::index');

// Siswa Controller
$routes->get('datasiswa',                   'Siswa::index');
$routes->get('regist',                      'Siswa::regist');
//Route untuk Hapus siswa
$routes->get('siswaDelete/(:any)',         'Siswa::delete/$1');
$routes->post('saveFormData',               'Siswa::saveFormData');
$routes->post('submitedit',                 'Siswa::submitedit');
//Route untuk edit siswa
$routes->get('editSiswa/(:any)', 'Siswa::edit/$1');
$routes->post('submitEditSiswa', 'Siswa::submitEditSiswa');

//route hapus siswa
$routes->get('remove/(:any)', 'Siswa::delete/$1');

// Pdf Controller
$routes->get('report',                      'PdfController::index');
$routes->get('print',                      'PdfController::generate');



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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
