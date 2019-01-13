<input type="hidden" name="playerId" value="{{ $user->id }}">
@php
 $requests = Auth::user()->getFriendRequests(); 
@endphp   
@foreach($requests as $request) 
  <div>
    {{$request->sender_id}}
    <a class="btn btn-success" 
            style="border-radius: 25px;background:orange;"
            href="{{url('/')}}/acceptfriend/{{ $request->sender_id }}"
           
      >          
          <span>{{ trans('player.Accept') }}</span>
    </a>
    <a class="btn btn-success" 
            style="border-radius: 25px;background:orange;"
            href="{{url('/')}}/rejectfriend/{{ $request->sender_id }}"
           
      >          
          <span>{{ trans('player.Reject') }}</span>
    </a>
  </div>
@endforeach
@if (Auth::id() != $user->id)
  @if($user->isFriendWith(Auth::user()))
    <div class="text-center" style="">
      <a class="btn btn-success" 
            style="border-radius: 25px;background:orange;"
            href="{{url('/')}}/unfriend/{{ $user->id }}"
           
      >          
          <span>{{ trans('player.Unfriend') }}</span>
        </a>
    </div>
  @elseif($user->hasFriendRequestFrom(Auth::user()))
    <div class="text-center" style="">
      <a class="btn btn-success" 
            style="border-radius: 25px;background:orange;"
            href=""
           
      >          
          <span>{{ trans('player.Pending_request') }}</span>
        </a>
    </div>
  @else
    <div class="text-center" style="">
      <a class="btn btn-success" 
            style="border-radius: 25px;background:orange;"
            href="{{url('/')}}/addfriend/{{ $user->id }}"
           
      >          
          <span>{{ trans('player.Add_friend') }}</span>
        </a>
    </div>
  @endif
@endif
<div class="profile-img-container text-center" style="padding: 25px 0px 0px 0px;">
  <div class="d-flex justify-content-center h-100">
    <div class="image_outer_container">
      <!-- <div class="green_icon"></div> -->
      <div class="image_inner_container">
        <img class="shade" 
            @if (empty($user->user_img))
              src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
            @else
              src="{{ Storage::url($user->user_img) }}"
            @endif
        >
      </div>
    </div>
  </div>
  @if (Auth::id() == $user->id)
    {{-- <label for="upload-old" style="position:absolute;top: 25%;left:50%;
        transform:translate(-50%, -20%);
        -ms-transform:translate(-50%, -20%);
        color:white;font-size:16px;border:none;
        cursor:pointer;font-size:20px;color:#dddddd94;">
        <span style="position:absolute;bottom:0%;left:50%;
        transform:translate(-50%, -20%);
        -ms-transform:translate(-50%, -20%);
        color:white;font-size:16px;border:none;
        cursor:pointer;font-size:20px;color:##9e9e9e;"
        >
          <i class="fa fa-camera" aria-hidden="true"></i>
        </span>
        <input type="file" id="upload" style="display:none">
        
    </label> --}}
  @endif
  
</div>
<div class="text-center">
  @php 
      //$creatorRate=willvincent\Rateable\Rating::where('rateable_id', $user->playerProfile['id'])->get() 
      $Rate = $user->playerProfile->averageRating()
  @endphp	
  <span>
      @for ($i = 0; $i < 5; $i++)
          @if (round($Rate) > $i)
              <i style="color:#ffb300" class="fa fa-star"  aria-hidden="true"></i>
          @else
              <i style="color:#fff" class="fa fa-star"  aria-hidden="true"></i>
          @endif
      @endfor
  </span>
</div> 
<div class="text-center">
  <div style="padding: 10px">
    <h4 style="color:#fff">
      {{ $user->name }} 
    </h4>
  </div>
  
  @if( Auth::id() == $user->id )
{{--     <div class="text-center" style="">
    <div class="btn btn-success" 
          style="border-radius: 25px;background:orange;"
          data-toggle="modal" data-target="#newEventModal"
    >
        <i class="fa fa-calendar-plus-o"></i>
        <span>{{ trans('player.New_Event') }}</span>
      </div>
    </div>

    <div class="text-center">
      <h4 style="color:#fff;">
        <span style="color:#FFF;cursor:pointer;"
            data-toggle="modal" data-target="#editMainInfoModal"
        >
          <i class="fa fa-edit"></i>
        </span>
      </h4>
    </div> --}}

  @else
      <div class="text-center" style="">
      <div class="btn btn-success" 
            style="border-radius: 25px;background:orange;"
            data-toggle="modal" data-target="#newChallengeModal"
      >
          <i class="fa fa-calendar-plus-o"></i>
          <span>{{ trans('player.New_Challenge') }}</span>
        </div>
      </div>
  @endif
    
  
  <div class="clearfix"></div> 
