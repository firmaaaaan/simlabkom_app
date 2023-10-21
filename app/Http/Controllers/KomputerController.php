<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Komputer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lab=Lab::all();
        $komputer=Komputer::all();
        return view('components.komputer.index', compact('komputer','lab'));
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
        $data = $request->validate([
            // Tambahkan aturan validasi untuk kolom Komputer lainnya
            'lab_id' => 'required|exists:labs,id',
        ]);
        Komputer::create($request->all());
        return redirect('komputer')->with('success','Data komputer berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Komputer $komputer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Komputer $komputer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $komputer = Komputer::findOrFail($id);
        $komputer->update($request->all());

        return back()->with('info','Data komputer berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $komputer=Komputer::find($id);
        $komputer->delete();
        return redirect('komputer')->with('info2','Data komputer berhasil dihapus');
    }
}
