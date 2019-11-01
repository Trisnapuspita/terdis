@extends('layouts.pengajar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Buat Soal:</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($errors)>0)
                        <p class="text-danger">Eror create because:</p>
                        <ul class="text-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form action="/pengajar/soal" class="form-group" method="POST">
                        <label for="nm_soal">Nama soal:</label>
                        <input type="text" name="nm_soal" class="form-control" value="{{ old('nm_soal') }}" required autofocus>
                                @if ($errors->has('nm_soal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nm_soal') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="kelas_id">Untuk Kelas:</label> <br>
                        @foreach ($kelas as $kelas)
                            <input type="checkbox" name="kelas[]" value='{{$kelas->id}}' > {{$kelas->kelas}} <br>
                        @endforeach
                                @if ($errors->has('kelas_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelas_id') }}</strong>
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
