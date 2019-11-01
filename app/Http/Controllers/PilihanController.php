<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\http\Requests;
use App\Pilihan;

class PilihanController extends Controller
{
    public function edit($id, $no)
    {
        $pilihan = Pilihan::find($id);

        if(!$pilihan)
        abort(404);

        return view('soal/editpg', ['pilihan' => $pilihan, 'id'=>$id, 'no'=>$no]);
    }

    public function update(Request $request, $id, $no)
    {
        $this->validate($request, [
            'soal'      => 'required',
            'gambar'    => 'image',
            'opsiA'     => 'required',
            'opsiB'     => 'required',
            'opsiC'     => 'required',
            'opsiD'     => 'required',
            'jawaban'   => 'required',
            'pembahasan'   => 'required',
            'gambar_pembahasan' => 'image',
        ]);
        $filename = null;
        $filename1 = null;
        $pilihan = Pilihan::find($id);
        
        if($request->gambar != null) {
            $filename = $request->gambar->getClientOriginalName();
            $request->gambar->storeAs('public/upload', $filename);
        }else {
            $filename = $pilihan->gambar;
        }
        if($request->gambar_pembahasan != null) {
            $filename1 = $request->gambar_pembahasan->getClientOriginalName();
            $request->gambar_pembahasan->storeAs('public/upload', $filename1);  
        }else {
            $filename1 = $pilihan->gambar_pembahasan;
        }
        $pilihan->update([
            'soal'      => $request->soal,
            'gambar'    => $filename,
            'opsiA'     => $request->opsiA,
            'opsiB'     => $request->opsiB,
            'opsiC'     => $request->opsiC,
            'opsiD'     => $request->opsiD,
            'opsiBenar'   => $request->jawaban,
            'pembahasan'   => $request->pembahasan,
            'gambar_pembahasan' => $filename1,
        ]);
        return redirect('/pengajar/soal/pilihan/'.$no)->with('message', 'Soal berhasil di edit!');
    }

    public function destroy($id, $no)
    {
        $pilihan = Pilihan::find($id);
        $pilihan->delete();
        return redirect('/pengajar/soal/pilihan/'.$no)->with('message', 'Soal berhasil di hapus!');
    }
}
