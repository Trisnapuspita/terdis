<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\http\Requests;
use App\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function info_home()
    {
        return view('/info/home');
    }
    
    public function index()
    {
        $profil = Profil::findOrFail(1);
        return view('info/profil', ['profil' => $profil]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'email'         => 'required',
            'telepon'       => 'required',
            'alamat'        => 'required',
            'waktu_kerja'   => 'required',
        ]);

        Profil::find($id)->update([
            'email'         => $request->email,
            'telepon'       => $request->telepon,
            'alamat'        => $request->alamat,
            'waktu_kerja'   => $request->waktu_kerja,
        ]);
        return redirect('/admin/informasi')->with('message', 'Kontak berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function editprofil2()
    {
        $profil = Profil::findOrFail(1);
        return view('info/profil2', ['profil' => $profil]);
    }

    public function updateprofil2(Request $request)
    {
        $this->validate($request, [
            'tentang_kami'  => 'required',
            'pendahuluan'   => 'required',
            'sejarah'       => 'required',
        ]);

        Profil::find(1)->update([
            'tentang_kami'  => $request->tentang_kami,
            'pendahuluan'   => $request->pendahuluan,
            'sejarah'       => $request->sejarah,
        ]);
        return redirect('/admin/informasi')->with('message', 'Profil berhasil di edit!');
    }

    public function editvisi()
    {
        $profil = Profil::findOrFail(1);
        return view('info/visi', ['profil' => $profil]);
    }

    public function updatevisi(Request $request)
    {
        $this->validate($request, [
            'visi'  => 'required',
        ]);

        Profil::find(1)->update([
            'visi'  => $request->visi,
        ]);
        return redirect('/admin/informasi')->with('message', 'Visi berhasil di edit!');
    }
}
