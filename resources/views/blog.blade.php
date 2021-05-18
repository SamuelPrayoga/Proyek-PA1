<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Desa Wisata Aek Situmandi-Tempat Wisata</title>
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
              <li><a href="/strukturorganisasi">Struktur Organisasi</a></li>
              <li><a href="/testimonials">Komentar dan Saran</a></li>
            </ul>
          </li>
          <li><a href="/visidanmisi">Visi & Misi</a></li>
          <li><a href="/blog" class="active">Tempat Wisata</a></li>
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
          <h2>Tempat Wisata</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Tempat Wisata</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            @foreach($wisata as $wisatas)
            <article class="entry">

              <div class="entry-img">
                <img src="img/blog/{{$wisatas->GambarWisata}}" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="/blog-single">{{$wisatas->NamaWisata}}</a>
              </h2>
              <div class="entry-content">
                <p>
                    {{$wisatas->InfoWisata}}
                </p>
              </div>

            </article>
            @endforeach<!-- End blog entry -->
            <div class="d-flex justify-content-center">
                {{ $wisata->links() }}
            </div>
          </div><!-- End blog entries list -->
          <div class="col-lg-4">
            <div class="sidebar">
                <h3 class="sidebar-title"><center>KALENDER INDONESIA <br>& <br> HARI BESAR</center></h3>
                <div>
                    <iframe src="https://calendar.google.com/calendar/embed?height=700&amp;wkst=1&amp;bgcolor=%23d9232d&amp;ctz=Asia%2FJakarta&amp;src=c2FtdWVsdGFtcHVib2xvbjIwMDJAZ21haWwuY29t&amp;src=aWQuaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23039BE5&amp;color=%230B8043&amp;showTitle=0&amp;showNav=1&amp;showPrint=0&amp;hl=id" style="border:solid 1px #777" width="363" height="700" frameborder="0" scrolling="yes"></iframe>
                </div>
                <p><a href="/">Sistem Informasi Desa Wisata Aek Situmandi</a></p>
            </div><!-- End sidebar -->
          </div><!-- End blog sidebar -->
        </div>

      </div>
    </section><!-- End Blog Section -->

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
