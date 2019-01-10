<div class="panel-body" style="">
    @if (Auth::id() == $event->E_creator_id || Auth::id() == $event->E_candidate_id)
    
    <div>
        {{-- start explain how it will show results --}}
        <div class="row">
            <div class="col-sm-4 col-xs-12" style="background:#ddd">
                <span class=" span-number">
                    1
                </span>
                <span style="font-size: 13px;padding: 0px 5px;"> 
                    {{ trans('player.for_accepted_Games') }}
                </span>
            </div>
            <div class="col-sm-4 col-xs-12" style="background:#ddd">
                <span class=" span-number" style="background: #FFC107 !important;">
                    1
                </span>
                <span style="font-size: 13px;color:#FFC107;padding: 0px 5px;"> 
                    {{ trans('player.for_pending_Games') }}
                </span>
            </div>
            <div class="col-sm-4 col-xs-12" style="background:#ddd">
                <span class="span-number" style="background: #fb1504 !important;">
                    1
                </span> 
                <span style="font-size: 13px;color:#fb1504;padding: 0px 5px;">
                    {{ trans('player.for_rejected_Games') }}
                </span>
            </div>
        </div><!-- /.row --> {{-- end explain how it will show results --}}

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
                <div style="margin-top:25px;">
                <p>{{ $event->creator->name }}</p>
                <h4>{{ $CreatorGames }}</h4>
                </div>
            </div>

            {{-- start result part --}}
            <div class="col-sm-4 col-xs-12 text-center">
                <div class="row text-center">
                    <div class="text-center col-xs-12">
                        @if ($event->SubEvents->count() < 10)
                            <span style="cursor:pointer;color:#ffb300;font-size:20px" data-toggle="modal" data-target="#suggestGameModal">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                            </span>
                        @else
                            <span class="fa-stack fa-lg" data-toggle="tooltip" title="{{ trans('player.max_10_games') }}">
                                <i class="fa fa-plus-circle" style="cursor:pointer;color:#ffb300;font-size:20px" aria-hidden="true"></i>
                                <i class="fa fa-ban text-danger" style="position: relative;bottom: 34px;font-size: 35px;"></i>
                            </span>
                        @endif
                        
                    </div>
                        @if ( $event->SubEvents->count() > 0 )
                            @foreach ($event->SubEvents as $Game)
                            <div class="row">


                                {{-- start pending game result --}}
                                @if ( $Game->SubEventResult->E_R_YesOrNo == 0 )
                                    <div class="text-center col-xs-4">
                                        <span class="span-number" style="background:#FFC107 !important;">
                                            {{ $Game->SubEventResult->E_R_CreatorScore }}
                                        </span>
                                    </div>

                                    <div class="col-xs-4">
                                        @if( $Game->SubEventResult->E_R_ConfirmBy == Auth::id() )
                                            <div style="display: inline-flex;">
                                                <span class="accpetSuggestedGame" id="accpetSuggestedGame{{$Game->id}}" style="cursor:pointer;margin:2px;color:#06774a;font-size:20px">
                                                    <i class="fa fa-check-square" aria-hidden="true"></i>
                                                </span>
                                                <span class="refuseSuggestedGame" id="refuseSuggestedGame{{$Game->id}}" style="cursor:pointer;margin:2px;color:#fb1504;font-size:20px">
                                                    <i class="fa fa-window-close" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        @elseif( $Game->SubEventResult->E_R_OpinionBy == Auth::id() )
                                            <span style="cursor:pointer;margin:2px;color:#FFC107;font-size:20px">
                                                <i class="fa fa-question-circle" aria-hidden="true"></i>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="text-center col-xs-4">
                                        <span class=" span-number" style="background: #FFC107 !important;">
                                            {{ $Game->SubEventResult->E_R_CandidateScore }}
                                        </span>
                                    </div>
                                    {{-- end pending game result --}}



                                    {{-- start refused game result --}}
                                @elseif($Game->SubEventResult->E_R_YesOrNo == 1)
                                    <div class="text-center col-xs-4">
                                        <span class=" span-number" style="background: #fb1504 !important;">
                                            {{ $Game->SubEventResult->E_R_CreatorScore }}
                                        </span>
                                    </div>

                                    <div class="col-xs-4">
                                        @if( $Game->SubEventResult->E_R_ConfirmBy == Auth::id() )
                                            <div style="display: inline-flex;">
                                                <span class="" id=""  style="cursor:pointer;margin:2px;color:#fb1504;font-size:20px">
                                                    <i class="fa fa-window-close" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        @elseif( $Game->SubEventResult->E_R_OpinionBy == Auth::id() )
                                            <div style="display: inline-flex;">
                                                <span class="deleteSuggestedGame" id="deleteSuggestedGame{{$Game->id}}"  style="cursor:pointer;margin:2px;color:#fb1504;font-size:20px">
                                                    <i class="fa fa-window-close" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="text-center col-xs-4">
                                        <span class=" span-number" style="background: #fb1504 !important;">
                                            {{ $Game->SubEventResult->E_R_CandidateScore }}
                                        </span>
                                    </div>
                                {{-- end refused game result --}}



                                {{-- start accepted game result --}}
                                @elseif($Game->SubEventResult->E_R_YesOrNo == 2)
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
                                {{-- end accepted game result --}}
                                @endif



                            </div>
                            @endforeach
                        @else
                            <div class="col-md-12 text-center" style="margin-top:50px">
                                <span class="shade" style="font-size: 15px;color: #9e9e9e;padding: 20px;">
                                    {{ trans('player.no_games_added') }}
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
                    <div style="margin-top: 25px;">
                        <p>
                            @if ($event->E_candidate_id == null)
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            @else
                            {{$event->candidate->name}}
                            @endif
                        </p>
                <h4>{{ $CandidateGames }}</h4>
                </div>
            </div>  
        </div>   
    </div>
    
    @else {{-- if Auth != E_creator or E_candidate --}}
    <div>
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
                <div style="margin-top:25px;">
                <p>{{ $event->creator->name }}</p>
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
                                <div class="col-md-12 text-center" style="margin-top:50px">
                                    <span class="shade" style="font-size: 15px;color: #9e9e9e;padding: 20px;">
                                        {{ trans('player.no_games_added') }}
                                    </span>
                                </div> 
                            @endif
                            
                            {{-- end Showing game result game result --}}
                        </div>
                        @endforeach
                    @else
                        <div class="col-md-12 text-center" style="margin-top:50px">
                            <span class="shade" style="font-size: 15px;color: #9e9e9e;padding: 20px;">
                                {{ trans('player.no_games_added') }}
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
                    <div style="margin-top: 25px;">
                        <p>
                            @if ($event->E_candidate_id == null)
                            <i class="fa fa-question-circle" aria-hidden="true"></i>
                            @else
                            {{$event->candidate->name}}
                            @endif
                        </p>
                <h4>{{ $CandidateGames }}</h4>
                </div>
            </div>  
        </div>   
    </div>
    
    @endif {{-- end if Auth == E_creator or E_candidate --}}

</div><!---/.panel-body--->