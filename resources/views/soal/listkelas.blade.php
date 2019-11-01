@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Soal {{$kelas->kelas}}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="list-group">
                        @foreach($kelas->soals as $soal)
                            <a href="/soal/{{$soal->id}}" class="list-group-item">{{ $soal->nm_soal }}</a>
                        @endforeach
                    </div>
                    <button onclick="goBack()" class="btn btn-primary">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
