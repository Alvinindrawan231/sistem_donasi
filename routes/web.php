<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TentangKamiController;
use App\Models\Home;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DaftarController;

Route::get('/', function () {
    if(!Auth::check()) {
        return redirect('/login');
    }
    return view('welcome');

});

Auth::routes();

<<<<<<< HEAD
Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index'])->name('daftar');
Route::resource('user',UserController::class);
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/donasi', [App\Http\Controllers\DonasiController::class, 'index'])->name('donasi');
Route::get('/tentangkami', [App\Http\Controllers\TentangkamiController::class, 'index'])->name('tentangkami');
Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index'])->name('daftar');
=======
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/donasi', [DonasiController::class, 'index'])->name('donasi');
Route::get('/tentangkami', [TentangKamiController::class, 'index'])->name('tentangkami');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::resource('user', UserController::class);

Route::get('/daftars', [DaftarController::class, 'index'])->name('daftar.index');
Route::get('/daftars/create', [DaftarController::class, 'create'])->name('daftar.create');
Route::post('/daftars', [DaftarController::class, 'store'])->name('daftar.store');

Route::get('/daftars/{id}/edit', [DaftarController::class, 'edit'])->name('daftar.edit');
Route::put('/daftars/{id}', [DaftarController::class, 'update'])->name('daftar.update');
Route::delete('/daftars/{id}', [DaftarController::class, 'destroy'])->name('daftar.destroy');
>>>>>>> dbfc43fc96157831bd47325129e5fba761974321
