@extends('site.themeIndex')
@section('content')

@yield('content')

<section id="content">
	
	<div class="first-section" style="min-height:400px;background: url(player/img/SM/new.jpg) no-repeat center center ;background-size: cover; ">
		<div style="position: relative;
					top: 0;
					bottom: 0;
					left: 0;
					right: 0;
					height: 400px;
					width: 100%;
					opacity: 1;
					background-color: #06774aa3;"
			class="overlay">
			@guest
				<div class="row">
					<div class="text-center col-sm-4 col-sm-offset-4 col-xs-6 col-xs-offset-3" style="border-radius: 5px;margin-top:250px;background:#ffffffd1">
						<span style="    position: relative;bottom: 10px;">
							<a href="{{ url('/register') }}" 
								class="sm-inputs"
								style=" border: 3px solid #fff;
										border-radius: 25px;
										background: orange !important;
										box-shadow: 1px 0px 1px #eee;
										font-size: 20px;
										font-weight: bold;
										color: #fff !important;
										padding: 5px 20px 5px 20px;
							>
								<i class="fa fa-user-plus"></i> {{ trans('player.register') }}
							</a>
							<p style="padding: 20px;color: #008459;font-size: 170%;font-weight: bold;">
								{{ trans('player.startplayitisfree') }}
							</p>
							
							{{-- <a href="{{ url('/register') }}" style="color:#06774a;">

									<h3>{{ trans('player.register') }}</h3>
							</a> --}}
							{{-- <p>fjjhjfjhfh hjvhjghj hbjhbhjbj</p> --}}
						</span>
					</div>
				</div>
			@endguest
		</div>
	</div>

	{{-- start stages --}}
		@include('site.pages.stages')
	{{-- end stages --}}
	
	<!-- End Banner -->
	
	
	<!-- End Price Off -->
	<style>
		.orangeColor{
			color:orange ;
		}
		.orangeColor:hover{
			color:orange ;
		}
	</style>
	<div class="fruit-gal3 box-parallax">
		<div class="container">
			<div class="intro-gal3 white text-center">
				{{-- <h2 class="title30 paci-font wow fadeInLeft">Fruit Gallery</h2> --}}
				<h2 class="title30 font-bold wow fadeInRight">{{ trans('player.home_se3_tit1') }}</h2>
			</div>
			<div class="list-photo-gal3">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInLeft" data-wow-delay="0.2s">
							<img src="{{ url('/') }}/player/img/friends.jpg" style="filter: blur(2.2px);" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<h2 class="font-bold" style="text-transform: capitalize;margin-top: 10px;">
										<a href="#" class="orangeColor">{{ trans('player.home_se3_subtit1') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInLeft" data-wow-delay="0.4s">
							<img src="{{ url('/') }}/player/img/_101883084_046410358.jpg" style="filter: blur(2.2px);" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<h2 class="font-bold" style="text-transform: capitalize;margin-top: 10px;">
										<a href="#" class="orangeColor">{{ trans('player.home_se3_subtit2') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInLeft" data-wow-delay="0.6s">
							<img src="{{ url('/') }}/player/img/friends-3.jpg" style="filter: blur(2.2px);" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<h2 class="font-bold" style="text-transform: capitalize;margin-top: 10px;">
										<a href="#" class="orangeColor">{{ trans('player.home_se3_subtit3') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInRight" data-wow-delay="0.8s">
							<img src="{{ url('/') }}/player/img/friends-0.jpeg" style="filter: blur(2.2px);" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<h2 class="font-bold" style="text-transform: capitalize;margin-top: 10px;">
										<a href="#" class="orangeColor">{{ trans('player.home_se3_subtit4') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInRight" data-wow-delay="1s">
							<img src="{{ url('/') }}/player/img/Table-tennis.png" style="filter: blur(2.2px);" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<h2 class="font-bold" style="text-transform: capitalize;margin-top: 10px;">
										<a href="#" class="orangeColor">{{ trans('player.home_se3_subtit5') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInRight" data-wow-delay="1.2s">
							<img src="{{ url('/') }}/player/img/405855-squash-1341861255-324-640x480.jpg" style="filter: blur(2.2px);" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<h2 class="font-bold" style="text-transform: capitalize;margin-top: 10px;">
										<a href="#" class="orangeColor">{{ trans('player.home_se3_subtit6') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
</section>


@endsection

@section('page_specific_scripts')
	<!-- search cripts-->
    <script src="{{ url('/') }}/player/js/playerSearch.js"></script>
    <script src="{{ url('/') }}/player/js/playgroundSearch.js"></script>
    <script src="{{ url('/') }}/player/js/inputRange.js"></script>
    <!-- search cripts-->
@stop