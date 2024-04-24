<?php

namespace App\Http\Controllers;

use App\Models\genreM;
use App\Models\movieM;
use App\Models\studioM;
use App\Models\pemeranM;
use App\Models\sutradaraM;
use App\Models\genreMovieM;
use Illuminate\Http\Request;
use App\Models\pemeranMovieM;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        $sutradara = sutradaraM::latest()->get();
        $genre = genreM::latest()->get();
        $pemeran = pemeranM::latest()->get();

        $id_user = Auth::user()->id_user;
        $pemeranMovie = pemeranMovieM::where(['id_user'=>$id_user,'id_movie'=>null])->get();
        return view('backend.pages.create_movie',compact('genre','pemeran','sutradara','pemeranMovie'));
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
        // dd($request->gambar);

        $request->validate([
            'judul'=>'required',
            'id_sutradara'=>'required',
            'tanggal_keluar'=>'required',
            'genre*'=>'required',
            'gambar.' => 'image|mimes:png,jpg,jpeg,gif|max:2048',

        ]);
        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $nama_gambar = time() .'-'. $gambar->getClientOriginalName();

            $path = public_path('assets/img/');
            $gambar->move('img/', $nama_gambar);

            $movie = new movieM;
            $movie->judul = $request->judul;
            $movie->id_sutradara = $request->id_sutradara;
            $movie->tanggal_keluar = $request->tanggal_keluar;
            $movie->keterangan = $request->keterangan;
            $movie->gambar = $nama_gambar;
            $movie->save();

        } else{
            $movie = new movieM;
            $movie->judul = $request->judul;
            $movie->id_sutradara = $request->id_sutradara;
            $movie->tanggal_keluar = $request->tanggal_keluar;
            $movie->keterangan = $request->keterangan;
            $movie->save();
        }

        $id_movie = $movie->id_movie;
        // dd($id_movie);
        foreach($request->genre as $index=>$id_genre)
        {
            $genreMovie = new genreMovieM;
            $genreMovie->id_movie = $id_movie;
            $genreMovie->id_genre = $id_genre;
            $genreMovie->save();

        }
        $idAdmin = Auth::user()->id_user;
        $pemeranMovie = pemeranMovieM::where(['id_movie'=>null,'id_user'=>$idAdmin])->get();
        foreach($pemeranMovie as $pm)
        {
            $pm->id_movie = $id_movie;
            $pm->save();

        }

        Alert::success('Sukses','Data berhasil ditambahkan');
        return redirect()->route('movie');
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
