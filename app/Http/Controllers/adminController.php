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

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin')->with('message', 'User berhasil di hapus!');
    }

    public function infohome()
    {
        return view('/info/home');
    }
}
