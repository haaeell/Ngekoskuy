<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['Nama', 'Email', 'posisi', 'image', 'motto', 'github', 'linkedin', 'instagram'];

}
