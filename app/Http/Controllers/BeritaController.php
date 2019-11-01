<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\http\Requests;
use App\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::all(); 
        return view('kegiatan', ['beritas' => $beritas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_berita'  => 'required',
            'isi_berita'    => 'required',
            'foto'          => 'required|mimes:jpeg,jpg,png',
        ]);

        $filename = $request->foto->getClientOriginalName();
        $request->foto->storeAs('public/upload', $filename);
        
        Berita::create([
            'judul_berita'  => $request->judul_berita,
            'isi_berita'    => $request->isi_berita,
            'foto'          => $filename,
        ]);
        return redirect('/admin/berita')->with('message', 'Berita berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::find($id);

        if(!$berita)
        abort(404);

        return view('kegiatan3', ['berita' => $berita]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);

        if(!$berita)
        abort(404);

        return view('berita/edit', ['berita' => $berita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul_berita'  => 'required',
            'isi_berita'    => 'required',
            'foto'          => 'required|mimes:jpeg,jpg,png',
        ]);

        $filename = $request->foto->getClientOriginalName();
        $request->foto->storeAs('public/upload', $filename);

        Berita::find($id)->update([
            'judul_berita'  => $request->judul_berita,
            'isi_berita'    => $request->isi_berita,
            'foto'          => $filename,
        ]);
        return redirect('/admin/berita')->with('message', 'Berita berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/admin/berita')->with('message', 'Materi berhasil di hapus!');
    }

    public function beritaadm()
    {
        $beritas = Berita::all();
        return view('berita/lihatadmin', ['beritas' => $beritas]);
    }
}
