<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\http\Requests;
use App\Subject;
use App\Soal;
use App\Kelas;
use Auth;
//#TODO buat relation many to many soal sama kelas

class SoalController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $kelas = Kelas::find($user->kelasid());

        if(!$kelas)
        abort(404);

        return view('soal/listkelas', ['kelas' => $kelas]);
    }

    public function show($id)
    {
        $soal = Soal::find($id);
        $user = Auth::user();
        $kelas = Kelas::find($user->kelasid());

        if(!$soal)
        abort(404);

        if ($soal->kelas()->get()->contains($kelas)) {
            return view('soal/isi', ['soal' => $soal]);
        }

        abort(403);
    }

    public function showeditpilihan($id)
    {
        $soal = Soal::find($id);

        if(!$soal)
        abort(404);

        return view('soal/lihateditpilihan', ['soal' => $soal]);
    }

    public function viewadm()
    {
        $soal = Soal::all();
        return view('soal/viewadmin', ['soals' => $soal]);
    }

    public function create()
    {
        $kelas = Kelas::all();
        $mapel = Subject::all();
        return view('soal/createjudul', ['kelas' => $kelas, 'mapel' => $mapel]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nm_soal'   => 'required',
            'kelas'  => 'required',
        ]);

        $soal = Soal::create([
            'nm_soal'      => $request->nm_soal,
        ]);
        $soal->kelas()->attach($request->kelas);
        return redirect('/pengajar/soal')->with('message', 'Soal berhasil ditambah!');
    }

    public function editnama($id)
    {
        $kelas = Kelas::all();
        $soal = Soal::find($id);

        if(!$soal)
        abort(404);

        return view('soal/editnama', ['soal' => $soal, 'kelas' => $kelas]);
    }

    public function updatenama(Request $request, $id)
    {
        $this->validate($request, [
            'nm_soal'      => 'required',
            'kelas'  => 'required',
        ]);

        $soal = Soal::find($id);
        $soal->update([
            'nm_soal'      => $request->nm_soal,
        ]);
        $soal->kelas()->sync($request->kelas);
        return redirect('/pengajar/soal')->with('message', 'Nama soal berhasil di edit!');
    }

    public function destroy($id)
    {
        $soal = Soal::find($id);
        $soal->delete();
        return redirect('/pengajar/soal')->with('message', 'Soal berhasil di hapus!');
    }

    //untuk pilihan gandanya

    public function createpg($id)
    {
        return view('soal/buatpilihanbaru', ['id' => $id]);
    }

    public function storepg($id, Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'soal'   => 'required',
            'gambar' => 'image',
            'opsiA'   => 'required',
            'opsiB'   => 'required',
            'opsiC'   => 'required',
            'jawaban'   => 'required',
            'pembahasan'   => 'required',
            'gambar_pembahasan' => 'image',
        ]);
        $filename = null;
        $filename1 = null;

        if($request->gambar != null) {
            $filename = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/upload', $filename);
        }
        if($request->gambar_pembahasan != null) {
            $filename1 = $request->gambar_pembahasan->getClientOriginalName();
            $request->gambar_pembahasan->storeAs('public/upload', $filename1);
        }

        $soal = Soal::find($id);
        $soal->pilihans()->create([
            'soal'  => $request->soal,
            'gambar' => $filename,
            'opsiA'  => $request->opsiA,
            'opsiB'  => $request->opsiB,
            'opsiC'  => $request->opsiC,
            'opsiD'  => $request->opsiD,
            'opsiBenar'  => $request->jawaban,
            'pembahasan'   => $request->pembahasan,
            'gambar_pembahasan' => $filename1
        ]);

        return redirect('/pengajar/soal/pilihan/'.$id)->with('message', 'Soal berhasil ditambah!');
    }
}
