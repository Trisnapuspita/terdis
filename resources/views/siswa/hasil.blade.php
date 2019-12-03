@extends('layouts.base')

@section('title')
Teras Diskusi | Materi
@endsection

@section('open14')
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
                <span>Hasil</span>
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
    <div class="row" style="text-align:center">
        <div class="col-md-12">
            <label class="label label-success" style="font-size:20pt; font-weight:bold">Nilai :  {{$nilai}}</label>
        </div> <br> <br>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-info-circle"></i></div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="min-phone-l">Soal</th>
                                <th class="min-tablet">Pembahasan</th>
                                <th class="min-tablet">Jawaban Benar</th>
                                <th class="min-tablet">Jawaban Anda</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1 @endphp
                            @foreach($pilihans as $pilihan)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$pilihan->soal}}<br>
                                    <img src="/storage/upload/{{$pilihan->gambar}}" style="max-width: 150px; height: auto; " class="image-fluid" alt="">
                                    <p>
                                        a. {{ $pilihan->opsiA }} <br>
                                        b. {{ $pilihan->opsiB }} <br>
                                        c. {{ $pilihan->opsiC }} <br>
                                        d. {{ $pilihan->opsiD }} <br>
                                    </p>
                                </td>
                                <td>
                                    <p>{{ $pilihan->pembahasan }}</p>
                                    <p> <img src="/storage/upload/{{$pilihan->gambar_pembahasan}}" style="max-width: 150px; height: auto; " class="image-fluid" alt="">
                                    </p>
                                </td>
                                <td><p>{{ $pilihan->opsiBenar }}</p>
                                </td>
                                <td>
                                    <p>{{ $jawaban[$loop->index] }}</p>
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
<link href="../../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('script')
<script src="../../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<script src="../../assets/pages/scripts/table-datatables-responsive.min.js" type="text/javascript"></script>
@endsection

