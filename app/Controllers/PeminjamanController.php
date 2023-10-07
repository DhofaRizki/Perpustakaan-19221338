<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PeminjamanController extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil()
    {
        return view('peminjaman/tampildata');
    }

    public function login()
    {
        return view('peminjaman/login');
    }

    public function tambah()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
