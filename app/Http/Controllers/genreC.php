<?php

namespace App\Http\Controllers;

use App\Models\genreM;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class genreC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = genreM::latest()->get();
        return view('backend.pages.genre',compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'genre'=>'required',
        ]);

        $genre = new genreM;
        $genre->genre = $request->genre;
        $genre->save();

        Alert::success('Sukses','Data berhasil ditambahkan');
        return redirect()->route('genre');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $genre)
    {
        $genre = genreM::find($genre);
        return view('backend.pages.show_genre',compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(genreM $genreM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, genreM $genre)
    {
        $request->validate([
            'genre'=>'required',
        ]);
        $genre->update([
            'genre'=>$request->genre
        ]);

        Alert::success('Sukses','Data berhasil diubah');
        return redirect()->route('genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $genre)
    {
        $genre = genreM::where('id_genre',$genre)->first();
        $genre->delete();

        Alert::success('Sukses','Data berhasil dihapus');
        return redirect()->route('genre');
    }
}
