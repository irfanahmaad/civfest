@extends('main_layouts.app')

@section('content')
        <section class="news-hero" style="background:url({{ asset('img/event-hero.png') }}) no-repeat;">
          <div class="container">
            <div class="col-xs-12">
              <div class="logo-event">
                <img src="{{ asset('img/logo-event.png') }}">
                <h1>Lomba Maket Gedung</h1>
              </div>
            </div>
          </div>
        	</section>

          <section class="breadcrumb-style">
        		<div class="container-fluid">
        			<div class="row">
        				<div class="main-breadcrumb col-xs-12">
        					<p><a href="{{ url('/') }}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="{{ url('event') }}">Event</a> <i class="fa fa-angle-right" aria-hidden="true"></i>Lomba Maket Gedung</p>
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
        		<img id="ornamen" class="ornamen ornamen-right" src="{{ asset('img/acc/accessories-1.png') }}" height="500px">
        		<div class="container">
        			<div class="row">
        				<div class="col-xs-12 title-content text-center">
        					<h2><b>Formulir</b> Pendaftaran</h2>
        					<div class="line-height"></div>
        				</div>
        				<div class="col-xs-12">
        					<div class="event-content">
        						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        						tempor incididunt ut labore et dolore magna <a href="#">aliqua.</a>
        					</div>
        				</div>

        				<div class="col-xs-12 title-content text-center">
        					<h2><b>TOR</b> Lomba</h2>
        					<div class="line-height"></div>
        				</div>
        				<div class="col-xs-12">
        					<div class="event-content">
        						Excepteur sint occaecat cupidatat non
        						proident, sunt in culpa qui officia deserunt mollit anim id est laborum <a href="#">lanoris.</a>
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
        								<li class="timeline-item">
        									<div class="timeline-badge primary"><i class="fa fa-calendar"></i></div>
        									<div class="timeline-panel">
        										<div class="timeline-heading">
        											<h4 class="timeline-title">Pendaftaran</h4>
        											<p><small class="text-muted"><i class="fa fa-calendar-o"></i> 11 Nov 2017 </small></p>
        										</div>
        										<div class="timeline-body">
        											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        												tempor incididunt ut labore et dolore magna</p>
        										</div>
        									</div>
        								</li>

        								<li class="timeline-item">
        									<div class="timeline-badge primary"><i class="fa fa-calendar"></i></div>
        									<div class="timeline-panel">
        										<div class="timeline-heading">
        											<h4 class="timeline-title">Pendaftaran</h4>
        											<p><small class="text-muted"><i class="fa fa-calendar-o"></i> 11 Nov 2017 </small></p>
        										</div>
        										<div class="timeline-body">
        											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        												tempor incididunt ut labore et dolore magna</p>
        										</div>
        									</div>
        								</li>

        								<li class="timeline-item">
        									<div class="timeline-badge primary"><i class="fa fa-calendar"></i></div>
        									<div class="timeline-panel">
        										<div class="timeline-heading">
        											<h4 class="timeline-title">Pendaftaran</h4>
        											<p><small class="text-muted"><i class="fa fa-calendar-o"></i> 11 Nov 2017 </small></p>
        										</div>
        										<div class="timeline-body">
        											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        												tempor incididunt ut labore et dolore magna</p>
        										</div>
        									</div>
        								</li>

        								<li class="timeline-item">
        									<div class="timeline-badge primary"><i class="fa fa-calendar"></i></div>
        									<div class="timeline-panel">
        										<div class="timeline-heading">
        											<h4 class="timeline-title">Pendaftaran</h4>
        											<p><small class="text-muted"><i class="fa fa-calendar-o"></i> 11 Nov 2017 </small></p>
        										</div>
        										<div class="timeline-body">
        											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        												tempor incididunt ut labore et dolore magna</p>
        										</div>
        									</div>
        								</li>

        								<li class="timeline-item">
        									<div class="timeline-badge primary"><i class="fa fa-calendar"></i></div>
        									<div class="timeline-panel">
        										<div class="timeline-heading">
        											<h4 class="timeline-title">Pendaftaran</h4>
        											<p><small class="text-muted"><i class="fa fa-calendar-o"></i> 11 Nov 2017 </small></p>
        										</div>
        										<div class="timeline-body">
        											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        												tempor incididunt ut labore et dolore magna</p>
        										</div>
        									</div>
        								</li>

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
        		<img id="ornamen" class="ornamen-left acc" src="{{ asset('img/acc/accessories-2.png') }}" >
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

          <section class="sponsor">
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
@endsection
