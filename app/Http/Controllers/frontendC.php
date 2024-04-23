<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendC extends Controller
{
    public function index()
    {
        return view('frontend.pages.home');
    }
}
