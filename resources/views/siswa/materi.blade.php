@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Materi Kelas</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        @foreach($materis as $materi)
                        <tr>
                            <th width="600px"><a href="materi/{{ $materi->id }}">{{ $materi->nama }}</a></th>
                            <th><a href="/storage/upload/{{ $materi->file }}" download="{{ $materi->file }}" class="btn btn-danger btn-sm active">Download File</a></th>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
