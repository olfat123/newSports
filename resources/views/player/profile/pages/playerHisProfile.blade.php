@extends('site.themeIndex')
@section('content')

@yield('content')
    {{--------------------------------------------------------------------}}
 <!----Slider ----->

 
{{-- @include('player.profile.pageParts.playerHisProfile.topImage') --}}
 
  
{{-- </div> --}}
    <!-- #endregion Jssor Slider End -->
<section class="players-main">
  <div class="container">
    @if (Auth::id() == $user->id)
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="event-data-tabs" style="margin-bottom:10px">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="shade row text-center border-30" style="background-color: #fff;;color:orange;padding: 15px 0;border-radius: 5px;">
              @if ( Auth::id() == $user->id)

                  <div class="col-xs-4 text-center control-tab-class">
                    <span id="middleInfo" class="evechares tab-li-focus">
                      {{ trans('player.my_profile') }} 
                      {{-- <span class="badge badge-warning">5</span> --}}
                      <span class="middleInfo fa fa-circle-o-notch fa-spin" style="display: none;padding: 0px 5px;"></span>
                    </span>
                  </div>

                  <div class="col-xs-4 text-center control-tab-class">
                    <span id="events" class="evechares tab-li">
                    {{ trans('player.events') }}  
                      {{-- <span class="badge badge-warning">5</span> --}}
                      <span class="events fa fa-circle-o-notch fa-spin" style="display: none;padding: 0px 5px;"></span>
                    </span>
                  </div>
                  
                  <div class="col-xs-4 text-center control-tab-class">
                    <span id="challenges" class="evechares tab-li">
                      {{ trans('player.challenges') }} 
                      {{-- <span class="badge badge-warning">5</span> --}}
                      <span class="challenges fa fa-circle-o-notch fa-spin" style="display: none;padding: 0px 5px;"></span>
                    </span>
                  </div>
              @endif
            </div>
          </div>

        </div>
      </div> 
    @elseif (Auth::id() != $user->id)
      <div class="row">
        <div class="col-md-12 text-center">
          <div id="event-data-tabs" style="margin-bottom:10px">
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="shade row text-center border-30" style="background-color: #fff;;color:orange;padding: 15px 0;border-radius: 5px;">
              <div class="col-xs-4 text-center control-tab-class">
                <span id="middleInfo" class="evechares tab-li-focus">
                  {{-- {{ trans('player.my_profile') }} --}}
                  {{ $user->name }} 
                  {{-- <span class="badge badge-warning">5</span> --}}
                  <span class="middleInfo fa fa-circle-o-notch fa-spin" style="display: none;padding: 0px 5px;"></span>
                </span>
              </div>

              <div class="col-xs-4 text-center control-tab-class">
                <span id="events" class="evechares tab-li">
                {{ trans('player.events') }}  
                  {{-- <span class="badge badge-warning">5</span> --}}
                  <span class="events fa fa-circle-o-notch fa-spin" style="display: none;padding: 0px 5px;"></span>
                </span>
              </div>
              
              <div class="col-xs-4 text-center control-tab-class">
                <span id="challenges" class="evechares tab-li">
                  {{ trans('player.challenges') }} 
                  {{-- <span class="badge badge-warning">5</span> --}}
                  <span class="challenges fa fa-circle-o-notch fa-spin" style="display: none;padding: 0px 5px;"></span>
                </span>
              </div>
            </div>
          </div>

        </div>
      </div> 
    @endif
    

    <div class="row">
      <div class="col-md-3" >
        <div 
            id="info-content" 
            class="separator shade border-20" 
            style="padding: 10px;height: auto;background-color: #06774a;margin:3px "
        >

          <div id="display-MainInfo">
            @include('player.profile.pageParts.playerHisProfile.display-MainInfo')
          </div>

        </div><!-- #info-content .separator-->
        
      </div> <!--col-3-->
            
      <div class="col-md-6">
        <div class="separator" style="height: auto;margin:3px ">
          <div id="display-selectedInfo">
            @include('player.profile.pageParts.playerHisProfile.display-selectedInfo')
          </div>
        </div>
      </div><!--col-6-->

      <div class="col-md-3" >
        <div 
            id="info-content" 
            class="separator shade border-20" 
            style="padding: 1px;height: auto;background-color: #06774a;margin:3px "
        >

          <div id="display-SecondaryInfo">
            @include('player.profile.pageParts.playerHisProfile.Secondary-Info')
          </div>

          <div id="editInfo">
            
          </div>
        </div><!-- #info-content .separator-->
        
      </div> <!--col-3-->

    </div><!--row-->
  </div>
      
</section>
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
                <button 
                    style="background:orange !important; color: #fff !important;border-color:#ddd;box-shadow: 1px 0px 0px #eee;"
                    class="crop_image btn sm-inputs btn-primary"
                >
                  {{ trans('player.Save') }}
                </button>
                <button type="button" 
                        class="btn btn-default sm-inputs" 
                        data-dismiss="modal"
                >
                  {{ trans('player.Close') }}
                </button>
              </div>
          </div>
        </div>
    </div>

    <!--  end upload profile image Model -->

    {{--------------------------------------------------------------------}}
        @include('player.profile.pageParts.playerHisProfile.Models')
    {{------------------------------------------------------------------------}}

@endsection

@section('page_specific_scripts')
    <!-- player cripts-->
    <script src="{{ url('/') }}/player/js/playerprofile.js"></script>
    <script type="text/javascript" src="{{ asset('js/friends.js')}}"></script>
    
    <!-- player cripts-->
@stop