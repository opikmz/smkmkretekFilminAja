<?php

namespace App\Http\Controllers;

use App\Models\pemeranM;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class pemeranC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemeran = pemeranM::latest()->get();
        return view('backend.pages.pemeran',compact('pemeran'));
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
            'pemeran'=>'required',
        ]);

        $pemeran = new pemeranM;
        $pemeran->pemeran = $request->pemeran;
        $pemeran->save();

        Alert::success('Sukses','Data berhasil ditambahkan');
        return redirect()->route('pemeran');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $pemeran)
    {
        $pemeran = pemeranM::find($pemeran)->first();
        return view('backend.pages.show_pemeran',compact('pemeran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pemeranM $pemeranM)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pemeranM $pemeran)
    {
        
        $request->validate([
            'pemeran'=>'required',
        ]);
        $pemeran->update([
            'pemeran'=>$request->pemeran
        ]);

        Alert::success('Sukses','Data berhasil diubah');
        return redirect()->route('pemeran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pemeranM $pemeran)
    {
        $pemeran->delete();

        Alert::success('Sukses','Data berhasil dihapus');
        return redirect()->route('pemeran');
    }
}
