<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        // 'alert'()->success('BIENVENODO AL SISTEMA ECOMMERCE','Vercion 1.0');
        return view('home');
    }
}