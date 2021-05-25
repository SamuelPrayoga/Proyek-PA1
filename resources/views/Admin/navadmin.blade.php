<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('Admin')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500&display=swap">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('Admin')}}/css/style.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="{{asset('Admin')}}/bootstrap/js/bootstrap.min.js"></script>
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Favicon and touch icons -->
</head>

<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Sidebar -->
        <nav class="sidebar">
            <!-- close sidebar menu -->
            <div class="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="logo">
                <h1>AEK SITUMANDI</h1>
            </div>
            <ul class="list-unstyled menu-elements">
                <li>
                    <a class="scroll-link"><i class="fas fa-user-cog"></i>Selamat Datang,  {{ Auth::user()->name }}</a>
                </li>
                <li>
                    <a class="scroll-link" href="/infowisata"><i class="fas fa-map-marked"></i>Data Wisata</a>
                </li>
                <li>
                    <a class="scroll-link" href="/datakomentar"><i class="fas fa-comment"></i>Komentar dan Saran</a>
                </li>
                <li>
                    <a class="scroll-link" href="/dataorganisasi"><i class="fas fa-sitemap"></i>Struktur Organisasi</a>
                </li>
                <li>
                    <a class="scroll-link" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     <i class="fas fa-sign-out-alt"></i>{{ __('Sign Out') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
                </li>
            </ul>
            <div class="dark-light-buttons">
                <a class="btn btn-primary btn-customized-4 btn-customized-dark" href="#" role="button">Dark</a>
                <a class="btn btn-primary btn-customized-4 btn-customized-light" href="#" role="button">Light</a>
            </div>

        </nav>
        <!-- End sidebar -->

        <!-- Dark overlay -->
        <div class="overlay"></div>

        <!-- Content -->
        <div class="content">

            <!-- open sidebar menu -->
            <a class="btn btn-light btn-customized open-menu" href="#" role="button">
                <i class="fas fa-align-left"></i> <span>MENU</span>
            </a>
                    <!-- Top content -->
                    <div class="top-content section-container" id="top-content">
                <div class="container ">
                    <div class="row">
                        <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                            <h1 class="wow fadeIn">Sistem Informasi Desa Wisata<br><strong>AEK SITUMANDI</strong></h1>
                            <div class="description wow fadeInLeft">
                                <h2>
                                    Hasil Kerjasama Kelurahan Hutabarat Partali Toruan - Del Institue of Technology (IT DEL)
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
