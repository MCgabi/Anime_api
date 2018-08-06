<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }

    public function docs(){
        return view('docs');
    }

    public function example(){
        return view('example');
    }
}
