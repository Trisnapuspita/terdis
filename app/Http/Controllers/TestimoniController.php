<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\http\Requests;
use App\Testimoni;
use App\Misi;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('info/testimoni', ['testimonis' => $testimonis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('info/testimonicreate');
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
            'nama'      => 'required',
            'status'    => 'required',
            'pesan'     => 'required',
            'foto'      => 'required|mimes:jpeg,jpg,png',
        ]);

        $filename = $request->foto->getClientOriginalName();
        $request->foto->storeAs('public/upload', $filename);

        Testimoni::create([
            'nama'      => $request->nama,
            'status'    => $request->status,
            'pesan'     => $request->pesan,
            'foto'      => $filename,
        ]);
        return redirect('/testimoni')->with('message', 'Berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('info/testimoniedit', ['testimoni' => $testimoni]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
            'nama'      => 'required',
            'status'    => 'required',
            'pesan'     => 'required',
            'foto'      => 'required|mimes:jpeg,jpg,png',
        ]);

        $filename = $request->foto->getClientOriginalName();
        $request->foto->storeAs('public/upload', $filename);

        Testimoni::find($id)->update([
            'nama'      => $request->nama,
            'status'    => $request->status,
            'pesan'     => $request->pesan,
            'foto'      => $filename,
        ]);
        return redirect('/testimoni')->with('message', 'Berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::find($id);
        $testimoni->delete();
        return redirect('/testimoni')->with('message', 'Berhasil dihapus!');
    }

    public function welcome()
    {
        $testimonis = Testimoni::all();
        $misis = Misi::all();
        return view('welcome', ['testimonis' => $testimonis, 'misis' => $misis]);
    }

    public function tentangkami()
    {
        $misis = Misi::all();
        return view('tentangkami', ['misis' => $misis]);
    }

}
