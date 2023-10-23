<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;

class AGTbukuController extends BaseController
{
    public function show()
    {
        $m = new BukuModel();
 
         return view('BukuAGT/tampildata', [
             'data_buku' => $m->findAll()
         ]);
    }
}
