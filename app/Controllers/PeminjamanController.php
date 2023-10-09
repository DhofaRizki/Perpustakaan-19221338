<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PeminjamanModel;

class PeminjamanController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PeminjamanModel();
        $data = [
          'tgl_peminjaman' => request()->getPost('tgl_peminjaman'),
          'tgl_harus_kembali' => request()->getPost('tgl_harus_kembali'),
          'tgl_kembali' => request()->getPost('tgl_kembali'),
          'sinopsis' => request()->getPost('sinopsis'),
          'tb_pengguna_id_peminjaman' => request()->getPost('tb_pengguna_id_peminjaman'),
          'tb_pengguna_id_pengembalian' => request()->getPost('tb_pengguna_id_pengembalian'),
          'tb_anggota_id' => request()->getPost('tb_anggota_id'),
          'tb_koleksibuku_id' => request()->getPost('tb_koleksibuku_id'),
          'denda' => request()->getPost('denda'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('peminjaman'));
        }
     }
 
     public function show(){
         $m = new PeminjamanModel();
 
         return view('peminjaman/tampildata', [
             'data_peminjaman' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('peminjaman/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PeminjamanModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('peminjaman'));
     }
 
     public function edit($id){
         $m = new PeminjamanModel();
         $data = $m->where('id', $id)->first();
         return view('peminjaman/form', [
             'data' => $data
         ]);
        }
    }

