
@if ( $events->count() > 0 )
    <div class="col-md-12 scrollable">
        @foreach ($events as $event)
        @php
            $CreatorGames = App\Model\SubEvent::where('mainEvent_id', '=', $event->id)
                                        ->where('mainEvent_type', '=', 'event')
                                        ->where('S_E_winer_id', '=', $event->E_creator_id)
                                        ->whereHas('SubEventResult', function ($query) {
                                            $query->where('E_R_YesOrNo', '=', 2);
                                        })
                                        ->count();

        $CandidateGames = App\Model\SubEvent::where('mainEvent_id', '=', $event->id)
                                        ->where('mainEvent_type', '=', 'event')
                                        ->where('S_E_winer_id', '=', $event->E_candidate_id)
                                        ->whereHas('SubEventResult', function ($query) {
                                            $query->where('E_R_YesOrNo', '=', 2);
                                        })
                                        ->count();
        @endphp
        <div>
            <a href="{{url('/')}}/Event/Show/{{sm_crypt($event->id)}}" class="a-holding-divs" style="">

                <div class="row" style="background-color: #fff;padding: 20px 53px;">
                    <div class="col-sm-4 col-xs-12 text-center">
                        <div style="border-radius: 100%; overflow: hidden; width: 60px; height: 60px; margin-top: 15px;margin: 0px auto;">
                            <img style="    width: 60px;" 
                                @if (empty( $event->creator->user_img))
                                    src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
                                @else
                                    src="{{ Storage::url($event->creator->user_img) }}"
                                @endif 
                                    style="width: 65px;height: auto;"
                            >
                        </div>

                        @if ($event->E_winer_id == $event->E_creator_id && $event->E_winer_id != null)
                        <div class="text-center" 
                            style="color: #ffc107;
                                    font-size: 30px;
                                    position: relative;
                                    bottom: 25px;
                                    height: 10px;"
                        >
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                        </div>
                        @endif
                        <span>
                            @if ( $event->E_candidate_id != null ) {{-- if event candidate exist --}}
                                @if ( $event->E_date < date("Y-m-d") ) {{-- if event date is in past --}}
                                    @php 
                                        $creatorRateCount=willvincent\Rateable\Rating::where('user_id', $event->candidate->id)
                                                                ->where('rateable_id', $event->creator->playerProfile['id'])
                                                                ->where('rateablein_id', $event->id)
                                                                ->where('rateablein_type', 'App\Model\Event')
                                                                ->count() 
                                    @endphp
                                        
                                    @if ($creatorRateCount > 0)
                                        @php 
                                            $creatorRate=willvincent\Rateable\Rating::where('user_id', $event->candidate->id)
                                                            ->where('rateable_id', $event->creator->playerProfile['id'])
                                                            ->where('rateablein_id', $event->id)
                                                            ->where('rateablein_type', 'App\Model\Event')
                                                            ->first() 
                                        @endphp	
                                        <span>
                                            @for ($i = 0; $i < 5; $i++)
                                                @if (round($creatorRate->rating) > $i)
                                                    <i style="color:#ffb300" class="fa fa-star"  aria-hidden="true"></i>
                                                @else
                                                    <i style="color:#9e9e9e" class="fa fa-star"  aria-hidden="true"></i>
                                                @endif
                                            @endfor
                                        </span>

                                    @else
                                        <span style="font-size:10px">
                                            {{trans('player.no_rate_given')}}
                                        </span>
                                    @endif
                                    
                                @endif {{-- if event date is in past --}}
                            @endif {{-- if event candidate exist --}}
                        </span>
                        <div style="margin-top:25px;">
                        <p style="font-size: 13px;">{{ $event->creator->name }}</p>
                        <h4>{{ $CreatorGames }}</h4>
                        </div>
                    </div>

                    {{-- start result part --}}
                    <div class="col-sm-4 col-xs-12 text-center">
                        <div class="row text-center">
                            @if ( $event->SubEvents->count() > 0 )
                                @foreach ($event->SubEvents as $Game)
                                <div class="row">
                                    {{-- start Showing game result --}}
                                    
                                    @if($Game->SubEventResult->E_R_YesOrNo == 2)
                                        <div class="text-center col-xs-4">
                                            <span class="span-number" >
                                                {{ $Game->SubEventResult->E_R_CreatorScore }}
                                            </span>
                                        </div>
                                        <div class="text-center col-xs-4">
                                            
                                        </div>
                                        <div class="text-center col-xs-4">
                                            <span class=" span-number" >
                                                {{ $Game->SubEventResult->E_R_CandidateScore }}
                                            </span>
                                        </div>
                                    @else
                                        {{-- <div class="col-md-12 text-center" style="margin-top:50px">
                                            <span class="shade" style="font-size: 15px;color: #9e9e9e;padding: 20px;">
                                                {{ trans('player.no_games_added') }}
                                            </span>
                                        </div>  --}}
                                    @endif
                                    
                                    {{-- end Showing game result game result --}}
                                </div>
                                @endforeach
                            @else
                                <div class="col-md-12 text-center" style="margin-top:50px">
                                    <span class="" style="font-size: 15px;color: #9e9e9e;padding:0px;">
                                        {{-- trans('player.no_games_added') --}}
                                    </span>
                                </div> 
                            @endif
                        </div>
                    </div>
                    {{-- end result part --}}

                    <div class="col-sm-4 col-xs-12 text-center">
                        <div style="border-radius: 100%; overflow: hidden; width: 60px; height: 60px; margin-top: 15px;margin: 0px auto;">
                            <img style="width: 60px;" 
                                @if ($event->E_candidate_id == null)
                                    src="{{ url('/') }}/player/img/qMark.jpeg" 
                                @else
                                    @if (empty($event->candidate->user_img))
                                    src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
                                    @else
                                    src="{{ Storage::url($event->candidate->user_img) }}"
                                    @endif class="user-image" alt="User Image" alt=""
                                    src="{{ url('/') }}/player/img/qMark.jpg" 
                                @endif 
                                    style="width: 65px;height: auto;"
                            >
                        </div>

                        @if ($event->E_winer_id == $event->E_candidate_id && $event->E_winer_id != null)
                        <div class="text-center" 
                            style="color: #ffc107;
                                    font-size: 30px;
                                    position: relative;
                                    bottom: 25px;
                                    height: 10px;"
                        >
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            
                        </div>
                        @endif
                        <span>
                            @if ( $event->E_candidate_id != null ) {{-- if event candidate exist --}}
                                @if ( $event->E_date < date("Y-m-d") ) {{-- if event date is in past --}}
                                    @php 
                                        $candidateRateCount=willvincent\Rateable\Rating::where('user_id', $event->creator->id)
                                                                ->where('rateable_id', $event->candidate->playerProfile['id'])
                                                                ->where('rateablein_id', $event->id)
                                                                ->where('rateablein_type', 'App\Model\Event')
                                                                ->count() 
                                    @endphp
                                        
                                    @if ($candidateRateCount > 0)
                                        @php 
                                            $candidateRate=willvincent\Rateable\Rating::where('user_id', $event->creator->id)
                                                            ->where('rateable_id', $event->candidate->playerProfile['id'])
                                                            ->where('rateablein_id', $event->id)
                                                            ->where('rateablein_type', 'App\Model\Event')
                                                            ->first() 
                                        @endphp	
                                        <span>
                                            @for ($i = 0; $i < 5; $i++)
                                                @if (round($candidateRate->rating) > $i)
                                                    <i style="color:#ffb300" class="fa fa-star"  aria-hidden="true"></i>
                                                @else
                                                    <i style="color:#9e9e9e" class="fa fa-star"  aria-hidden="true"></i>
                                                @endif
                                            @endfor
                                        </span>

                                    @else
                                        <span style="font-size:10px">
                                            {{trans('player.no_rate_given')}}
                                        </span>
                                    @endif
                                    
                                @endif {{-- if event date is in past --}}
                            @endif {{-- if event candidate exist --}}
                        </span>
                        <div style="margin-top: 25px;">
                            <p style="font-size: 13px;">
                                @if ($event->E_candidate_id == null)
                                <i style="visibility: hidden;" class="fa fa-question-circle" aria-hidden="true"></i>
                                @else
                                {{$event->candidate->name}}
                                @endif
                            </p>
                            <h4>{{ $CandidateGames }}</h4>
                        </div>
                    </div>  
                </div>   
                
                <div class="row text-center" style="background-color: #4f4c41;padding: 10px;">

                    <div class="col-xs-4 text-center" style="color: white;">
                        <i class="fa fa-calendar" style="color:#f89406;font-size: 15px;"></i> 
                        @php
                        echo strftime( '%d %B %Y' , strtotime($event->E_date) );// to display a nice formatted date
                        @endphp
                    </div>
                    <div class="col-xs-4 text-center " style="color: white;display:inline-flex;">
                        <i class="fa fa-clock-o" style="color:#f89406;font-size: 15px;"></i> 
                        {{$event->eventFrom->hour_format}}
                        <i class="fa fa-arrows-h" style="color:#f89406;font-size: 15px;"></i> 
                        {{$event->eventTo->hour_format}}
                    </div>
                    <div class="col-xs-4 text-center" style="color: white;">
                        <i class="fa fa-club" style="font-size: 15px;"></i> 
                        @if ($event->E_playground_id != null)
                        {{ $event->eventPlayground->c_b_p_name }}
                        @else
                        {{ trans('player.no_playground') }} 
                        @endif
                    </div>

                </div> 
            </a>   
        </div>

        @endforeach
    </div><!-- / end scrollable div-->
@else
	<div class="row ">
		<div class="col-md-12 text-center" style="padding: 70px;">
			<span class="shade" style="font-size: 20px;color: #06774a;padding: 40px;background: #fff;">
				{{ trans('player.no_events') }}
			</span>
		</div>
	</div>
    
@endif