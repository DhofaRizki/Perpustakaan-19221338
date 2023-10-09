<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;

class AnggotaController extends BaseController
{
    public function index()
    {
        //
    }

    public function tampil() 
    {
        return view('anggota/tampildata');
    }
     
    public function form()
    {
        return view('anggota/form');
    }
    
    public function tambah()
    {
        $m = new AnggotaModel();
        return $m->insert([
            'email' => request()->getVar('email'),
            'nama_lengkap' => request()->getVar('nama_lengkap'),
            'jeniskelamin' => request()->getVar('jeniskelamin'),
            'alamat' => request()->getVar('alamat')
        ]);
    }

    public function update()
    {

    }

    public function hapus()
    {

    }
}
