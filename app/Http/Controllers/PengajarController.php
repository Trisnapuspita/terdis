<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function dashboard()
    {
        return view('pengajar/home');
    }

    public function nilai()
    {
        return view('pengajar/nilai/nilai');
    }

    public function shownilai()
    {
        return view('pengajar/nilai/shownilai');
    }
}
