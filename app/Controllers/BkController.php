<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class BkController extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil()
    {
        return view('buku/tampildata');
    }

    public function login()
    {
        return view('buku/login');
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
