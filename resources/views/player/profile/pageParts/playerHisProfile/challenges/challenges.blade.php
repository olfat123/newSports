@if ( $challenges->count() > 0 )
	<div class="col-md-12 scrollable">
		@foreach ($challenges as $challenge)
				@php
					$CreatorGames =  App\Model\SubEvent::where('mainEvent_id', '=', $challenge->id)
										->where('mainEvent_type', '=', 'challenge')
										->where('S_E_winer_id', '=', $challenge->C_creator_id)
										->whereHas('SubEventResult', function ($lquery) {
												$lquery->where('E_R_IsFinalResult', '=', 2);
											}) 
										->count();

			$CandidateGames =  App\Model\SubEvent::where('mainEvent_id', '=', $challenge->id)
										->where('mainEvent_type', '=', 'challenge')
										->where('S_E_winer_id', '=', $challenge->C_candidate_id)
										->whereHas('SubEventResult', function ($lquery) {
												$lquery->where('E_R_IsFinalResult', '=', 2);
											})
										->count();
				@endphp
			<div>
			<a href="{{url('/')}}/Challenge/Show/{{sm_crypt($challenge->id)}}" class="a-holding-divs" style="">

				<div>
					<div class="row" style="background-color: #fff;padding: 20px 53px;">
						<div class="col-sm-4 col-xs-12 text-center">
							<div style="border-radius: 100%; overflow: hidden; width: 60px; height: 60px; margin-top: 15px;margin: 0px auto;">
								<img style="    width: 60px;" 
										@if (empty( $challenge->creator->user_img))
												src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
										@else
												src="{{ Storage::url($challenge->creator->user_img) }}"
										@endif 
												style="width: 65px;height: auto;"
								>
							</div>

							@if ($challenge->C_winer_id == $challenge->C_creator_id && $challenge->C_winer_id != null)
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
								@if ( $challenge->C_YesOrNo == 1 )  {{-- if event candidate exist --}}
									@if ( $challenge->C_date < date("Y-m-d") ) {{-- if event date is in past --}}
										@php 
											$creatorRateCount=willvincent\Rateable\Rating::where('user_id', $challenge->candidate->id)
																	->where('rateable_id', $challenge->creator->playerProfile['id'])
																	->where('rateablein_id', $challenge->id)
																	->where('rateablein_type', 'App\Model\Challenge')
																	->count() 
										@endphp
											
										@if ($creatorRateCount > 0)
											@php 
												$creatorRate=willvincent\Rateable\Rating::where('user_id', $challenge->candidate->id)
																->where('rateable_id', $challenge->creator->playerProfile['id'])
																->where('rateablein_id', $challenge->id)
																->where('rateablein_type', 'App\Model\Challenge')
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
								<p style="font-size: 13px;">{{ $challenge->creator->name }}</p>
								<h4>{{ $CreatorGames }}</h4>
							</div>
						</div>

						{{-- start result part --}}
						<div class="col-sm-4 col-xs-12 text-center">
							<div class="row text-center">
								@if ( $challenge->SubEvents->count() > 0 )
									@foreach ($challenge->SubEvents as $Game)
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
																{{trans('player.no_games_added')}}
														</span>
												</div> --}} 
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
									@if ($challenge->C_YesOrNo == 0)
											src="{{ url('/') }}/player/img/qMark.jpeg" 
									@else
											@if (empty($challenge->candidate->user_img))
											src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
											@else
											src="{{ Storage::url($challenge->candidate->user_img) }}"
											@endif class="user-image" alt="User Image" alt=""
											src="{{ url('/') }}/player/img/qMark.jpg" 
									@endif 
											style="width: 65px;height: auto;"
								>
							</div>

							@if ($challenge->C_winer_id == $challenge->C_candidate_id && $challenge->C_winer_id != null)
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
								@if ( $challenge->C_YesOrNo == 1 )  {{-- if event candidate exist --}}
									@if ( $challenge->C_date < date("Y-m-d") ) {{-- if event date is in past --}}
										@php 
											$candidateRateCount=willvincent\Rateable\Rating::where('user_id', $challenge->creator->id)
																	->where('rateable_id', $challenge->candidate->playerProfile['id'])
																	->where('rateablein_id', $challenge->id)
																	->where('rateablein_type', 'App\Model\Challenge')
																	->count() 
										@endphp
											
										@if ($candidateRateCount > 0)
											@php 
												$candidateRate=willvincent\Rateable\Rating::where('user_id', $challenge->creator->id)
																->where('rateable_id', $challenge->candidate->playerProfile['id'])
																->where('rateablein_id', $challenge->id)
																->where('rateablein_type', 'App\Model\Challenge')
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
									@if ($challenge->C_YesOrNo == 0)
									<i style="visibility: hidden;" class="fa fa-question-circle" aria-hidden="true"></i>
									@else
									{{$challenge->candidate->name}}
									@endif
								</p>
								<h4>{{ $CandidateGames }}</h4>
							</div>
						</div>  
					</div>   
				</div>

				<div class="row text-center" style="background-color: #4f4c41;padding: 10px;">

					<div class="col-xs-4 text-center" style="color: white;">
						<i class="fa fa-calendar" style="color:#f89406;font-size: 15px;"></i>
						@php
						echo strftime( '%d %B %Y' , strtotime($challenge->C_date) );// to display a nice formatted date
						@endphp
					</div>
					<div class="col-xs-4 text-center " style="color: white;display:inline-flex;">
						<i class="fa fa-clock-o" style="color:#f89406;font-size: 15px;"></i>
						{{$challenge->ChallengeFrom->hour_format}}
						<i class="fa fa-arrows-h" style="color:#f89406;font-size: 15px;"></i>
						{{$challenge->ChallengeTo->hour_format}}
					</div>
					<div class="col-xs-4 text-center" style="color: white;">
						<i class="fa fa-club" style="font-size: 15px;"></i>
						@if ($challenge->C_playground_id != null)
						{{ $challenge->challengePlayground->c_b_p_name }}
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