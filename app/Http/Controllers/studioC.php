<?php

namespace App\Http\Controllers;

use App\Models\studioM;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class studioC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studio = studioM::latest()->get();

        return view('backend.pages.studio',compact('studio'));
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
            'studio'=>'required'
        ]);
        $studio = new studioM;
        $studio->studio = $request->studio;
        $studio->save();

        Alert::success('Sukses','Data berhasil ditambahkan');
        return redirect()->route('studio');
    }

    /**
     * Display the specified resource.
     */
    public function show(studioM $studio)
    {
        return view('backend.pages.show_studio',compact('studio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(studioM $studioM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, studioM $studio)
    {
        $request->validate([
            'studio'=>'required'
        ]);
        $studio->studio = $request->studio;
        $studio->save();

        Alert::success('Sukses','Data berhasil diubah');
        return redirect()->route('studio');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $studio)
    {
        $studio = studioM::where('id',$studio)->first();
        $studio->delete();

        Alert::success('Sukses','Data berhasil dihapus');
        return redirect()->route('studio');
    }
}
