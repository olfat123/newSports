


<!--  start suggest Game Model -->
<!--------------------------------->
<div id="suggestGameModal" class="modal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="modal-header" style="color: #fff;background-color: #06774a !important;">
            <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
            <h4 class="modal-title" >
              {{ trans('player.Suggest_New_Game') }} 
              <span id="AddGameBtnLoader" style="display:none;">
                <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
              </span>
            </h4>
          </div>
          <div id="" class="modal-body">
            <div class="row resultErr" style="display:none">
                <div class="col-xs-12 text-center">
                    <span data-toggle="tooltip" title="{{ trans('player.enter_valid_result') }}">
                        <i class="fa fa-warning" style="font-size:48px;color:red"></i>
                    </span>
                </div>
            </div>
            {{ csrf_field() }}
            <input type="hidden" name="EventType" value="event">
            <input type="hidden" name="MainEvent" value="{{$event->id}}">
            <input type="hidden" name="OpinionBy" value="{{ Auth::id() }}">
            <div class="row">
                <div class="col-xs-6 text-center">
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
                    <div style="margin-top: 25px;">
                        <p>{{ $event->creator->name }}</p>
                        <input type="number" class="sm-inputs" name="CreatorScore" value="0" min="0" max="50" style="width: 25%;border: 0px;padding:0 5px 0 5px">
                    </div>
                </div>

                <div class="col-xs-6 text-center">
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
                            <div class="text-center" style="margin-top: 25px;">
                                <p>
                                    @if ($event->E_candidate_id == null)
                                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                                    @else
                                    {{$event->candidate->name}}
                                    @endif
                                </p>
                                <input type="number" class="sm-inputs" name="CandidateScore" value="0" min="0" max="50" style="width: 25%;border: 0px;padding:0 5px 0 5px">
                            </div>
                    </div>

            </div>
          </div>
          <div class="modal-footer" style="color: #fff;background-color: #06774a !important;">
            <button type="" 
                    style="background: orange"
                    class="btn btn-success sm-round-btn orange"
                    id="AddGameBtn"    
            >
                {{ trans('player.Add') }}
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
<!--  end suggest Game Model -->
<!--------------------------------------->


