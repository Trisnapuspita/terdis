@extends('layouts.pengajar')

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
                        <p class="text-danger">Error edit karena:</p>
                        <ul class="text-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form action="/materi/{{ $materi->id }}" class="form-group" method="POST" enctype="multipart/form-data">
                        <label for="kelas_id">Untuk Kelas:</label> <br>

                        @foreach ($kelas as $kelas)
                            <input type="checkbox" name="kelas[]" value='{{$kelas->id}}' @if($materi->kelas()->get()->contains($kelas->id)) checked @endif > {{$kelas->kelas}} <br>
                        @endforeach
                                @if ($errors->has('kelas_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelas_id') }}</strong>
                                    </span>
                                @endif <br>
                        
                        <label for="judul">Judul Materi:</label> <br>
                        <input type="text" name="judul" class="form-control" value="{{ $materi->nama }}" required autofocus>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="deskripsi">Deskripsi:</label> <br>
                        <textarea name="deskripsi" class="form-control" cols="100" rows="20" required autofocus>{{ $materi->deskripsi }}</textarea>
                                @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="file">File:</label> <br>
                        <input type="file" name="file" class="form-control" value="{{ $materi->file }}">
                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif <br>

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
