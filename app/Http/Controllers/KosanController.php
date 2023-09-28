<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kosan;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class KosanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kosans = Kosan::all();
        return view('admin.kosan.index',compact('kosans'));
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
    $messages = [
        'required' => 'Kolom :attribute harus diisi.',
        'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
        'numeric' => 'Kolom :attribute harus berisi angka.',
        'min' => 'Kolom :attribute minimal harus :min.',
        'image' => 'Kolom :attribute harus berupa gambar.',
    ];
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'gambar' => 'required|image|max:2048', // Validasi gambar (maksimal 2MB)
        'harga' => 'required|numeric|min:0',
        'fasilitas' => 'required|string',
        'luas_kamar' => 'required|numeric|min:0',
        'jarak_makan' => 'required|numeric|min:0',
        'keamanan' => 'required|string',
        'kategori' => ['required', Rule::in(['campur', 'cowo', 'cewe'])], // Validasi kategori
        'sisa_kamar' => 'required|integer|min:0', // Maksimum 100 kamar
        'peraturan' => 'required|string',
], $messages);

    if ($request->hasFile('gambar')) {
        $imagePath = $request->file('gambar')->store('uploads', 'public');
        $validatedData['gambar'] = $imagePath;
    }

    Kosan::create($validatedData);

    return redirect()->route('kosan.index')->with('success', 'Kosan berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, $id)
{
    $messages = [
        'required' => 'Kolom :attribute harus diisi.',
        'max' => 'Kolom :attribute tidak boleh lebih dari :max karakter.',
        'numeric' => 'Kolom :attribute harus berisi angka.',
        'min' => 'Kolom :attribute minimal harus :min.',
        'image' => 'Kolom :attribute harus berupa gambar.',
    ];
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'harga' => 'required|numeric|min:0',
        'fasilitas' => 'required|string',
        'luas_kamar' => 'required|numeric|min:0',
        'jarak_makan' => 'required|numeric|min:0',
        'keamanan' => 'required|string',
        'kategori' => ['required', Rule::in(['campur', 'cowo', 'cewe'])], 
        'sisa_kamar' => 'required|integer|min:0', 
        'peraturan' => 'required|string',
    ],$messages);

    // Mengambil kosan yang akan diperbarui
    $kosan = Kosan::findOrFail($id);

    // Upload gambar baru jika ada
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama dari penyimpanan jika ada
        if (!empty($kosan->gambar)) {
            Storage::delete('public/' . $kosan->gambar);
        }

        // Unggah gambar baru dan simpan path baru
        $imagePath = $request->file('gambar')->store('uploads', 'public');
        $validatedData['gambar'] = $imagePath;
    }

    // Perbarui data di database
    $kosan->update($validatedData);
    return redirect()->route('kosan.index')->with('success', 'Kosan berhasil diperbarui');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kosan = Kosan::findOrFail($id);
        if (!empty($kosan->image)) {
            // Path ke file gambar dalam penyimpanan
            $imagePath = 'public/' . $kosan->image;
    
            // Hapus file gambar
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        }
    
    
        // Hapus anggota dari database
        $kosan->delete();

        return redirect()->route('kosan.index')->with('success', 'Anggota berhasil dihapus.');
    }
    
}
