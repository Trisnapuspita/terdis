@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hasil</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="text-align: center; font-size:xx-large;">Nilai : {{$nilai}}</p>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Soal dan Jawaban benar</th>
                                <th>Jawaban Anda</th>
                            </tr>
                        </thead>
                    @foreach($pilihans as $pilihan)
                        <tr>
                            <th width="600px"><form>
                                {{ $loop->iteration }}. {{ $pilihan->soal }} <br>
                                <img src="/storage/upload/{{$pilihan->gambar}}" style="max-width: 150px; height: auto; " class="image-fluid" alt="">
                                <ul>
                                    a. {{ $pilihan->opsiA }} <br>
                                    b. {{ $pilihan->opsiB }} <br>
                                    c. {{ $pilihan->opsiC }} <br>
                                    d. {{ $pilihan->opsiD }} <br>
                                </ul>
                            </form>
                                <p style="white-space: pre-line">Pembahasan:<br>{{ $pilihan->pembahasan }}</p>
                                <p> <img src="/storage/upload/{{$pilihan->gambar_pembahasan}}" style="max-width: 150px; height: auto; " class="image-fluid" alt=""></p>
                                <p>Jawaban: {{ $pilihan->opsiBenar }}</p>
                            </th>
                            <th>
                                {{ $jawaban[$loop->index] }}
                            </th>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
