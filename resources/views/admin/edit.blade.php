@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit materi: {{ $materi->nama }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($errors)>0)
                        <p class="text-danger">error edit because:</p>
                        <ul class="text-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form action="/materi/{{ $materi->id }}" class="form-group" method="POST" enctype="multipart/form-data">
                        <label for="nama">Judul Materi:</label> <br>
                        <input type="text" name="nama" class="form-control" value="{{ $materi->nama }}"> <br>
                        <label for="deskripsi">Deskripsi:</label> <br>
                        <textarea name="deskripsi" class="form-control" cols="100" rows="20">{{ $materi->deskripsi }}</textarea> <br>
                        <label for="file">File:</label> <br>
                        <input type="file" name="file" class="form-control" value="{{ $materi->file }}"> <br>

                        <input type="submit" class="btn btn-primary" name="submit" value="Edit" onclick="return confirm('Apakah Anda yakin untuk mengedit?')">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                    </form>
                    <button onclick="goBack()" class="btn btn-info">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
