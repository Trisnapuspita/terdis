@extends('layouts.base')

@section('title')
Teras Diskusi | Daftar Program
@endsection

@section('open6')
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
                <span>Program</span>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Daftar Program</span>
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
    <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Daftar Program </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="text-align:center">No</th>
                                    <th style="text-align:center">Gambar</th>
                                    <th style="text-align:center">Nama Program</th>
                                    <th style="text-align:center">Deskripsi</th>
                                    <th style="text-align:center">&nbsp;</th>
                                    <th style="text-align:center">&nbsp;</th>
                                    <th style="text-align:center">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i=1 @endphp
                                <tr style="text-align:center">
                                    <td>{{$i++}}</td>
                                    <td><img src="../../img/biner.jpeg" width="100px"></td>
                                    <td>Seminar Pendidikan</td>
                                    <td>
                                        <p>Sabtu, 12-10-2019 <br>
                                        Pukul 12.00-14.00 <br>
                                        Di Gedung Sasana Wirasakti</p>
                                    </td>
                                    <td><a href="/lihatpendaftar" class="btn btn-success">Lihat Pendaftar</a></td>
                                    <td><a href="/program/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action="/" method="POST">
                                        <input type="submit" class="btn btn-danger" name="submit" value="Hapus" onclick="return confirm('Apakah Anda yakin untuk menghapus?')">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
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

