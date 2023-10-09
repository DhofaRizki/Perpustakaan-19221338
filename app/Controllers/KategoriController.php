<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class KategoriController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new KategoriModel();
        $data = [
          'kategori' => request()->getPost('kategori'),
          'kode_ddc' => request()->getPost('kode_ddc'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('kategori'));
        }
     }
 
     public function show(){
         $m = new KategoriModel();
 
         return view('kategori/tampildata', [
             'data_kategori' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('kategori/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new KategoriModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('kategori'));
     }
 
     public function edit($id){
         $m = new KategoriModel();
         $data = $m->where('id', $id)->first();
         return view('kategori/form', [
             'data' => $data
         ]);
        }
    }
