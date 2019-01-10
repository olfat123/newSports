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