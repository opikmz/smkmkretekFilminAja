<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardC extends Controller
{
    public function index()
    {
        return view('backend.pages.dashboard');
    }
}
