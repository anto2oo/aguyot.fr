<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function notes()
    {
        return view('notes');
    }

    public function cv()
    {
        return view('cv');
    }
}
