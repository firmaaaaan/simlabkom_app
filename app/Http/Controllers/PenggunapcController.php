<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use App\Models\Penggunapc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenggunapcController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penggunapc=Penggunapc::all();
        $komputer=Komputer::all();
        return view('components.pengguna_pc.index', compact('komputer','penggunapc'));
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
        Penggunapc::create($request->all());
        return redirect('penggunapc')->with('success','Data pengguna PC berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penggunapc $penggunapc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penggunapc $penggunapc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $penggunapc=Penggunapc::all();
        $penggunapc->update($request->all());
        return back()->with('info','Data pengguna pc berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $penggunapc=Penggunapc::find($id);
        $penggunapc->delete();
        return back()->with('info2','Data pengguna pc berhasil dihapus');
    }
}
