<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Doscom University</title>
    <meta name="description" content="Doscom University (DU) adalah kegiatan belajar mengajar yang berbentuk workshop dengan para dosen pengurus Doscom. DU tahun 2018 membuka kelas yaitu Linux, Pemrograman Mobile, Pemrograman Web, Jaringan Komputer, dan Multimedia. Masing-masing kelas terdapat beberapa pertemuan dengan jumlah peserta maksimal 35 orang/ kelas.">
    <link rel="shortcut icon" type="image/png" href="http://www.doscom.org/favicon.png" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600'
        rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">

    <!-- Bootstrap Material Design -->
    <link href="assetmaterial/css/bootstrap-material-design.min.css" rel="stylesheet">
    <!-- <link href="assetmaterial/css/style.css" rel="stylesheet"> -->
    <link href="assetmaterial/css/ripples.min.css" rel="stylesheet">

    <script type="text/javascript" src="{{ asset('/js/jquery.1.8.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-scrolltofixed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/wow.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/classie.js') }}"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .fa {
            padding: 15px;
            font-size: 30px;
            width: 55px;
            text-align: center;
            text-decoration: none;
            margin: 1px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-instagram {
            background: purple;
            color: white;
        }

        .fa-git {

            background: #3B5998;
            color: white;


        }
    </style>

</head>

<body>
    <!-- Modal -->
    <div id="modalfaq" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">FAQ</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <p>
                        1.Bagaimana saya bisa mendapatkan sertifikat ?
                        <br> Apakah saya bisa mendapatkan sertifikat jika saya tidak masuk ?
                        <br>
                        <b>
                            Peserta yang mendapat sertifikat adalah peserta yang hadir 2/3 dari jumlah kehadiran (Peserta hanya boleh ijin 1 kali dalam
                            3 pertemuan untuk mendapatkan sertifikat)
                            <br>
                    </p>
                    </b>
                    <br> 2.Bagaimana saya bisa mengikuti Doscom University ?
                    <br>

                    <b>
                        Anda dapat mendaftar melalui stand yang dibuka di gedung H atau bisa langsung ke camp Doscom gedung D Lantai 1 depan Kantin
                        D, atau juga bisa melalui website : www.doscom.org/university
                    </b>
                    <br>
                    <br> 3.Apakah syarat dalam mengikuti Doscom University ?
                    <br>

                    <b>
                        Apakah syarat dalam mengikuti Doscom University ? Secara umum tidak ada syarat khusus dalam mengikuti Doscom University,
                        yang perlu dipersiapkan adalah niat sungguh-sungguh dalam menuntut ilmu. Namun ada syarat khusus
                        yang harus ditempuh dalam mengikuti Doscom University kelas Game Development, yaitu peserta minimal
                        sudah mempelajari bahasa Pemrograman Java atau telah menguasai OOP (Object Oriented Programming)
                        / PBO (Pemrograman Berbasis Obyek) atau telah mengambil matakuliah OOP (Object Oriented Programming)
                        / PBO (Pemrograman Berbasis Obyek)
                    </b>
                    <br>
                    <br>

                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- Modal -->


    <div class="modal fade" id="modalLinux" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas
                        <b>Linux Fundamental</b>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Mengenal, Mengoprasikan Linux, Teriminal dan Membuat varian Linux sendiri (Remastering)
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat varian Linux sendiri dengan metode remastering.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                            <b> -</b>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Linux</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu / Tempat</th>
                                        <th>Senin /18:30-20:10 /D.3.L</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>19 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>26 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>2 April 2018</td>
                                    </tr>


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>

                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>

        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalMobile" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas
                        <b>Pemprograman Mobile</b>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">
                            Pengenalan OOP (Object Oriented Programming), Pengenalan tools untuk membuat aplikasi Android (Android Studio, AVD, Emulator),
                            Membuat tampilan Aplikasi di Android, Membuat aplikasi lebih interaktif.
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat aplikasi Android yang interaktif.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                            Mengerti dasar OOP (Object Oriented Programming)
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Mobile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu / Tempat</th>
                                        <th>Kamis / 18:30-20:10 /D.2.A</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>22 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>29 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>5 April 2018</td>
                                    </tr>


                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>
                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalWeb" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas
                        <b>Pemprograman Web</b>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">
                            Belajar HTML dan CSS dasar, Belajar menggunakan CSS Framework (Bootstrap), Belajar Backend dengan PHP, Berinteraksi dengan
                            database MySql.
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat Web Aplikasi Sederhana Dengan Php & Mysql
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                            HTML dan CSS (Dasar)
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Web</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu / Tempat</th>
                                        <th>Selasa/ 18:30-20:10 /D.3.L</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>20 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>27 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>3 April 2018</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>

                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalNetworking" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas
                        <b>Jaringan Komputer</b>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">
                            Cisco
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Ketrampilan</b>
                        </div>
                        <div class="col-md-9">
                            Menguasai Cisco
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Jaringan Komputer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu /Tempat</th>
                                        <th>Rabu /18:30-20:10 /D.3.L</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>21 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>28 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>4 April 2018</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>
                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="modalMultimedia" role="dialog">
        <div class="modal-dialog"> -->

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas
                        <b>Multimedia Inkscape</b>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">
                            Belajar basic 2D dengan menggunakan aplikasi Inkscape
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat Objek 2D sesuai dengan materi
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                            -
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Multimedia</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu /Tempat</th>
                                        <th>Kamis / 18:30-20:10 /D.3.L</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>22 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>29 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>5 April 2018</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>
                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>

        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalfemale" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas
                        <b>Female Dev</b>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">

                            Belajar HTML dan CSS dasar, Belajar menggunakan CSS Framework (Bootstrap)
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat Web Dengan Framework Bootstrap
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>FemaleDev</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu / Tempat</th>
                                        <th>Sabtu / 09:00-15:00 /D.2.A</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>7 April 2018</td>
                                    </tr>


                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>
                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalgodot" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kelas
                        <b>Game Development</b>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                            <b>Materi</b>
                        </div>
                        <div class="col-md-9">
                            Belajar Membuat Game Dengan Godot Game Engine
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-3">
                            <b>Proyek Akhir</b>
                        </div>
                        <div class="col-md-9">
                            Membuat Game Sederhana Dengan Godot Game Engine
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Syarat</b>
                        </div>
                        <div class="col-md-9">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <b>Jadwal</b>
                        </div>
                        <div class="col-md-9">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Kelas</th>
                                        <th>Game Development</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Hari / Waktu / Tempat</th>
                                        <th>Selasa / 18:30-20:10 /D.2.J</th>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 1</th>
                                        <td>20 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 2</th>
                                        <td>27 Maret 2018</td>
                                    </tr>
                                    <tr>
                                        <th>Pertemuan 3</th>
                                        <td>3 April 2018</td>
                                    </tr>



                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('daftar') }}" class="btn btn-default">Daftar</a>
                    <button type="button" class="btn " data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>



    <header class="header" id="header">
        <!--header-start-->
        <div class="container">
            <figure class="logo animated fadeInDown delay-07s">
                <a href="#">
                    <img src="{{ asset('images/logo-doscom.png')}}" alt="">
                </a>
            </figure>
            <h1 class="animated fadeInDown delay-07s"> Doscom University
                <br>
            </h1>
            <ul class="we-create animated fadeInUp delay-1s">
                <!-- <li>Kelas Pemrograman  di Semarang, Indonesia</li> -->
            </ul>
            <!-- <a class="link animated fadeInUp delay-1s servicelink" href="#service">Get Started</a> -->

            <a href="#service" class="btn btn-info btn-raised btn-lg">Get Started</a>
        </div>
    </header>
    <!--header-end-->

    <nav class="main-nav-outer" id="test">
        <!--main-nav-start-->
        <div class="container">
            <ul class="main-nav">
                <li>
                    <a href="#header">Home</a>
                </li>
                <li>
                    <a href="#service">About</a>
                </li>
                <li>
                    <a href="#program">Program</a>
                </li>
                <li class="small-logo">
                    <a href="#header">
                        <img src="{{ asset('images/logo-menu.png')}}" alt="">
                    </a>
                </li>
                <li>
                    <a href="#jadwal">Jadwal</a>
                </li>
                <li>
                    <a href="#team">Team</a>
                </li>
                <li>
                    <a href="#daftar">Contact</a>
                </li>
            </ul>
            <a class="res-nav_click" href="#">
                <i class="fa-bars"></i>
            </a>
        </div>
    </nav>
    <!--main-nav-end-->



    <section class="main-section" id="service">
        <!--main-section-start-->
        <div class="container">
            <h2>About</h2>
            <h6>Tentang Doscom University</h6>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
                    <div class="service-list">
                        <div class="service-list-col1">
                        </div>
                        <div class="service-list-col2">
                            <h3>Doscom University</h3>
                            <p>
                                <b>Doscom University (DU) adalah kegiatan belajar mengajar yang berbentuk workshop dengan para
                                    dosen pengurus Doscom. DU tahun 2018 membuka 7 kelas yaitu Linux, Pemrograman Mobile,
                                    Pemrograman Web, Jaringan Komputer, Multimedia Inkscape,Female Dev, Masing-masing kelas
                                    terdapat 3 pertemuan dengan jumlah peserta maksimal 35 orang/ kelas</b>
                                <br>


                        </div>
                    </div>



                </div>
                <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
                    <img src="{{ asset('images/Suasana-Doscom-University-Kelas-Web.jpg')}}" width="630px" alt="">
                </figure>

            </div>
        </div>
    </section>
    <!--main-section-end-->



    <section class="main-section alabaster" id="program">
        <!--main-section alabaster-start-->
        <div class="container">
            <div class="row">
                <figure class="col-lg-5 col-sm-4 wow fadeInLeft">
                    <img src="{{ asset('images/kelas.jpg')}}" width="420px" alt="">
                    <br>
                    <br>
                    <br>
                    <img src="{{ asset('images/kelas2.jpg')}}" width="420px" alt="">
                    <br>
                    <br>
                    <br>
                    <img src="{{ asset('images/Suasana-Doscom-University-Kelas-Web.jpg')}}" width="420px" alt="">

                </figure>
                <div class="col-lg-7 col-sm-8 featured-work">
                    <h2>Apa Yang Kita Lakukan?</h2>
                    <P class="padding-b">Beberapa Pilihan Program Yang Anda Bisa Ikuti</P>
                    <div class="featured-box">
                        <div class="featured-box-col1 wow fadeInRight delay-02s">
                            <!-- <i class="fa-magic"></i> -->
                            <img src="{{ asset('images/icon/5.png')}}" alt="">

                        </div>
                        <div class="featured-box-col2 wow fadeInRight delay-02s">
                            <h3> &nbsp Web Programming </h3>

                            <p>&nbsp Belajar HTML dan CSS dasar, Belajar menggunakan CSS Framework (Bootstrap),
                                <br> &nbsp Belajar Backend dengan PHP, Berinteraksi dengan database MySql. </p>

                            <br>
                            <a class="btn btn-raised btn-sm btn-info" data-toggle="modal" data-target="#modalWeb">Detail</a>

                        </div>
                    </div>

                    <div class="featured-box">
                        <div class="featured-box-col1 wow fadeInRight delay-02s">
                            <!-- <i class="fa-magic"></i> -->
                            <img src="{{ asset('images/icon/5.png')}}" alt="">

                        </div>
                        <div class="featured-box-col2 wow fadeInRight delay-02s">
                            <h3> &nbsp Female Dev </h3>

                            <p>&nbsp Belajar HTML dan CSS dasar, Belajar menggunakan CSS Framework (Bootstrap)
                                <br>
                                <a class="btn btn-raised btn-sm btn-info" data-toggle="modal" data-target="#modalfemale">Detail</a>

                        </div>
                    </div>


                    <div class="featured-box">
                        <div class="featured-box-col1 wow fadeInRight delay-04s">

                            <img src="{{ asset('images/icon/4.png')}}" alt="">
                        </div>
                        <div class="featured-box-col2 wow fadeInRight delay-04s">
                            <h3> &nbsp Mobile Programing </h3>
                            <p>&nbsp Pengenalan OOP (Object Oriented Programming), Pengenalan tools untuk
                                <br> &nbsp membuat aplikasi Android (Android Studio, AVD, Emulator), Membuat tampilan
                                <br> &nbsp Aplikasi di Android, Membuat aplikasi lebih interaktif.
                            </p>
                            <a class="btn btn-raised btn-sm btn-info" data-toggle="modal" data-target="#modalMobile">Detail</a>


                        </div>
                    </div>


                    <div class="featured-box">
                        <div class="featured-box-col1 wow fadeInRight delay-06s">

                            <img src="{{ asset('images/icon/6.png')}}" alt="">

                        </div>


                        <div class="featured-box-col2 wow fadeInRight delay-06s">
                            <h3>&nbsp Linux Fundamental </h3>
                            <p>&nbsp Mengenal, Mengoprasikan Linux, Teriminal dan Membuat varian Linux sendiri
                                <br> &nbsp (Remastering)
                            </p>

                            <br>

                            <a class="btn btn-raised btn-sm btn-info" data-toggle="modal" data-target="#modalLinux">Detail</a>


                        </div>

                    </div>

                    <div class="featured-box">
                        <div class="featured-box-col1 wow fadeInRight delay-04s">
                            <img src="{{ asset('images/icon/3.png')}}" alt="">


                        </div>
                        <div class="featured-box-col2 wow fadeInRight delay-04s">
                            <h3>&nbsp Jaringan Komputer </h3>
                            <p>&nbsp Belajar Dasar Dasar Cisco </p>

                            <br>
                            <a class="btn btn-raised btn-sm btn-info" data-toggle="modal" data-target="#modalNetworking">Detail</a>


                        </div>
                    </div>

                    <div class="featured-box">
                        <div class="featured-box-col1 wow fadeInRight delay-04s">
                            <img src="{{ asset('images/icon/1.png')}}" alt="">


                        </div>
                        <div class="featured-box-col2 wow fadeInRight delay-04s">
                            <h3>&nbsp Multimedia Inkscape </h3>
                            <p>&nbsp Belajar basic 2D dengan menggunakan aplikasi Inkscape </p>
                            <br>
                            <a class="btn btn-raised btn-sm btn-info" data-toggle="modal" data-target="#modalMultimedia">Detail</a>


                        </div>
                    </div>


                    <div class="featured-box">
                        <div class="featured-box-col1 wow fadeInRight delay-04s">
                            <img src="{{ asset('images/icon/2.png')}}" alt="">


                        </div>
                        <div class="featured-box-col2 wow fadeInRight delay-04s">
                            <h3>&nbsp Game Development </h3>
                            <p>&nbsp Belajar Membuat game Dengan Godot Engine </p>
                            <br>
                            <a class="btn btn-raised btn-sm btn-info" data-toggle="modal" data-target="#modalgodot">Detail</a>


                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>
    <section class="main-section" id="service">
        <!--main-section-start-->
        <div class="container">
            <h2>Sisa Kuota</h2>
            <h6>kuota kelas tersedia</h6>
            <div class="row" style="text-align: center">
                @foreach($kelas as $kls)
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card" style="width:70%;margin:15%">
                        <div class="card-body">
                            <div class="card-header">
                                <h3 class=" text-primary" style="text-transform:capitalize;font-weight: bold">{{\App\Kelas::convKelas($kls->nama)}}</h3>
                            </div>
                            <h5 class="card-title">sisa kuota :</h5>
                            @if($kls->jumlah == 0 || $kls->status == 'penuh')
                            <p href="{{route('getDaftar')}}" class="card-link btn btn-sm btn-raised btn-warning">Kelas Penuh</p>
                            @else
                            <p class="card-text">
                                <h1>{{$kls->jumlah - 5}}</h1>
                            </p>
                            <a href="{{route('getDaftar')}}" class="card-link btn btn-sm btn-raised btn-success">Daftar</a>

                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="main-section alabaster" id="jadwal">
        <div class="container text-center">
            <h2>
                <strong>JADWAL</strong>
            </h2>
            <br>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Kelas</th>
                                <th>Pemrograman Mobile</th>
                                <th>Multimedia Inkscape</th>
                                <th>Jaringan Komputer</th>
                                <th>Pemrograman Web</th>
                                <th>Game Development</th>
                                <th>Linux</th>
                                <th>Female Dev</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <th>Hari / Waktu</th>
                                <th>Kamis
                                    <br> 18:30 – 20:10</th>
                                <th>Kamis
                                    <br> 18:30 – 20:10</th>
                                <th>Rabu
                                    <br> 18:30 – 20:10</th>
                                <th>Selasa
                                    <br> 18:30 – 20:10</th>
                                <th>Selasa
                                    <br> 18:30 – 20:10</th>
                                <th>Senin
                                    <br> 18:30 – 20:10</th>
                                <th>Sabtu
                                    <br> 09:00 – 15:00</th>
                            </tr>
                            <tr>
                                <th>Pertemuan 1</th>
                                <td> 22 Maret 2018</td>
                                <td> 22 Maret 2018</td>
                                <td> 21 Maret 2018</td>
                                <td> 20 Maret 2018</td>
                                <td> 20 Maret 2018</td>
                                <td> 19 Maret 2018</td>
                                <td rowspan="3" style="text-align: center;vertical-align: middle"> 7 April 2018</td>
                            </tr>
                            <tr>
                                <th>Pertemuan 2</th>
                                <td> 29 Maret 2018</td>
                                <td> 29 Maret 2018</td>
                                <td> 28 Maret 2018</td>
                                <td> 27 Maret 2018</td>
                                <td> 27 Maret 2018</td>
                                <td> 26 Maret 2018</td>
                            </tr>
                            <tr>
                                <th>Pertemuan 3</th>
                                <td> 5 April 2018</td>
                                <td> 5 April 2018</td>
                                <td> 4 April 2018</td>
                                <td> 3 April 2018</td>
                                <td> 3 April 2018</td>
                                <td> 2 April 2018</td>
                            </tr>
                            <tr>
                                <th>Tempat</th>
                                <td>D.2.A</td>
                                <td>D.3.L</td>
                                <td>D.3.L</td>
                                <td>D.3.L</td>
                                <td>D.2.J</td>
                                <td>D.3.L</td>
                                <td>D.2.A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <!--main-section team-start-->
    <div class="container">
        <h2 style="margin-top:50px">team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s">
                    <div class="team-leader-shadow">
                        <a href="#"></a>
                    </div>
                    <img src="{{ asset('images/rizki.jpg')}}" width="300px" alt="">
                    <ul>
                        <li>
                            <a href="https://twitter.com/rzlnx" class="fa fa-twitter"></a>
                        </li>
                        <!-- <li><a href="https://facebook.com/rizki.mufti" class="fa fa-facebook"></a></li> -->
                        <li>
                            <a href="https://github.com/rizkimufti" class="fa fa-git"></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/rzlnx.id" class="fa fa-instagram"></a>
                        </li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Rizki Mufti Ilmawan</h3>
                <span class="wow fadeInDown delay-03s">Instruktur Web Programming</span>
            </div>
            <div class="team-leader-box clearfix">
                <div class="team-leader  wow fadeInDown delay-06s">
                    <div class="team-leader-shadow">
                        <a href="#"></a>
                    </div>
                    <img src="{{ asset('images/farah.jpg')}}" width="300px" alt="">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-git"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Farah Luthfi Oktarina</h3>
                <span class="wow fadeInDown delay-06s">Instruktur Female Dev</span>
            </div>

            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s">
                    <div class="team-leader-shadow">
                        <a href="#"></a>
                    </div>
                    <img src="{{asset('images/afti.jpeg')}}" width="300px" alt="">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-git"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Aftiani Wahyuastuti</h3>
                <span class="wow fadeInDown delay-06s">Instruktur Mobile Programming</span>
            </div>


            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s">
                    <div class="team-leader-shadow">
                        <a href="#"></a>
                    </div>
                    <img src="{{ asset('images/okta.jpeg')}}" width="300px" alt="">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-git"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Okta Arif Cahyawan</h3>
                <span class="wow fadeInDown delay-06s">Instruktur Linux Fundamental</span>
            </div>


            <div class="team-leader-box">
                <div class="team-leader  wow fadeInDown delay-06s">
                    <div class="team-leader-shadow">
                        <a href="#"></a>
                    </div>
                    <img src="{{ asset('images/bayu.jpeg')}}" alt="">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-git"></a>
                        </li>
                        <li>
                            <a href="#" class="fa fa-instagram"></a>
                        </li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Muhammad Bayu Hermawan</h3>
                <span class="wow fadeInDown delay-06s">Instruktur Jaringan Komputer</span>
            </div>





            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-09s">
                    <div class="team-leader-shadow">
                        <a href="#"></a>
                    </div>
                    <img src="{{ asset('images/abas.jpeg')}}" alt="">
                    <ul>
                        <li>
                            <a href="#" class="fa fa-twitter"></a>
                        </li>
                        <!-- <li><a href="https://facebook.com/" class="fa fa-facebook"></a></li> -->
                        <li>
                            <a href="https://github.com/" class="fa fa-git"></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/" class="fa fa-instagram"></a>
                        </li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Ahmad Basir</h3>
                <span class="wow fadeInDown delay-09s">Instruktur Multimedia Inkscape</span>
            </div>


            <div class="team-leader-box1">
                <center>

                    <div class="team-leader  wow fadeInDown delay-06s">
                        <div class="team-leader-shadow">
                            <a href="#"></a>
                        </div>
                        <img src="{{ asset('images/reno.png')}}" width="300px" alt="">
                        <ul>
                            <li>
                                <a href="#" class="fa fa-twitter"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-git"></a>
                            </li>
                            <li>
                                <a href="#" class="fa fa-instagram"></a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="wow fadeInDown delay-06s">Reno Kurniawan</h3>
                    <span class="wow fadeInDown delay-06s">Instruktur Game Development </span>
            </div>


        </div>
    </div>

    </section>



    <!--main-section team-end-->
    <section class="business-talking" id="daftar" style="padding-bottom:50px">
        <!--business-talking-start-->
        <div class="container">
            <h2>DAFTAR DOSCOM UNIVERSITY </h2>
            <!-- <a class="link animated fadeInUp delay-1s servicelink" href="{{ url('daftar') }}">DAFTAR</a> -->
            <a href="{{ url('daftar') }}" class="btn btn-info btn-raised btn-lg">Daftar</a>
            <button type="button" class="btn btn-success btn-raised btn-lg" data-toggle="modal" data-target="#modalfaq">FAQ</button>

        </div>
    </section>
    <!--business-talking-end-->


    <div class="container">
        <section class="main-section contact" id="contact">

            <div class="row">
                <div class="col-lg-6 col-sm-12 wow fadeInLeft">
                    <div class="contact-info-box address clearfix">
                        <h3>
                            <i class=""></i>Address</h3>
                        <span>: Universitas Dian Nuswantoro</span>
                    </div>

                    <div class="contact-info-box email clearfix">
                        <h3>
                            <i class=""></i>email</h3>
                        <span>: sekretariat@doscom.org</span>
                    </div>
                    <div class="contact-info-box phone clearfix">
                        <h3>
                            <i class=""></i>Phone</h3>
                        <span>: - 085225779549 (Dian Arima)
                            <br> &nbsp - 087700058738 (Dinia Kurnia)

                        </span>

                    </div>

                    <!-- <div class="contact-info-box hours clearfix">
						<h3><i class="fa-clock-o"></i>Hours:</h3>
						<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> 1pm - 6pm<br><strong>Saturday - Sunday:</strong> Closed</span>
					</div> -->
                    <center style="margin:40px">
                        <a href="https://facebook.com/doscomedia" class="fa fa-facebook"></a>
                        <a href="https://twitter.com/doscomedia" class="fa fa-twitter"></a>
                        <a href="https://instagram.com/doscomedia" class="fa fa-instagram"></a>
                        <center>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInUp delay-05s">
                    <iframe width="100%" height="350px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.51506429899533!2d110.40929010353575!3d-6.980860011903814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4c1c405183%3A0x3943842b992e87fb!2sCafetaria+udinus!5e0!3m2!1sid!2sid!4v1518617683734"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </section>
    </div>

    <footer class="footer" style="width:100%" style="background-color: #2682ed">>
        <div class="container">
            <div class="footer-logo">
                <a href="#">
                    <img src="{{ asset('images/logo-doscom.png')}}" alt="">
                </a>
            </div>
            <span class="copyright">&copy;Doscom University. All Rights Reserved</span>

        </div>
        <br>

    </footer>


    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#test').scrollToFixed();
            $('.res-nav_click').click(function () {
                $('.main-nav').slideToggle();
                return false

            });

        });
    </script>

    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100
        });
        wow.init();
    </script>


    <script type="text/javascript">
        $(window).load(function () {

            $('.main-nav li a, .servicelink').bind('click', function (event) {
                var $anchor = $(this);

                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 102
                }, 1500, 'easeInOutExpo');
                /*
                if you don't want to use the easing effects:
                $('html, body').stop().animate({
                	scrollTop: $($anchor.attr('href')).offset().top
                }, 1000);
                */
                if ($(window).width() < 768) {
                    $('.main-nav').hide();
                }
                event.preventDefault();
            });
        })
    </script>

    <script type="text/javascript">
        $(window).load(function () {


            var $container = $('.portfolioContainer'),
                $body = $('body'),
                colW = 375,
                columns = null;


            $container.isotope({
                // disable window resizing
                resizable: true,
                masonry: {
                    columnWidth: colW
                }
            });

            $(window).smartresize(function () {
                // check if columns has changed
                var currentColumns = Math.floor(($body.width() - 30) / colW);
                if (currentColumns !== columns) {
                    // set new column count
                    columns = currentColumns;
                    // apply width to container manually, then trigger relayout
                    $container.width(columns * colW)
                        .isotope('reLayout');
                }

            }).smartresize(); // trigger resize to set container width
            $('.portfolioFilter a').click(function () {
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({

                    filter: selector,
                });
                return false;
            });

        });
    </script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

</body>

</html>