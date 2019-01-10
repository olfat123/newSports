{{-- start sport image - name --}}
    <div class="col-sm-3">
        <div>
        <img  class="img img-responsive img-thumbnail" src="{{empty($Sport->sport_img) ?  url('/') . '/player/img/counter.png' :  Storage::url($Sport->sport_img) }}"/>
        </div>
        <br>
        {{--  --}}
        <div class="border-20 text-center" style="background:#fff;padding:10px;margin-bottom:5px">
        <h4>
            @if ( direction() == 'ltr' )
            {{ $Sport->en_sport_name }}   
            @else
            {{ $Sport->ar_sport_name }}   
            @endif
        </h4>
        @if( Auth::user()->sports->contains($Sport->id) )
            <div class="text-center" style="">
                <div class="btn btn-success" 
                    style="border-radius: 25px;background:orange;border:1px solid;font-size:12px"
                    data-toggle="modal" data-target="#newEventModal"
                >
                    <i class="fa fa-calendar-plus-o"></i>
                    <span>{{ trans('player.New_Event') }}</span>
                </div>
            </div>
        @else
            <div class="text-center" style="">
                <div class="btn btn-success" 
                    style="border-radius: 25px;background:orange;border:1px solid;font-size:12px"
                    data-toggle="modal" data-target="#newEventModal"
                >
                    <i class="fa fa-calendar-plus-o"></i>
                    <span>{{ trans('player.New_Event') }}</span>
                </div>
            </div>
        @endif
        </div>
    </div>
    {{-- end sport image - name --}}
    
    {{-- start sport some information --}}
    <div class="col-sm-9">
        <div class="">

        {{-- <div class="col-xs-12 col-sm-12 col-md-6">
            <div style="background:#fff;padding:5px;margin-bottom:5px">             
            <div style="background:#fff;padding:5px;">
                <h3 class="lead" style="font-size:16px;font-weight:bold;">
                {{ trans('player.playground') }}
                <span class="pull-right badge bg-danger" 
                        style="padding: 7px 9px 7px;
                            background-color: #06774a;
                            font-size: 15px;
                            border-radius: 50px;"
                >
                    1{{ $Sport->playgrounds->count() }}
                </span>
                </h3>
                <p style="color: #06774a;font-size: 13px;">
                And a little description.
                <br> and so one
                </p>
            </div>
            </div>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-4 border-20">
            <div class="border-20"  style="background:#fff;padding:5px;margin-bottom:5px">
            
            <div style="background:#fff;padding:5px;">
                <h3 class="lead" style="font-size:16px;font-weight:bold;">
                {{ trans('player.player') }}
                <span class="pull-right badge bg-danger" 
                        style="padding: 7px 9px 7px;
                            background-color:#06774a;
                            font-size: 15px;
                            border-radius: 50px;"
                >
                    {{ $Sport->player->count() }}
                </span>
                </h3>
                <p style="color:#06774a;font-size: 13px;">
                    {{ trans('player.player_count') }}
                </p>
            </div>
            </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-4 border-20">
            <div  class="border-20" style="background:#fff;padding:5px;margin-bottom:5px">
            
            <div style="background:#fff;padding:5px;">
                <h3 class="lead" style="font-size:16px;font-weight:bold;">
                {{ trans('player.challenge') }}
                <span class="pull-right badge bg-danger" 
                        style="padding: 7px 9px 7px;
                            background-color: #06774a;
                            font-size: 15px;
                            border-radius: 50px;"
                >
                    {{ $Sport->sportChallenges->count() }}
                </span>
                </h3>
                <p style="color:#06774a;font-size: 13px;">
                    {{ trans('player.challenge_count') }}
                </p>
            </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 border-20">
            <div class="border-20" style="background:#fff;padding:5px;margin-bottom:5px">
            
            <div style="background:#fff;padding:5px;">
                <h3 class="lead" style="font-size:16px;font-weight:bold;">
                {{ trans('player.event') }}
                <span class="pull-right badge bg-danger" 
                        style="padding: 7px 9px 7px;
                            background-color: #06774a;
                            font-size: 15px;
                            border-radius: 50px;"
                >
                    {{ $Sport->sportEvents->count() }}
                </span>
                </h3>
                <p style="color:#06774a;font-size: 13px;">
                    {{ trans('player.event_count') }}
                </p>
            </div>
            </div>
        </div>
        
        {{-- <div class="col-xs-12 col-sm-12 col-md-6">
            <div style="background:#fff;padding:5px;margin-bottom:5px">
            
            <div style="background:#fff;padding:5px;">
                <h3 class="lead" style="font-size:16px;font-weight:bold;">
                {{ trans('player.trainer') }}
                <span class="pull-right badge bg-danger" 
                        style="padding: 7px 9px 7px;
                            background-color: #06774a;
                            font-size: 15px;
                            border-radius: 50px;"
                >
                    {{ $Sport->trainer->count() }}
                </span>
                </h3>
                <p style="color: #06774a;font-size: 13px;">
                And a little description.
                <br> and so one
                </p>
            </div>
            </div>
        </div> --}}
        {{-- <div class="col-xs-12 col-sm-12 col-md-6">
            <div style="background:#fff;padding:5px;margin-bottom:5px">
            
            <div style="background:#fff;padding:5px;">
                <h3 class="lead" style="font-size:16px;font-weight:bold;">
                {{ trans('player.referee') }}
                <span class="pull-right badge bg-danger" 
                        style="padding: 7px 9px 7px;
                            background-color: #06774a;
                            font-size: 15px;
                            border-radius: 50px;"
                >
                    {{ $Sport->referee->count() }}
                </span>
                </h3>
                <p style="color: #06774a;font-size: 13px;">
                And a little description.
                <br> and so one
                </p>
            </div>
            </div>
        </div> --}}

        </div>
    </div>
    {{-- end sport some information --}}
        