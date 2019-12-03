<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use App\Kelas;

class adminController extends Controller
{
    public function dashboard()
    {
        $users = User::where('id','>', 1)->get();
        $count = User::count()-1;
        $kelas = Kelas::all();
        return view('admin/home', ['users' => $users, 'count' => $count, 'kelass' => $kelas]);
    }

    public function data_guru()
    {
        $user = User::where('role','=', 3)->get();
        return view('admin/data-guru', ['user' => $user]);
    }

    public function data_siswa()
    {
        $user = User::where('role','=', 1)->get();
        return view('admin/data-siswa', ['user' => $user]);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin')->with('message', 'User berhasil di hapus!');
    }

    public function destroy_siswa($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/data-siswa')->with('message', 'Data siswa berhasil di hapus!');
    }

    public function destroy_guru($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/data-guru')->with('message', 'Data guru berhasil di hapus!');
    }

    public function infohome()
    {
        return view('/info/home');
    }
}
