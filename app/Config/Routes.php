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
