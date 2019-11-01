@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center"> <strong>{{$materi->nama}}</strong> </div>                {{-- TODO tanya trisna ini jadinya gimana--}}

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/storage/upload/{{ $materi->file }}">{{ $materi->file }}</a>
                    {{-- <p style="text-align: center; font-weight: bold">{{ $materi->nama }}</p> --}}
                    <p style="white-space: pre-line">{{ $materi->deskripsi }}</p>
                    <button onclick="goBack()" class="btn btn-primary">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
