@if ( !empty($event->E_candidate_id) ) {{-- if event candidate exist --}}

	@if ( $event->E_date < date("Y-m-d") ) {{-- if event date is in past --}}

		{{-- @if ( empty($event->E_reservation) ) --}} {{-- if event reservation not exist --}}

		    {{-- @if (Auth::user()->id == $event->E_creator_id || Auth::user()->id == $event->E_candidate_id) --}}		

<div>
	<div class="panel panel-default shade top-bottom-border">

      <!--------------------->
	    <div class="panel-heading text-center shade bottom-border">
	        <h4 style="color: #06774a;margin: 5px 0px">{{ trans('player.Event_winner') }}</h4>
		</div>

		<div class="panel-body">
			@if ( !empty($event->E_winer_id) )
				@if ($event->E_winer_id == $event->E_creator_id)
					<a href="{{url('/')}}/profile/{{sm_crypt($event->creator->id)}}">
						<div class="profile-img-container text-center" style="padding: 25px 0px 0px 0px;">
							<div class="d-flex justify-content-center h-100">
								<div class="image_outer_container">
									<!-- <div class="green_icon"></div> -->
									<div class="image_inner_container">
										<img class="shade"
													style="height: 100px;width: 100px;border:5px solid #06774ad4;"
													@if (empty($event->creator->user_img))
														src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
													@else
														src="{{ Storage::url($event->creator->user_img) }}"
													@endif class="user-image" alt="User Image" alt=""
										>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center" 
							style="color: #ffc107;
									font-size: 50px;
									position: relative;
									bottom: 50px;
									height: 10px;"
						>
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
					</a>
					<div class="text-center">
						<h4>{{ $event->creator->name }}</h4>
					</div>
				@elseif($event->E_winer_id == $event->E_candidate_id)
					<a href="{{url('/')}}/profile/{{sm_crypt($event->candidate->id)}}">
						<div class="profile-img-container text-center" style="padding: 25px 0px 0px 0px;">
							<div class="d-flex justify-content-center h-100">
								<div class="image_outer_container">
									<!-- <div class="green_icon"></div> -->
									<div class="image_inner_container">
										<img class="shade"
													style="height: 100px;width: 100px;border:5px solid #06774ad4;"
													@if (empty($event->candidate->user_img))
														src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
													@else
														src="{{ Storage::url($event->candidate->user_img) }}"
													@endif class="user-image" alt="User Image" alt=""
										>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center" 
							 style="color: #ffc107;
							        font-size: 50px;
							        position: relative;
							        bottom: 50px;
							        height: 10px;"
						>
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
					</a>
					<div class="text-center">
						<h4>{{ $event->candidate->name }}</h4>
					</div>
				@elseif($event->E_winer_id == -10)
					<a href="#">
						<div class="profile-img-container text-center" style="padding: 25px 0px 0px 0px;">
							<div class="d-flex justify-content-center h-100">
								<div class="image_outer_container">
									<!-- <div class="green_icon"></div> -->
									<div class="image_inner_container">
										<img class="shade"
											style="height: 100px;width: 100px;border:5px solid #06774ad4;"
											src="{{ url('/') }}/player/img/qMark.jpeg"
											class="user-image" alt="Winner Image" alt=""
										>
									</div>
								</div>
							</div>
						</div>
					</a>
				@endif
			@else
				<a href="#">
					<div class="profile-img-container text-center" style="padding: 25px 0px 0px 0px;">
						<div class="d-flex justify-content-center h-100">
							<div class="image_outer_container">
								<!-- <div class="green_icon"></div> -->
								<div class="image_inner_container">
									<img class="shade"
										style="height: 100px;width: 100px;border:5px solid #06774ad4;"
										src="{{ url('/') }}/player/img/qMark.jpeg"
										class="user-image" alt="Winner Image" alt=""
									>
								</div>
							</div>
						</div>
					</div>
				</a>
			@endif
			
			
		</div>
        
    </div> <!-- .panel -->
</div> 



		
			@endif {{-- end if Auth == E_creator or E_candidate --}}

		{{-- @endif --}} {{-- here if  end if reservation is empty --}}

	{{-- @endif --}}{{-- if event date is in past --}}

@endif {{-- end if !empty($event->E_candidate) --}}