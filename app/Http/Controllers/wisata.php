<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wisata extends Controller
{
 
    public function coba(){
        return view('template');
    }


    public function halo(){
        return view('dashboard');
    }

    public function budrek(){
        return view('tampilan_insert');
    }
    public function TampilanLogin(){
        return view('login');
    }

    public function Profil(){
        return view('profile-user');
    }


    public function Landing(){
        return view('landing');
    }
}
