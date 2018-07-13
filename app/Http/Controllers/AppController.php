<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function index(){
        return view('app.index');
    }

    public function pengaduan(){
        return view('app.pengaduan');
    }

    public function profile(){
        return view('profile');
    }

}
