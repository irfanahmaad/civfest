<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">

        <title>Civil Festival - Politeknik Negeri Jakarta</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <!-- Dist -->
      	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/lightbox/simplelightbox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap3-wysihtml5.min.css')}}">
        <link rel="stylesheet" href="{{ asset('fileinput.css') }}">
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    </head>
<body>
  <!-- header -->
  <div class="body-overlay"></div>
  <header class="header">
    <div class="container-fluid">
      <div class="row">
        <div id="logo" class="col-xs-6">
          <a href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="main-logo" width="60px" />
          </a>
        </div>
        <div class="burger col-xs-6 text-right">
          <div class="main-burger open-nav">
            <div class="bar"></div>
            <div class="bar2"></div>
            <div class="bar"></div>
          </div>
          <div class="menu open-nav">MENU</div>
        </div>
      </div>
    </div>
  </header>
  <div class="overlay2"></div>
  <div class="nav-side">
    <div class="overlay close-nav">
      <div class="close"></div>
    </div>
    <nav class="main-navbar">
      <ul>
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li class="dropdown-nav"><a>Event <i class="fa fa-angle-right" aria-hidden="true"></i></a>
          <ul>
            <li><a href="{{ url('event/lomba-beton-nasional') }}">Lomba Beton Nasional</a></li>
            <li><a href="{{ url('event/lomba-konstruksi-jembatan') }}">Lomba Konstruksi Jembatan</a></li>
            <li><a href="{{ url('event/lomba-maket-gedung') }}">Lomba Maket Gedung</a></li>
            <li><a href="{{ url('event/lomba-desain-k3l') }}">Lomba Desain K3L</a></li>
            <li><a href="{{ url('seminar/seminar-nasional') }}">Seminar Nasional</a></li>
            <li><a href="#">Ultramen</a></li>
          </ul>
        </li>
        <li><a href="{{ url('all-news') }}">News</a></li>
        <li><a href="{{ url('about-us') }}">About Us</a></li>
        <li class="dropdown-nav"><a>Galeri <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
          <ul>
            <li><a href="{{ url('galeri/photo') }}">Photo</a></li>
            <li><a href="{{ url('galeri/video') }}">Video</a></li>
          </ul>
        </li>
        <li><a href="{{ url('contact') }}">Contact Us</a></li>
      </ul>
    </nav>
  </div>
  @yield('content')
  <section class="sponsor" style="padding: 40px 0px;">
    <img src="{{ asset('img/medpart/media_partner.jpg') }}" alt="media partner" width="100%" />
    <img src="{{ asset('img/sponsor/sponsor.jpg') }}" alt="media partner" width="100%" />
  </section>
  <!-- <section class="sponsor">
    <div class="container-fluid">
      <div class="row">
        <div class="set-accessories content-accessories-right">
          <img src="img/acc/bird.png">
        </div>
        <div class="title-content col-xs-12 text-center">
          <h2><span class="bold">Our</span> Sponsor</h2>
          <div class="line-height"></div>
        </div>
      </div>
    </div>
  </section>

    <section class="sponsor">
        <div class="container-fluid">
            <div class="row">
                <div class="set-accessories content-accessories-right">
                    <img src="img/acc/bird.png">
                </div>
                <div class="title-content col-xs-12 text-center">
                    <h2><span class="bold">Our</span> Media Partner</h2>
                    <div class="line-height"></div>
                </div>
            </div>
        </div>
    </section> -->
  <footer class="foot-container">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h3><b>Follow</b> us</h3>
            <div class="sosmed">
              <a href="https://line.me/R/ti/p/%40mvq5134k"><i><img src="{{ asset('img/line.png') }}"></i></a>
              <a href="https://www.instagram.com/civfest2018/"><i class="fa fa-instagram"></i></a>
              <a href="https://twitter.com/Civfest2018"><i class="fa fa-twitter"></i></a>
            </div>
          </div>
          <div class="foot-bottom-sections">
            <p>2018 &copy; Copyrights Civfest</p>
          </div>
        </div>
      </div>
    </footer>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="{{ asset('js/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('dist/lightbox/simple-lightbox.min.js') }}"></script>
<script src="{{ asset('js/fileinput.js') }}"></script>
<script src="{{ asset('js/core.js') }}"></script>
</html>
