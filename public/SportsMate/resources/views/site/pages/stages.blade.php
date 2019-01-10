<style>
a.color2:hover {
    background: orange !important;
    border-color: #008459 !important;
}
.title18 a {
    color: orange !important;
    font-size: 25px;
    font-weight: bold;
}
.title18 a:hover {
    color: #06774a !important;
    border-color: #008459 !important;
}
.service-icon a{
    width: 150px !important;
    height: 150px !important;
    line-height: 150px !important;
    background: #008459 !important;
}
@media screen and (max-width: 990px) {
    .service-icon a{
        width: 100px !important;
        height: 100px !important;
        line-height: 100px !important;
        background: #008459 !important;
    }
    .service-icon a img{
        width: 50px !important;
    }
    .title18 a {
        color: orange !important;
        font-size: 15px;
        font-weight: bold;
    }
}
@media screen and (max-width: 700px) {
    .service-icon a{
        width: 70px !important;
        height: 70px !important;
        line-height: 70px !important;
        background: #008459 !important;
    }
    .service-icon a img{
        width: 40px !important;
    }
    .title18 a {
        color: orange !important;
        font-size: 15px;
        font-weight: bold;
    }
}
/* @media screen and (max-width: 550px) {
    .service-icon a{
        width: 50px !important;
        height: 50px !important;
        line-height: 50px !important;
        background: #008459 !important;
    }
    .service-icon a img{
        width: 30px !important;
    }
    .title18 a {
        color: orange !important;
        font-size: 15px;
        font-weight: bold;
    }
} */
</style>

