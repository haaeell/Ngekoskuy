<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/about', [LandingPageController::class, 'about'])->name('about');

Route::get('/daftarkos', [LandingPageController::class, 'daftarKos'])->name('daftarkos');
Route::get('/detailkos', [LandingPageController::class, 'detailKos'])->name('detailkos');

Route::middleware(['auth'])->group(function () {
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


Auth::routes();

