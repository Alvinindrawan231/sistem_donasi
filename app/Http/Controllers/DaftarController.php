<?php

namespace App\Http\Controllers;
use App\Models\Daftar;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
        $daftars = Daftar::all();
        return view('daftar.index', compact('daftars'));
    }
}