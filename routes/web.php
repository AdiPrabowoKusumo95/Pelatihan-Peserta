<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GelombangController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesertaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('home/{usertype?}', [HomeController::class, 'index'])->name('home');
Route::get('/', [LoginController::class, 'index'])->name('/');
Route::post('aksilogin', [LoginController::class, 'aksilogin'])->name('aksilogin');
Route::get('aksilogout', [LoginController::class, 'aksilogout'])->name('aksilogout');
Route::resource('dashboard', DashboardController::class);
Route::resource('peserta', PesertaController::class);
Route::get('daftar-peserta', [PendaftaranController::class, 'create']);
Route::post('daftar-peserta', [PendaftaranController::class, 'store'])->name('daftar-peserta.store');


Route::middleware(['auth', 'Administrator'])->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('level', LevelController::class);
    Route::resource('jurusan', JurusanController::class);
    Route::resource('gelombang', GelombangController::class);
});

