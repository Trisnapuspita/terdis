@extends('layouts.pengajar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit || {{ $soal->nm_soal }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <a href="/pengajar/soal" class="btn btn-info btn-md" role="button">Back</a>

                    <p style="text-align: center"><a href="/pengajar/soal/pilihan/create/{{ $soal->id }}" class="btn btn-success btn-lg active">Tambah Soal</a></p>

                    <table class="table table-bordered">
                    @foreach($soal->pilihans as $pilihan)
                        <tr>
                            <th width="600px"><form>
                                {{ $loop->iteration }}. {{ $pilihan->soal }} <br>
                                <img src="/storage/upload/{{$pilihan->gambar}}" style="max-width: 80%; height: auto; " class="image-fluid" alt="">
                                <ul>
                                    a. {{ $pilihan->opsiA }} <br>
                                    b. {{ $pilihan->opsiB }} <br>
                                    c. {{ $pilihan->opsiC }} <br>
                                    d. {{ $pilihan->opsiD }} <br>
                                </ul>
                            </form>
                                <p style="white-space: pre-line">Pembahasan:<br>{{ $pilihan->pembahasan }}</p>
                                <p><img src="/storage/upload/{{$pilihan->gambar_pembahasan}}" style="max-width: 80%; height: auto; " class="image-fluid" alt=""></p>
                                <p>Jawaban: {{ $pilihan->opsiBenar }}</p>
                            </th>
                            <th><a href="/pengajar/soal/pilihan/edit/{{$pilihan->id}}/{{$soal->id}}" class="btn btn-primary btn-sm active">Edit</a></th>
                            <th>
                                <form action="/pengajar/soal/pilihan/delete/{{$pilihan->id}}/{{$soal->id}}" method="POST">
                                <input type="submit" class="btn btn-danger btn-sm active" name="submit" value="Delete" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
