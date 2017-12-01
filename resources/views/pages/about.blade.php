@extends('main_layouts.app')

@section('content')
<section class="news-hero" style="background:url({{ asset('img/pages-hero.png') }}) no-repeat;">
  <div class="container">
    <div class="col-xs-12">
      <div class="logo-event">
        <img src="{{ asset('img/logo-hero.png') }}" alt="logo-hero" style="width:450px;">
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
        <p>MEA merupakan singkatan dari Masyarakat Ekonomi ASEAN yang memiliki pola mengintegrasikan ekonomi
          ASEAN dengan membentuk sistem perdagangan bebas antara negara-negara anggota ASEAN. Sebagai salah
          satu negara yang juga akan berpartisipasi dalam MEA, sudah seharusnya Indonesia memiliki
          infrastruktur yang menunjang sejak dini. Dimulai dari pembangunan gedung, jalan, jembatan,
          dan infrastruktur yang memadai agar Indonesia juga setara dengan negara Asia Tenggara lainnya.
          Menyinggung hal tersebut, sudah seharusnya inovasi teknologi dikembangkan dalam bidang teknik
          sipil agar status negara Indonesia yang sebelumnya hanya negara berkembang dapat
          berubah menjadi negara maju.</p>
        <p>Berkenaan dengan hal tersebut, Himpunan mahasiswa Teknik Sipil Politeknik Negeri Jakarta
           ingin mewadahi ide-ide inovatif para sipil muda Indonesia untuk pembangunan insfrastruktur
           yg lebih baik dalam acara tahunan yaitu "CIVIL ENGINEERING FESTIVAL (CIVFEST)" yang bertemakan
           "Mengeksplorasi Talenta Wujudkan Aspirasi Inovatif (MENTAWAI)". Acara ini terdiri dari serangkaian
           acara yaitu Lomba Beton Nasional, Lomba Konstruksi Jembatan, Lomba Maket, Lomba Desain,
           Seminar Nasional mengenai dunia Teknik Sipil, serta kegiatan sosial yaitu Ultramen.
           Dimana sebagian dari rangkaian acara tersebut merupakan kompetisi tingkat Nasional. </p>
      </div>
    </div>
  </div>
</section>
@endsection
