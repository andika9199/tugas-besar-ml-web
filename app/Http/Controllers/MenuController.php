<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function staticMenu()
    {
        return view('static');
    }
    public function homeMenu()
    {
        return view('home');
    }
}
