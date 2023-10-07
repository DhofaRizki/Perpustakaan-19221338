<?php

use App\Controllers\AnggotaController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::Index');

$routes->get('/anggota', 'AnggotaController::tampil');
$routes->get('/anggota/form', 'AnggotaController::form');
$routes->post('/anggota', 'AnggotaController::tambah');

$routes->get('/pengguna', 'PenggunaController::tampil');
$routes->get('/pengguna/form', 'PenggunaController::form');
$routes->post('/pengguna', 'PenggunaController::tambah');

$routes->get('/kategori', 'KtgController::tampil');
$routes->get('/kategori/form', 'KtgController::form');
$routes->post('/kategori', 'KtgController::tambah');

$routes->get('/peminjaman', 'PeminjamanController::tampil');
$routes->get('/peminjaman/form', 'PeminjamanController::form');
$routes->get('/peminjaman', 'PeminjamanController::tambah');

$routes->get('/buku', 'BkController::tampil');
$routes->get('/buku/form', 'BkController::form');
$routes->get('/buku', 'BkController::tambah');

$routes->get('/koleksibuku', 'KoleksiBukuController::tampil');
$routes->get('/koleksibuku/form', 'KoleksiBukuController::form');
$routes->get('/koleksibuku', 'KoleksiBukuController::tambah');

$routes->get('/penerbit', 'PnbtController::tampil');
$routes->get('/penerbit/form', 'PnbtController::form');
$routes->get('/penerbit', 'PnbtController::tambah');