@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Soal</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <p style="text-align: center; font-weight: bold">{{ $soal->nm_soal }}</p>
                    @foreach($soal->pilihans as $pilihan)
                    <table>
                        <tr>
                            <th style="width:25px; vertical-align: text-top; font-weight: normal">{{ $loop->iteration}}.</th>
                            <th style="white-space: pre-line; font-weight: normal">{{ $pilihan->soal }}</th>   
                        </tr>
                        <th></th>
                        <th><img src="/storage/upload/{{$pilihan->gambar}}" style="max-width: 15%; height: auto; " alt=""></th>
                    </table>
                    <form action="/soal/{{$soal->id}}/{{ Auth::user()->id }}" class="form-group" method="POST">

                        <ul>
                            <div class="radio">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}" value="a">a. {{
                                    $pilihan->opsiA }}</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}" value="b">b. {{
                                    $pilihan->opsiB }}</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}" value="c">c. {{
                                    $pilihan->opsiC }}</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="jawaban{{ $loop->iteration }}" value="d">d. {{
                                    $pilihan->opsiD }}</label>
                            </div>
                        </ul>
                        @endforeach
                        <p style="text-align: center"><input type="submit" class="btn btn-primary btn-lg" name="jawab"
                                value="Jawab" onclick="return confirm('Selesai?')"></p>
                        {{ csrf_field() }}
                    </form>
                    <button onclick="goBack()" class="btn btn-info">Back</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection