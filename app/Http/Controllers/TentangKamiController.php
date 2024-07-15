<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    /**
     * Display the "Tentang Kami" page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('tentangkami.index');
    }
}
