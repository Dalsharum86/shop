<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWolrdController extends Controller
{
    public function show(){
        return view('hello');
    }
}
