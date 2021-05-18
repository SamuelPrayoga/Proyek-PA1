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
          <li><a href="/blog">Tempat Wisata</a></li>
          <li><a href="/contact" class="active">Contact Us</a></li>
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
          <h2>Contact Us</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2181.107054571017!2d98.98057289115152!3d2.029250281139482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6f167f3a0e81%3A0x3d6459ccfbe5b10d!2sAek%20situmandi!5e1!3m2!1sid!2sid!4v1618674211144!5m2!1sid!2sid" ></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Hasak 1 desa Hutabarat Tarutung Indonesia, Hutatoruan X, Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara 22411</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Plus Code:</h4>
                <p>2XGG+78 Hutatoruan X, Kabupaten Tapanuli Utara, Sumatera Utara</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+6281717800182</p>
              </div>

              <div class="email">
                <i class="bi bi-building"></i>
                <h4>Mitra Kerja:</h4>
                <p>Del Institute of Technology, Desa Sitoluama,Kecamatan Laguboti, Kabupaten Toba, Sumatera Utara,Indonesia</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="{{route('testimonials.store')}}" method="post" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="Username" class="form-control" id="name" placeholder="Nama" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="Email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="SubjekKomentar" id="subject" placeholder="Subjek" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="UserAddress" id="address" placeholder="Alamat" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="IsiKomentar" rows="5" placeholder="Tuliskan Komentar dan Saran Anda" required></textarea>
              </div>
                    <div class="form-group mt-3">- Pilih Foto -
                        <input class="form-control" id="formFileMultiple" required="required"  name="Gambar" type="file" id="formFileMultiple" multiple required>
                    </div>

              <div class="form-group mt-3"><button type="submit" class="btn btn-danger">Kirim</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