<!--  start add player rate Model -->
<!--------------------------------->
<div id="RatePlayerModal" class="modal" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="modal-header" style="color: #fff;background-color: #06774a !important;">
            <button type="button" class="close" data-dismiss="modal" style="color:#fff">&times;</button>
            <h4 class="modal-title" >
              {{ trans('player.Rate_Your_Competitor') }} 
              <span id="RatePlayerLoader" style="display:none;">
                <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
              </span>
            </h4>
          </div>
          <div id="" class="modal-body">
            <div class="row RatePlayerErr text-center" style="display:none">
                <div class="col-xs-12 text-center">
                    <span data-toggle="tooltip" title="{{ trans('player.enter_valid_result') }}">
                        <i class="fa fa-warning" style="font-size:48px;color:red"></i>
                    </span>
                </div>
            </div>

            {{ csrf_field() }}
            <input type="hidden" name="EventType" value="event">
            <input type="hidden" name="MainEvent" value="{{$event->id}}">
            <input type="hidden" name="OpinionBy" value="{{ Auth::id() }}">
            
            {{-- question one --}}
            <div class="row text-center">
              <div class="col-sm-6">
                <p class="question shade-2">{{ trans('player.q_1') }}</p>
              </div>
              <div class="col-sm-6" id="rate_question1">
							    <span class="star-rating-group">
							      <input type="radio"
							      		 id="rating-5_question1" 
							      		 name="q_1" 
							      		 value="5" 
							      />
							      <label for="rating-5_question1">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="5 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-4_question1" 
							      		 name="q_1" 
							      		 value="4" 
							      />
							      <label for="rating-4_question1">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="4 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-3_question1" 
							      		 name="q_1" 
							      		 value="3" 
							      />
							      <label for="rating-3_question1">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-2_question1" 
							      		 name="q_1" 
							      		 value="2" 
							      />
							      <label for="rating-2_question1">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="2 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-1_question1" 
							      		 name="q_1" 
							      		 value="1" 
							      />
							      <label for="rating-1_question1">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="1 Stern"></i>
							      </label>
							      <input type="radio" id="rating-0" name="rating" value="0" class="star-clear" />
							    </span>

							</div>
            </div>
            {{-- question one --}}

            {{-- question two --}}
            <div class="row text-center">
              <div class="col-sm-6">
                <p class="question shade-2">{{ trans('player.q_2') }}</p>
              </div>
              <div class="col-sm-6" id="rate_question2">
							    <span class="star-rating-group">
							      <input type="radio"
							      		 id="rating-5_question2" 
							      		 name="q_2" 
							      		 value="5" 
							      />
							      <label for="rating-5_question2">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="5 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-4_question2" 
							      		 name="q_2" 
							      		 value="4" 
							      />
							      <label for="rating-4_question2">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="4 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-3_question2" 
							      		 name="q_2" 
							      		 value="3" 
							      />
							      <label for="rating-3_question2">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-2_question2" 
							      		 name="q_2" 
							      		 value="2" 
							      />
							      <label for="rating-2_question2">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="2 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-1_question2" 
							      		 name="q_2" 
							      		 value="1" 
							      />
							      <label for="rating-1_question2">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="1 Stern"></i>
							      </label>
							      <input type="radio" id="rating-0" name="rating" value="0" class="star-clear" />
							    </span>

							</div>
            </div>
            {{-- question two --}}

            {{-- question three --}}
            <div class="row text-center">
              <div class="col-sm-6">
                <p class="question shade-2">{{ trans('player.q_3') }}</p>
              </div>
              <div class="col-sm-6" id="rate_question3">
							    <span class="star-rating-group">
							      <input type="radio"
							      		 id="rating-5_question3" 
							      		 name="q_3" 
							      		 value="5" 
							      />
							      <label for="rating-5_question3">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="5 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-4_question3" 
							      		 name="q_3" 
							      		 value="4" 
							      />
							      <label for="rating-4_question3">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="4 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-3_question3" 
							      		 name="q_3" 
							      		 value="3" 
							      />
							      <label for="rating-3_question3">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-2_question3" 
							      		 name="q_3" 
							      		 value="2" 
							      />
							      <label for="rating-2_question3">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="2 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-1_question3" 
							      		 name="q_3" 
							      		 value="1" 
							      />
							      <label for="rating-1_question3">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="1 Stern"></i>
							      </label>
							      <input type="radio" id="rating-0" name="rating" value="0" class="star-clear" />
							    </span>

							</div>
            </div>
            {{-- question three --}}

            {{-- question four --}}
            <div class="row text-center">
              <div class="col-sm-6">
                <p class="question shade-2">{{ trans('player.q_4') }}</p>
              </div>
              <div class="col-sm-6" id="rate_question4">
							    <span class="star-rating-group">
							      <input type="radio"
							      		 id="rating-5_question4" 
							      		 name="q_4" 
							      		 value="5" 
							      />
							      <label for="rating-5_question4">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="5 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-4_question4" 
							      		 name="q_4" 
							      		 value="4" 
							      />
							      <label for="rating-4_question4">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="4 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-3_question4" 
							      		 name="q_4" 
							      		 value="3" 
							      />
							      <label for="rating-3_question4">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-2_question4" 
							      		 name="q_4" 
							      		 value="2" 
							      />
							      <label for="rating-2_question4">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="2 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-1_question4" 
							      		 name="q_4" 
							      		 value="1" 
							      />
							      <label for="rating-1_question4">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="1 Stern"></i>
							      </label>
							      <input type="radio" id="rating-0" name="rating" value="0" class="star-clear" />
							    </span>

							</div>
            </div>
            {{-- question four --}}

            {{-- question five --}}
            <div class="row text-center">
              <div class="col-sm-6">
                <p class="question shade-2">{{ trans('player.q_5') }}</p>
              </div>
              <div class="col-sm-6" id="rate_question5">
							    <span class="star-rating-group">
							      <input type="radio"
							      		 id="rating-5" 
							      		 name="q_5" 
							      		 value="5" 
							      />
							      <label for="rating-5">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="5 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-4" 
							      		 name="q_5" 
							      		 value="4" 
							      />
							      <label for="rating-4">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="4 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-3" 
							      		 name="q_5" 
							      		 value="3" 
							      />
							      <label for="rating-3">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="3 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-2" 
							      		 name="q_5" 
							      		 value="2" 
							      />
							      <label for="rating-2">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="2 Stars"></i>
							      </label>
							      <input type="radio"
							      		 id="rating-1" 
							      		 name="q_5" 
							      		 value="1" 
							      />
							      <label for="rating-1">
							        <i class="fa fa-star-o" aria-hidden="true"></i>
							        <i class="fa fa-star" data-toggle="tooltip" data-placement="top" title="" data-original-title="1 Stern"></i>
							      </label>
							      <input type="radio" id="rating-0" name="rating" value="0" class="star-clear" />
							    </span>

							</div>
            </div>
            {{-- question five --}}

          <div class="row text-center">
            <div class="col-md-6">
             <p class="question shade-2"> {{ trans('player.comment') }} </p>
            </div>
            <div class="col-md-6">
              <textarea class="sm-inputs" name="comment" id="comment" style="height: 60px;" cols="30" rows="10"></textarea>
            </div>
          </div>

          </div>
          <div class="modal-footer" style="color: #fff;background-color: #06774a !important;">
            <button type="" 
                    style="background:orange"
                    class="btn btn-success sm-round-btn orange"
                    id="RatePlayer"    
            >
                {{ trans('player.Add') }}
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
<!--  end add player rate Model -->
<!--------------------------------------->
