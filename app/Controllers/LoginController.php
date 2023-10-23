<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;
use App\Models\PenggunaModel;

class LoginController extends BaseController
{
    public function form()
    {
        return view('login/form');
    }

    public function login()
    {
        $tingkat = request()->getPost('tingkat');
        if($tingkat == 'PUS'){
            $e = request()->getPost('email');
            $k = request()->getPost('katasandi');

            $m = new PenggunaModel();
            $r = $m->where('email', $e)
                ->where('katasandi', $k)->first();

            if($r == null){
                return "Login gagal";
            }else{
                session()->set('pengguna', $r);
                return redirect()->to(base_url('/'));
            }}
        elseif($tingkat == 'ADM'){
            $e = request()->getPost('email');
            $k = request()->getPost('katasandi');
    
            $m = new PenggunaModel();
            $r = $m->where('email', $e)
                ->where('katasandi', $k)->first();
    
            if($r == null){
                return "Login gagal";
            }else{
                session()->set('pengguna', $r);
                return redirect()->to(base_url('/'));
            }}
        elseif($tingkat == 'AGT'){
            $e = request()->getPost('email');
            $k = request()->getPost('katasandi');

            $m = new AnggotaModel();
            $r = $m->where('email', $e)
                ->where('katasandi', $k)->first();

            if($r == null){
                return "Login gagal";
            }else{
                session()->set('anggota', $r);
                return redirect()->to(base_url('/dashboard/anggotaperpus'));  
            }
        }else{
            return redirect()->to(base_url('login'));
        }

        
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('login'));
    }

    public function sign_up()
    {
        
    }

    public function lupa_password(){
        
    }
}
