@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/event-hero.png') }}) no-repeat;">
  <div class="container">
    <div class="col-xs-12">
      <div class="logo-event">
        <!-- <img src="{{ asset('img/logo-event.png') }}"> -->
        <h1 class="judul-hero">Need more info?</h1>
      </div>
    </div>
  </div>
</section>

<section class="breadcrumb-style">
  <div class="container-fluid">
    <div class="row">
      <div class="main-breadcrumb col-xs-12">
        <p><a href="#">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Contact</p>
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
        <h2><span class="bold">Contact</span> us!</h2>
        <div class="line-height"></div>
      </div>
      <div class="main-about col-xs-12 col-md-8 col-md-offset-2">
        <p>Project Officer: 082233211852 (Ilham Bachrie)<br>
        Humas: 085771992542 (Sandra Pratiwi)<br>
        civilfestival2018@gmail.com</p>

        <p>Sekretariat Himpunan Mahasiswa Sipil<br>
        Jurusan Teknik Sipil<br>
        Lantai 1 Gedung B Teknik Sipil<br>
        Politeknik Negeri Jakarta<br>
        Jl. Prof. Dr. G.A Siwabessy, Kampus Baru UI Depok 16424</p>
      </div>
    </div>
  </div>
</section>
@endsection
