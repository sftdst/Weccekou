<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Page.layout.index');
    }
    public function Registration()
    {
        return view ('Page.Registration.Registration');
    }
}
