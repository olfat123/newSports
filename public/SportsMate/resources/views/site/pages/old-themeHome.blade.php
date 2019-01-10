@extends('site.themeIndex')
@section('content')

@yield('content')

<section id="content">
	<div class="banner-slider bg-slider banner-slider3 parallax-slider">
		<div class="wrap-item" data-navigation="true" data-transition="fade" data-autoplay="true" data-itemscustom="[[0,1]]">
			<div class="item-slider item-slider3">
				<div class="banner-thumb"><a href="#">
				@if(direction() == 'ltr')
				<img src="{{ url('/') }}/player/img/Tennis english.png" alt="" />
				@else
				<img src="{{ url('/') }}/player/img/Tennis arabic.png" alt="" />
				@endif
				</a></div>
				<div class="banner-info text-center white animated" data-animated="zoomIn">
					{{-- <h2 class="title30 paci-font">Food & Nutrition</h2> 
					<h2 class="font-bold text-uppercase title30">Lorem Ipsum Lorem Ipsum</h2>
					<div class="banner-button">
						<a href="#" class="btn-arrow color2 style2">SignUp Now</a>
						<a href="#" class="btn-arrow bg-color style2">More</a>
					</div>--}}
				</div>
			</div>
			<div class="item-slider item-slider3">
				<div class="banner-thumb"><a href="#">
				@if(direction() == 'ltr')
				<img src="{{ url('/') }}/player/img/Squash english.png" alt="" />
				@else
				<img src="{{ url('/') }}/player/img/Squash arabic.png" alt="" />
				@endif
				</a></div>
				<div class="banner-info text-center white animated" data-animated="zoomIn">
					{{-- <h2 class="title30 paci-font">Fruit Juice The One</h2> 
					<h2 class="font-bold text-uppercase title30">Lorem Ipsum Lorem Ipsum</h2>
					<div class="banner-button">
						<a href="#" class="btn-arrow color2 style2">SignUp Now</a>
						<a href="#" class="btn-arrow bg-color style2">More</a>
					</div>--}}
				</div>
			</div>
			<div class="item-slider item-slider3">
				<div class="banner-thumb"><a href="#">
				@if(direction() == 'ltr')
				<img src="{{ url('/') }}/player/img/Football english.png" alt="" />
				@else
				<img src="{{ url('/') }}/player/img/Football arabic.png" alt="" />
				@endif
				</a></div>
				<div class="banner-info text-center white animated" data-animated="zoomIn">
					{{-- <h2 class="title30 paci-font">Natural Fruits</h2> 
					<h2 class="font-bold text-uppercase title30"Lorem Ipsum Lorem Ipsum</h2>
					<div class="banner-button">
						<a href="#" class="btn-arrow color2 style2">SignUp Now</a>
						<a href="#" class="btn-arrow bg-color style2">More</a>
					</div>--}}
				</div>
			</div>
		</div>
	</div>
	<!-- End Banner -->
	<div class="container">
		<div class="list-post-format3">
			<div class="row">
				{{--  --}}
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="item-post-format3">
						<div class="banner-adv fade-out-in zoom-image">
							<a href="#" class="adv-thumb-link">
							{{--<img src="{{ url('/') }}/themeFiles/images/home/home3/ad3.jpg" alt="" />--}}
							<img src="{{ url('/') }}/player/img/Shoot.jpg" alt="" />
							</a>
						</div>
						<div class="post-info hidden-xs hidden-sm">
							<h3 class="title18 text-uppercase">
								<span class="color"><i class="fa fa-book"></i></span>
								<a href="#" class="black">{{ trans('player.home_se2_tit1') }}</a>
							</h3>
							{{-- <p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p> --}}
							<p class="desc">
								{{ trans('player.home_se2_p1') }}
							</p>
							<a href="#" class="shop-button">{{ trans('player.join_us') }}</a>
						</div>
					</div>
				</div>
				{{--  --}}
				<div class="hidden-lg hidden-md col-sm-6 col-xs-6">
					<div class="item-post-format3">
						<div class="banner-adv fade-out-in zoom-image">
							<a href="#" class="adv-thumb-link"></a>
						</div>
						<div class="post-info">
							<h3 class="title18 text-uppercase"><span class="color"><i class="fa fa-image"></i></span>
								<a href="#" class="black">{{ trans('player.home_se2_tit1') }}</a>
							</h3>
							{{-- <p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p> --}} 
							<p class="desc">
								{{ trans('player.home_se2_p1') }}
							</p>
							<a href="#" class="shop-button">{{ trans('player.join_us') }}</a>
						</div>
					</div>
				</div> 
				{{--  --}}
				{{--  --}}
				{{-- <div class="col-md-3 hidden-sm hidden-xs">
					<div class="item-post-format3">
						<div class="banner-adv fade-out-in zoom-image">
							<a href="#" class="adv-thumb-link">
							{{--<img src="{{ url('/') }}/themeFiles/images/home/home3/ad1.jpg" alt="" />
							<img src="{{ url('/') }}/player/img/image1.jpg" alt="" />
							</a>
						</div>
						<div class="post-info">
							<h3 class="title18 text-uppercase"><span class="color"><i class="fa fa-image"></i></span><a href="#" class="black">image - post format</a></h3>
							{{-- <p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p> 
							<p class="desc">Que ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
							<a href="#" class="shop-button">Read more</a>
						</div>
					</div>
				</div> --}}
				{{--  --}}
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="item-post-format3">
						<div class="banner-adv line-scale zoom-rotate">
							<a href="#" class="adv-thumb-link">
							{{--<img src="{{ url('/') }}/themeFiles/images/home/home3/ad2.jpg" alt="" />--}}
							<img src="{{ url('/') }}/player/img/golf.jpg" alt="" />
							</a>
						</div>
						<div class="post-info">
							<h3 class="title18 text-uppercase">
								<span class="color"><i class="fa fa-video-camera"></i></span>
								<a href="#" class="black">{{ trans('player.home_se2_tit2') }}</a>
							</h3>
							{{-- <p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p> --}}
							<p class="desc">
								{{ trans('player.home_se2_p2') }}
							</p>
							<a href="#" class="shop-button">{{ trans('player.join_us') }}</a>
						</div>
					</div>
				</div>
				{{--  --}}
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="item-post-format3">
						<div class="banner-adv fade-out-in zoom-image">
							<a href="#" class="adv-thumb-link">
							{{--<img src="{{ url('/') }}/themeFiles/images/home/home3/ad3.jpg" alt="" />--}}
							<img src="{{ url('/') }}/player/img/image1.jpg" alt="" />
							</a>
						</div>
						<div class="post-info hidden-xs hidden-sm">
							<h3 class="title18 text-uppercase">
								<span class="color"><i class="fa fa-book"></i></span>
								<a href="#" class="black">{{ trans('player.home_se2_tit3') }}</a>
							</h3>
							{{-- <p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p> --}}
							<p class="desc">
								{{ trans('player.home_se2_p3') }}
							</p>
							<a href="#" class="shop-button">{{ trans('player.join_us') }}</a>
						</div>
					</div>
				</div>
				{{--  --}}
				<div class="hidden-lg hidden-md col-sm-6 col-xs-6">
					<div class="item-post-format3">
						<div class="banner-adv fade-out-in zoom-image">
							<a href="#" class="adv-thumb-link"></a>
						</div>
						<div class="post-info">
							<h3 class="title18 text-uppercase">
								<span class="color"><i class="fa fa-image"></i></span>
								<a href="#" class="black">{{ trans('player.home_se2_tit2') }}</a>
							</h3>
							{{-- <p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p> --}}
							<p class="desc">
								{{ trans('player.home_se2_p3') }}  
							</p>
							<a href="#" class="shop-button">{{ trans('player.join_us') }}</a>
						</div>
					</div>
				</div>
				{{--  --}}
			</div>
		</div>
		<!-- ENd Post Format -->
		{{-- <div class="list-service3 bg-color2">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="item-service1 table">
						<div class="service-icon">
							<a href="#" class="color2"><i class="fa fa-bus"></i></a>
						</div>
						<div class="service-info">
							<h3 class="title18"><a href="#" class="white">Free Shipping</a></h3>
							<p class="desc white">With €50 or more orders</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="item-service1 table">
						<div class="service-icon">
							<a href="#" class="color2"><i class="fa fa-refresh"></i></a>
						</div>
						<div class="service-info">
							<h3 class="title18"><a href="#" class="white">Free Refund</a></h3>
							<p class="desc white">100% Refund Within 3 days </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="item-service1 table">
						<div class="service-icon">
							<a href="#" class="color2"><i class="fa fa-volume-control-phone"></i></a>
						</div>
						<div class="service-info">
							<h3 class="title18"><a href="#" class="white">Support 24.7</a></h3>
							<p class="desc white">Call us anytime you want</p>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End List Service -->
	</div>
	{{-- <div class="product-box3">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="product-adv3 banner-background">
					<img class="image-background hidden" src="{{ url('/') }}/themeFiles/images/home/home3/sale1.jpg" alt="" />
					<div class="banner-info">
						<div class="info-product-adv3 pull-right text-center wow zoomInUp">
							<h2 class="paci-font title30 color">Mega Sale</h2>
							<h2 class="title30 color2 text-uppercase font-bold">up to 70% off</h2>
							<a href="#" class="color btn-arrow style2">SignUp Now</a>
							<img src="{{ url('/') }}/themeFiles/images/home/home3/off1.png" alt="" />
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<div class="product-tab3 pull-left">
					<h2 class="title30 text-center font-bold">Best Sellers Products</h2>
					<ul class="text-center title-tab1 list-inline-block">
						<li class="active"><a href="#tab1" data-toggle="tab">All</a></li>
						<li><a href="#tab2" data-toggle="tab">Dried Products</a></li>
						<li><a href="#tab1" data-toggle="tab">Fruits</a></li>
						<li><a href="#tab2" data-toggle="tab">Juice</a></li>
						<li><a href="#tab1" data-toggle="tab">Vegetables</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab1" class="tab-pane active">
							<div class="deal-slider2 product-slider">
								<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,2]]">
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_20.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_30.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>		
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_16.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_19.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€170.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_04.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_09.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_22.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_23.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_35.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_36.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tab2" class="tab-pane">
							<div class="deal-slider2 product-slider">
								<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,2]]">
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_04.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_09.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>		
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_21.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_29.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€170.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_04.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_09.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_12.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_13.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_06.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_18.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- End Product Box -->
	{{-- <div class="product-box3">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<div class="product-tab3 pull-right">
					<h2 class="title30 text-center font-bold">Featured Products</h2>
					<ul class="text-center title-tab1 list-inline-block">
						<li class="active"><a href="#tab4" data-toggle="tab">All</a></li>
						<li><a href="#tab3" data-toggle="tab">Dried Products</a></li>
						<li><a href="#tab4" data-toggle="tab">Fruits</a></li>
						<li><a href="#tab3" data-toggle="tab">Juice</a></li>
						<li><a href="#tab4" data-toggle="tab">Vegetables</a></li>
					</ul>
					<div class="tab-content">
						<div id="tab3" class="tab-pane">
							<div class="deal-slider2 product-slider">
								<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,2]]">
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_20.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_30.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>		
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_16.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_19.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€170.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_04.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_09.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_22.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_23.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_35.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_36.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div id="tab4" class="tab-pane active">
							<div class="deal-slider2 product-slider">
								<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,2]]">
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_04.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_09.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>		
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_21.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_29.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€170.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_04.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_09.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_12.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_13.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
									<div class="item-product item-deal-product2 text-center">
										<div class="product-thumb">
											<a href="detail.html" class="product-thumb-link zoomout-thumb">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_06.jpg" alt="">
												<img src="{{ url('/') }}/themeFiles/images/product/fruit_18.jpg" alt="">
											</a>
											<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<del class="silver"><span>€550.00</span></del>
												<ins class="color"><span>€450.00</span></ins>
											</div>
											<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a></h3>
											<div class="product-rate">
												<div class="product-rating" style="width:100%"></div>
											</div>
											<div class="product-extra-link">
												<a href="#" class="wishlist-link"><i class="fa fa-heart-o" aria-hidden="true"></i><span>Wishlist</span></a>
												<a href="#" class="addcart-link">Add to cart</a>
												<a href="#" class="compare-link"><i class="fa fa-compress" aria-hidden="true"></i><span>Compare</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="product-adv3 banner-background">
					<img class="image-background hidden" src="{{ url('/') }}/themeFiles/images/home/home3/sale2.jpg" alt="" />
					<div class="banner-info">
						<div class="info-product-adv3 pull-left text-center wow zoomInUp" data-wow-delay="0.5s">
							<h2 class="paci-font title30 color">Deals</h2>
							<h2 class="title30 color2 text-uppercase font-bold">of the day</h2>
							<a href="#" class="color btn-arrow style2">Shop now</a>
							<img src="{{ url('/') }}/themeFiles/images/home/home3/off2.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- End Product Box -->
	{{-- <div class="product-price-off">
		<div class="container">
			<h2 class="title30 text-center font-bold">Price Of The Day</h2>
			<ul class="list-inline-block text-center title-tab-icon3">
				<li><a href="#pr1" data-toggle="tab"><img class="wobble-horizontal" src="{{ url('/') }}/themeFiles/images/home/home2/fru1.png" alt=""><span>VEGETABLE</span></a></li>
				<li><a href="#pr2" data-toggle="tab"><img class="wobble-horizontal" src="{{ url('/') }}/themeFiles/images/home/home2/fru2.png" alt=""><span>FRUITS</span></a></li>
				<li class="active"><a href="#pr1" data-toggle="tab"><img class="wobble-horizontal" src="{{ url('/') }}/themeFiles/images/home/home2/fru4.png" alt=""><span>BREAD</span></a></li>
				<li><a href="#pr2" data-toggle="tab"><img class="wobble-horizontal" src="{{ url('/') }}/themeFiles/images/home/home2/fru5.png" alt=""><span>OTHERS</span></a></li>
			</ul>
			<div class="tab-content">
				<div id="pr1" class="tab-pane active">
					<div class="list-price-off clearfix">
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_12.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Conconut Chips</a><strong class="color pull-right">$20/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_01.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Apetito Pure Fruit Juice</a><strong class="color pull-right">$48/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_25.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Asian Banana</a><strong class="color pull-right">$53/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_21.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a><strong class="color pull-right">$35/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_11.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Conconut Chips</a><strong class="color pull-right">$27/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_24.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Aurore Grape</a><strong class="color pull-right">$29/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
					</div>
					<div class="text-center">
						<a href="#" class="btn-arrow color">View All</a>
					</div>
				</div>
				<!-- ENd Tab -->
				<div id="pr2" class="tab-pane">
					<div class="list-price-off">
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_02.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Conconut Chips</a><strong class="color pull-right">$20/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_03.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Apetito Pure Fruit Juice</a><strong class="color pull-right">$48/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_25.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Asian Banana</a><strong class="color pull-right">$53/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_04.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Fresh Meal Kit</a><strong class="color pull-right">$35/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_05.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Conconut Chips</a><strong class="color pull-right">$27/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
						<div class="item-product-price table">
							<div class="product-thumb">
								<a href="detail.html" class="product-thumb-link zoom-thumb">
									<img src="{{ url('/') }}/themeFiles/images/product/fruit_06.jpg" alt="">
								</a>
								<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
							</div>
							<div class="product-info">
								<h3 class="product-title"><a href="detail.html">Aurore Grape</a><strong class="color pull-right">$29/1 Pound</strong></h3>
								<p class="desc">Organic food consumption is rapidly increasing. The heightened interest in the global environment and a willingness to look</p>
							</div>
						</div>
					</div>
					<div class="text-center">
						<a href="#" class="btn-arrow color">View All</a>
					</div>
				</div>
				<!-- ENd Tab -->
			</div>
		</div>
	</div> --}}
	<!-- End Price Off -->
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
							<img src="{{ url('/') }}/player/img/basketbal-640x355.jpg" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<a href="{{ url('/') }}/themeFiles/images/home/home3/dddd.jpg" class="fancybox btn-gal" data-fancybox-group="gallery">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
									<h2 class="title18 font-bold">
										<a href="#" class="color">{{ trans('player.home_se3_subtit1') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInLeft" data-wow-delay="0.4s">
							<img src="{{ url('/') }}/player/img/_101883084_046410358.jpg" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<a href="{{ url('/') }}/themeFiles/images/home/home3/dddd.jpg" class="fancybox btn-gal" data-fancybox-group="gallery">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
									<h2 class="title18 font-bold">
										<a href="#" class="color">{{ trans('player.home_se3_subtit2') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInLeft" data-wow-delay="0.6s">
							<img src="{{ url('/') }}/player/img/3.jpg" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<a href="{{ url('/') }}/themeFiles/images/home/home3/dddd.jpg" class="fancybox btn-gal" data-fancybox-group="gallery">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
									<h2 class="title18 font-bold">
										<a href="#" class="color">{{ trans('player.home_se3_subtit3') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInRight" data-wow-delay="0.8s">
							<img src="{{ url('/') }}/player/img/golf2.jpg" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<a href="{{ url('/') }}/themeFiles/images/home/home3/dddd.jpg" class="fancybox btn-gal" data-fancybox-group="gallery">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
									<h2 class="title18 font-bold">
										<a href="#" class="color">{{ trans('player.home_se3_subtit4') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInRight" data-wow-delay="1s">
							<img src="{{ url('/') }}/player/img/RacketballDunlop.jpg" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<a href="{{ url('/') }}/themeFiles/images/home/home3/dddd.jpg" class="fancybox btn-gal" data-fancybox-group="gallery">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
									<h2 class="title18 font-bold">
										<a href="#" class="color">{{ trans('player.home_se3_subtit5') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-6">
						<div class="item-gal3 box-hover-dir wow zoomInRight" data-wow-delay="1.2s">
							<img src="{{ url('/') }}/player/img/405855-squash-1341861255-324-640x480.jpg" alt="" />
							<div class="gal-info3">
								<div class="gal-content3">
									<a href="{{ url('/') }}/themeFiles/images/home/home3/dddd.jpg" class="fancybox btn-gal" data-fancybox-group="gallery">
										<i class="fa fa-search" aria-hidden="true"></i>
									</a>
									<h2 class="title18 font-bold">
										<a href="#" class="color">{{ trans('player.home_se3_subtit6') }}</a>
									</h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Fruit Gal -->
	<div class="container">
		{{-- <div class="statistic-box">
			<h2 class="title30 font-bold text-center border-bottom">Statistic Box</h2>
			<div class="list-statistic">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="item-rotate-number text-center text-uppercase font-bold">
							<div class="rotate-number numscroller style1">368</div>
							<h2 class="title14">SUCCESSFULL RESERVATION</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="item-rotate-number text-center text-uppercase font-bold">
							<div class="rotate-number numscroller style2">724</div>
							<h2 class="title14 color">HAPPY PLAYERS</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="item-rotate-number text-center text-uppercase font-bold">
							<div class="rotate-number numscroller style3">91</div>
							<h2 class="title14 color2">SUCCESSFULL EVENTS</h2>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="item-rotate-number text-center text-uppercase font-bold">
							<div class="rotate-number numscroller style1">570</div>
							<h2 class="title14">SUCCESSFULL CHALENGE</h2>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Static Box -->
		{{-- <div class="pop-cat3">
			<h2 class="title30 font-bold text-center">Popular Categories</h2>
			<div class="popcat-slider3">
				<div class="wrap-item" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[990,3]]">
					<div class="item-popcat3">
						<div class="banner-adv overlay-image zoom-out">
							<a href="#" class="adv-thumb-link">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop1.jpg" alt="" />
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop1.jpg" alt="" />
							</a>
						</div>
						<div class="popcat-info3 text-center white bg-color">
							<h3 class="title18 text-uppercase font-bold">Dried Products</h3>
							<p class="desc white">Wild fruit can be found just about anywhere, from city parks to the side of the highway. Even overgrown lots can be an ideal place to find bramble berries</p>
							<a href="#" class="btn-arrow color2 style2">View category</a>
						</div>
					</div>
					<div class="item-popcat3">
						<div class="banner-adv overlay-image zoom-out">
							<a href="#" class="adv-thumb-link">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop2.jpg" alt="" />
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop2.jpg" alt="" />
							</a>
						</div>
						<div class="popcat-info3 text-center white bg-color">
							<h3 class="title18 text-uppercase font-bold">Vegetables</h3>
							<p class="desc white">Wild fruit can be found just about anywhere, from city parks to the side of the highway. Even overgrown lots can be an ideal place to find bramble berries</p>
							<a href="#" class="btn-arrow color2 style2">View category</a>
						</div>
					</div>
					<div class="item-popcat3">
						<div class="banner-adv overlay-image zoom-out">
							<a href="#" class="adv-thumb-link">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop3.jpg" alt="" />
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop3.jpg" alt="" />
							</a>
						</div>
						<div class="popcat-info3 text-center white bg-color">
							<h3 class="title18 text-uppercase font-bold">Fruits</h3>
							<p class="desc white">Wild fruit can be found just about anywhere, from city parks to the side of the highway. Even overgrown lots can be an ideal place to find bramble berries</p>
							<a href="#" class="btn-arrow color2 style2">View category</a>
						</div>
					</div>
					<div class="item-popcat3">
						<div class="banner-adv overlay-image zoom-out">
							<a href="#" class="adv-thumb-link">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop1.jpg" alt="" />
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop1.jpg" alt="" />
							</a>
						</div>
						<div class="popcat-info3 text-center white bg-color">
							<h3 class="title18 text-uppercase font-bold">Dried Products</h3>
							<p class="desc white">Wild fruit can be found just about anywhere, from city parks to the side of the highway. Even overgrown lots can be an ideal place to find bramble berries</p>
							<a href="#" class="btn-arrow color2 style2">View category</a>
						</div>
					</div>
					<div class="item-popcat3">
						<div class="banner-adv overlay-image zoom-out">
							<a href="#" class="adv-thumb-link">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop2.jpg" alt="" />
								<img src="{{ url('/') }}/themeFiles/images/home/home3/pop2.jpg" alt="" />
							</a>
						</div>
						<div class="popcat-info3 text-center white bg-color">
							<h3 class="title18 text-uppercase font-bold">Vegetables</h3>
							<p class="desc white">Wild fruit can be found just about anywhere, from city parks to the side of the highway. Even overgrown lots can be an ideal place to find bramble berries</p>
							<a href="#" class="btn-arrow color2 style2">View category</a>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Pop Cat -->
		<div class="wht-choise3">
			<div class="choise-intro3 text-center wow zoomIn">
				<h2 class="title30 font-bold">{{ trans('player.home_se4_tit1') }}</h2>
				<p class="color2">{{ trans('player.home_se4_subtit1') }}</p>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="banner-choise3 wow fadeInLeft"><a href="#"><img src="{{ url('/') }}/themeFiles/images/home/home3/choise.png" alt="" /></a></div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="choise-policy3">
						<div class="item-choise3 table wow fadeInRight" data-wow-delay="0.3s">
							<div class="choise-icon3">
								<a href="#" class="color"><i class="fa fa-calendar-plus-o"></i></a>
							</div>
							<div class="choise-info3">
								<h3 class="title18"><a href="#" class="color">{{ trans('player.home_se4_tit2') }}</a></h3>
								<p class="desc">
									{{ trans('player.home_se4_p1') }}
								</p>
							</div>
						</div>
						<div class="item-choise3 table wow fadeInRight" data-wow-delay="0.6s">
							<div class="choise-icon3">
								<a href="#" class="color"><i class="fa fa-futbol-o"></i></a>
							</div>
							<div class="choise-info3">
								<h3 class="title18"><a href="#" class="color">{{ trans('player.home_se4_tit3') }}</a></h3>
								<p class="desc">
									{{ trans('player.home_se4_p2') }}
								</p>
							</div>
						</div>
						<div class="item-choise3 table wow fadeInRight" data-wow-delay="0.9s">
							<div class="choise-icon3">
								<a href="#" class="color"><i class="fa fa-trophy"></i></a>
							</div>
							<div class="choise-info3">
								<h3 class="title18"><a href="#" class="color">{{ trans('player.home_se4_tit4') }}</a></h3>
								<p class="desc">
									{{ trans('player.home_se4_p3') }}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Why Choise -->
	</div>
	{{-- <div class="newsletter-box bg-color">
		<div class="container">
			<ul class="inner-newsletter white list-inline-block">
				<li><h2 class="title30"><i class="fa fa-envelope-open"></i>Newsletter</h2></li>
				<li><p>Sign up for Kelis tips, news and advice</p></li>
				<li>
					<form class="email-form">
						<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="E-mail" type="text">
						<input type="submit" value="Sign Up">
					</form>
				</li>
			</ul>
		</div>
	</div> --}}
</section>


@endsection

@section('page_specific_scripts')
    <!-- search cripts-->
    <script src="{{ url('/') }}/player/js/playerSearch.js"></script>
    <script src="{{ url('/') }}/player/js/playgroundSearch.js"></script>
    <script src="{{ url('/') }}/player/js/inputRange.js"></script>
    <!-- search cripts-->
@stop










////////////////////////////////////////////////////////////////\

{{--  --}}
	<div class="container">
			
			<!-- ENd Post Format -->
			<div class="list-service3">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4 text-center">
						<div class="item-service1">
							<div class="service-icon" style="margin:auto">
								<a href="#" class="color2">
									<img src="{{ url('/') }}/player/img/SM/signup.png" width="40" alt="" />
                                </a>
                                <div class="hr-parent" style="position:relative">
                                    <hr style="border-top: 2px solid orange;">
                                    <span style="position:relative;bottom: 30px;color: orange;">
                                        <i class="fa fa-play" aria-hidden="true"></i>
                                    </span>
								</div>
							</div>
							<div class="service-info">
								<h3 class="title18"><a href="#" class="">Free Shipping</a></h3>
								{{-- <p class="desc">With €50 or more orders</p> --}}
							</div> 
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 text-center">
						<div class="item-service1">
							<div class="service-icon" style="margin:auto">
								<a href="#" class="color2">
									<img src="{{ url('/') }}/player/img/SM/inviteplayers.png" width="40" alt="" />
								</a>
								<div class="hr-parent" style="position:relative">
									<hr style="border-top: 2px solid orange;">
								</div>
							</div>
							<div class="service-info">
								<h3 class="title18"><a href="#" class="">Free Refund</a></h3>
								{{-- <p class="desc white">100% Refund Within 3 days </p> --}}
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 text-center">
						<div class="item-service1">
							<div class="service-icon" style="margin:auto">
								<a href="#" class="color2">
									<img src="{{ url('/') }}/player/img/SM/playmatch.png" width="40" alt="" />
                                </a>
                                <div style="position:relative">
									<hr style="border-top: 2px solid orange;">
								</div>
							</div>
							<div class="service-info">
								<h3 class="title18"><a href="#" class="">Support 24.7</a></h3>
								{{-- <p class="desc white">Call us anytime you want</p> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End List Service -->
		</div>
{{--  --}}

//////////////////////////////////////////////////////////////////