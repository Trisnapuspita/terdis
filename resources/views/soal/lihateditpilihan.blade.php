@extends('layouts.base')

@section('title')
Teras Diskusi | Edit Soal
@endsection

@section('open9')
active open
@endsection

@section('content')
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="/home">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="/home">Soal</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Edit Soal</span>
            </li>
        </ul>
    </div>

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
    <!-- END PAGE HEADER-->

    <div style="text-align:center">
        <a href="/pengajar/soal/pilihan/create/{{ $soal->id }}" class="btn btn-info btn-lg"><i class="fa fa-plus"></i>  Tambah Soal</a>&nbsp;
        <a href="/pengajar/soal/pilihan/create/{{ $soal->id }}" class="btn btn-success btn-lg"><i class="fa fa-upload"></i>  Import Soal Excel</a>&nbsp;
        <a href="/pengajar/soal/pilihan/create/{{ $soal->id }}" class="btn purple btn-lg"><i class="fa fa-download"></i>  Download Template Import Excel</a><br><br>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                    <i class="fa fa-pencil"></i>Edit Soal {{$soal->nm_soal}}</div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%" style="text-align:center">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th style="text-align:center">Soal</th>
                                <th class="min-tablet" style="text-align:center">Pilihan Jawaban</th>
                                <th style="text-align:center">Jawaban Benar</th>
                                <th style="text-align:center" class="min-tablet">Pembahasan</th>
                                <th style="text-align:center" class="min-tablet">&nbsp;</th>
                                <th style="text-align:center" class="min-tablet">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($soal->pilihans as $pilihan)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{ $pilihan->soal }} <br>
                                    <img src="{{asset('/storage/upload/' . $pilihan->gambar)}}" style="max-width: 80%; height: auto; " class="image-fluid" alt="">
                                </td>
                                <td>
                                    <p>
                                        a. {{ $pilihan->opsiA }} <br>
                                        b. {{ $pilihan->opsiB }} <br>
                                        c. {{ $pilihan->opsiC }} <br>
                                        d. {{ $pilihan->opsiD }} <br>
                                    </p>
                                </td>
                                <td>
                                    <p>{{ $pilihan->opsiBenar }}</p>
                                </td>
                                <td> <p>{{ $pilihan->pembahasan }}<br><img src="{{asset('/storage/upload/' . $pilihan->gambar_pembahasan)}}" style="max-width: 80%; height: auto; " class="image-fluid" alt=""></p>
                                </td>
                                <td style="text-align:center"><a  href="/pengajar/soal/pilihan/edit/{{$pilihan->id}}/{{$soal->id}}" class="btn blue">Edit</a></td>
                                <td style="text-align:center">
                                    <form action="/pengajar/soal/pilihan/delete/{{$pilihan->id}}/{{$soal->id}}"method="POST">
                                        <input type="submit" class="btn red" name="submit" value="Hapus" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
</div>
<!-- END CONTENT BODY -->
@endsection

@section('style')
<link href="{{asset('/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<script src="{{asset('/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
<script src="{{asset('/assets/pages/scripts/table-datatables-responsive.min.js')}}" type="text/javascript"></script>
@endsection
