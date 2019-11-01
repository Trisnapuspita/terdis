<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kelas;

class RegistrationController extends Controller
{
    public function create()
    {
        $kelas = Kelas::all();
        return view('admin/register', ['kelas' => $kelas]);
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required',
        ]);
        
        User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => $request->password,
            'role'      => $request->role,
            'kelas_id'  => $request->kelas,
        ]);
        return redirect('/admin')->with('message', 'Berhasil mendaftarkan user!');
    }
}
