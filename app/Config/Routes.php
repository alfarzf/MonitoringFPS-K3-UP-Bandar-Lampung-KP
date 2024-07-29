<?php

use App\Controllers\Home;
use App\Controllers\PetugasController;
use App\Controllers\TlController;
use App\Controllers\AdminController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class ,'index']);
// $routes->get('/', 'Home::index');
// Petugas

$routes->get('/petugas', [PetugasController::class ,'index']);
$routes->get('/petugas/dashboard', [PetugasController::class ,'index']);
$routes->post('/petugas/laporan', [PetugasController::class ,'laporan_create']);
$routes->get('/petugas/laporan', [PetugasController::class ,'laporan_create']);
$routes->get('/petugas/laporan/filterByMonth/(:num)', 'PetugasController::filterByMonth/$1');
// $routes->get('/admin/informasi/(:any)/edit', [AdminController::class ,'informasi_edit']);
$routes->post('/petugas/laporan/store', [PetugasController::class ,'laporan_store']);
$routes->put('/petugas/laporan/(:any)', [PetugasController::class ,'laporan_update']);
$routes->delete('/petugas/laporan/(:any)', [PetugasController::class ,'laporan_destroy']);
$routes->get('/petugas/jadwal', [PetugasController::class ,'jadwal']);

// Team Leader
$routes->get('/tl', [TlController::class ,'index']);
$routes->get('/tl/dashboard', [TlController::class ,'index']);
$routes->post('/tl/laporan', [TlController::class ,'laporan']);
$routes->get('/tl/laporan', [TlController::class ,'laporan']);
$routes->get('/tl/laporan/export/(:any)', [TlController::class ,'export']);
$routes->get('/tl/jadwal', [TlController::class ,'jadwal']);
$routes->get('/tl/petugas', [TlController::class ,'petugas']);
$routes->get('/insert', [TlController::class ,'insert_data_alat']);
$routes->get('/insert_laporan', [TlController::class ,'insert_data_laporan']);

// Admin
$routes->get('/admin', [AdminController::class ,'index']);
$routes->get('/admin/dashboard', [AdminController::class ,'index']);
$routes->get('/admin/alat', [AdminController::class ,'alat']);
$routes->get('/admin/petugas', [AdminController::class ,'petugas']);

service('auth')->routes($routes);
$routes->get('/admin/jadwal', [AdminController::class ,'jadwal']);