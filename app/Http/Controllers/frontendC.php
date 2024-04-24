<?php

namespace App\Http\Controllers;

use App\Models\movieM;
use Illuminate\Http\Request;

class frontendC extends Controller
{
    public function index()
    {
        $filmTerbaru = movieM::latest()->take(7)->get();
        // $ft = movieM::latest()->take(7);
        return view('frontend.pages.home',compact('filmTerbaru'));
    }
    public function film()
    {
        return view('frontend.pages.home');
    }
}
