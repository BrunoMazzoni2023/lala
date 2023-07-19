<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function contato()
    {
        return view('home.contato');
    }


}




/*     public function index()
    {
        return view('home.index');
    } */