
@if (Auth::id() == $user->id)
    {{-- start of model for profile owner--}}
    <!------------------------------------------->
    <!--  start update player profile Model -->
    <!--------------------------------->
    <div id="editMainInfo">
      @include('player.profile.pageParts.playerHisProfile.models.editMainInfo')
    </div>

    <!------------------------------------>
    <!--  end update player profile Model -->
    <!--------------------------------------->


    <!------------------------------------------->
    <!--  start update player sports Model -->
    <!--------------------------------->
    <div id="sportseditModal" class="modal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
              <div class="modal-header" style="color: #fff;background-color: #06774a !important;">
                <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
                <h4 class="modal-title" >
                  {{ trans('player.Edit_Sports_Information') }} 
                  <span id="sportsInfoLoader" style="display:none;">
                    <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
                  </span>
                </h4>
              </div>
              <div id="getPlayerSports" class="modal-body">
                @include('player.profile.pageParts.playerHisProfile.getPlayerSports')
              </div>
              <div class="modal-footer" style="color: #fff;background-color: #06774a !important;">
                <button 
                      type="button"
                      style="background: #fff !important; color: #000 !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;" 
                      class="btn sm-round-btn btn-default" 
                      data-dismiss="modal"
                >
                  {{ trans('player.Close') }}
                </button>
              </div>
          </div>
        </div>
    </div>

    <!------------------------------------>
    <!--  end update player sports Model -->
    <!--------------------------------------->

    <!------------------------------------------->
    <!--  start update vacant Model -->
    <!--------------------------------->
    <div id="vacantTimeModal" class="modal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
              <div class="modal-header" style="color: #fff;background-color: #06774a !important;">
                <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
                <h4 class="modal-title" >
                  {{ trans('player.Edit_Vacant_Time') }} 
                  <span id="vacantInfoLoader" style="display:none;">
                    <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
                  </span>
                </h4>
              </div>
              <div id="getPlayerVacants" class="modal-body">
                @include('player.profile.pageParts.playerHisProfile.getPlayerVacants')
              </div>
              <div class="modal-footer" style="color: #fff;background-color: #06774a !important;">
                <button 
                      type="button"
                      style="background: #fff !important; color: #000 !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;" 
                      class="btn sm-round-btn btn-default" 
                      data-dismiss="modal"
                >
                  {{ trans('player.Close') }}
                </button>
              </div>
          </div>
        </div>

    </div>
    <!------------------------------------>
    <!--  end update vacant Model --><!--------------------------------------->

    <!------------------------------------------->
    <!--  start add new event Model -->
    <!--------------------------------->
    <div id="addNewEventModel">
       @include('player.profile.pageParts.playerHisProfile.models.addNewEventModel')
    </div>
    <!------------------------------------>
    <!--  end add new event Model -->
    <!--------------------------------------->
    {{-- end of model for profile owner--}}

    {{-- start of model for profile to other users--}}
@else
    <!------------------------------------------->
    <!--  start add new Challenge Modal -->
    <!--------------------------------->
    <div id="newChallengeModal" class="modal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
              <div class="modal-header" style="color: #fff;background-color: #06774a !important;">
                <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
                <h4 class="modal-title" >
                {{ trans('player.Add_New_Challenge_With') }} {{ $user->name }} 
                  <span id="challengeInfoLoader" style="display:none;">
                    <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
                  </span>
                </h4>
              </div>
              <div id="getPlayerVacants" class="modal-body">

                {{----------------------------------------------------------------}}

                @php

                  $days = DB::table('days')->get();
                  $hours = DB::table('hours')->get();

                @endphp

                <div class="row">
                  <div class="col-md-12">
                    <div id="challengeErrors" class="alert alert-success text-center" style="display:none">
                      <div id="challengeErrorsSuccess" style="display:none">
                        <h4><i class="fa fa-check-circle"></i></h4>
                        <p style="font-size: 90%;color: ##3c763d;">
                        {{ trans('player.New_Challenge_Created_Successfully') }}  
                        </p>
                      </div>
                      <div id="challengeErrorsFaild" style="display:none">
                        <h4><i class="fa fa-warning"></i></h4>
                        <p style="font-size: 90%;color: ##3c763d;">
                          {{trans('player.check_wrong_entries_and_try_again')}}
                        </p>
                      </div>  
                    </div>
                  </div>

                  <div class="col-md-12">

                      {{ csrf_field() }}
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-lg-2 ">{{ trans('player.Sport') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <select name="sport_id" style="padding: 0 5px 0 10px;" class="sm-inputs form-control">

                                   @foreach ($user->sports as $sport)
                                    <option value="{{ $sport->id }}">
                                      @if (direction() == 'ltr')
                                        {{ $sport->en_sport_name }}
                                      @else
                                        {{ $sport->ar_sport_name }}
                                      @endif
                                      </option>
                                  @endforeach

                                </select>
                              </div>
                            </div>
                          </div>
                        </div> 
                        <!-- <div class="clearfix"></div> -->
                        <!-- <br><br><br> -->
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">{{ trans('player.Day') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <input type="date" 
                                  style="padding: 0 20px 0 20px;"
                                  class="sm-inputs form-control" 
                                  id="date"
                                  name="C_date"
                                  min="{{ Illuminate\Support\Carbon::now()->toDateString() }}"  
                                  format="dd-MM-yyyy"
                                  value="{{ Illuminate\Support\Carbon::now()->toDateString() }}"    
                                >
                              </div>
                            </div>
                          </div>
                        </div> 
                        <div class="clearfix"></div>
                        <br><br><br>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">{{ trans('player.From') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <select name="C_from" style="padding: 0 5px 0 10px;" class="sm-inputs form-control">

                                  @foreach ($hours as $hour)
                                    <option value="{{ $hour->hour_id }}">{{ $hour->hour_format }}</option>
                                  @endforeach

                                </select>
                              </div>
                            </div>
                          </div>
                        </div> 

                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">{{ trans('player.To') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <select  name="C_to" style="padding: 0 5px 0 10px;" class="sm-inputs form-control">

                                  @foreach ($hours as $hour)
                                    <option value="{{ $hour->hour_id }}">{{ $hour->hour_format }}</option>
                                  @endforeach

                                </select>
                              </div>
                            </div>
                          </div>
                        </div> 

                    </div> <!--col-md-12-->
                </div>
              </div>
              <div class="modal-footer" style="color: #fff;background-color: #06774a !important;">
                <button type="" 
                        style="background:orange"
                        class="btn btn-success sm-round-btn orange"
                        id="addNewChallenge"    
                >
                  {{ trans('player.Add_Challenge') }}
                </button>
                <button 
                      type="button"
                      style="background: #fff !important; color: #000 !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;" 
                      class="btn sm-round-btn btn-default"  
                      data-dismiss="modal"
                >
                  {{ trans('player.Close') }}
                </button>
              </div>
          </div>
        </div>

    </div>
    <!------------------------------------>
    <!--  end add new Challenge Modal -->
    <!--------------------------------------->
    {{-- end of model for profile to other users--}}
@endif
