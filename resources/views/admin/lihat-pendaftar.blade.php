@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Data Pendaftar</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                            <tr>
                                <th width="150px">Nama</th>
                                <th>: {{ $pendaftar->nama }}</th>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <th>: {{ $pendaftar->jenis_kelamin }}</th>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <th>: {{ $pendaftar->tempat_lahir }}</th>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <th>: {{ $pendaftar->tanggal_lahir }}</th>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <th>: {{ $pendaftar->alamat }}</th>
                            </tr>
                            <tr>
                                <th>Nomor HP</th>
                                <th>: {{ $pendaftar->no_hp }}</th>
                            </tr>
                            <tr>
                                <th>E-Mail</th>
                                <th>: {{ $pendaftar->e_mail }}</th>
                            </tr>
                            <tr>
                                <th>Asal Sekolah</th>
                                <th>: {{ $pendaftar->asal_sekolah }}</th>
                            </tr>
                            <tr>
                                <th>Kelas</th>
                                <th>: {{ $pendaftar->kelas }}</th>
                            </tr>
                            <tr>
                                <th>Program</th>
                                <th>: {{ $pendaftar->program }}</th>
                            </tr>
                    </table>
                    
                    <button onclick="goBack()" class="btn btn-info">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
