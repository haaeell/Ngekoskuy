<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\KosanController;
use App\Http\Controllers\PenilaianKosanController;

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

Route::get('/', [LandingpageController::class, 'index'])->name('welcome');
Route::get('/hasilspk', [LandingPageController::class, 'hasilspk'])->name('hasilspk');
Route::get('/spkuser', [LandingPageController::class, 'spkuser'])->name('spkuser');
Route::get('/daftarkos', [LandingPageController::class, 'daftarKos'])->name('daftarkos');
Route::get('/detailkos', [LandingPageController::class, 'detailKos'])->name('detailkos');
Route::get('/about', [LandingPageController::class, 'about'])->name('about');

Route::middleware(['auth'])->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::resource('members', MemberController::class);
Route::resource('kriteria', KriteriaController::class);
Route::resource('kosan', KosanController::class);
Route::resource('penilaian', PenilaianKosanController::class);

});


Auth::routes();
