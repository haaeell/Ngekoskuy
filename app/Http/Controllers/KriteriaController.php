<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('admin.kriteria.index',compact('kriteria'));
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
        'nama' => 'required|string',
        'bobot' => 'required|integer|min:1|max:100',
        'jenis' => 'required|in:Cost,Benefit',
    ]);

    Kriteria::create([
        'nama' => $request->nama,
        'bobot' => $request->bobot,
        'jenis' => $request->jenis,
    ]);

    return redirect()->back()->with('success', 'Kriteria telah berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria)
    {
        return view('kriteria.show', compact('kriteria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kriteria $kriteria)
{
    $request->validate([
        'nama' => 'required|string',
        'bobot' => 'required|integer|min:1|max:100',
        'jenis' => 'required|in:Cost,Benefit',
    ]);

    $kriteria->update([
        'nama' => $request->nama,
        'bobot' => $request->bobot,
        'jenis' => $request->jenis,
    ]);

    return redirect()->back()->with('success', 'Kriteria telah berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $kriteria = Kriteria::FindOrFail($id);
    $kriteria->delete();
    return redirect()->back()->with('success', 'Kriteria telah berhasil dihapus.');
}

}
