<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LandingPageController extends Controller
{
    public function hasilspk(){
        return view('landingpage.hasilspk.hasilspk');

    }


    public function spkuser(){
        return view('landingpage.spkuser.spkuser');
    }
    
    public function daftarKos()
    {
        return view('landingpage.daftarkos');
    }
    public function detailKos()
    {
        return view('landingpage.detailkos');
    }

    
}
