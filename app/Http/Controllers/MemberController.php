<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('admin.members.index', compact('members'));
    }

    public function create()
    {
        // return view('members.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Nama' => 'required|string|max:255',
            'Email' => 'required|email|unique:members',
            'posisi' => 'required|string|max:255',
            'image' => 'required|image|max:2048', // Contoh validasi untuk gambar (maksimal 2MB)
            'motto' => 'required|string',
            'github' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
        ]);

        // Upload gambar dan simpan data
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }

        Member::create($validatedData);

        return redirect()->route('members.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('members.show', compact('member'));
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('members.edit', compact('member'));
    }

    public function update(Request $request, Member $member)
    {
        $validatedData = $request->validate([
            'Nama' => 'required|string|max:255',
            'Email' => 'required|email|unique:members,Email,' . $member->id,
            'posisi' => 'required|string|max:255',
            'motto' => 'required|string',
            'github' => 'required|string|max:255',
            'linkedin' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
        ]);

        
        if ($request->hasFile('image')) {
            // Hapus gambar lama dari penyimpanan jika ada
            if (!empty($member->image)) {
                Storage::delete('public/' . $member->image);
            }
    
            // Unggah gambar baru dan simpan path baru
            $imagePath = $request->file('image')->store('uploads', 'public');
            $validatedData['image'] = $imagePath;
        }

        $member->update($validatedData);

        return redirect()->route('members.index')->with('success', 'Anggota berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        if (!empty($member->image)) {
            // Path ke file gambar dalam penyimpanan
            $imagePath = 'public/' . $member->image;
    
            // Hapus file gambar
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        }
    
    
        // Hapus anggota dari database
        $member->delete();

        return redirect()->route('members.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
