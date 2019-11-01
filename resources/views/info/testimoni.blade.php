@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Teras Diskusi</div>

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

                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="600px" style="text-align: center">Testimoni</th>
                                <th> </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimonis as $testimoni)
                            <tr>
                                <th scope="col">{{ $loop->iteration }}</th>
                                <th style="font-weight: normal">{{ $testimoni->nama }}</th>
                                <th><a href="/testimoni/{{ $testimoni->id }}" class="btn btn-primary btn-sm">Edit</a></th>
                                <th>
                                    <form action="/testimoni/{{ $testimoni->id }}" method="POST">
                                    <input type="submit" class="btn btn-danger btn-sm" name="submit" value="Hapus" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p style="margin-left: 235px"><a href="/testimoni/create" class="btn btn-primary btn-md">Tambah</a>
                    <a class="btn btn-info" href="/admin/informasi">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
