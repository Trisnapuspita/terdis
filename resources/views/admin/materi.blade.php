@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Materi</div>

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

                    <p style="text-align: center"><a href="/admin/create" class="btn btn-success btn-lg active">Tambah Materi</a></p>

                    <table class="table table-bordered">
                        @foreach($materis as $materi)
                        <tr>
                            <th width="600px">{{ $materi->nama }}</th>
                            <th><a href="/materi/{{ $materi->id }}/edit" class="btn btn-primary btn-sm active">Edit</a></th>
                            <th>
                                <form action="/materi/{{ $materi->id }}" method="POST">
                                <input type="submit" class="btn btn-danger btn-sm active" name="submit" value="Delete" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">
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
