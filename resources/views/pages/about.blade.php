@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/pages-hero.png') }}) no-repeat;">
  <div class="container">
    <div class="col-xs-12">
      <div class="logo-event">
        <img src="{{ asset('img/logo-hero.png') }}" alt="logo-hero" width="450px">
      </div>
    </div>
  </div>
</section>
<div></div>

<section class="breadcrumb-style">
  <div class="container-fluid">
    <div class="row">
      <div class="main-breadcrumb col-xs-12">
        <p><a href="{{ url('/') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> about</p>
      </div>
    </div>
  </div>
</section>

<section class="about">
  <div class="container-fluid">
    <div class="row">
      <div class="set-accessories content-accessories">
        <img src="{{ asset('img/acc/bird.png') }}" width="150px">
      </div>
      <div class="title-content col-xs-12 text-center">
        <h2><span class="bold">Know more</span> about me</h2>
        <div class="line-height"></div>
      </div>
      <div class="main-about col-xs-12 col-md-8 col-md-offset-2">
        <p>Lomba merupakan wacana demokrasi dan keterbukaan yang dapat di pertanggung jawabkan,
          terutama di bidang penciptaan ide dan kretifitas yang semakin maju dan modern.
          Lomba juga merupakan wadah munculnya karya yang kreatif dengan mempertimbangkan unsur keselamatan,
          keamanan dan kenyamanan. Salah satunya dengan perencanaan yang baik.</p>
        <p>Untuk menggali bakat dan kemampuan , kami <b>Civil Engineering Festival 2018</b> akan mengadakan
        lomba Desain K3L dengan tema <b><i>“Window of the World  for Civilian Future“</i></b>. Bangunan yang di 
        maksud adalah tempat belajar yang dapat mengakses informasi secara online (online library)
        yang di harapkan mampu memaksimalkan suatu lingkungan yang kosong untuk di jadikan suatu bangunan
        yang aman dan nyaman. </p>
      </div>
    </div>
  </div>
</section>
@endsection
