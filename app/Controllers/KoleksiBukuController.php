<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KoleksiBukuModel;

class KoleksiBukuController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new KoleksiBukuModel();
        $data = [
          'tb_buku_id' => request()->getPost('tb_buku_id'),
          'nomor_koleksi' => request()->getPost('nomor_koleksi'),
          'status_koleksi' => request()->getPost('status_koleksi'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('koleksibuku'));
        }
     }
 
     public function show(){
         $m = new KoleksiBukuModel();
 
         return view('koleksibuku/tampildata', [
             'data_koleksibuku' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('koleksibuku/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new KoleksiBukuModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('koleksibuku'));
     }
 
     public function edit($id){
         $m = new KoleksiBukuModel();
         $data = $m->where('id', $id)->first();
         return view('koleksibuku/form', [
             'data' => $data
         ]);
        }
    }

