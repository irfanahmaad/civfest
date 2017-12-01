@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/event-hero.png') }}) no-repeat;">
  <div class="container">
    <div class="col-xs-12">
      <div class="logo-event">
        <img src="{{ asset('img/Ultramen.jpg') }}">
        <h1>Ultramen</h1>
      </div>
    </div>
  </div>
  </section>

  <section class="breadcrumb-style">
    <div class="container-fluid">
      <div class="row">
        <div class="main-breadcrumb col-xs-12">
          <p><a href="{{ url('/') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i>Ultramen</p>
        </div>
      </div>
    </div>
  </section>

<section class="tentang-lomba">
  <div class="container">
    <div class="row">
      <div class="set-accessories content-accessories-right">
        <img src="{{ asset('img/acc/pineapples.png') }}" width="150px">
      </div>
      <div class="col-xs-12 title-content text-center">
        <h2><b>Tentang</b> Ultramen</h2>
        <div class="line-height"></div>
      </div>
      <div class="col-xs-12">
        <div class="event-content">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          <ul>
            <li>Lorem ipsum</li>
            <li>Lorem ipsum</li>
            <li>Lorem ipsum</li>
          </ul>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </div>
      </div>
    </div>
  </div>
</section>

<section class="formulir-tor">
  <div class="container">
    <img id="ornamen" class="ornamen-left acc" src="{{ asset('img/acc/accessories-2.png') }}" width="500px">
    <img id="ornamen" class="ornamen ornamen-right" src="{{ asset('img/acc/accessories-1.png') }}" width="500px">
    <div class="row">
      <div class="col-xs-12 title-content text-center">
        <h2><b>Pembicara</b> Seminar</h2>
        <div class="line-height"></div>
      </div>
      <div class="col-xs-12">
        <div class="event-content">
          <div class="col-md-4">
            <div class="speaker">
              <img src="{{ asset('img/event/speaker-1.jpg') }}">
              <h4>Jane Doe</h4>
              <div class="line-height margin-10"></div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="speaker">
              <img src="{{ asset('img/event/speaker-2.jpg') }}">
              <h4>John Doe</h4>
              <div class="line-height margin-10"></div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="speaker">
              <img src="{{ asset('img/event/speaker-3.jpg') }}">
              <h4>Jane Smith</h4>
              <div class="line-height margin-10"></div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xs-12 title-content text-center">
        <h2><b>Moderator</b> Seminar</h2>
        <div class="line-height"></div>
        <div class="event-content">
          <div class="col-md-push-4 col-md-4">
            <div class="speaker">
              <img src="{{ asset('img/event/speaker-2.jpg') }}">
              <h4>John Smith</h4>
              <div class="line-height margin-10"></div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="alur-lomba">
  <img id="ornamen" class="ornamen-right acc" src="{{ asset('img/acc/bird.png') }}">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 text-center title-content">
        <h2><b>Pendaftaran</b> Seminar</h2>
        <div class="line-height"></div>
      </div>
      <div class="col-xs-12 regis-text">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est <a href="">laborum.</a>
      </div>


      <div class="col-xs-12 text-center title-content">
        <h2><b>Alur</b> Pembayaran</h2>
        <div class="line-height"></div>
      </div>
      <div class="col-xs-12">
        <div class="event-content">
           <div id="alur-content">
            <ul class="alur">
              <li class="event" data-date="11 Nov 2017">
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna</p>
              </li>
              <li class="event" data-date="11 Nov 2017">
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna</p>
              </li>
              <li class="event" data-date="11 Nov 2017">
                <h3>Lorem Ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna</p>
              </li>

            </ul>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="waktu">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="col-xs-12 title-content text-center">
          <h2><b>Waktu</b> dan Tempat</h2>
          <div class="line-height"></div>
        </div>
        <div class="col-xs-12">
          <div class="text-center list-content tempat">
            <i class="fa fa-map-marker"></i> Politeknik Negeri Jakarta
          </div>
          <div class="text-center list-content tempat"><i class="fa fa-calendar"></i> 2018</div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-xs-12 title-content text-center">
          <h2><b>Contact</b> Person</h2>
          <div class="line-height"></div>
        </div>
        <div class="col-xs-12">
          <div class="text-center list-content tempat">
            <i class="fa fa-phone"></i> 08xx xxxx xxxx (Anonim)
          </div>
          <div class="text-center list-content tempat">
            <i class="fa fa-phone"></i> 08xx xxxx xxxx (Anonim)
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
