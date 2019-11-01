@extends('layouts.pengajar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Nama Soal</div>

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

                    <form action="/soal/{{ $soal->id }}" class="form-group" method="POST">
                        <label for="nama">Nama Soal:</label> <br>
                        <input type="text" name="nm_soal" class="form-control" value="{{ $soal->nm_soal }}" required autofocus>
                                @if ($errors->has('nm_soal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nm_soal') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="kelas_id">Untuk Kelas:</label> <br>
                        @foreach ($kelas as $kelas)
                            <input type="checkbox" name="kelas[]" value='{{$kelas->id}}' @if($soal->kelas()->get()->contains($kelas->id)) checked @endif > {{$kelas->kelas}} <br>
                        @endforeach
                                @if ($errors->has('kelas_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelas_id') }}</strong>
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
