<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Detail Buku </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('img/book-icon.png')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700')}}" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style-01.css')}}" rel="stylesheet">

  
</head>

<body>
  <!--==========================Header============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="http://twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="http://instagram.com" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="/" class="scrollto"><span>RIYUS</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

     
      
    </div>
  </header><!-- #header -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <img src="{{asset($item->file)}}" class="img-fluid" alt="">

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-6 mb-4">

          <!--Content-->
          <div class="p-4">

          <p class="lead font-weight-bold">Nama Buku</p>
            <p class="lead">
                    <p>{{$item->nama_buku}}</p>
            </p>
            
			<p class="lead font-weight-bold">Harga</p>
            <p class="lead">
                    <span>{{$item->harga}}</span>
            </p>

			<p class="lead font-weight-bold">Lokasi</p>

			<p>{{$item->alamat}}</p>


            <p class="lead font-weight-bold">Deskripsi</p>

            <p>{{$item->deskripsi}}</p>
			<p class="lead font-weight-bold">Kontak</p>

			<p> {{$item->nomor_telepon}}</p>
			
            
              

            </form>

          </div>
          <!--Content-->

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <hr>

      <!--Grid row-->
      <div class="row d-flex justify-content-center wow fadeIn">

<!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <h3>Riyus</h3>
                    <p>Riyus merupakan aplikasi yang mengutamakan penjualan buku bekas dengan sistem penjualan online. Setiap orang apabila memiliki buku yang sudah tidak terpakai dan sudah tidak dibaca dapat menjualnya melalui aplikasi ini.</p>
                  </div>

                  

                </div>

                <div class="col-sm-6">
                  
                  <div class="footer-links">
                    <h4>Kontak Kami</h4>
                    <p>
                      Dramaga, IPB <br>
                      Bogor, 021-7372578<br>
                      Indonesia <br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  </div>

                </div>

            </div>

          </div>

          

          </div>

          

        </div>

      </div>
    </div>

  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>