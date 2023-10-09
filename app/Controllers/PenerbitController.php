<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenerbitModel;

class PenerbitController extends BaseController
{
    public function index()
    {
        //
    }

    public function create()
    {
        $model = new PenerbitModel();
        $data = [
          'penerbit' => request()->getPost('penerbit'),
          'kota' => request()->getPost('kota'),
          
        ];
 
        $id = (int) request()->getPost('id');
        if($id > 0){
            $r = $model->update($id, $data);
         }else{
             $r = $model->insert($data);
        }
        if($r != false){
          return redirect()->to(base_url('penerbit'));
        }
     }
 
     public function show(){
         $m = new PenerbitModel();
 
         return view('penerbit/tampildata', [
             'data_penerbit' => $m->findAll()
         ]);
     }
 
     public function form(){
         return view('penerbit/form');
     }
 
     public function delete(){
         $id = request()->getPost('id');
         $m = new PenerbitModel();
         $r = $m->delete($id);
         return redirect()->to(base_url('penerbit'));
     }
 
     public function edit($id){
         $m = new PenerbitModel();
         $data = $m->where('id', $id)->first();
         return view('penerbit/form', [
             'data' => $data
         ]);
        }
    }

