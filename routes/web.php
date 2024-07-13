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

Route::get('/', function () {
    if(!Auth::check()) {
        return redirect('/login');
    }
return view('welcome');
});

Auth::routes();

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/donasi', [App\Http\Controllers\DonasiController::class, 'index'])->name('donasi');
Route::get('/tentangkami', [App\Http\Controllers\TentangkamiController::class, 'index'])->name('tentangkami');
Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index'])->name('daftar');