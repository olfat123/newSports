@php
    $days = DB::table('days')->get();
    $hours = DB::table('hours')->orderBy('sort')->get();
@endphp
<div class="col-md-12">
  <div>

  <div class="panel panel-default shade top-bottom-border">
    <div class="panel-heading text-center shade bottom-border">
      <h4 style="color: #06774a;margin: 5px 0px">{{ trans('player.resultMyEvents') }}</h4>
    </div>
   {{--  @include('player.sport.pageParts.sport.events.newEventsFilters') --}}
    <div class="scroll" style="background-color: #fff; height: 300px;overflow-x: hidden;overflow-y: scroll;margin-bottom: 20px">
    @if ($my_events->count() > 0)
      @foreach ($my_events as $event)
        <div class="col-sm-4 col-xs-12 text-center">
            <div class="newEvents shade-2" style="border: 1px solid #ffa500;margin: 5px 0px;border-radius: 20px;">
              <a class="a-holding-divs" href="{{ url('/') }}/Event/Show/{{sm_crypt($event->id)}}">
                <span>
                  <i class="fa fa-calendar" style="color:#f89406;font-size: 15px;"></i>
                </span>
              </a>
              
              <div class="newEventCreatorDiv" style="margin-bottom: 10px">
                <h3 style="padding-top: 5px !important;margin-bottom: 5px !important;font-size: 12px">
                  <span>{{ trans('player.applicantsCount') }}</span> 
                  <span class="badge" style="background:orange;padding: 4px 5px 4px;font-weight: bold;">
                    {{$event->applicants->count()}}
                  </span> 
                </h3>
              </div>

              <div class="newEventTime" style="margin-bottom: 10px">
                 <p style="font-size: 10px !important;">
                  @if ( direction() == 'ltr' )
                        <span>
                            <i class="fa fa-calendar" style="color: #f89406;font-size: 20px;"></i> 
                        </span>
                        <span>{{ strftime( '%d-%m-%Y' , strtotime($event->E_date ) )}} </span>
                        <span><i class="fa fa-clock-o" style="color: #f89406;font-size: 20px;"></i></i></span>
                        <span class="newEventFrom">{{ $event->EventFrom->hour_format}}</span>
                        <span><i class="fa fa-arrows-h" style="color: #f89406;font-size: 20px;"></i></i></span>
                        <span class="newEventTo">{{ $event->EventTo->hour_format}}</span>
                  @else
                      <span>
                        <i class="fa fa-calendar" style="color: #f89406;font-size: 20px;"></i> 
                      </span>
                      <span>
                        {{ strftime( '%d-%m-%Y' , strtotime($event->E_date ) )}}  
                      </span>

                      <span style="display:inline-block;">
                        <i class="fa fa-clock-o" style="color: #f89406;font-size: 20px;"></i></i>
                        {{ $event->EventFrom->hour_format}}
                        <i class="fa fa-arrows-h" style="color: #f89406;font-size: 20px;"></i></i>
                      </span>

                      <span> 
                        {{ $event->EventTo->hour_format}} 
                      </span>
                      
                  @endif
                  
                </p>
                <p style="font-family: 'Roboto', sans-serif;font-size: 12px;">
                  {{-- <span>Intermediate</span> / 
                  <span>19 Matches</span> --}}
                </p>
                <span>
                  
                </span>
              </div>

            </div>
          
        </div>
      @endforeach
    @else
      <div class="row text-center">
        <div class="col-md-12 text-center" style="padding: 70px;">
          <span class="shade" style="font-size: 20px;color:#06774a;padding: 40px;">
            {{ trans('player.no_result_match_your_search') }}
          </span>
        </div>
      </div>
    @endif
    
    </div>
  </div>
</div>
</div>