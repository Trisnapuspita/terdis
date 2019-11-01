@extends('layouts.pengajar')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit soal: {{ $pilihan->soal }}</div>

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

                    <form action="/pengajar/soal/pilihan/{{$id}}/{{$no}}" class="form-group" enctype="multipart/form-data" method="POST">
                        <label for="pertanyaan">Pertanyaan:</label>
                        <textarea name="soal" class="form-control" cols="100" rows="2" required autofocus>{{ $pilihan->soal }}</textarea>
                                @if ($errors->has('soal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('soal') }}</strong>
                                    </span>
                                @endif <br>

                        
                        <label for="gambar">Gambar:</label> <br>
                        <img src="/storage/upload/{{$pilihan->gambar}}" style="max-width: 150px; height: auto; " class="image-fluid" alt="">
                        <input type="file" name="gambar" class="form-control">
                                @if ($errors->has('gambar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gambar') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="opsiA">Opsi A:</label>
                        <textarea name="opsiA" class="form-control" cols="100" rows="2" required autofocus>{{ $pilihan->opsiA }}</textarea>
                                @if ($errors->has('opsiA'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('opsiA') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="opsiB">Opsi B:</label>
                        <textarea name="opsiB" class="form-control" cols="100" rows="2" required autofocus>{{ $pilihan->opsiB }}</textarea>
                                @if ($errors->has('opsiB'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('opsiB') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="opsiC">Opsi C:</label>
                        <textarea name="opsiC" class="form-control" cols="100" rows="2" required autofocus>{{ $pilihan->opsiC }}</textarea>
                                @if ($errors->has('opsiC'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('opsiC') }}</strong>
                                    </span>
                                @endif <br>
                                
                        <label for="opsiD">Opsi D:</label>
                        <textarea name="opsiD" class="form-control" cols="100" rows="2" required autofocus>{{ $pilihan->opsiD }}</textarea>
                                @if ($errors->has('opsiD'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('opsiD') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="jawaban">Jawaban benar:</label>
                        <select name="jawaban" class="form-control" id="pilihanbenar">
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                        </select>
                                @if ($errors->has('jawaban'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jawaban') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="pembahasan">Pembahasan:</label>
                        <textarea name="pembahasan" class="form-control" cols="100" rows="2" required autofocus>{{ $pilihan->pembahasan }}</textarea>
                                @if ($errors->has('pembahasan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pembahasan') }}</strong>
                                    </span>
                                @endif <br>

                        <label for="gambar_pembahasan">Gambar Pembahasan:</label> <br>
                        <img src="/storage/upload/{{$pilihan->gambar_pembahasan}}" style="max-width: 150px; height: auto; "class="image-fluid" alt=""> 
                        <input type="file" name="gambar_pembahasan" class="form-control">
                                @if ($errors->has('gambar_pembahasan'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gambar_pembahasan') }}</strong>
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
