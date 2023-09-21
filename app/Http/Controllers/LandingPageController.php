<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LandingPageController extends Controller
{
    public function about()
    {
        return view('landingpage.about');
    }
}