</div>
<div>
    <h3 style="font-size: 95%;color:#FFF">
    <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 130%;"></i>
    {{  $user->email }}
  </h3>

  @if (Auth::id() == $user->id)
    @if (!empty( $user->playerProfile->p_phone ))
       <div>
        <p style="color: #fff;font-size:13px;">
          <i class="fa fa-phone"></i>
          {{$user->playerProfile->p_phone}}
        </p>
      </div>   
    @endif  
  @endif
 
  <div>
      <p style="color: #fff;font-size:13px;">
        <i class="fa fa-map-marker"></i>

        @if (!empty( $user->playerProfile->p_city ))
          @if (direction() == 'ltr')
            {{$user->playerProfile->governorate->g_en_name}}, 
          @else
            {{$user->playerProfile->governorate->g_ar_name}}, 
          @endif
        @endif

        
        @if (!empty( $user->playerProfile->p_area ))
          @if (direction() == 'ltr')
            {{$user->playerProfile->area->a_en_name}}
          @else
            {{$user->playerProfile->area->a_ar_name}}
          @endif
        @endif
        
      </p>
    </div>

  <div>
    <p style="color: #fff;font-size:13px;">
      @if ($user->playerProfile->p_gender == 1)
        {{ trans('player.male') }}
        <i class="fa fa-male" ></i>  
      @elseif($user->playerProfile->p_gender == 2)
        {{ trans('player.female') }}
        <i class="fa fa-female" ></i>  
      @endif
    </p>
  </div>
</div>
<div class="clearfix"></div>

{{-- <hr style="border-top: 2px solid #eee; margin:2px 20px;"> --}}
<div class="" style="">
  <div style="">
    <p style="color: #fff;font-size:13px">{{ trans('player.Interested_in') }} : 
      @if ($user->playerProfile->p_preferred_gender == 1)
        <span style="font-size: 120%;color: #fff;"><i class="fa fa-male" ></i></span>  
      @elseif($user->playerProfile->p_preferred_gender == 2)
        <span style="font-size: 120%;color: #fff;"><i class="fa fa-female" ></i></span>  
      @elseif($user->playerProfile->p_preferred_gender == 3)
        <span style="font-size: 120%;color: #fff;"><i class="fa fa-male" ></i> | <i class="fa fa-female" ></i> </span> 
      @elseif($user->playerProfile->p_preferred_gender == null)
        <span style="color: #fff;">not sure </span> 
      @endif
    </p>
  </div>
  <div style="margin-bottom: 40px">
    <p style="color: #fff;font-size:13px">
       {{-- {{ trans('player.Age') }} --}} <i class="fa fa-birthday-cake"></i> 
      <span style="color:#fff;">
          @php
          $age = date_diff(date_create($user->playerProfile->p_born_date), date_create('now'))->y ;

          echo ($age != 0 ? ' <span style="color:#fff">' . $age  . ' </span>' . trans('player.Years_Old') : trans('player.Not_Detemined'));

          echo '';
          @endphp
      </span>
    </p>
  </div>
  {{-- <div>
    <h4 style="color: #99d21e;">
    {{ trans('player.Sports') }} 
      @if (Auth::id() == $user->id)
         <span style="color:#FFF;cursor:pointer;" 
            data-toggle="modal" data-target="#sportseditModal">
          <i class="pull-right fa fa-edit"></i>
        </span>
       @endif 
    </h4>
    @foreach ($user->sports as $sport)
      <div class="shade col-md-12 col-sm-6 col-xs-12" 
            id="{{$sport->id}}_sport_div" 
           style="padding: 0px 16px;
                  background:orange;
                  border: 2px solid #fff;
                  border-radius: 5px;
                  margin: 10px 0px" 
      >
        <p style="color: #fff;font-size:13px">
          <span style="color:#fff;font-size:15px">
            @if (direction() == 'ltr')
              {{$sport->en_sport_name}}
            @else
              {{$sport->ar_sport_name}}
            @endif
          </span>
          <br>
           @if ($sport->sportUserInfo->as_player == 1)

              <span style="" class="badge badge-success rolesbadge">
                  {{ trans('player.A_Player') }}
              </span>

            @endif
            @if ($sport->sportUserInfo->as_trainer == 1)

                <span style="" class="badge badge-error rolesbadge">
                    {{ trans('player.A_Trainer') }}
                </span>

            @endif
            @if ($sport->sportUserInfo->as_referee == 1)

                <span style="" class="badge badge-info rolesbadge">
                    {{ trans('player.A_Referee') }}
                </span>

            @endif
        </p>
      </div>
      
    @endforeach
  </div> --}}

  {{-- <div>
    <div style="padding: 10px">
      <h4 style="color:#99d21e;">
        {{ trans('player.Available_Time') }} 
        @if (Auth::id() == $user->id)
          <span style="color:#FFF;cursor:pointer;"
              data-toggle="modal" data-target="#vacantTimeModal"
          >
            <i class="pull-right fa fa-edit"></i>
          </span>
        @endif
      </h4>
    </div>
    @if ($user->vacancies->count() > 0)
      @foreach ($user->vacancies as $vacant)
        <div class="shade" style="padding: 0px 16px;
                    background: #eee;
                    border: 2px solid #fff;
                    border-radius: 5px;
                    margin: 10px 0px" 
        >
          <!-- <span>Day :</span> -->
          <span class="badge badge-success rolesbadge">{{ $vacant->Day->day_format }}</span>
          <span></span>
          <span class="badge badge-info rolesbadge">{{ $vacant->From->hour_format }}</span>
          <span></span>
          <span class="badge badge-info rolesbadge">{{ $vacant->To->hour_format }}</span>

        </div>
      @endforeach
    @else
      <div class="shade" style="padding: 0px 16px;
                    background: #eee;
                    border: 2px solid #fff;
                    border-radius: 5px;
                    margin: 10px 0px" 
        >
          <p>{{ trans('player.No_Vacant_Times') }}</p>
        </div>
    @endif
   

  </div> --}}
</div>

