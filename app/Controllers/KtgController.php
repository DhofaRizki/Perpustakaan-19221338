<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KtgController extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil() 
    {
        return view('kategori/tampildata');
    }
     
    public function form()
    {
        return view('kategori/form');
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
