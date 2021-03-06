@if ( !empty($event->E_candidate_id) ) {{-- if event candidate exist --}}

	@if ( $event->E_date > date("Y-m-d") ) {{-- if event date is in past --}}

		@if ( empty($event->E_reservation) ) {{-- if event reservation not exist --}}

			@if (Auth::user()->id == $event->E_creator_id || Auth::user()->id == $event->E_candidate_id)		


<div>
	<div class="panel panel-default shade top-bottom-border">

      <!--------------------->
      <div class="panel-heading text-center shade bottom-border">
        @if ( direction() == 'ltr' )
          <h4 style="color: #06774a;margin: 5px 0px">
          {{$event->eventSport->en_sport_name}}
          {{ trans('player.All_Available_Sport_Playgrounds') }}
          </h4>
          {{ trans('player.Desc_All_Available_Sport_Playgrounds') }}
        @else
        <h4 style="color: #06774a;margin: 5px 0px">
          {{ trans('player.All_Available_Sport_Playgrounds') }}
          {{$event->eventSport->ar_sport_name}}
          </h4>
          {{ trans('player.Desc_All_Available_Sport_Playgrounds') }}
        @endif
      </div>
{{------------------------------------------------------------}}
<!--------------->
	    <div class="panel-body scrollable" style="height:250px !important;">
			<div class="row">

 @foreach ($event->eventSport->playgrounds as $playground)<!-- for loop throw each Playground for golf -->

    @if ($event->expectedPlaygrounds->contains($playground->id) == false) <!--if for know if play Playground in suggested-->

        @php
            $ReservationCase_1 = DB::table('reservations')->where('R_playground_id', '=' , $playground->id)
                                ->where('R_date', '=' , $event->E_date)
                                ->whereBetween('R_from', [$event->E_from, (($event->E_to) - 1)])->get();

            $ReservationCase_2 = DB::table('reservations')->where('R_playground_id', '=' , $playground->id)
                                ->where('R_date', '=' , $event->E_date)
                                ->whereBetween('R_to', [(($event->E_from) + 1), $event->E_to, ])->get();

            $ReservationCase_3 = DB::table('reservations')->where('R_playground_id', '=' , $playground->id)
                                ->where('R_date', '=' , $event->E_date)
                                ->where('R_to', '>', $event->E_to)
                                ->where('R_from', '<', $event->E_from)->get();
        @endphp


        @if ($ReservationCase_1->count() != 0 || $ReservationCase_2->count() != 0 || $ReservationCase_3->count() != 0)

        @else
        	<div class="col-md-4">
        
              <div class=" shade-2 text-center" 
                   style="border: 1px solid #ddd;
                          background: #ececec;
                          margin:5px 5px 5px 5px;"
              >
                <a href="{{url('/')}}/Playground/{{sm_crypt($playground->id)}}" class="a-holding-divs" >
                  <div class="" style="padding:5px 0px 0px 0px;">
                    <div class="">
                      <div class="">
                        <!-- <div class="green_icon"></div> -->
                        <div class="" style="height: 100px;width: 100%;overflow-y: hidden;">
                          <img class="shade"
                                style="width:100%;"
                                @if (empty($event->playground->user_img))
                                  src="{{ url('/') }}/player/img/football-playground.jpg"
                                  
                                @else
                                  src="{{ Storage::url($playground->user_img) }}"
                                @endif class="user-image" alt="User Image" alt="" 
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                <h3 style="color:#06774a;font-size:13px !important;padding-top: 0px !important;">
                  <span>{{ $playground->c_b_p_name }}</span>
                  <!--if for know if Playground near Event creator address-->
                  @if ($playground->c_b_p_city == Auth::user()->playerProfile->p_city && $playground->c_b_p_area == Auth::user()->playerProfile->p_area)
                  <span>
                    <i class="fa fa-map-marker" style="color:#ffb300;"></i>
                  </span>
                  @endif
                </h3>
                  {{-- used to if Auth is creator --}}
                    {{-- now will check if no candidate and event date still in future --}}
            	<span class="a-holding-divs suggestEventPlayground" 
            	      style="color:#ffb300;font-size:20px;cursor:pointer;"
            	      id="{{ $event->id }}_{{ $playground->id }}_suggest" 
            	>
                    <i class="fa fa-check-square" aria-hidden="true"></i>
                </span>
            	<span id="{{ $event->id }}_{{ $playground->id }}_suggestLoader" style="display:none">
                    <i class="fa fa-circle-o-notch fa-spin" style="font-size:15px"></i>
                </span>
              </div>
          </div>
                
        @endif





    @endif<!--if for know if play Playground in suggested-->

@endforeach<!-- for loop throw each Playground for golf -->
		    </div> <!-- /.row-->
		</div>
	<!---------------->
{{------------------------------------------------------------}}
	</div> <!---/.panel--->
</div> <!--- /div --->



		
			@endif {{-- end if Auth == E_creator or E_candidate --}}

		@endif {{-- here if  end if reservation is empty --}}

	@endif{{-- if event date is in past --}}

@endif {{-- end if !empty($event->E_candidate) --}}

