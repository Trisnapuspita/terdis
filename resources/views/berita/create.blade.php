@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buat berita:</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($errors)>0)
                        <p class="text-danger">Eror karena:</p>
                        <ul class="text-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form action="/beritas" class="form-group" method="POST" enctype="multipart/form-data">
                        <label for="judul_berita">Judul Berita:</label> <br>
                        <input type="text" name="judul_berita" class="form-control" value="{{ old('judul_berita') }}" required autofocus>
                                @if ($errors->has('judul_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul_berita') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="isi_berita">Isi Berita:</label> <br>
                        <textarea name="isi_berita" class="form-control" cols="100" rows="20" required autofocus>{{ old('isi_berita') }}</textarea>
                                @if ($errors->has('isi_berita'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isi_berita') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="foto">Foto:</label> <br>
                        <input type="file" name="foto" class="form-control" required autofocus>
                                @if ($errors->has('foto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('foto') }}</strong>
                                    </span>
                                @endif <br>

                        <input type="submit" class="btn btn-primary" name="submit" value="Create">
                        {{ csrf_field() }}
                    </form>
                    <button onclick="goBack()" class="btn btn-info">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
