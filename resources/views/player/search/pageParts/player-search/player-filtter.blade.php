  <div class="panel panel-default shade top-bottom-border">
    <div class="panel-heading text-center shade bottom-border">
      	<h4 style="color:#06774a;">
            {{ trans('player.Player_search') }}
            <span id="player_filtters_loader" style="display:none;">
                <i class="fa fa-circle-o-notch fa-spin" style="font-size:20px;color:#06774a;"></i>
            </span>
        </h4>
    </div>
{{-- <div class="panel panel-default shade"> --}}
    <div style="padding: 20px">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color:#06774a" for="name">{{ trans('player.Name') }} :</label>
                    <input type="text" 
                        name="player_filtters_name" 
                        class="sm-inputs form-control" 
                        id="player_filtters_name" 
                    >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label style="color:#06774a" for="sport">{{ trans('player.Sport') }}</label>
                    <select class="sm-inputs form-control input-xs" 
                            name="player_filtters_sport" 
                            id="sport">
                        
                        @php $sports = DB::table('sports')->get() ; @endphp
                        <option value="">{{ trans('player.Sport') }}</option>

                        @foreach ($sports as $sport)

                            <option
                            value="{{ $sport->id }}"
                            >
                                @if ( direction() == 'ltr' )
                                    {{ $sport->en_sport_name }}    
                                @else
                                    {{ $sport->ar_sport_name }}    
                                @endif
                            </option>

                        @endforeach

                    </select>
                </div>
            </div>
            
            {{-- Gender Section --}}
            @if (Auth::user()->playerProfile->p_preferred_gender == null || Auth::user()->playerProfile->p_preferred_gender == 3)
               <div class="col-md-6">
                    <div class="form-group">
                        <label style="color:#06774a" for="p_gender">{{ trans('player.Gender') }}:</label>
                        
                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="player_filtters_gender"
                            value="1" 
                            >
                            <span style="font-size: 120%;color: #06774a;"><i class="fa fa-male" ></i></span>    
                        </label>
                        
                        <label class="radio-inline" style="font-size: 15px;">
                            <input type="radio" 
                            name="player_filtters_gender"
                            value="2" 
                            >
                            <span style="font-size: 120%;color: #06774a;"><i class="fa fa-female" ></i></span>   
                        </label>
                        
                    </div>
                </div>
            @elseif(Auth::user()->playerProfile->p_preferred_gender == 1)
                <input class="hidden" type="radio" name="player_filtters_gender" value="1" checked>
            @elseif(Auth::user()->playerProfile->p_preferred_gender == 2)
                <input class="hidden" type="radio" name="player_filtters_gender" value="2" checked>
            @endif
            {{-- Gender Section --}}

            {{-- Preferred Gender Section --}}
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label style="color:#06774a" for="player_filtters_preferred_gender">{{ trans('player.Interested_in') }}:</label>
                    
                    <label class="radio-inline" style="font-size: 15px;">
                        <input type="radio" 
                        name="player_filtters_preferred_gender"
                        value="1" 
                        >
                        <span style="font-size: 120%;color: #06774a;"><i class="fa fa-male" ></i></span>    
                    </label>
                    
                    
                    <label class="radio-inline" style="font-size: 15px;">
                        <input type="radio" 
                        name="player_filtters_preferred_gender"
                        value="2" 
                        >
                        <span style="font-size: 120%;color: #06774a;"><i class="fa fa-female" ></i></span>   
                    </label>
                    
                    
                    <label class="radio-inline" style="font-size: 15px;">
                        <input type="radio" 
                        name="player_filtters_preferred_gender"
                        value="3" 
                        >
                        <span style="font-size: 120%;color: #06774a;">
                        <i class="fa fa-male" ></i> | <i class="fa fa-female" ></i> 
                        </span>   
                    </label>
                    
                </div>
            </div> --}}
            {{-- Preferred Gender Section --}}
        </div>
    
        <div class="text-center">
           <button type="button" 
                style="background: #ff9800 !important; 
                       color: #fff !important;
                       border-color:#ddd;
                       box-shadow: 1px 0px 0px #eee;" 
                class="sm-inputs border-20" 
                id="player_filtters"
            >
                {{ trans('player.filter') }}
            </button> 
        </div>
        

    </div>
</div>