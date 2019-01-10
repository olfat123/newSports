{{-- 

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
    @endphp --}}
     @php
    //$Carbon = new Illuminate\SupportCarbon;
    if ( direction() == 'ltr') {
        \Illuminate\Support\Carbon::setLocale('en');
    } else {
        Illuminate\Support\Carbon::setLocale('ar');
    }
    
    @endphp
            
<div>
    @if (Auth::id() == $user->id)
    {{-- profile control--}}
    <div class="row text-center" style="background-color: #fff;padding: 20px 53px;margin:0px 0px 15px 0px;">
        <div class="col-sm-12  text-center" style="padding-bottom: 10px;">
            <span style="font-weight:bold;color: #06774a;font-size:18px;">{{ trans('player.profile_settings') }}</span>
        </div>
        <div class="col-sm-6  text-center" style="padding-bottom: 10px;">
            <div class="btn btn-success" 
                style="border: 1px solid #ddd;border-radius: 25px;background:orange;font-size: 12px;" 
                data-toggle="modal" 
                data-target="#editMainInfoModal"
            >
                <i class="fa fa-pencil"></i>
                <label style="margin:0px;font-weight:100;cursor:pointer">{{ trans('player.edit_Profile') }}</label>
            </div>
        </div>
        <div class="col-sm-6  text-center" style="padding-bottom: 10px;">
            <div class="btn btn-success" 
                style="border: 1px solid #ddd;border-radius: 25px;background:orange;font-size: 12px;" 
            >
                
                <label style="margin:0px;font-weight:100;cursor:pointer" for="upload">
                    <i class="fa fa-camera"></i> 
                    {{ trans('player.Update_Profile_Image') }} 
                    <input type="file" id="upload" style="display:none">
                </label>
            </div>
        </div>
        <div class="col-sm-6  text-center" style="padding-bottom: 10px;">
            <div class="btn btn-success" 
                style="border: 1px solid #ddd;border-radius: 25px;background:orange;font-size: 12px;" 
                data-toggle="modal" 
                data-target="#sportseditModal"
            >
                <i class="fa fa-pencil"></i>
                <label style="margin:0px;font-weight:100;cursor:pointer">{{ trans('player.edit_Sports') }}</label>
            </div>
        </div>
        <div class="col-sm-6  text-center" style="padding-bottom: 10px;">
            <div class="btn btn-success" 
                style="border: 1px solid #ddd;border-radius: 25px;background:orange;font-size: 12px;" 
                data-toggle="modal" 
                data-target="#vacantTimeModal"
            >
                <i class="fa fa-pencil"></i>
                <label style="margin:0px;font-weight:100;cursor:pointer">{{ trans('player.edit_avaliable_times') }}</label>
            </div>
        </div>
        <div class="col-sm-12  text-center" style="padding-bottom: 10px;">
            <div class="text-center" style="">
                <div class="btn btn-success" 
                    style="border-radius: 25px;background:orange;border: 1px solid #ddd;"
                    data-toggle="modal" data-target="#newEventModal"
                >
                    <i class="fa fa-calendar-plus-o"></i>
                    <span>{{ trans('player.New_Event') }}</span>
                </div>
            </div>
        </div>
    </div>
    {{-- profile control--}}
    @endif

    {{-- profile info --}}
    <div class="row text-center" style="background-color: #fff;padding: 20px 53px;margin:0px 0px 15px 0px;" >
        <div class="col-sm-6  text-center">
            <p class="time" style="font-size:12px;">
                <span>{{ trans('player.Member_Since') }}</span>
                <span class="badge rolesbadge" style="padding:3px 4px;background: orange;">{{$user->created_at->toDateString()}}</span>
            </p>
        </div>
        <div class="col-sm-6  text-center">
            <p class="time" style="font-size:12px;">
                <span>{{ trans('player.intrested_in') }} </span> 
                <span class="badge rolesbadge" style="padding:3px 4px;background: orange;">{{$user->sports->count()}}</span>
                <span>{{ trans('player.sport(s)') }}</span>
            </p>
        </div>
        {{-- <div class="col-sm-6  text-center">
            <p class="time" style="font-size:12px;">
                <span>intrested in </span> 
                <span class="badge rolesbadge" style="padding:3px 4px;background: orange;">{{$user->sports->count()}}</span>
                <span>sport(s)</span>
            </p>
        </div>
        <div class="col-sm-6  text-center">
            <p class="time" style="font-size:12px;">
                <span>intrested in </span> 
                <span class="badge rolesbadge" style="padding:3px 4px;background: orange;">{{$user->sports->count()}}</span>
                <span>sport(s)</span>
            </p>
        </div> --}}
    </div>
    {{-- profile info --}}

    
    {{--  --}}
    <div class="row" style="background-color: #fff;padding: 20px 53px;margin:0px 0px 15px 0px;">
        <div class="col-sm-12 text-center" style="padding-bottom: 10px;">
            <span style="font-weight:bold;color: #06774a;font-size:18px;">{{ trans('player.events') }}</span>
        </div>
        <div class="col-sm-6 text-center">
            <p class="time" style="font-size:12px;">
                <span>{{ trans('player.Create_Events') }}</span> 
                <span class="badge rolesbadge" style="padding:3px 4px;background: orange;">{{$createEvents->count()}}</span>
            </p>
        </div>
        <div class="col-sm-6 text-center">
            <p class="time" style="font-size:12px;">
                <span>{{ trans('player.Accepted_In_Events') }}</span> 
                <span class="badge rolesbadge" style="padding:3px 4px;background: orange;">{{$candidateEvents->count()}}</span>
            </p>
        </div>
        {{-- <div class="col-sm-3">
            {{$createChallenges->count()}}
        </div>
        <div class="col-sm-3">
            {{$candidateChallenges->count()}}
        </div> --}}
    </div>
    {{--  --}}

    {{--  --}}
    <div class="row" style="background-color: #fff;padding: 20px 53px;margin:0px 0px 15px 0px;">
        <div class="col-sm-12 text-center" style="padding-bottom: 10px;">
            <span style="font-weight:bold;color: #06774a;font-size:18px;">{{ trans('player.challenges') }}</span>
        </div>
        <div class="col-sm-6 text-center">
            <p class="time" style="font-size:12px;">
                <span>{{ trans('player.Create_Challenges') }}</span> 
                <span class="badge rolesbadge" style="padding:3px 4px;background: orange;">{{$createChallenges->count()}}</span>
            </p>
        </div>
        <div class="col-sm-6 text-center">
            <p class="time" style="font-size:12px;">
                <span>{{ trans('player.Challenged') }}</span> 
                <span class="badge rolesbadge" style="padding:3px 4px;background: orange;">{{$candidateChallenges->count()}}</span>
            </p>
        </div>
        {{-- <div class="col-sm-3">
            {{$createChallenges->count()}}
        </div>
        <div class="col-sm-3">
            {{$candidateChallenges->count()}}
        </div> --}}
    </div>
    {{--  --}}
</div>



