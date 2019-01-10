@if ( $events->count() > 0 )
    @php
    $days = DB::table('days')->get();
    $hours = DB::table('hours')->orderBy('sort')->get();
    @endphp
    <div class="col-md-12">

    <div class="panel panel-default shade top-bottom-border">
        <div class="panel-heading text-center shade bottom-border">
        <h4 style="color: #06774a;margin: 5px 0pxfont-size: 13px;">
            {{ trans('player.searchMyEvents') }}
            <span id="myEventsloader" style="display:none;">
            <i class="fa fa-circle-o-notch fa-spin" style="font-size:20px;color:#06774a;"></i>
            </span>
        </h4>
        </div>
        <div class="search-events" style="margin: 10px;padding: 10px;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label style="color:#06774a;font-size:12px" for="winner" >
                            {{ trans('player.Event_creator') }} :
                        </label>
                        
                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="myEvents_filter_creator" 
                            value="1" 
                        >
                            <span style="font-size: 80%;font-weight: bold;color: #06774a;">
                                {{ trans('player.me') }}
                            </span>    
                        </label>
                        
                        
                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="myEvents_filter_creator" 
                            value="2" 
                            
                        >
                            <span style="font-size: 80%;font-weight: bold;color: #06774a;">
                                {{ trans('player.other_player') }}
                            </span>   
                        </label>
                        
                        
                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="myEvents_filter_creator" 
                            value="3" 
                            checked
                        >
                            <span style="font-size: 80%;font-weight: bold;color: #06774a;">
                                {{ trans('player.both') }}
                            </span>   
                        </label>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label style="color:#06774a;font-size:12px" for="winner" >
                            {{ trans('player.Event_winner') }} :
                        </label>
                        
                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="myEvents_filter_winner" 
                            value="1" 
                            >
                            <span style="font-size: 80%;font-weight: bold;color: #06774a;">
                                {{ trans('player.me') }}
                            </span>    
                        </label>
                        
                        
                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="myEvents_filter_winner" 
                            value="2" 
                            
                            />
                            <span style="font-size: 80%;font-weight: bold;color: #06774a;">
                                {{ trans('player.other_player') }}
                            </span>   
                        </label>
                        
                        
                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="myEvents_filter_winner" 
                            value="3" 
                            >
                            <span style="font-size: 80%;font-weight: bold;color: #06774a;">
                                {{ trans('player.draw') }}
                            </span>   
                        </label>

                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="myEvents_filter_winner" 
                            value="4" 
                        >
                            <span style="font-size: 80%;font-weight: bold;color: #06774a;">
                                {{ trans('player.no_result_given') }}
                            </span>   
                        </label>

                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="myEvents_filter_winner" 
                            value="5"
                            checked 
                        >
                            <span style="font-size: 80%;font-weight: bold;color: #06774a;">
                                {{ trans('player.all') }}
                            </span>   
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="name" style="color:#06774a;font-size:12px">{{ trans('player.compatitor') }}</label>
                        <input type="text" 
                                style="height:20px;font-size: 12px;"
                                name="myEvents_filter_candidate" 
                                class="myEventsSearch sm-inputs form-control" 
                                id="newEventCreatorInput" 
                        >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label style="color:#06774a;font-size:12px">{{ trans('player.eventDate') }}</label>
                        <input type="date"
                                style="height:20px;font-size: 12px;" 
                                name="myEvents_filter_date" 
                                class="myEventsSearch sm-inputs form-control" 
                                id="newEventDateInput" 
                        >
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label style="color:#06774a;font-size:12px">{{ trans('player.From') }}</label>
                        <select name="myEvents_filter_from" id="newEventFromInput" style="padding: 0 5px 0 10px;height:20px;font-size: 12px;" class="myEventsSearch sm-inputs form-control">
                        <option value="">{{ trans('player.eventFrom') }}</option> 
                            @foreach ($hours as $hour)
                            <option value="{{ $hour->hour_id }}">{{ $hour->hour_format }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label style="color:#06774a;font-size:12px">{{ trans('player.To') }}</label>
                        <select name="myEvents_filter_to" id="newEventToInput" style="padding: 0 5px 0 10px;height:20px;font-size: 12px;" class="myEventsSearch sm-inputs form-control">
                            <option value="">{{ trans('player.eventTo') }}</option>
                            @foreach ($hours as $hour)
                            <option value="{{ $hour->hour_id }}">{{ $hour->hour_format }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="button" 
                            style="background: #ff9800 !important; 
                                color: #fff !important;
                                border-color:#ddd;
                                box-shadow: 1px 0px 0px #eee;
                                height:20px;font-size: 12px;" 
                            class="btn sm-inputs btn-warning border-20" 
                            id="myEvents_filter"
                    >
                        {{ trans('player.filter') }}
                    </button> 
                </div>
            </div>
        </div>


        </div>
    </div>
@endif