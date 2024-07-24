<?php

use App\Controllers\Home;
use App\Controllers\PetugasController;
use App\Controllers\TlController;
use App\Controllers\AdminController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// Petugas
$routes->get('/', [PetugasController::class ,'index']);
$routes->get('/petugas', [PetugasController::class ,'index']);
$routes->get('/petugas/dashboard', [PetugasController::class ,'index']);
$routes->get('/petugas/laporan', [PetugasController::class ,'laporan_create']);
// $routes->get('/admin/informasi/(:any)/edit', [AdminController::class ,'informasi_edit']);
$routes->post('/petugas/laporan/store', [PetugasController::class ,'laporan_store']);
$routes->put('/petugas/laporan/(:any)', [PetugasController::class ,'laporan_update']);
$routes->delete('/petugas/laporan/(:any)', [PetugasController::class ,'laporan_destroy']);
$routes->get('/petugas/jadwal', [PetugasController::class ,'jadwal']);

// Team Leader
$routes->get('/tl', [TlController::class ,'index']);
$routes->get('/tl/dashboard', [TlController::class ,'index']);
$routes->get('/tl/laporan', [TlController::class ,'laporan']);
$routes->get('/tl/jadwal', [TlController::class ,'jadwal']);
$routes->get('/tl/petugas', [TlController::class ,'petugas']);
$routes->get('/insert', [TlController::class ,'insert_data_alat']);
$routes->get('/insert_laporan', [TlController::class ,'insert_data_laporan']);

// Admin