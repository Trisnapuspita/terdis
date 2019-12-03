<div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->

        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            @if (Auth::user()->isAdmin())
            <li class="nav-item start @yield('open1')">
                <a href="/home" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item @yield('open2')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-users"></i>
                    <span class="title">Data User</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="/register2" class="nav-link ">
                            <i class="fa fa-plus-square"></i>
                            <span class="title">Buat User Baru</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin/data-pendaftar" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Daftar Pendaftar</span>
                            <span class="badge badge-success">10</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin/data-guru" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Daftar Guru</span>
                            <span class="selected"></span>
                            <span class="badge badge-success">50</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin/data-siswa" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Daftar Siswa</span>
                            <span class="badge badge-success">150</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @yield('open0')">
                <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-file-text"></i>
                        <span class="title">Mata Pelajaran</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item start ">
                            <a href="/matapelajaran/create" class="nav-link ">
                                <i class="icon-plus"></i>
                                <span class="title">Buat Mata Pelajaran</span>
                            </a>
                        </li>
                        <li class="nav-item start ">
                            <a href="/matapelajaran" class="nav-link ">
                                <i class="icon-list"></i>
                                <span class="title">Daftar Mata Pelajaran</span>
                            </a>
                        </li>
                    </ul>
            </li>
            <li class="nav-item @yield('open3')">
                <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-institution"></i>
                        <span class="title">Kelas</span>
                        <span class="selected"></span>
                        <span class="arrow open"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="nav-item start ">
                            <a href="/kelas/create" class="nav-link ">
                                <i class="icon-plus"></i>
                                <span class="title">Buat Kelas Baru</span>
                            </a>
                        </li>
                        <li class="nav-item start ">
                            <a href="/kelas" class="nav-link ">
                                <i class="icon-list"></i>
                                <span class="title">Daftar Kelas</span>
                                <span class="badge badge-success">51</span>
                            </a>
                        </li>
                    </ul>
            </li>
            <li class="nav-item @yield('open4')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-newspaper-o"></i>
                    <span class="title">Berita</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="/beritas/create" class="nav-link ">
                            <i class="icon-plus"></i>
                            <span class="title">Buat Berita Baru</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/admin/berita" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Daftar Berita</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @yield('open5')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-info-circle"></i>
                    <span class="title">Informasi</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="/profil2" class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Profil</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/visi" class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Visi</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Misi</span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start ">
                                <a href="/misi/create" class="nav-link ">
                                    <i class="icon-plus"></i>
                                    <span class="title">Buat Misi Baru</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="/misi" class="nav-link ">
                                    <i class="icon-list"></i>
                                    <span class="title">Daftar Misi</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item start ">
                            <a href="/profil" class="nav-link ">
                                <i class="fa fa-chevron-circle-right"></i>
                                <span class="title">Kontak</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                    <li class="nav-item start ">
                        <a href="/testimoni" class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Testimoni</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start ">
                                <a href="/testimoni/create" class="nav-link ">
                                    <i class="icon-plus"></i>
                                    <span class="title">Buat Testimoni Baru</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="/testimoni" class="nav-link ">
                                    <i class="icon-list"></i>
                                    <span class="title">Daftar Testimoni</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item @yield('open6')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-archive"></i>
                    <span class="title">Guru Digital</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="/gurudigital/info/create" class="nav-link ">
                            <i class="icon-plus"></i>
                            <span class="title">Informasi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Program</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="/gurudigital/program/create" class="nav-link ">
                                    <i class="icon-plus"></i>
                                    <span class="title">Buat Program Baru</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/gurudigital/programs" class="nav-link ">
                                    <i class="icon-list"></i>
                                    <span class="title">Daftar Program</span>
                                    <span class="badge badge-success">51</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item start ">
                        <a class="nav-link ">
                            <i class="fa fa-chevron-circle-right"></i>
                            <span class="title">Berita</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item start ">
                                <a href="/gurudigital/event/create" class="nav-link ">
                                    <i class="icon-plus"></i>
                                    <span class="title">Buat Berita Baru</span>
                                </a>
                            </li>
                            <li class="nav-item start ">
                                <a href="/gurudigital/events" class="nav-link ">
                                    <i class="icon-list"></i>
                                    <span class="title">Daftar Berita</span>
                                    <span class="badge badge-success">51</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            @elseif(Auth::user()->isPengajar())
            <li class="nav-item start @yield('open1')">
                <a href="/home" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item @yield('open8')">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-book"></i>
                    <span class="title">Materi</span>
                    <span class="selected"></span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="/pengajar/create" class="nav-link ">
                            <i class="icon-plus"></i>
                            <span class="title">Buat Materi Baru</span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="/pengajar/materi" class="nav-link ">
                            <i class="icon-list"></i>
                            <span class="title">Daftar Materi</span>
                            <span class="badge badge-success">51</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @yield('open9')">
                <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-archive"></i>
                <span class="title">Soal</span>
                <span class="selected"></span>
                <span class="arrow open"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="/pengajar/soal/create" class="nav-link ">
                        <i class="icon-plus"></i>
                        <span class="title">Buat Soal Baru</span>
                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="/pengajar/soal" class="nav-link ">
                        <i class="icon-list"></i>
                        <span class="title">Daftar Soal</span>
                        <span class="badge badge-success">51</span>
                    </a>
                </li>
            </ul>
            </li>
            <li class="nav-item @yield('open10')">
                <a href="/lihatnilai/1" class="nav-link nav-toggle">
                    <i class="icon-pencil"></i>
                    <span class="title">Nilai</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item @yield('open11')">
                <a href="/chat" class="nav-link nav-toggle">
                    <i class="fa fa-comment-o"></i>
                    <span class="title">Chat</span>
                    <span class="arrow"></span>
                </a>
            </li>
            @else
            <li class="nav-item @yield('open1')">
                <a href="/home" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item @yield('open13')">
                <a href="/materi" class="nav-link nav-toggle">
                    <i class="fa fa-book"></i>
                    <span class="title">Materi</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item @yield('open14')">
                <a href="/soal" class="nav-link nav-toggle">
                    <i class="fa fa-archive"></i>
                    <span class="title">Soal</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item @yield('open15')">
                <a href="/nilai/{{ Auth::user()->id }}" class="nav-link nav-toggle">
                    <i class="icon-pencil"></i>
                    <span class="title">Nilai</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item @yield('open16')">
                <a href="/chat" class="nav-link nav-toggle">
                    <i class="fa fa-comment-o"></i>
                    <span class="title">Chat</span>
                    <span class="arrow"></span>
                </a>
            </li>
            @endif
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
