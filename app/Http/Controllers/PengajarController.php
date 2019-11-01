<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajarController extends Controller
{
    public function dashboard()
    {
        return view('pengajar/home');
    }
}
