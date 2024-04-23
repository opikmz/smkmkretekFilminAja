<?php

namespace App\Http\Controllers;

use App\Models\genreM;
use App\Models\movieM;
use App\Models\studioM;
use App\Models\pemeranM;
use App\Models\pemeranMovieM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class movieC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $movie = movieM::latest()->get();
        return view('backend.pages.movie',compact('movie'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $studio = studioM::latest()->get();
        $genre = genreM::latest()->get();
        $pemeran = pemeranM::latest()->get();

        $id_user = Auth::user()->id_user;
        $pemeranMovie = pemeranMovieM::where(['id_user'=>$id_user,'id_movie'=>null])->get();
        return view('backend.pages.create_movie',compact('genre','pemeran','studio','pemeranMovie'));
    }

    public function tambah_pemeran_movie(string $id_pemeran)
    {
        $id_user = Auth::user()->id_user;

        $pemeranMovie = new pemeranMovieM;
        $pemeranMovie->id_pemeran = $id_pemeran;
        $pemeranMovie->id_user = $id_user;
        $pemeranMovie->save();

        return redirect()->route('create_movie');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(movieM $movieM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(movieM $movieM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, movieM $movieM)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(movieM $movieM)
    {
        //
    }
}
