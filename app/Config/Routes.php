<?php

use App\Controllers\AnggotaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard');

$routes->get('/anggota', 'AnggotaController::show');
$routes->get('/anggota/form', 'AnggotaController::form');
$routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->post('/anggota/Save', 'AnggotaController::create');

$routes->get('/pengguna', 'PenggunaController::show');
$routes->get('/pengguna/form', 'PenggunaController::form');
$routes->get('/pengguna/edit/(:num)', 'PenggunaController::edit/$1');
$routes->post('/pengguna/Save', 'PenggunaController::create');

$routes->get('/kategori', 'KategoriController::show');
$routes->get('/kategori/form', 'KategoriController::form');
$routes->get('/kategori/edit/(:num)', 'KategoriController::edit/$1');
$routes->post('/kategori/Save', 'KategoriController::create');

$routes->get('/koleksibuku', 'KoleksiBukuController::show');
$routes->get('/koleksibuku/form', 'KoleksiBukuController::form');
$routes->get('/koleksibuku/edit/(:num)', 'KoleksiBukuController::edit/$1');
$routes->post('/koleksibuku/Save', 'KoleksiBukuController::create');

$routes->get('/buku', 'BukuController::show');
$routes->get('/buku/form', 'BukuController::form');
$routes->get('/buku/edit/(:num)', 'BukuController::edit/$1');
$routes->get('/buku/Save', 'BukuController::create');

$routes->get('/peminjaman', 'PeminjamanController::show');
$routes->get('/peminjaman/form', 'PeminjamanController::form');
$routes->get('/peminjaman/edit/(:num)', 'PeminjamanController::edit/$1');
$routes->post('/peminjaman/Save', 'PeminjamanController::create');

$routes->get('/penerbit', 'PenerbitController::show');
$routes->get('/penerbit/form', 'PenerbitController::form');
$routes->get('/penerbit/edit/(:num)', 'PenerbitController::edit/$1');
$routes->post('/penerbit/Save', 'PenerbitController::create');