@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/pages-hero.png') }}) no-repeat;">
  <div class="logo-event">
    <!-- <img src="{{ asset('img/logo-event.png') }}" alt="logo-heros"> -->
    <h1 class="judul-hero">Get satisfying scenery</h1>
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
<style type="text/css">
  .gallery a {
    padding: 10px; 
  }
</style>
<section class="news background-white">
  <div class="container-fluid">
    <div class="row">
      <div class="main-gallery">
        <div class="gallery">
          <a href="{{ asset('img/galleries/_DSC7524_.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/galleries/_DSC7524_.jpg') }}" alt="" title="Beautiful Image" />
          </a>
          <a href="{{ asset('img/galleries/DSC_4397_.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/galleries/DSC_4397_.jpg') }}" alt="" title="Beautiful Image" />
          </a>
          <a href="{{ asset('img/galleries/IMG_3668_.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/galleries/IMG_3668_.jpg') }}" alt="" title="Beautiful Image" />
          </a>
          <a href="{{ asset('img/galleries/IMG_4028_.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/galleries/IMG_4028_.jpg') }}" alt="" title="Beautiful Image" />
          </a>
          <a href="{{ asset('img/galleries/IMG_3704_.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/galleries/IMG_3704_.jpg') }}" alt="" title="Beautiful Image" />
          </a>
          <a href="{{ asset('img/galleries/IMG_4301_.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/galleries/IMG_4301_.jpg') }}" alt="" title="Beautiful Image" />
          </a>
          <a href="{{ asset('img/galleries/IMG_4437_.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/galleries/IMG_4437_.jpg') }}" alt="" title="Beautiful Image" />
          </a>
          <a href="{{ asset('img/galleries/IMG_4513_.jpg') }}" class="col-xs-12 col-md-6 col-lg-3">
            <img src="{{ asset('img/galleries/IMG_4513_.jpg') }}" alt="" title="Beautiful Image" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
