<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Desa Wisata Aek Situmandi-Struktur Organisasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/">Wisata aek situmandi</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/about">About Us</a></li>
              <li><a href="/strukturorganisasi" class="active">Struktur Organisasi</a></li>
              <li><a href="/testimonials">Komentar dan Saran</a></li>
            </ul>
          </li>
          <li><a href="/visidanmisi">Visi & Misi</a></li>
          <li><a href="/blog">Tempat Wisata</a></li>
          <li><a href="/contact">Contact Us</a></li>
          <li><a href="/sign-in" class="getstarted">Login Admin</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Kelurahan Hutabarat Partali Toruan</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Struktur Organisasi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/slide/kantor.jpg)">
          <div class="carousel-container">
            <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Horas ...</span></h2>
              <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Struktur Organisasi</span></h2>
              <h2 class="animate__animated animate__fadeInUp">Kantor Kelurahan Partali Toruan</h2>
            </div>
          </div>
        </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
     <!-- ======= Testimonials Section ======= -->
     <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%"
                cellspacing="0">
                <thead>
                    <center><h2>STRUKTUR ORGANISASI KELURAHAN PARTALI TORUAN  KABUPATEN TAPANULI UTARA</h2></center><br>
                    <tr>
                        <th><center>Nama</center></th>
                        <th><center>Jabatan</center></th>
                        <th><center>Status</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Foto</center></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($struktur as $s)
                    <tr>
                        <td>{{$s->nama}}</td>
                        <td>{{$s->jabatan}}</td>
                        <td>{{$s->status}}</td>
                        <td>{{$s->alamat}}</td>
                        <td><img src="{{url('img/organisasi/'.$s->gambar)}}" width="200px" height="220px" style=border-radius:5% alt=""></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Kelompok 10 PA 1 IT Del</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Kelompok 10 PA 1 </a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>
