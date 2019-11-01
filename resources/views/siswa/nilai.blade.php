@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nilai {{ $user->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Waktu Mengerjakan</th>
                                <th>Nama soal</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($user->soals as $soal)
                            <tr>
                                <td>{{ $soal->pivot->created_at }}</td>
                                <td>{{ $soal->nm_soal }}</td>
                                <td>{{ $soal->pivot->nilai }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
