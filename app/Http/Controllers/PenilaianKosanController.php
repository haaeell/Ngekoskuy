<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenilaianKosan;
use App\Models\Kosan;
use App\Models\Kriteria;

class PenilaianKosanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penilaianKosan = PenilaianKosan::all();
        return view('admin.penilaian.index', compact('penilaianKosan'));
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
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function calculateRankings()
    {
        $kosan = Kosan::all(); // Mendapatkan semua kosan

        // Mendapatkan bobot dari tabel Kriteria
        $bobot = Kriteria::pluck('bobot', 'id');

        // Inisialisasi array untuk menyimpan peringkat kosan
        $rankings = [];

        foreach ($kosan as $kosan) {
            // Mendapatkan nilai-nilai penilaian untuk kosan tertentu
            $penilaian = PenilaianKosan::where('kosan_id', $kosan->id)->get();

            // Inisialisasi total nilai kosan
            $totalNilai = 0;

            // Menghitung total nilai berdasarkan bobot
            foreach ($penilaian as $penilaianItem) {
                $totalNilai += ($penilaianItem->nilai * $bobot[$penilaianItem->kriteria_id]);
            }

            // Menambahkan hasil perhitungan ke dalam array peringkat
            $rankings[] = [
                'kosan' => $kosan,
                'totalNilai' => $totalNilai,
            ];
        }

        // Mengurutkan peringkat dari yang tertinggi ke yang terendah
        usort($rankings, function ($a, $b) {
            return $b['totalNilai'] - $a['totalNilai'];
        });

        // Kembalikan data peringkat ke tampilan atau lakukan sesuai kebutuhan Anda
        return view('penilaian.rankings', compact('rankings'));
    }

    public function normalizeData()
    {
        // Mendapatkan nilai maksimum dan minimum untuk setiap kriteria
        $maxMinValues = [];
        $kriteria = Kriteria::all();

        foreach ($kriteria as $kriteriaItem) {
            $maxMinValues[$kriteriaItem->id]['max'] = PenilaianKosan::where('kriteria_id', $kriteriaItem->id)->max('nilai');
            $maxMinValues[$kriteriaItem->id]['min'] = PenilaianKosan::where('kriteria_id', $kriteriaItem->id)->min('nilai');
        }

        // Mendapatkan semua penilaian kosan
        $penilaianKosan = PenilaianKosan::all();

        // Normalisasi nilai-nilai penilaian
        foreach ($penilaianKosan as $penilaian) {
            $kriteriaItem = Kriteria::find($penilaian->kriteria_id);
            $max = $maxMinValues[$penilaian->kriteria_id]['max'];
            $min = $maxMinValues[$penilaian->kriteria_id]['min'];

            // Lakukan normalisasi, misalnya menggunakan Min-Max Normalization
            $normalizedValue = ($penilaian->nilai - $min) / ($max - $min);

            // Simpan nilai normalisasi ke dalam database atau lakukan sesuai kebutuhan Anda
            $penilaian->normalized_value = $normalizedValue;
            $penilaian->save();
        }

        return redirect()->route('penilaian.index')->with('success', 'Data penilaian telah dinormalisasi.');
    }
}
