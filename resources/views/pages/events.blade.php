@extends('main_layouts.app')

@section('content')
        <section class="news-hero" style="background:url({{ asset('img/event-hero.png') }}) no-repeat;">
          <div class="container">
            <div class="col-xs-12">
              <div class="logo-event">
                <img src="{{ asset('img/event/'.$events_data[0]->images) }}">
                <h1>
                  {{ $events_data[0]->title }}
                </h1>
              </div>
            </div>
          </div>
        	</section>

          <section class="breadcrumb-style">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="main-breadcrumb col-xs-12">
        					<p><a href="{{ url('/') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{ url('event') }}">Event</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Lomba Beton Nasional</p>
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
        					<h2><b>Tentang</b> Lomba</h2>
        					<div class="line-height"></div>
        				</div>
        				<div class="col-xs-12">
        					<div class="event-content">
        						<p>
                      {!! $events_data[0]->description !!}
                    </p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>

        	<section class="formulir-tor">
        		<img id="ornamen" class="ornamen ornamen-right" src="{{ asset('img/acc/accessories-1.png') }}" height="500px">
        		<div class="container">
        			<div class="row">
        				<div class="col-xs-12 title-content text-center">
        					<h2><b>Formulir</b> Pendaftaran</h2>
        					<div class="line-height"></div>
        				</div>
        				<div class="col-xs-12">
        					<div class="event-content">
                    Petunjuk format makalah disini dan form pendaftaran <a href="{{ $events_data[0]->link_register}}">disini</a>
        					</div>
        				</div>

        				<div class="col-xs-12 title-content text-center">
        					<h2><b>TOR</b> Lomba</h2>
        					<div class="line-height"></div>
        				</div>
        				<div class="col-xs-12">
        					<div class="event-content">
        						Untuk informasi lebih lanjut bisa download TOR <a href="{{ $events_data[0]->link_tor }}">disini.</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>

        	<section class="timeline-lomba">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="col-xs-12 text-center title-content">
        					<img id="ornamen" class="ornamen ornamen-left" src="{{ asset('img/acc/parrot.png') }}" height="550px">
        					<h2><b>Timeline</b></h2>
        					<div class="line-height"></div>
        				</div>
        					<div class="col-xs-12">
        						<div class="timeline-container">
        							<ul class="timeline timeline-horizontal">
                        @foreach ($timelines as $data)
                        <li class="timeline-item">
        									<div class="timeline-badge primary"><i class="fa fa-calendar"></i></div>
        									<div class="timeline-panel">
        										<div class="timeline-heading">
        											<h4 class="timeline-title">{{ $data->title }}</h4>
        											<p><small class="text-muted"><i class="fa fa-calendar-o"></i> {{ date('d M Y', strtotime($data->updated_at)) }} </small></p>
        										</div>
        										<div class="timeline-body">
        											<p>{!! $data->description !!}</p>
        										</div>
        									</div>
        								</li>
                        @endforeach
        							</ul>
        						</div>
        					</div>
        				<div class="col-xs-12 swipe">
        					Swipe to see more
        				</div>
        			</div>
        		</div>
        	</section>

        	<section class="alur-lomba">
        		<img class="ornamen ornamen-right" src="{{ asset('img/acc/tropical-2.png') }}" height="550px">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="col-xs-12 text-center title-content">
        					<h2><b>Alur</b> Lomba</h2>
        					<div class="line-height"></div>
        				</div>
        				<div class="col-xs-12">
        					<div class="event-content">
        						 <div id="alur-content">
                      @if (Request::segment(2) == 'lomba-beton-nasional')
                      <ul class="alur">
                        <li class="event" data-date="11 Nov 2017">
                          <h3>Lomba Beton Nasional</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna</p>
                        </li>
                      </ul>
                      @elseif (Request::segment(2) == 'lomba-konstruksi-jembatan')
                      <ul class="alur">
                        <li class="event" data-date="11 Nov 2017">
                          <h3>Lomba Konstruksi Jembatan</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna</p>
                        </li>
                      </ul>
                      @elseif (Request::segment(2) == 'lomba-maket-gedung')
                      <ul class="alur">
                        <li class="event" data-date="11 Nov 2017">
                          <h3>Lomba Maket Gedung</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna</p>
                        </li>
                      </ul>
                      @else
                      <ul class="alur">
                        <li class="event" data-date="11 Nov 2017">
                          <h3>Lomba Desain K3L</h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna</p>
                        </li>
                      </ul>
                      @endif
        						 </div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>

          @if (Request::segment(2) == 'lomba-beton-nasional')
          <section class="waktu">
        		<img id="ornamen" class="ornamen-left acc opacity-5" src="{{ asset('img/acc/accessories-2.png') }}" >
        		<div class="container">
        			<div class="row">
        				<div class="col-md-6">
        					<div class="col-xs-12 title-content text-center">
        						<h2><b>Waktu</b> dan Tempat</h2>
        						<div class="line-height"></div>
        					</div>
        					<div class="col-xs-12">
        						<div class="text-center list-content tempat">
        							<i class="fa fa-map-marker"></i> Teknik Sipil - Politeknik Negeri Jakarta
        						</div>
        						<div class="text-center list-content tempat"><i class="fa fa-calendar"></i> 13 - 14 Maret 2018</div>
                    <div class="text-center list-content tempat"><i class="fa fa-users"></i> Mahasiswa Teknik Sipil Se-Indonesia</div>
        					</div>
        				</div>
        				<div class="col-md-6">
        					<div class="col-xs-12 title-content text-center">
        						<h2><b>Contact</b> Person</h2>
        						<div class="line-height"></div>
        					</div>
        					<div class="col-xs-12">
        						<div class="text-center list-content tempat">
        							<i class="fa fa-phone"></i> 081267826717 (Muhammad Galib)
        						</div>
        						<div class="text-center list-content tempat">
        							<i class="fa fa-phone"></i> 085779997729 (Yega Mardiansyah)
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</section>
          @elseif (Request::segment(2) == 'lomba-konstruksi-jembatan')
          <section class="waktu">
        		<img id="ornamen" class="ornamen-left acc opacity-5" src="{{ asset('img/acc/accessories-2.png') }}" >
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
          @elseif (Request::segment(2) == 'lomba-maket-gedung')
          <section class="waktu">
        		<img id="ornamen" class="ornamen-left acc opacity-5" src="{{ asset('img/acc/accessories-2.png') }}" >
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
          @else

          <section class="waktu">
        		<img id="ornamen" class="ornamen-left acc opacity-5" src="{{ asset('img/acc/accessories-2.png') }}" >
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
          @endif
@endsection
