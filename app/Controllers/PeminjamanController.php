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

    public function form ()
    {
        return view('peminjaman/form');
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
