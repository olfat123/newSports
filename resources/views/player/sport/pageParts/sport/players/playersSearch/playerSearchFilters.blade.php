
@php
    $days = DB::table('days')->get();
    $hours = DB::table('hours')->orderBy('sort')->get();
@endphp
<div class="col-md-12">

  <div class="panel panel-default shade top-bottom-border">
    <div class="panel-heading text-center shade bottom-border">
      <h4 style="color: #06774a;margin: 5px 0px">{{ trans('player.Player_search') }}
        <span id="players_filter_loader" style="display:none;">
          <i class="fa fa-circle-o-notch fa-spin" style="font-size:20px;color:#06774a;"></i>
        </span>
      </h4>
    </div>
    <div class="search-events" style="margin: 10px;padding: 10px;">
      <div class="row">  
        <div class="col-md-4">
            <div class="form-group">
                <label style="color:#06774a;" for="name">{{ trans('player.Name') }} </label>
                <input type="text" 
                    name="players_filter_name" 
                    class="sm-inputs form-control" 
                    id="players_filter_name" 
                >
            </div>
        </div>

        {{-- Gender Section --}}
        @if (Auth::user()->playerProfile->p_preferred_gender == null || Auth::user()->playerProfile->p_preferred_gender == 3)
        <div class="col-md-4 text-center">
            <div class="form-group">
                <label style="color:#06774a;" for="p_gender">{{ trans('player.Gender') }}</label>
                <br>
                <label class="radio-inline" style="font-size: 15px;">
                    <input type="radio" 
                    name="players_filter_gender"
                    value="1" 
                    >
                    <span style="font-size: 120%;color: #06774a;"><i class="fa fa-male" ></i></span>    
                </label>
                
                <label class="radio-inline" style="font-size: 15px;">
                    <input type="radio" 
                    name="players_filter_gender"
                    value="2" 
                    >
                    <span style="font-size: 120%;color: #06774a;"><i class="fa fa-female" ></i></span>   
                </label>
                
            </div>
        </div>
        @elseif(Auth::user()->playerProfile->p_preferred_gender == 1)
        <input class="hidden" type="radio" name="players_filter_gender" value="1" checked>
        @elseif(Auth::user()->playerProfile->p_preferred_gender == 2)
        <input class="hidden" type="radio" name="players_filter_gender" value="1" checked>
        @endif
        {{-- Gender Section --}}

        {{-- <div class="col-md-4 text-center">
            <div class="form-group">
                <label style="color:#06774a;" for="players_filter_preferred_gender">{{ trans('player.Interested_in') }}</label>
                <br>
                <label class="radio-inline" style="font-size: 15px;">
                    <input type="radio" 
                    name="players_filter_preferred_gender"
                    value="1" 
                    >
                    <span style="font-size: 120%;color: #06774a;"><i class="fa fa-male" ></i></span>    
                </label>
                
                
                <label class="radio-inline" style="font-size: 15px;">
                    <input type="radio" 
                    name="players_filter_preferred_gender"
                    value="2" 
                    >
                    <span style="font-size: 120%;color: #06774a;"><i class="fa fa-female" ></i></span>   
                </label>
                
                
                <label class="radio-inline" style="font-size: 15px;">
                    <input type="radio" 
                    name="players_filter_preferred_gender"
                    value="3" 
                    >
                    <span style="font-size: 120%;color: #06774a;">
                    <i class="fa fa-male" ></i> | <i class="fa fa-female" ></i> 
                    </span>   
                </label>
                
            </div>
        </div> --}}
        <div class="col-sm-12 text-center">
           <button type="button" 
                style="background: #ff9800 !important; 
                       color: #fff !important;
                       border-color:#fff;
                       box-shadow: 1px 0px 0px #eee;" 
                class="sm-inputs border-20" 
                id="players_filter"
            >
                {{ trans('player.filter') }}
            </button> 
        </div>
      </div>
    </div>


    </div>
</div>
