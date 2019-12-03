@extends('layouts.base')

@section('open1')
active open
@endsection

@section('title')
Teras Diskusi | Dashboard
@endsection

@if (Auth::user()->isAdmin())
@section('content')

        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h1 class="page-title"> Admin Dashboard
            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index-2.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                        <div class="visual">
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="500">0</span>
                            </div>
                            <div class="desc"> Konfirmasi Pendaftaran </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="500">0</span> </div>
                            <div class="desc"> Siswa  </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="549">0</span>
                            </div>
                            <div class="desc"> Guru </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                        <div class="visual">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="3">0</span> </div>
                            <div class="desc"> Acara yang akan datang <br> <strong>Guru Digital</strong> </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                                <span class="caption-helper">weekly stats...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_statistics_loading">
                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                            <div id="site_statistics_content" class="display-none">
                                <div id="site_statistics" class="chart"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-share font-red-sunglo hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Revenue</span>
                                <span class="caption-helper">monthly stats...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_activities_loading">
                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                            <div id="site_activities_content" class="display-none">
                                <div id="site_activities" style="height: 228px;"> </div>
                            </div>
                            <div style="margin: 20px 0 10px 30px">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-success"> Revenue: </span>
                                        <h3>1000</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-info"> Tax: </span>
                                        <h3>1000</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-danger"> Shipment: </span>
                                        <h3>1000</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-warning"> Orders: </span>
                                        <h3>10000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
@endsection

@elseif (Auth::user()->isPengajar())

@section('content')

        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h1 class="page-title"> Selamat datang, {{Auth::user()->name}}!
            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index-2.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                        <div class="visual">
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="500">0</span>
                            </div>
                            <div class="desc"> Konfirmasi Pendaftaran </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="500">0</span> </div>
                            <div class="desc"> Siswa  </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="549">0</span>
                            </div>
                            <div class="desc"> Guru </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                        <div class="visual">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="3">0</span> </div>
                            <div class="desc"> Acara yang akan datang <br> <strong>Guru Digital</strong> </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                                <span class="caption-helper">weekly stats...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_statistics_loading">
                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                            <div id="site_statistics_content" class="display-none">
                                <div id="site_statistics" class="chart"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-share font-red-sunglo hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Revenue</span>
                                <span class="caption-helper">monthly stats...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_activities_loading">
                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                            <div id="site_activities_content" class="display-none">
                                <div id="site_activities" style="height: 228px;"> </div>
                            </div>
                            <div style="margin: 20px 0 10px 30px">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-success"> Revenue: </span>
                                        <h3>1000</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-info"> Tax: </span>
                                        <h3>1000</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-danger"> Shipment: </span>
                                        <h3>1000</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-warning"> Orders: </span>
                                        <h3>10000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
@endsection

@else

@section('content')

        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
        <h1 class="page-title"> Selamat datang, {{Auth::user()->name}}!
            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index-2.html">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Dashboard</span>
                    </li>
                </ul>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24">
                    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                        <div class="visual">
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="7">0</span>
                            </div>
                            <div class="desc"> Kelas yang diikuti </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-24">
                    <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="50">0</span> </div>
                            <div class="desc"> Paket soal yang sudah dikerjakan  </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-bar-chart font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Site Visits</span>
                                <span class="caption-helper">weekly stats...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_statistics_loading">
                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                            <div id="site_statistics_content" class="display-none">
                                <div id="site_statistics" class="chart"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
                <div class="col-lg-6 col-xs-12 col-sm-12">
                    <!-- BEGIN PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-share font-red-sunglo hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Revenue</span>
                                <span class="caption-helper">monthly stats...</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div id="site_activities_loading">
                                <img src="../assets/global/img/loading.gif" alt="loading" /> </div>
                            <div id="site_activities_content" class="display-none">
                                <div id="site_activities" style="height: 228px;"> </div>
                            </div>
                            <div style="margin: 20px 0 10px 30px">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-success"> Revenue: </span>
                                        <h3>1000</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-info"> Tax: </span>
                                        <h3>1000</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-danger"> Shipment: </span>
                                        <h3>1000</h3>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                                        <span class="label label-sm label-warning"> Orders: </span>
                                        <h3>10000</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PORTLET-->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
@endsection

@endif

