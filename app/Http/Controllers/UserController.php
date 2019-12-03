<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\http\Requests;
use App\User;
use App\soal_user;
use App\Pilihan;

class UserController extends Controller
{
    public function shownilai($id)
    {
        $user = User::findOrFail($id);
        return view('siswa/nilai', ['user' => $user]);
    }

    public function shownilai_siswa($id)
    {
        $user = User::findOrFail($id);
        return view('siswa/nilai', ['user' => $user]);
    }



    public function nilai(Request $request, $idsoal, $iduser)
    {
        $pilihans = Pilihan::where('soal_id', $idsoal)->get();
        $jumlahsoal = $pilihans->count();
        //dd($request->jawaban1);
        //dd($pilihans[0]->opsiBenar);
        $a = [];
        $i = 1;
        foreach($pilihans as $question) {
            $string = 'jawaban';
            $string .= $i;
            $a[$i-1] = $request->$string;
            $i++;
        }
        $nilai = 0;
        for($i=0; $i<$jumlahsoal; $i++) {
            if($pilihans[$i]->opsiBenar == $a[$i]){
                $nilai = $nilai + 1;
            }
        }
        $nilai = ($nilai/$jumlahsoal)*100;
        soal_user::create([
            'user_id'   => $iduser,
            'soal_id'   => $idsoal,
            'nilai'     => $nilai,
        ]);
        return view('siswa/hasil', ['nilai' => $nilai, 'pilihans'=>$pilihans, 'jawaban' => $a]);
    }

}
