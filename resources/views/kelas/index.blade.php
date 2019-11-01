@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Kelas</div>

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

                    <p style="text-align: center"><a href="/kelas/create" class="btn btn-success btn-lg">Tambah Kelas</a></p>

                    <table class="table table-bordered">
                        @foreach($kelass as $kelas)
                        <tr>
                            <th width="600px">{{ $kelas->kelas }}</th>
                            <th><a href="/kelas/{{ $kelas->id }}" class="btn btn-primary btn-sm">Edit</a></th>
                            <th>
                                <form action="/kelas/{{ $kelas->id }}" method="POST">
                                <input type="submit" class="btn btn-danger btn-sm" name="submit" value="Delete" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
