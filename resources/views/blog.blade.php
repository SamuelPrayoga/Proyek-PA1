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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    #watch{
        font-family: 'Roboto', sans-serif;
        color: rgb(0, 0, 0);
        z-index: 1;
        height: 1.4em;
        width: 2.4em;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        font-size: 3.4vw;
        -webkit-text-stroke: 3px rgb(0, 0, 0);
        }

</style>
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
              <h2 class="entry-title">{{$wisatas->NamaWisata}}</h2>
              <div class="entry-content">
                <p>
                    {{$wisatas->InfoWisata}}
                </p>
                <table>
                    <tr>
                        <td><strong>Published at</strong></td>
                        <td>:</td>
                        <td>{{$wisatas->created_at}}</td>
                    </tr>
                    <tr>
                        <td><strong>Updated at</strong></td>
                        <td>:</td>
                        <td>{{$wisatas->updated_at}}</td>
                    </tr>
                </table>
              </div>

            </article>
            @endforeach<!-- End blog entry -->
            <div class="d-flex justify-content-center">
                {{ $wisata->links() }}
            </div>
          </div><!-- End blog entries list -->
          <div class="col-lg-4">
            <div class="sidebar">
                <div>
                    <?php
                        echo "You Visit This Web on : " . date("d F Y") . "<br>";
                    ?><br><br>
                </div>
                <!--Link Kategori-->
                <h3 class="sidebar-title">Pencarian</h3>
                <div class="sidebar-item search-form">
                    <form action="/blog" method="POST">
                        {{ csrf_field() }}
                    <input type="search" name="cari">
                    <button type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div><!-- End sidebar search <formn--><br>
                <h4 class="sidebar-title">Wisata/Wahana yang tersedia: </h4>
                <div>
                    <ol>
                        @foreach($wisata as $wisatas)
                        <li><h6 class="entry-title">{{$wisatas->NamaWisata}}</h6></li>
                        @endforeach
                    </ol>
                </div><br><br><br><br>
                <center>  GMT - Waktu Indonesia Barat (WIB) </center>
                <center><div id="watch"></center>
                    <p><a href="/">Sistem Informasi Desa Wisata Aek Situmandi</a></p>
                </div><br><br>

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
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        function clock() {
          var now = new Date();
          var secs = ('0' + now.getSeconds()).slice(-2);
          var mins = ('0' + now.getMinutes()).slice(-2);
          var hr = now.getHours();
          var Time = hr + ":" + mins + ":" + secs;
          document.getElementById("watch").innerHTML = Time;
          requestAnimationFrame(clock);
        }
        requestAnimationFrame(clock);
    });
</script>
</html>
