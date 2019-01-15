@extends('site.themeIndex')
@section('content')

@yield('content')

<div id="friends">
    <section class="players-main">
        <div class="container">
        <div class="row">
            <div id="search-filtter" class="col-md-12">
                <div class="panel panel-default shade top-bottom-border">
                    <div class="panel-heading text-center shade bottom-border">
                        <h4 style="color: #06774a;margin: 5px 0px">Friends Requests</h4>
                    </div>
                    <div class="scroll" style="background-color: #fff; height: 500px;overflow-y: scroll;margin-bottom: 20px">
                    @if ($friends->count() > 0)
                        @foreach ($friends as $friend)
                            <div class="col-sm-3 col-xs-6 text-center">
                                @php
                                $item = $friend->sender ;
                                @endphp
                                <a class="a-holding-divs" href="{{ url('/') }}/profile/{{sm_crypt($item->id)}}">
                                    <div class="Player shade border-20" style="border: 1px solid #ffa500;margin: 5px 0px;">

                                        <div class="profile-img-container text-center" style="padding: 5px 0px 0px 0px;">
                                            <div class="d-flex justify-content-center h-100">
                                                <div class="image_outer_container">
                                                <!-- <div class="green_icon"></div> -->
                                                    <div class="image_inner_container">
                                                        <img class="shade" 
                                                            style="height: 75px;
                                                                    width: 75px;
                                                                    border: 2px solid #f89406;" 
                                                            @if (empty($item->user_img))
                                                            src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
                                                            @else
                                                            src="{{ Storage::url($item->user_img) }}"
                                                            @endif
                                                        >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="margin-bottom: 10px">
                                            <h3 style="padding-top: 5px !important;
                                                    margin-bottom: 5px !important;
                                                    font-size: 12px"
                                            >
                                                {{$item->name}}
                                            </h3>
                                            <p style="font-family: 'Roboto', sans-serif;font-size: 12px;">
                                                {{-- <span>Intermediate</span> / 
                                                <span>19 Matches</span> --}}
                                            </p>
                                            <span>
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if (round($item->playerProfile->averageRating) > $i)
                                                        <i style="color:#ffb300" class="fa fa-star"  aria-hidden="true"></i>
                                                    @else
                                                        <i style="color:#9e9e9e" class="fa fa-star"  aria-hidden="true"></i>
                                                    @endif
                                                @endfor
                                            </span>
                                        </div>

                                        <div style="margin-bottom: 10px">
                                            <h3 style="padding-top: 5px !important;
                                                    margin-bottom: 5px !important;
                                                    font-size: 12px"
                                            >
                                                
                                            </h3>
                                            <p style="font-family: 'Roboto', sans-serif;font-size: 12px;">                                         
                                                    <a class="btn btn-primary" href="{{url('/')}}/acceptfriend/{{ $friend->sender_id }}">accept</a> 
                                                    <a class="btn btn-primary" href="{{url('/')}}/rejectfriend/{{ $friend->sender_id }}">delete</a>                  
                                                
                                            </p>
                                            
                                        </div>
                                        
                                    </div>
                                </a>
                                
                            </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>       
    
</div>
@endsection

@section('page_specific_scripts')
    <!-- vue scripts-->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="{{ url('/') }}/player/js/friends.js"></script>
    <!-- vue scripts-->
@stop