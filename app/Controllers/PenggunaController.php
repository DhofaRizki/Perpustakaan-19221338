<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PenggunaController extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil() 
    {
        return view('pengguna/tampildata');
    }
     
    public function form()
    {
        return view('pengguna/form');
    }
    
    public function tambah()
    {

    }

    public function update()
    {

    }

    public function hapus()
    {

    }
}
