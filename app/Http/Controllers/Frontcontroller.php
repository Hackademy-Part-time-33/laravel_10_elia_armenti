<?php

namespace App\Http\Controllers;

/* use Illuminate\Http\Request; */

class Frontcontroller extends Controller
{
    public function homepage(){
        return view('items.homepage');
    }

    public function dashboard(){
        return view('items.dashboard');
    }
}
