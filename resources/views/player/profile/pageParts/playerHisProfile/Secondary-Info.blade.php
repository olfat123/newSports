<input type="hidden" name="playerId" value="{{ $user->id }}">



<div class="clearfix"></div>

<div class="text-center" style="color: #fff;margin: auto;padding: 20px">

  {{-- start sports --}}
  <div>
    <p style="color: #fff;font-size:13px">
    {{ trans('player.Sports') }} 
      @if (Auth::id() == $user->id)
        {{--  <span style="color:#FFF;cursor:pointer;" 
            data-toggle="modal" data-target="#sportseditModal">
          <i class="pull-right fa fa-edit"></i>
        </span> --}}
       @endif 
    </p>
    @if ($user->sports->count() > 0)
      @foreach ($user->sports as $sport)
        <div class="shade border-20" 
              id="{{$sport->id}}_sport_div" 
            style="padding: 0px 16px;
                    background: #fff;
                    border: 2px solid #fff;
                    border-radius: 5px;
                    margin: 10px 0px" 
        >
          <p style="color: #fff;font-size:13px">
            <span style="color:#06774a;font-size:13px">
              @if (direction() == 'ltr')
                {{$sport->en_sport_name}}
              @else
                {{$sport->ar_sport_name}}
              @endif
            </span>
            {{-- <br>
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

              @endif --}}
          </p>
        </div>
        
      @endforeach
    @else
      <div class="shade border-20" style="padding: 0px 16px;
                    background: #fff;
                    border: 2px solid #fff;
                    border-radius: 5px;
                    margin: 10px 0px" 
      >
        <p style="font-size:13px;color:#06774a">{{ trans('player.No_Sports') }}</p>
      </div>
    @endif
  </div>
  {{-- end sports --}}
  <hr style="border-top: 2px solid #eee; margin:2px 20px;">
  <div>
    <div>
      <p style="color:#fff;font-size:13px">
        {{ trans('player.Available_Time') }} 
        @if (Auth::id() == $user->id)
          {{-- <span style="color:#FFF;cursor:pointer;"
              data-toggle="modal" data-target="#vacantTimeModal"
          >
            <i class="pull-right fa fa-edit"></i>
          </span> --}}
        @endif
      </p>
    </div>
    @if ($user->vacancies->count() > 0)
      @foreach ($user->vacancies as $vacant)
        @if (Auth::id() != $user->id && $vacant->active == 0)
            
        @else
          <div class="shade border-20" style="padding: 0px 16px;
                  background: #fff;
                  border: 2px solid #fff;
                  border-radius: 5px;
                  margin: 10px 0px;
                  fontsize:13px" 
          >
            <!-- <span>Day :</span> -->
            <span class="badge rolesbadge" style="background: orange;">{{ $vacant->Day->day_format }}</span>
            <span></span>
            <span class="badge rolesbadge" style="background: orange;">{{ $vacant->From->hour_format }}</span>
            <span></span>
            <span class="badge rolesbadge" style="background: orange;">{{ $vacant->To->hour_format }}</span>

          </div>
        @endif
        
      @endforeach
    @else
      <div class="shade border-20" style="padding: 0px 16px;
                    background: #fff;
                    border: 2px solid #fff;
                    border-radius: 5px;
                    margin: 10px 0px" 
        >
          <p style="font-size:13px;color:#06774a">{{ trans('player.No_Vacant_Times') }}</p>
        </div>
    @endif
   

  </div>
</div>
<!--  start upload profile image Model -->
<div id="uploadimageModal" class="modal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header" style="color: #fff;background-color: #06774a !important;">
            <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
            <h4 class="modal-title" >
              {{ trans('player.Update_Profile_Image') }} 
              <span id="imageInfoLoader" style="display:none;">
                <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
              </span>
            </h4>
          </div>
          <div class="modal-body imageInfo">
            <div class="row">
            <div class="col-md-12 text-center">
              <div id="player_photo" style="<!-- width:350px; --> margin-top:30px"></div>
            </div>
            
        </div>
          </div>
          <div class="modal-footer" style="color: #fff;background-color: #06774a !important;">
            <button class="btn btn-warning crop_image" style="background:#ff9800">{{ trans('player.Save') }}</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('player.Close') }}</button>
          </div>
      </div>
    </div>
</div>

<!--  end upload profile image Model -->

