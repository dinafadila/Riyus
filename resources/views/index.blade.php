<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Riyus </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/book-icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  
</head>

<body>
  <!--==========================Header============================-->
 

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Riyus<br>Tidak ada <span>yang setia seperti buku</span></h2>
          
          <div>
           @if (Route::has('login'))
            @auth
            <a href="/home" class="btn-get-started scrollto">Beranda</a>
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
        <h1 class="text-light"><a href="/" class="scrollto"><span>Riyus</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

     <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          
          
          <li class="drop-down"><a href=""><i class="fa fa-person" aria-hidden="true"></i></a>
            <ul>
              
                
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <li><a href="{{ url('/editprofile') }}">Edit Profile</a></li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        
                                    </form>
                                    
                                </div>
                            </li>
              
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            </form> 
              </a>
              
              
              
              
              
              </li>
            </ul>
          </li>
          <li><a href="#footer">KONTAK KAMI</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
            @else
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
      <h1 class="text-light"><a href="/" class="scrollto"><span>Riyus</span></a></h1>
      <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
    </div>

   <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li><a href="#footer">KONTAK KAMI</a></li>
      </ul>
    </nav><!-- .main-nav -->
    
  </div>
</header><!-- #header -->
              <a href="{{ route('login') }}" class="btn-get-started scrollto">Masuk</a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn-get-started scrollto">Buat Akun</a>
              <a href="{{ url('beli')}}" class="btn-get-started scrollto">Beli</a>
              @endif
            @endauth
          @endif
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img-01.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">
    
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
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                  </div>

                  

                </div>

                <div class="col-sm-6">
                  
                  <div class="footer-links">
                    <h4>Kontak Kami</h4>
                    <p>
                      A108 Adam Street <br>
                      New York, NY 535022<br>
                      United States <br>
                      <strong>Phone:</strong> +1 5589 55488 55<br>
                      <strong>Email:</strong> info@example.com<br>
                    </p>
                  </div>

                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  </div>

                </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              
              <h4>Send us a message</h4>
              <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>

                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>

                <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
              </form>
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