@if ( direction() == 'ltr' )
    <style>
        .service-icon .arrow-div{
            position:relative;bottom: 90px;left: 140px;z-index: -1;
        }
        .service-icon .arrow-div hr{
                width: 250px;
                border-top: 5px solid orange;
        }
        .service-icon .arrow-div span{
            position: relative;
            bottom: 42px;
            left: 63px;
            color: orange;
            font-size:30px
        }
        .service-info {
            padding-left: 0;
            margin-top: -60px;
            padding-right: 32px;
        }
        .service-info .title18{
            padding-left: 70px;
        }
         /* start screen: max 1200 */
        @media screen and (max-width: 1200px) {
             .service-icon .arrow-div{
                position:relative;
                bottom: 90px;
                left: 120px;
                z-index: -1;
            }
            .service-icon .arrow-div hr{
                width: 200px;
                border-top: 5px solid orange;
            }
            .service-icon .arrow-div span{
                position: relative;
                bottom: 42px;
                left: 50px;
                color: orange;
                font-size:30px
            }
            .service-info {
                padding-left: 0;
                margin-top: -60px;
                padding-left: 35px !important;
                padding-right: 0px !important;
            }
            .service-info .title18{
                padding-left: 25px;
            }
        }
        /* end screen: max 1200 */
        /* start screen: max 990 */
        @media screen and (max-width: 990px) {
             .service-icon .arrow-div{
                position:relative;
                bottom: 70px;
                left: 60px;
                z-index: -1;
            }
            .service-icon .arrow-div hr{
                width: 200px;
                border-top: 5px solid orange;
            }
            .service-icon .arrow-div span{
                position: relative;
                bottom: 39px;
                left: 50px;
                color: orange;
                font-size: 25px;
            }
            .service-info {
                padding-left: 0;
                margin-top: -60px;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .service-info .title18{
                padding-left: 0px;
            }
        }
        /* end screen: max 990 */
        /* start screen: max 700 */
        @media screen and (max-width: 700px) {
             .service-icon .arrow-div{
                position:relative;
                bottom: 60px;
                left: 85px;
                z-index: -1;
            }
            .service-icon .arrow-div hr{
                width: 160px;
                border-top: 3px solid orange;
            }
            .service-icon .arrow-div span{
                position: relative;
                bottom: 35px;
                left: 10px;
                color: orange;
                font-size: 20px;
            }
            .service-info {
                padding-left: 0;
                margin-top: -60px;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .service-info .title18{
                padding-left: 25px;
            }
        }
        /* end screen: max 700 */
        /* start screen: max 700 */
        @media screen and (max-width: 480px) {
             .service-icon .arrow-div{
                position:relative;
                bottom: 55px;
                left: 70px;
                z-index: -1;
            }
            .service-icon .arrow-div hr{
                width: 110px;
                border-top: 3px solid orange;
            }
            .service-icon .arrow-div span{
                position: relative;
                bottom: 32px;
                left: 0px;
                color: orange;
                font-size: 15px;
            }
            .service-info {
                padding-left: 0;
                margin-top: -60px;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }
            .service-info .title18{
                padding-left: 25px;
            }
        }
        /* end screen: max 700 */
    </style>
@else
    <style>
        .service-icon .arrow-div{
            position:relative;bottom: 90px;right: 140px;z-index: -1;
        }
        .service-icon .arrow-div hr{
                width: 250px;
                border-top: 5px solid orange;
        }
        .service-icon .arrow-div span{
            position: relative;
            bottom: 42px;
            right: 63px;
            color: orange;
            font-size:30px
        }
        .service-info {
            padding-right: 0;
            margin-top: -60px;
            padding-right: 32px;
        }
        .service-info .title18{
            padding-right: 25px;
        }
         /* start screen: max 1200 */
        @media screen and (max-width: 1200px) {
             .service-icon .arrow-div{
                position:relative;
                bottom: 90px;
                right: 120px;
                z-index: -1;
            }
            .service-icon .arrow-div hr{
                width: 200px;
                border-top: 5px solid orange;
            }
            .service-icon .arrow-div span{
                position: relative;
                bottom: 42px;
                right: 50px;
                color: orange;
                font-size:30px
            }
            .service-info {
                padding-right: 0;
                margin-top: -60px;
                padding-right: 35px !important;
                padding-right: 0px !important;
            }
            .service-info .title18{
                padding-right: 25px;
            }
        }
        /* end screen: max 1200 */
        /* start screen: max 990 */
        @media screen and (max-width: 990px) {
             .service-icon .arrow-div{
                position:relative;
                bottom: 70px;
                right: 60px;
                z-index: -1;
            }
            .service-icon .arrow-div hr{
                width: 200px;
                border-top: 5px solid orange;
            }
            .service-icon .arrow-div span{
                position: relative;
                bottom: 39px;
                right: 50px;
                color: orange;
                font-size: 25px;
            }
            .service-info {
                padding-right: 0;
                margin-top: -60px;
                padding-right: 0px !important;
                padding-right: 0px !important;
            }
            .service-info .title18{
                padding-left: 30px;
            }
        }
        /* end screen: max 990 */
        /* start screen: max 700 */
        @media screen and (max-width: 700px) {
             .service-icon .arrow-div{
                position:relative;
                bottom: 60px;
                right: 85px;
                z-index: -1;
            }
            .service-icon .arrow-div hr{
                width: 160px;
                border-top: 3px solid orange;
            }
            .service-icon .arrow-div span{
                position: relative;
                bottom: 35px;
                right: 10px;
                color: orange;
                font-size: 20px;
            }
            .service-info {
                padding-right: 0;
                margin-top: -60px;
                padding-right: 0px !important;
                padding-right: 0px !important;
            }
            .service-info .title18{
                padding-right: 25px;
            }
        }
        /* end screen: max 700 */
        /* start screen: max 480 */
        @media screen and (max-width: 480px) {
             .service-icon .arrow-div{
                position:relative;
                bottom: 55px;
                right: 70px;
                z-index: -1;
            }
            .service-icon .arrow-div hr{
                width: 110px;
                border-top: 3px solid orange;
            }
            .service-icon .arrow-div span{
                position: relative;
                bottom: 32px;
                right: 0px;
                color: orange;
                font-size: 15px;
            }
            .service-info {
                padding-right: 0;
                margin-top: -60px;
                padding-right: 0px !important;
                padding-right: 0px !important;
            }
            .service-info .title18{
                padding-right: 25px;
            }
        }
        /* end screen: max 480 */
    </style>
@endif
{{--  --}}
	<div class="container">
			
			<!-- ENd Post Format -->
			<div style="padding:50px 0px 0px 0px;margin-bottom:50px" {{-- class="list-service3" --}}>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-4 text-center">
						<div class="item-service1">
							<div class="service-icon" style="margin:auto">
                                <a class="color2" style="">
                                    @if (direction() == 'ltr')
                                        <img src="{{ url('/') }}/player/img/SM/signup-en.png" width="60" alt="" />
                                    @else
                                        <img src="{{ url('/') }}/player/img/SM/signup-ar.png" width="60" alt="" />
                                    @endif
                                </a>
                                <div class="arrow-div" style="">
                                    <hr style="">
                                    <span>
                                        @if (direction() == 'ltr')
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-play fa-flip-horizontal" aria-hidden="true"></i>
                                        @endif
                                    </span>
								</div>
							</div>
							<div class="service-info">
								<h3 class="title18"><a href="#" class="">{{ trans('player.Sign_up_For_Free') }}</a></h3>
								{{-- <p class="desc">With €50 or more orders</p> --}}
							</div> 
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 text-center">
						<div class="item-service1">
							<div class="service-icon" style="margin:auto">
                                <a class="color2" style="">
                                    @if (direction() == 'ltr')
                                        <img src="{{ url('/') }}/player/img/SM/inviteplayers-en.png" width="60" alt="" />
                                    @else
                                        <img src="{{ url('/') }}/player/img/SM/inviteplayers-ar.png" width="60" alt="" />
                                    @endif
                                </a>
								<div class="arrow-div" style="">
                                    <hr style="">
                                    <span>
                                        @if (direction() == 'ltr')
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-play fa-flip-horizontal" aria-hidden="true"></i>
                                        @endif
                                    </span>
								</div>
							</div>
							<div class="service-info">
								<h3 class="title18"><a href="#" class="">{{ trans('player.Invite_Players') }}</a></h3>
								{{-- <p class="desc white">100% Refund Within 3 days </p> --}}
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-4 text-center">
						<div class="item-service1">
							<div class="service-icon" style="margin:auto">
                                <a class="color2" style="">
                                    @if (direction() == 'ltr')
                                        <img src="{{ url('/') }}/player/img/SM/playmatch-en.png" width="60" alt="" />
                                    @else
                                        <img src="{{ url('/') }}/player/img/SM/playmatch-ar.png" width="60" alt="" />
                                    @endif
                                </a>
                                <div class="arrow-div" style="visibility:hidden;">
                                    <hr style="">
                                    <span>
                                        @if (direction() == 'ltr')
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        @else
                                            <i class="fa fa-play fa-flip-horizontal" aria-hidden="true"></i>
                                        @endif
                                    </span>
								</div>
							</div>
							<div class="service-info text-center">
								<h3 class="title18"><a href="#" class="">{{ trans('player.Play_A_Match') }}</a></h3>
								{{-- <p class="desc white">Call us anytime you want</p> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End List Service -->
		</div>
	{{--  --}}