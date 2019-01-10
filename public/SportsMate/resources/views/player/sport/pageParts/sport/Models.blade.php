


    <!------------------------------------------->
    <!--  start add new event Model -->
    <!--------------------------------->
    <div id="newEventModal" class="modal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
              <div class="modal-header" style="color: #fff;background-color: #06774a !important;">
                <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
                <h4 class="modal-title" >
                  {{ trans('player.Add_New_Event') }} 
                  <span id="eventInfoLoader" style="display:none;">
                    <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
                  </span>
                </h4>
              </div>
              <div id="getPlayerVacants" class="modal-body">
                {{----------------------------------------------------------------}}
                @php
                  $days = DB::table('days')->get();
                  $hours = DB::table('hours')->orderBy('sort')->get();
                @endphp
                <div class="row">
                  <div class="col-md-12">
                    <div id="eventErrors" class="alert alert-success text-center" style="display:none">
                      <div id="eventErrorsSuccess" style="display:none">
                        <h4><i class="fa fa-check-circle"></i></h4>
                        <p style="font-size: 90%;color: #3c763d;">
                        {{ trans('player.New_Event_Created_Successfully') }}  
                        </p>
                      </div>
                      <div id="eventErrorsFaild" style="display:none">
                        <h4><i class="fa fa-warning"></i></h4>
                        <p style="font-size: 90%;color: #a94442;">
                          {{ trans('player.check_wrong_entries_and_try_again') }}
                        </p>
                      </div>  
                    </div>
                  </div>

                  <div class="col-md-12">

                      
                      {{ csrf_field() }}
                      <br>
                        <div class="col-md-6 hidden">
                          <div class="form-group">
                            <label class="col-lg-5 ">
                              {{ trans('player.preferred_rate') }} 
                              <span class=" span-number slider-value" id="E_preferred_rate_value">5</span>
                            </label>
                            <div class="col-lg-7">
                              <div class="ui-select">
                                <div class="""slidecontainer">
                                  <input class="slider form-control input-xs"
                                    id="E_preferred_rate" 
                                    type="range"
                                    name="preferred_rate"
                                    min="0"
                                    max="10"
                                    step="1"
                                    value="5"
                                >
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6 hidden">
                          <div class="form-group">
                            <label class="col-lg-2 ">{{ trans('player.Sport') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <select name="sport_id" style="padding: 0 5px 0 10px;" class="sm-inputs form-control">
                                    <option value="{{ $Sport->id }}" selected>
                                      @if (direction() == 'ltr')
                                        {{ $Sport->en_sport_name }}
                                      @else
                                        {{ $Sport->ar_sport_name }}
                                      @endif
                                    </option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div> 
                        {{-- <div class="clearfix"></div>
                        <br><br><br> --}}
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">{{ trans('player.Day') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <input type="date"
                                    style="padding: 0 20px 0 20px;" 
                                    class="sm-inputs form-control" 
                                    id="date"
                                    name="E_date" 
                                    format="dd-MM-yyyy"
                                    value="{{ Illuminate\Support\Carbon::now()->toDateString() }}"     
                                >
                              </div>
                            </div>
                          </div>
                        </div> 
                        
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">{{ trans('player.From') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <select name="E_from" style="padding: 0 5px 0 10px;" class="sm-inputs form-control">

                                  @foreach ($hours as $hour)
                                    <option value="{{ $hour->hour_id }}">{{ $hour->hour_format }}</option>
                                  @endforeach

                                </select>
                              </div>
                            </div>
                          </div>
                        </div> 

                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">{{ trans('player.To') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <select  name="E_to" style="padding: 0 5px 0 10px;" class="sm-inputs form-control">

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
                        style="border-radius: 25px;border:1px solid;font-size:12px;background:orange !important; color: #fff !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;"
                        class="btn btn-primary"
                        id="addNewEvent"    
                >
                    {{ trans('player.Add_New_Event') }}
                </button>
                <button 
                      type="button"
                      style="border-radius: 25px;border:1px solid;font-size:12px color: #fff !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;background: #fff !important; color: #000 !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;" 
                      class="btn btn-default" 
                      data-dismiss="modal"
                >
                  {{ trans('player.Close') }}
                </button>
              </div>
          </div>
        </div>

    </div>
    <!------------------------------------>
    <!--  end add new event Model -->
    <!--------------------------------------->


    <!------------------------------------------->
    <!--  start add new Challenge Modal -->
    <!--------------------------------->
    <div id="newChallengeModal" class="modal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
              <div class="modal-header" style="color: #fff;background-color: #06774a !important;">
                <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
                <h4 class="modal-title" >
                {{ trans('player.Add_New_Challenge_With') }} 
                  <span id="challengeInfoLoader" style="display:none;">
                    <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
                  </span>
                </h4>
              </div>
              <div id="getPlayerVacants" class="modal-body">

                {{----------------------------------------------------------------}}
                <input type="hidden" value="" name="target">
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
                        <div class="col-md-6" style="display:none">
                          <div class="form-group">
                            <label class="col-lg-2 ">{{ trans('player.Sport') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <select name="sport_id" style="padding: 0 5px 0 10px;" class="sm-inputs form-control">
                                    <option value="{{ $Sport->id }}" selected>{{ $Sport->ar_sport_name }}</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div> 
                        <!-- <div class="clearfix"></div> -->
                        <!-- <br><br><br> -->
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">{{ trans('player.Day') }}</label>
                            <div class="col-lg-10">
                              <div class="ui-select">
                                <input type="date" 
                                  style="padding: 0 20px 0 20px;"
                                  class="sm-inputs form-control" 
                                  id="date"
                                  name="C_date" 
                                  format="dd-MM-yyyy"
                                  value="{{ Illuminate\Support\Carbon::now()->toDateString() }}"    
                                >
                              </div>
                            </div>
                          </div>
                        </div> 
                        {{-- <div class="clearfix"></div>
                        <br><br><br> --}}
                        <div class="col-md-4">
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

                        <div class="col-md-4">
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
                        style="border-radius: 25px;border:1px solid;font-size:12px;background:orange !important; color: #fff !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;"
                        class="btn btn-primary"
                        id="addNewChallenge"    
                >
                  {{ trans('player.Add_Challenge') }}
                </button>
                <button 
                      type="button"
                      style="border-radius: 25px;border:1px solid;font-size:12px color: #fff !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;background: #fff !important; color: #000 !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;" 
                      class="btn btn-default"
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


