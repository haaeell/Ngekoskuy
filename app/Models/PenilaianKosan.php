<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenilaianKosan extends Model
{
    use HasFactory;
    protected $table = 'penilaian_kosan';
    protected $fillable = [
        'kosan_id',
        'kriteria_id',
        'nilai',
    ];

    public function kosan()
    {
        return $this->belongsTo(Kosan::class);
    }

    public function kriteria()
    {
        return $this->belongsTo(Kriteria::class);
    }
}
