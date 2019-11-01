@extends('layouts.admin')

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
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                        <tr>
                            <th>Waktu Mendaftar</th>
                            <th>id</th>
                            <th>Nama Lengkap</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($pendaftarans as $pendaftar)
                        <tr>
                            <td>{{ $pendaftar->created_at }}</td>
                            <td>{{ $pendaftar->id }}</td>
                            <td>{{ $pendaftar->nama }}</td>
                            <td>
                                <a href="/admin/data-pendaftar/{{ $pendaftar->id }}" class="btn btn-primary btn-sm">Lihat</a>
                            </td>
                        </tr>
                    @endforeach
                        </tbody>
                    </table>
                    <button onclick="goBack()" class="btn btn-info">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
