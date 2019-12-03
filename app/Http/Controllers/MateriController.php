<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\http\Requests;
use App\Materi;
use App\Kelas;
use App\Subject;
use Auth;
//#TODO  Buat relation many to many materi sama kelas
class MateriController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $kelas = Kelas::find($user->kelasid());

        if(!$kelas)
        abort(404);

        return view('siswa/materi2', ['kelas' => $kelas]);
    }

    public function show($id)
    {
        $materi = Materi::find($id);
        $user = Auth::user();
        $kelas = Kelas::find($user->kelasid());
        // return $kelas;

        if(!$materi)
        abort(404);

        if ($materi->kelas()->get()->contains($kelas)) {
            return view('siswa/materiid', ['materi' => $materi]);
        }

        abort(403);
    }

    public function materiadm()
    {
        $materis = Materi::all();

        return view('pengajar/materi/materi', ['materis' => $materis]);
    }

    public function create()
    {
        $mapel = Subject::all();
        $kelas = Kelas::all();
        return view('pengajar/materi/create', ['kelas' => $kelas, 'mapel' => $mapel]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'      => 'required',
            'deskripsi' => 'required',
            'file'      => 'required|mimes:pdf,doc,docx,jpeg,jpg,png,mp4,mkv,flv',
            'kelas'     => 'required',
            'mapel'     => 'required'
        ]);

        $filename = $request->file->getClientOriginalName();
        $request->file->storeAs('public/upload', $filename);

        $materi = Materi::create([
            'nama'      => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file'      => $filename,
        ]);

        $materi->kelas()->attach($request->kelas);
        $materi->subjects()->attach($request->mapel);
        return redirect('/pengajar/materi')->with('message', 'Materi berhasil ditambah!');
    }

    public function edit($id)
    {
        $kelas = Kelas::all();
        $materi = Materi::find($id);
        $mapel = Subject::all();

        if(!$materi)
        abort(404);

        return view('pengajar/materi/edit', ['materi' => $materi, 'kelas' => $kelas, 'mapel' => $mapel]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul'      => 'required',
            'deskripsi' => 'required',
            'file'      => 'mimes:pdf,doc,docx,jpeg,jpg,png,mp4,mkv,flv',
            'kelas'     => 'required',
            'mapel'     => 'required'
        ]);

        $materi = Materi::find($id);
        if($request->file == null) {
            $materi->update([
                'nama'      => $request->judul,
                'deskripsi' => $request->deskripsi,
                ]);
            } else {
                $filename = $request->file->getClientOriginalName();
                $request->file->storeAs('public/upload', $filename);

                $materi->update([
                    'nama'      => $request->judul,
                    'deskripsi' => $request->deskripsi,
                    'file'      => $filename,
                ]);
        }
        $materi->kelas()->sync($request->kelas);
        $materi->subjects()->sync($request->mapel);
        return redirect('/pengajar/materi')->with('message', 'Materi berhasil di edit!');
    }

    public function destroy($id)
    {
        $materi = Materi::find($id);
        $materi->delete();
        return redirect('/pengajar/materi')->with('message', 'Materi berhasil di hapus!');
    }
}
