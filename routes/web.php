<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if(!Auth::check()) {
        return redirect('/login');
    }
    return view('welcome');
});

Auth::routes();

Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index'])->name('daftar');
Route::resource('user',UserController::class);