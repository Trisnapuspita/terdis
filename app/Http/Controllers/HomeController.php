<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
     public function bimbel()
    {
        return view('bimbel');
    }
    
     public function tentangkami()
    {
        return view('tentangkami');
    }
    
    public function kontak()
    {
        return view('kontak');
    }
    
    public function contact_bimbel()
    {
        return view('contactbimbel');
    }
    
    public function sukses_daftar()
    {
        return view('suksesdaftar');
    }
    
    public function daftar_bimbel()
    {
        return view('daftarbimbel');
    }
    
    public function chat()
    {
        return view('chat');
    }
    
    public function sukses_contact()
    {
        return view('suksescontact');
    }

}
