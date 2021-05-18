<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Desa Wisata Aek Situmandi-Komentar dan Saran</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="/" class="logo me-auto"><img src="img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>

          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/about">About Us</a></li>
              <li><a href="/strukturorganisasi">Struktur Organisasi</a></li>
              <li><a href="/testimonials" class="active">Komentar dan Saran</a></li>
            </ul>
          </li>
          <li><a href="/visidanmisi">Visi & Misi</a></li>
          <li><a href="/blog">Tempat Wisata</a></li>
          <li><a href="contact">Contact Us</a></li>
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
          <h2>Komentar dan Saran</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Komentar dan Saran</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="row">
          @foreach($testimonials as $testimonial)
          <div class="col-lg-6">
            <div class="testimonial-item">
              <img src="img/testimonial/{{$testimonial->Gambar}}" class="testimonial-img" alt="">
              <h3>{{$testimonial->Username}}</h3>
              <h4>Email : {{$testimonial->Email}}</h4><br>
              <h4>Subjek : {{$testimonial->SubjekKomentar}}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{$testimonial->IsiKomentar}}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p><br>
              <h4>Alamat : {{$testimonial->UserAddress}}</h4>
              <h4>Tanggal Komentar : {{$testimonial->TanggalKomentar}}</h4>
            </div>
            <div class="testimonial-item"><i class="fas fa-reply"></i>  Reply for : {{$testimonial->Email}}
                <textarea class="form-control" name="reply" rows="4" readonly>{{$testimonial->reply}}</textarea>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Testimonials Section -->
    <div class="d-flex justify-content-center">
        {{ $testimonials->links() }}
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
