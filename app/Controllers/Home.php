<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function dashboard ()
    {
        return view('dashboard/pustakawan', [
            'pengguna' => session()->get('pengguna')]
        );
    }

    public function dashboard_anggota () 
    {
        return view('dashboard/anggotaperpus',[
            'anggota' => session()->get('anggota')
    ]);
            
    }
}
