<?php

namespace App\Http\Controllers;

use App\Models\sutradaraM;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class sutradaraC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sutradara = sutradaraM::latest()->get();

        return view('backend.pages.sutradara',compact('sutradara'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request )
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'sutradara'=>'required'
        ]);
        $sutradara = new sutradaraM;
        $sutradara->sutradara = $request->sutradara;
        $sutradara->save();

        Alert::success('Sukses','Data berhasil ditambahkan');
        return redirect()->route('sutradara');
    }

    /**
     * Display the specified resource.
     */
    public function show(sutradaraM $sutradara)
    {
        return view('backend.pages.show_sutradara',compact('sutradara'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sutradaraM $sutradara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sutradaraM $sutradara)
    {
        $request->validate([
            'sutradara'=>'required'
        ]);
        $sutradara->sutradara = $request->sutradara;
        $sutradara->save();

        Alert::success('Sukses','Data berhasil diubah');
        return redirect()->route('sutradara');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sutradaraM $sutradara)
    {
        // dd($sutradara);
        // $sutradara = sutradaraM::where('id_sutradara',$sutradara)->first();
        $sutradara->delete();
        Alert::success('Sukses','Data berhasil dihapus');
        return redirect()->route('sutradara');
    }
}
