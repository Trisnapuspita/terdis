@extends('layouts.base')

@section('style')
<link href="../assets/pages/css/profile-2.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <!-- BEGIN PAGE CONTENT BODY -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="page-content-inner">
                <div class="profile">
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-3" style="text-align:center">
                                        <ul class="list-unstyled profile-nav">
                                            <li>
                                                <img src="../../img/biner.jpeg"
                                                    width="200">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-8 profile-info" style="text-align:center">
                                            <br>
                                            <h1 class="font-green sbold uppercase">Biner UNJ
                                            </h1>
                                            <p>
                                                <i class="fa fa-map-marker"></i> Gedung Sasana Wirasakti <br>
                                                <i class="fa fa-calendar"></i>  Sabtu, 11-11-2011<br>
                                                <i class="fa fa-clock-o"></i> 10.00-12.00<br>
                                                <i class="fa fa-money"></i> Rp100.000<br> </p>
                                                <div><br>
                                                    <h5><strong>Status</strong></h5>
                                                    <a class="btn btn-danger">Menunggu Pembayaran</a>
                                                </div>
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-4" style="text-align:center">
                                            <!-- BEGIN PROFILE SIDEBAR -->
                                            <div class="profile-sidebar">
                                                <!-- PORTLET MAIN -->
                                                <div class="portlet light profile-sidebar-portlet ">
                                                    <!-- SIDEBAR BUTTONS -->
                                                    <div class="profile-userbuttons">
                                                        <label style="font-weight:bold">Upload Bukti Pembayaran</label><br>
                                                        <input type="file" class="btn btn-info">
                                                    </div>
                                                    <!-- END SIDEBAR BUTTONS -->
                                                </div>
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-3" style="text-align:center">
                                        <ul class="list-unstyled profile-nav">
                                            <li>
                                                <img src="../../img/biner.jpeg"
                                                    width="200">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-8 profile-info" style="text-align:center">
                                            <br>
                                            <h1 class="font-green sbold uppercase">Biner UNJ
                                            </h1>
                                            <p>
                                                <i class="fa fa-map-marker"></i> Gedung Sasana Wirasakti <br>
                                                <i class="fa fa-calendar"></i>  Sabtu, 11-11-2011<br>
                                                <i class="fa fa-clock-o"></i> 10.00-12.00<br>
                                                <i class="fa fa-money"></i> Rp100.000<br> </p>
                                                <div><br>
                                                    <h5><strong>Status</strong></h5>
                                                    <a class="btn btn-info">Menunggu Konfirmasi</a>
                                                </div>
                                        </div>
                                        <!--end col-md-8-->
                                        <div class="col-md-4" style="text-align:center">
                                            <!-- BEGIN PROFILE SIDEBAR -->
                                            <div class="profile-sidebar">
                                                <!-- PORTLET MAIN -->
                                                <div class="portlet light profile-sidebar-portlet ">
                                                    <!-- SIDEBAR BUTTONS -->
                                                    <div class="profile-userbuttons">
                                                        <label style="font-weight:bold">Upload Bukti Pembayaran</label><br>
                                                        <input type="file" class="btn btn-info">
                                                    </div>
                                                    <!-- END SIDEBAR BUTTONS -->
                                                </div>
                                            </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-3" style="text-align:center">
                                        <ul class="list-unstyled profile-nav">
                                            <li>
                                                <img src="../../img/biner.jpeg"
                                                    width="200">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-8 profile-info" style="text-align:center">
                                            <br>
                                            <h1 class="font-green sbold uppercase">Biner UNJ
                                            </h1>
                                            <p>
                                                <i class="fa fa-map-marker"></i> Gedung Sasana Wirasakti <br>
                                                <i class="fa fa-calendar"></i>  Sabtu, 11-11-2011<br>
                                                <i class="fa fa-clock-o"></i> 10.00-12.00<br>
                                                <i class="fa fa-money"></i> Rp100.000<br> </p>
                                                <div><br>
                                                    <h5><strong>Status</strong></h5>
                                                    <a class="btn btn-success">Diterima</a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT BODY -->
    <!-- END CONTENT BODY -->
</div>
@endsection

@section('script')
<script src="../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script>
@endsection
