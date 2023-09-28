<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kosan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'gambar',
        'harga',
        'fasilitas',
        'luas_kamar',
        'jarak_makan',
        'keamanan',
        'kategori',
        'sisa_kamar',
        'peraturan',
    ];
}
