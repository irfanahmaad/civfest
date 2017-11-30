@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/pages-hero.png') }}) no-repeat;">
  <div class="logo-event">
    <img src="{{ asset('img/logo-event.png') }}" alt="logo-heros">
    <h1>Get more knowledge here</h1>
  </div>
</section> 
<section class="breadcrumb-style">
  <div class="container-fluid">
    <div class="row">
      <div class="main-breadcrumb col-xs-12">
        <p><a href="#">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> about</p>
      </div>
    </div>
  </div>
</section>
<section class="news">
  <div class="container-fluid">
    <div class="row">
      <div class="set-accessories content-accessories">
        <img src="{{ asset('img/acc/accessories-2.png') }}" width="150px">
      </div>
      <div class="title-content col-xs-12 text-center">
        <h2><span class="bold">News</span></h2>
        <div class="line-height"></div>
      </div>
      <div class="col-xs-12">
        <a href="#">
          <div class="news-container col-xs-12 col-lg-6">
            <figure class="news-image">
              <img src="{{ asset('img/news/news-example.jpg') }}" alt="news content">
              <figcaption>10 nov 17</figcaption>
            </figure>
            <div class="news-item">
              <h2>PENGUMUMAN FINALIS NATIONAL PAPER COMPETITION</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua...
              </p>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="news-container col-xs-12 col-lg-6">
            <figure class="news-image">
              <img src="{{ asset('img/news/news-example.jpg') }}" alt="news content">
              <figcaption>10 nov 17</figcaption>
            </figure>
            <div class="news-item">
              <h2>PENGUMUMAN FINALIS NATIONAL PAPER COMPETITION</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua...
              </p>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="news-container col-xs-12 col-lg-6">
            <figure class="news-image">
              <img src="{{ asset('img/news/news-example.jpg') }}" alt="news content">
              <figcaption>10 nov 17</figcaption>
            </figure>
            <div class="news-item">
              <h2>PENGUMUMAN FINALIS NATIONAL PAPER COMPETITION</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua...
              </p>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="news-container col-xs-12 col-lg-6">
            <figure class="news-image">
              <img src="{{ asset('img/news/news-example.jpg') }}" alt="news content">
              <figcaption>10 nov 17</figcaption>
            </figure>
            <div class="news-item">
              <h2>PENGUMUMAN FINALIS NATIONAL PAPER COMPETITION</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua...
              </p>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="news-container col-xs-12 col-lg-6">
            <figure class="news-image">
              <img src="{{ asset('img/news/news-example.jpg') }}" alt="news content">
              <figcaption>10 nov 17</figcaption>
            </figure>
            <div class="news-item">
              <h2>PENGUMUMAN FINALIS NATIONAL PAPER COMPETITION</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua...
              </p>
            </div>
          </div>
        </a>
        <a href="#">
          <div class="news-container col-xs-12 col-lg-6">
            <figure class="news-image">
              <img src="{{ asset('img/news/news-example.jpg') }}" alt="news content">
              <figcaption>10 nov 17</figcaption>
            </figure>
            <div class="news-item">
              <h2>PENGUMUMAN FINALIS NATIONAL PAPER COMPETITION</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua...
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="sponsor">
  <div class="container-fluid">
    <div class="row">
      <div class="set-accessories content-accessories">
        <img src="{{ asset('img/acc/bird.png') }}" width="150px">
      </div>
      <div class="title-content col-xs-12 text-center">
        <h2><span class="bold">What is</span> content we have?</h2>
        <div class="line-height"></div>
      </div>
    </div>
  </div>
</section>
@endsection
