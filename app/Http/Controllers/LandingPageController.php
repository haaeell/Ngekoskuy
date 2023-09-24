<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LandingPageController extends Controller
{
    public function daftarKos()
    {
        return view('landingpage.daftarkos');
    }
    public function detailKos()
    {
        return view('landingpage.detailkos');
    }

    
}
