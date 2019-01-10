{{-- themeHeader --}}
<!DOCTYPE HTML>
<html lang="en-US">

<!-- Mirrored from demo.7uptheme.com/html/fruitshop/home-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 12:42:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Fruit Shop is new Html theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Html theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="Fruit,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<title>Fruit Shop | Home Style 3</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/ionicons.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/bootstrap-theme.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/jquery.fancybox.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/jquery-ui.min.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/jquery.mCustomScrollbar.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/owl.theme.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/slick.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/animate.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/libs/hover.css"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/color3.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/theme.css" media="all"/>
	<link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/responsive.css" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/browser.css" media="all"/>
    @if ( direction() == 'rtl' )
        <link rel="stylesheet" type="text/css" href="{{ url('/') }}/themeFiles/css/rtl.css" media="all"/>
    @endif
	<!-- <link rel="stylesheet" type="text/css" href="css/rtl.css" media="all"/> -->
</head>
<body class="preload">
{{-- themeheader --}}

<div class="wrap">
	{{-- themeNavbar --}}
	<header id="header">
		<div class="header">
			{{-- themeTopBar --}}
			<div class="top-header bg-color top-header2">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 hidden-xs">
							<ul class="currency-language list-inline-block pull-left">
								<li>
									<div class="language-box">
                                        @if ( direction() == 'ltr' )
                                           	<a href="{{ url('/') }}/lang/en" class="language-current white"><img src="{{ url('/') }}/themeFiles/images/icon/flag-en.png" alt=""><span>English</span></a>
                                        @else
                                            <a href="{{ url('/') }}/lang/ar" class="language-current white"><img src="{{ url('/') }}/themeFiles/images/icon/flag-en.png" alt=""><span>عربي</span></a>
                                        @endif
										<ul class="language-list list-none">
                                           	<li><a href="{{ url('/') }}/lang/ar" class=" "><img src="{{ url('/') }}/themeFiles/images/icon/flag-en.png" alt=""><span>عربي</span></a></li>
                                            <li><a href="{{ url('/') }}/lang/en" class=" "><img src="{{ url('/') }}/themeFiles/images/icon/flag-en.png" alt=""><span>English</span></a></li>											<li><a href="#"><img src="{{ url('/') }}/themeFiles/images/icon/flag-gm.png" alt=""><span>German</span></a></li>
										</ul>
									</div>
								</li>
								<li>
									<div class="currency-box">
										<a href="#" class="currency-current white"><span>Dollar</span></a>
										<ul class="currency-list list-none">
											<li><a href="#"><span class="currency-index">€</span>EUR</a></li>
											<li><a href="#"><span class="currency-index">¥</span>JPY</a></li>
											<li><a href="#"><span class="currency-index">$</span>USD</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
							<ul class="info-account list-inline-block pull-right">
								<li><a href="#" class="white"><span><i class="fa fa-user-o"></i></span>My Account</a></li>
								<li><a href="#" class="white"><span><i class="fa fa-key"></i></span>Login</a></li>
								<li><a href="#" class="white"><span><i class="fa fa-check-circle-o"></i></span>Checkout</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			{{-- themeTopBar --}}
			<!-- End Top Header -->
			{{-- themeHeaderMenu --}}
			<div class="main-header3 bg-white header-ontop">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="logo logo3 pull-left">
								<h1 class="hidden">Fruit Shop</h1>
								<a href="#"><img src="{{ url('/') }}/themeFiles/images/home/home3/logo.png" alt=""></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-12 col-xs-12">
							<nav class="main-nav main-nav3 pull-left">
								<ul>
									<li class="current-menu-item menu-item-has-children">
										<a href="index.html">Home</a>
										<ul class="sub-menu">
									<li class="menu-item-has-children">
										<a href="#">Home Style 01-05</a>
										<ul class="sub-menu">
											<li><a href="home-01.html">Home Style 01</a></li>
											<li><a href="home-02.html">Home Style 02</a></li>
											<li><a href="home-03.html">Home Style 03</a></li>
											<li><a href="home-04.html">Home Style 04</a></li>
											<li><a href="home-05.html">Home Style 05</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Home Style 06-10</a>
										<ul class="sub-menu">
											<li><a href="home-06.html">Home Style 06</a></li>
											<li><a href="home-07.html">Home Style 07</a></li>
											<li><a href="home-08.html">Home Style 08</a></li>
											<li><a href="home-09.html">Home Style 09</a></li>
											<li><a href="home-10.html">Home Style 10</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Home Style 11-14</a>
										<ul class="sub-menu">
											<li><a href="home-11.html">Home Style 11</a></li>
											<li><a href="home-12.html">Home Style 12</a></li>
											<li><a href="home-13.html">Home Style 13</a></li>
											<li><a href="home-14.html">Home Style 14</a></li>
										</ul>
									</li>
								</ul>
									</li>
									<li class="menu-item-has-children has-mega-menu">
										<a href="#">Element</a>
										<ul class="sub-menu">
											<li>
												<div class="mega-menu">
													<div class="row">
														<div class="col-md-5 col-sm-4 col-xs-12">
															<div class="mega-adv">
																<div class="banner-adv fade-out-in">
																	<a href="#" class="adv-thumb-link"><img src="{{ url('/') }}/themeFiles/images/menu/banner-electronics.jpg" alt="" /></a>
																</div>
																<div class="mega-adv-info">
																	<h3 class="title24 text-uppercase"><a href="#">Examplui coloniu tencaug</a></h3>
																	<p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
																</div>
															</div>
														</div>
														<div class="col-md-7 col-sm-8 col-xs-12">
															<div class="mega-new-arrival">
																<h2 class="mega-menu-title title30 text-uppercase">Featured Product</h2>
																<div class="mega-new-arrival-slider product-slider">
																	<div class="wrap-item group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[768,2]]">
																		<div class="item-product item-product-grid text-center">
																			<div class="product-thumb">
																				<a href="detail.html" class="product-thumb-link rotate-thumb">
																					<img src="{{ url('/') }}/themeFiles/images/product/fruit_01.jpg" alt="">
																					<img src="{{ url('/') }}/themeFiles/images/product/fruit_02.jpg" alt="">
																				</a>
																				<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
																			</div>
																			<div class="product-info">
																				<h3 class="product-title"><a href="detail.html">Conconut Chips</a></h3>
																				<div class="product-price">
																					<ins class="color"><span>€30.000</span></ins>
																				</div>
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
																		<div class="item-product item-product-grid text-center">
																			<div class="product-thumb">
																				<a href="detail.html" class="product-thumb-link rotate-thumb">
																					<img src="{{ url('/') }}/themeFiles/images/product/fruit_03.jpg" alt="">
																					<img src="{{ url('/') }}/themeFiles/images/product/fruit_04.jpg" alt="">
																				</a>
																				<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
																			</div>
																			<div class="product-info">
																				<h3 class="product-title"><a href="detail.html">Conconut Chips</a></h3>
																				<div class="product-price">
																					<ins class="color"><span>€30.000</span></ins>
																				</div>
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
																		<div class="item-product item-product-grid text-center">
																			<div class="product-thumb">
																				<a href="detail.html" class="product-thumb-link rotate-thumb">
																					<img src="{{ url('/') }}/themeFiles/images/product/fruit_05.jpg" alt="">
																					<img src="{{ url('/') }}/themeFiles/images/product/fruit_06.jpg" alt="">
																				</a>
																				<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
																			</div>
																			<div class="product-info">
																				<h3 class="product-title"><a href="detail.html">Conconut Chips</a></h3>
																				<div class="product-price">
																					<ins class="color"><span>€30.000</span></ins>
																				</div>
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
																		<div class="item-product item-product-grid text-center">
																			<div class="product-thumb">
																				<a href="detail.html" class="product-thumb-link rotate-thumb">
																					<img src="{{ url('/') }}/themeFiles/images/product/fruit_07.jpg" alt="">
																					<img src="{{ url('/') }}/themeFiles/images/product/fruit_08.jpg" alt="">
																				</a>
																				<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
																			</div>
																			<div class="product-info">
																				<h3 class="product-title"><a href="detail.html">Conconut Chips</a></h3>
																				<div class="product-price">
																					<ins class="color"><span>€30.000</span></ins>
																				</div>
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
												<!-- End Mega Menu -->
											</li>
										</ul>
									</li>
									<li><a href="#">Features</a></li>
									<li><a href="#">Pages</a></li>
									<li class="menu-item-has-children">
										<a href="grid.html">Shop</a>
										<ul class="sub-menu">
											<li><a href="grid.html">Grid Shop</a></li>
											<li><a href="list.html">List Shop</a></li>
											<li class="menu-item-has-children">
												<a href="detail.html">Product Detail</a>
												<ul class="sub-menu">
													<li><a href="detail-fullwidth.html">Detail Fullwidth</a></li>
													<li><a href="detail-extra-link.html">Detail Extra Link</a></li>
													<li><a href="detail-group.html">Detail Group</a></li>
													<li><a href="detail-sidebar-right.html">Detail Sidebar Right</a></li>
												</ul>
											</li>
											<li><a href="cart.html">Cart</a></li>
											<li><a href="checkout.html">Check Out</a></li>
									<li><a href="login-register.html">Login/Register</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#">Blog</a>
										<ul class="sub-menu">
											<li><a href="blog-list.html">Blog List</a></li>
											<li><a href="blog-masonry.html">Blog Masonry</a></li>
											<li><a href="blog-detail.html">Blog Detail</a></li>
										</ul>
									</li>
									<li><a href="about.html">About</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
								<a href="#" class="toggle-mobile-menu"><span></span></a>
							</nav>
							<ul class="list-inline-block pull-right search-cart3">
								<li>
									<form class="search-form search-form3 pull-right">
										<input onblur="if (this.value=='') this.value = this.defaultValue" onfocus="if (this.value==this.defaultValue) this.value = ''" value="Search this site" type="text">
										<input type="submit" value="">
									</form>
								</li>
								<li>
									<div class="mini-cart-box mini-cart3 pull-right">
										<a class="mini-cart-link" href="cart.html">
											<span class="mini-cart-icon title18 color2"><i class="fa fa-shopping-basket"></i></span>
											<span class="mini-cart-number bg-color white">2</span>
										</a>
										<div class="mini-cart-content text-left">
											<h2 class="title18 color">(2) ITEMS IN MY CART</h2>
											<div class="list-mini-cart-item">
												<div class="product-mini-cart table">
													<div class="product-thumb">
														<a href="detail.html" class="product-thumb-link"><img alt="" src="{{ url('/') }}/themeFiles/images/product/fruit_01.jpg"></a>
														<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
													</div>
													<div class="product-info">
														<h3 class="product-title"><a href="#">Aurore Grape</a></h3>
														<div class="product-price">
															<ins><span>$400.00</span></ins>
															<del><span>$520.00</span></del>
														</div>
														<div class="product-rate">
															<div class="product-rating" style="width:100%"></div>
														</div>
													</div>
												</div>
												<div class="product-mini-cart table">
													<div class="product-thumb">
														<a href="detail.html" class="product-thumb-link"><img alt="" src="{{ url('/') }}/themeFiles/images/product/fruit_02.jpg"></a>
														<a href="quick-view.html" class="quickview-link fancybox fancybox.iframe"><i class="fa fa-search" aria-hidden="true"></i></a>
													</div>
													<div class="product-info">
														<h3 class="product-title"><a href="#">Conconut Chips</a></h3>
														<div class="product-price">
															<ins><span>$400.00</span></ins>
															<del><span>$520.00</span></del>
														</div>
														<div class="product-rate">
															<div class="product-rating" style="width:100%"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="mini-cart-total  clearfix">
												<strong class="pull-left title18">TOTAL</strong>
												<span class="pull-right color title18">$800.00</span>
											</div>
											<div class="mini-cart-button">
												<a class="mini-cart-view shop-button" href="#">View cart </a>
												<a class="mini-cart-checkout shop-button" href="#">Checkout</a>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			{{-- themeHeaderMenu --}}
			<!-- End Main Header -->
		</div>
	</header>
	{{-- themeNavbar --}}
	<!-- End Header -->
	<section id="content">
		<div class="banner-slider bg-slider banner-slider3 parallax-slider">
			<div class="wrap-item" data-navigation="true" data-transition="fade" data-autoplay="true" data-itemscustom="[[0,1]]">
				<div class="item-slider item-slider3">
					<div class="banner-thumb"><a href="#"><img src="{{ url('/') }}/themeFiles/images/home/home3/slide1.jpg" alt="" /></a></div>
					<div class="banner-info text-center white animated" data-animated="zoomIn">
						<h2 class="title30 paci-font">Food & Nutrition</h2>
						<h2 class="font-bold text-uppercase title30">10 Health Benefits of Spirulina</h2>
						<div class="banner-button">
							<a href="#" class="btn-arrow color2 style2">Shop now</a>
							<a href="#" class="btn-arrow bg-color style2">More detail</a>
						</div>
					</div>
				</div>
				<div class="item-slider item-slider3">
					<div class="banner-thumb"><a href="#"><img src="{{ url('/') }}/themeFiles/images/home/home3/slide2.jpg" alt="" /></a></div>
					<div class="banner-info text-center white animated" data-animated="zoomIn">
						<h2 class="title30 paci-font">Fruit Juice The One</h2>
						<h2 class="font-bold text-uppercase title30">Have look at out beautiful farm</h2>
						<div class="banner-button">
							<a href="#" class="btn-arrow color2 style2">Shop now</a>
							<a href="#" class="btn-arrow bg-color style2">More detail</a>
						</div>
					</div>
				</div>
				<div class="item-slider item-slider3">
					<div class="banner-thumb"><a href="#"><img src="{{ url('/') }}/themeFiles/images/home/home3/slide3.jpg" alt="" /></a></div>
					<div class="banner-info text-center white animated" data-animated="zoomIn">
						<h2 class="title30 paci-font">Natural Fruits</h2>
						<h2 class="font-bold text-uppercase title30">Freash And Heathly</h2>
						<div class="banner-button">
							<a href="#" class="btn-arrow color2 style2">Shop now</a>
							<a href="#" class="btn-arrow bg-color style2">More detail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Banner -->
		<div class="container">
			<div class="list-post-format3">
				<div class="row">
					<div class="col-md-3 hidden-sm hidden-xs">
						<div class="item-post-format3">
							<div class="banner-adv fade-out-in zoom-image">
								<a href="#" class="adv-thumb-link"><img src="{{ url('/') }}/themeFiles/images/home/home3/ad1.jpg" alt="" /></a>
							</div>
							<div class="post-info">
								<h3 class="title18 text-uppercase"><span class="color"><i class="fa fa-image"></i></span><a href="#" class="black">image - post format</a></h3>
								<p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p>
								<p class="desc">Que ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
								<a href="#" class="shop-button">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="item-post-format3">
							<div class="banner-adv line-scale zoom-rotate">
								<a href="#" class="adv-thumb-link"><img src="{{ url('/') }}/themeFiles/images/home/home3/ad2.jpg" alt="" /></a>
							</div>
							<div class="post-info">
								<h3 class="title18 text-uppercase"><span class="color"><i class="fa fa-video-camera"></i></span><a href="#" class="black">Video - post format</a></h3>
								<p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p>
								<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi tecto beatae vitae dicta sunt explicabo. </p>
								<a href="#" class="shop-button">Read more</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="item-post-format3">
							<div class="banner-adv fade-out-in zoom-image">
								<a href="#" class="adv-thumb-link"><img src="{{ url('/') }}/themeFiles/images/home/home3/ad3.jpg" alt="" /></a>
							</div>
							<div class="post-info">
								<h3 class="title18 text-uppercase"><span class="color"><i class="fa fa-book"></i></span><a href="#" class="black">Gallery - post format</a></h3>
								<p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p>
								<p class="desc">Que ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
								<a href="#" class="shop-button">Read more</a>
							</div>
						</div>
					</div>
					<div class="hidden-lg hidden-md col-sm-6 col-xs-6">
						<div class="item-post-format3">
							<div class="banner-adv fade-out-in zoom-image">
								<a href="#" class="adv-thumb-link"><img src="{{ url('/') }}/themeFiles/images/home/home3/ad1.jpg" alt="" /></a>
							</div>
							<div class="post-info">
								<h3 class="title18 text-uppercase"><span class="color"><i class="fa fa-image"></i></span><a href="#" class="black">image - post format</a></h3>
								<p class="silver post-author-date">Post by: <a href="#">7uptheme</a> - on Jan 18, 2017</p>
								<p class="desc">Que ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
								<a href="#" class="shop-button">Read more</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ENd Post Format -->
			<div class="list-service3 bg-color2">
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
			</div>
			<!-- End List Service -->
		</div>
		<div class="product-box3">
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<div class="product-adv3 banner-background">
						<img class="image-background hidden" src="{{ url('/') }}/themeFiles/images/home/home3/sale1.jpg" alt="" />
						<div class="banner-info">
							<div class="info-product-adv3 pull-right text-center wow zoomInUp">
								<h2 class="paci-font title30 color">Mega Sale</h2>
								<h2 class="title30 color2 text-uppercase font-bold">up to 70% off</h2>
								<a href="#" class="color btn-arrow style2">Shop now</a>
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
		</div>
		<!-- End Product Box -->
		<div class="product-box3">
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
		</div>
		<!-- End Product Box -->
		<div class="product-price-off">
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
		</div>
		<!-- End Price Off -->
		<div class="fruit-gal3 box-parallax">
			<div class="container">
				<div class="intro-gal3 white text-center">
					<h2 class="title30 paci-font wow fadeInLeft">Fruit Gallery</h2>
					<h2 class="title30 font-bold wow fadeInRight">The Photos To Ponder</h2>
				</div>
				<div class="list-photo-gal3">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="item-gal3 box-hover-dir wow zoomInLeft" data-wow-delay="0.2s">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/gal1.jpg" alt="" />
								<div class="gal-info3">
									<div class="gal-content3">
										<a href="images/blog/fruit_blog_05.jpg" class="fancybox btn-gal" data-fancybox-group="gallery"><i class="fa fa-search" aria-hidden="true"></i></a>
										<h2 class="title18 font-bold"><a href="#" class="color">Pomegranate (35)</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="item-gal3 box-hover-dir wow zoomInLeft" data-wow-delay="0.4s">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/gal2.jpg" alt="" />
								<div class="gal-info3">
									<div class="gal-content3">
										<a href="images/blog/fruit_blog_02.jpg" class="fancybox btn-gal" data-fancybox-group="gallery"><i class="fa fa-search" aria-hidden="true"></i></a>
										<h2 class="title18 font-bold"><a href="#" class="color">Vegetable (80)</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="item-gal3 box-hover-dir wow zoomInLeft" data-wow-delay="0.6s">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/gal3.jpg" alt="" />
								<div class="gal-info3">
									<div class="gal-content3">
										<a href="images/blog/fruit_blog_04.jpg" class="fancybox btn-gal" data-fancybox-group="gallery"><i class="fa fa-search" aria-hidden="true"></i></a>
										<h2 class="title18 font-bold"><a href="#" class="color">Tomato (50)</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="item-gal3 box-hover-dir wow zoomInRight" data-wow-delay="0.8s">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/gal4.jpg" alt="" />
								<div class="gal-info3">
									<div class="gal-content3">
										<a href="images/blog/fruit_blog_06.jpg" class="fancybox btn-gal" data-fancybox-group="gallery"><i class="fa fa-search" aria-hidden="true"></i></a>
										<h2 class="title18 font-bold"><a href="#" class="color">Lemon (66)</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="item-gal3 box-hover-dir wow zoomInRight" data-wow-delay="1s">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/gal5.jpg" alt="" />
								<div class="gal-info3">
									<div class="gal-content3">
										<a href="images/blog/fruit_blog_07.jpg" class="fancybox btn-gal" data-fancybox-group="gallery"><i class="fa fa-search" aria-hidden="true"></i></a>
										<h2 class="title18 font-bold"><a href="#" class="color">Orange (72)</a></h2>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-6">
							<div class="item-gal3 box-hover-dir wow zoomInRight" data-wow-delay="1.2s">
								<img src="{{ url('/') }}/themeFiles/images/home/home3/gal4.jpg" alt="" />
								<div class="gal-info3">
									<div class="gal-content3">
										<a href="images/blog/fruit_blog_09.jpg" class="fancybox btn-gal" data-fancybox-group="gallery"><i class="fa fa-search" aria-hidden="true"></i></a>
										<h2 class="title18 font-bold"><a href="#" class="color">Pumpkin (36)</a></h2>
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
			<div class="statistic-box">
				<h2 class="title30 font-bold text-center border-bottom">Statistic Box</h2>
				<div class="list-statistic">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="item-rotate-number text-center text-uppercase font-bold">
								<div class="rotate-number numscroller style1">368</div>
								<h2 class="title14">SUCCESSFULL TRANSPLANT</h2>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="item-rotate-number text-center text-uppercase font-bold">
								<div class="rotate-number numscroller style2">724</div>
								<h2 class="title14 color">HAPPY PEOPLE</h2>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="item-rotate-number text-center text-uppercase font-bold">
								<div class="rotate-number numscroller style3">91</div>
								<h2 class="title14 color2">SUCCESSFULL TRANSPLANT</h2>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="item-rotate-number text-center text-uppercase font-bold">
								<div class="rotate-number numscroller style1">570</div>
								<h2 class="title14">SUCCESSFULL TRANSPLANT</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Static Box -->
			<div class="pop-cat3">
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
			</div>
			<!-- End Pop Cat -->
			<div class="wht-choise3">
				<div class="choise-intro3 text-center wow zoomIn">
					<h2 class="title30 font-bold">Why Choose Us</h2>
					<p class="color2">The Reasons That You Should Contact Us</p>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="banner-choise3 wow fadeInLeft"><a href="#"><img src="{{ url('/') }}/themeFiles/images/home/home3/choise.jpg" alt="" /></a></div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="choise-policy3">
							<div class="item-choise3 table wow fadeInRight" data-wow-delay="0.3s">
								<div class="choise-icon3">
									<a href="#" class="color"><i class="fa fa-snowflake-o"></i></a>
								</div>
								<div class="choise-info3">
									<h3 class="title18"><a href="#" class="color">100% Fresh Organic Foods</a></h3>
									<p class="desc">This is our motto and we are experts in delivering the best 100% organic foods on the market. We work with more than 60 farms all over the country.</p>
								</div>
							</div>
							<div class="item-choise3 table wow fadeInRight" data-wow-delay="0.6s">
								<div class="choise-icon3">
									<a href="#" class="color"><i class="fa fa-train"></i></a>
								</div>
								<div class="choise-info3">
									<h3 class="title18"><a href="#" class="color">Fast Free Delivery</a></h3>
									<p class="desc">We have developed an effective and fast delivery network which brings the products to your home or office in 48 hours.</p>
								</div>
							</div>
							<div class="item-choise3 table wow fadeInRight" data-wow-delay="0.9s">
								<div class="choise-icon3">
									<a href="#" class="color"><i class="fa fa-trophy"></i></a>
								</div>
								<div class="choise-info3">
									<h3 class="title18"><a href="#" class="color">Rich Experience</a></h3>
									<p class="desc">We are working with organic products for 14 years and to be honest this is the best job ever – to see the people’s smiles when they taste our fresh food!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Why Choise -->
		</div>
		<div class="newsletter-box bg-color">
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
		</div>
	</section>
	
	{{-- themeFooter --}}

	<!-- End Content -->
	<footer id="footer">
		<div class="footer3">
			<div class="footer-top3">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="footer-box3">
								<h2 class="title30 font-bold">Follow us</h2>
								<div class="social-network">
									<a href="#" class="float-shadow"><img src="{{ url('/') }}/themeFiles/images/icon/icon-fb.png" alt=""></a>
									<a href="#" class="float-shadow"><img src="{{ url('/') }}/themeFiles/images/icon/icon-tw.png" alt=""></a>
									<a href="#" class="float-shadow"><img src="{{ url('/') }}/themeFiles/images/icon/icon-ig.png" alt=""></a>
									<a href="#" class="float-shadow"><img src="{{ url('/') }}/themeFiles/images/icon/icon-gp.png" alt=""></a>
									<a href="#" class="float-shadow"><img src="{{ url('/') }}/themeFiles/images/icon/icon-pt.png" alt=""></a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="footer-box3">
								<h2 class="title30 font-bold">Contact us</h2>
								<p class="desc">Phone 084 366 4723 or 5560 724 850 for those outside of Hanoi.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<p class="desc more-contact3">For Product Registration and general enquires please <a href="#" class="color">contact us</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Footer Top -->
			<div class="footer-bottom3">
				<div class="container">
					<div class="brand-slider brand-slider3">
						<div class="wrap-item" data-pagination="false" data-autoplay="true" data-itemscustom="[[0,2],[480,3],[768,4],[990,5]]">
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br1.png" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br2.png" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br3.png" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br4.png" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br5.png" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br1.png" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br2.png" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br3.png" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br4.png" alt="" /></a>
							</div>
							<div class="item-brand">
								<a href="#" class="pulse-grow"><img src="{{ url('/') }}/themeFiles/images/home/home1/br5.png" alt="" /></a>
							</div>
						</div>
					</div>
					<!-- End List Brand -->
					<div class="policy-payment3">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<ul class="text-left text-uppercase list-inline-block term-policy">
									<li><a href="#" class="color">Privacy Policy</a></li>
									<li><a href="#" class="color">Term and Conditions</a></li>
								</ul>
								<p class="desc copyright3">Copyright © 2017 Fruit Store - All Rights Reserved.</p>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="payment-method text-right">
									<a href="#" class="wobble-top"><img src="{{ url('/') }}/themeFiles/images/icon/pay1.png" alt=""></a>
									<a href="#" class="wobble-top"><img src="{{ url('/') }}/themeFiles/images/icon/pay2.png" alt=""></a>
									<a href="#" class="wobble-top"><img src="{{ url('/') }}/themeFiles/images/icon/pay3.png" alt=""></a>
									<a href="#" class="wobble-top"><img src="{{ url('/') }}/themeFiles/images/icon/pay4.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	<div class="wishlist-mask">
		<div class="wishlist-popup">
			<span class="popup-icon color"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
			<p class="wishlist-alert">"Fruit Product" was added to wishlist</p>
			<div class="wishlist-button">
				<a href="#">Continue Shopping (<span class="wishlist-countdown">10</span>)</a>
				<a href="#">Go To Shopping Cart</a>
			</div>
		</div>
	</div>
	<!-- End Wishlist Mask -->
	<a href="#" class="scroll-top round"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
		</div>
	</div>
	<!-- End Preload -->
</div>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/jquery.fancybox.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/jquery-ui.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/owl.carousel.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/jquery.jcarousellite.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/slick.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/modernizr.custom.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/jquery.hoverdir.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/popup.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/timecircles.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/libs/wow.js"></script>
<script type="text/javascript" src="{{ url('/') }}/themeFiles/js/theme.js"></script>
</body>

<!-- Mirrored from demo.7uptheme.com/html/fruitshop/home-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 12:44:40 GMT -->
</html>
{{-- thrmrFooter --}}