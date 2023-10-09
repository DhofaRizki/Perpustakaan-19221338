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

    public function create()
    {
        $model = new AnggotaModel();
        $data = [
          'email' => request()->getPost('email'),
          'katasandi' => request()->getPost('katasandi'),
          'nama_lengkap' => request()->getPost('nama_lengkap'),
          'jeniskelamin' => request()->getPost('jeniskelamin'),
          'alamat' => request()->getPost('alamat'),
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('anggota'));
        }
     }
 
     public function show(){
         $m = new AnggotaModel();
 
         return view('anggota/tampildata', [
             'data_anggota' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('anggota/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new AnggotaModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('anggota'));
     }
 
     public function edit($id){
         $m = new AnggotaModel();
         $data = $m->where('id', $id)->first();
         return view('anggota/form', [
             'data' => $data
         ]);
        }
}