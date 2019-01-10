@extends('site.themeIndex')
@section('content')

@yield('content')
    {{--------------------------------------------------------------------}}
   {{ csrf_field() }}

<section class="players-main">
  <div class="container">
    <div class="row">
      {{-- start tabs --}}
      @auth
      <input type="hidden" name="playerId" value="{{ Auth::id() }}">
      <div class="col-md-12 text-center" style="border-radius:5px">
        <div id="event-data-tabs" style="margin-bottom:10px">
          <input type="hidden" name="user_id" value="{{ Auth::id() }}">
          <input type="hidden" name="sport_id" value="{{ $Sport->id }}">
          <div class="shade row text-center border-30" style="background-color: #fff;;color:orange;padding: 15px 0;">
            
            <div class="col-xs-4 text-center control-tab-class">
              <span id="sportInfo" class="evechares evechares tab-li-focus">
                @if ( direction() == 'ltr' )
                  {{ $Sport->en_sport_name }}   
                @else
                  {{ $Sport->ar_sport_name }}   
                @endif  
                {{-- <span class="badge badge-warning">5</span> --}}
                <span class="sportInfo fa fa-circle-o-notch fa-spin" style="display: none;padding: 0px 10px;"></span>
              </span>
            </div>

            <div class="col-xs-4 text-center control-tab-class">
              <span id="players" class="evechares tab-li">
                {{ trans('player.Players') }} 
                {{-- <span class="badge badge-warning">5</span> --}}
                <span class="players fa fa-circle-o-notch fa-spin" style="display: none;padding: 0px 10px;"></span>
              </span>
            </div>

            <div class="col-xs-4 text-center control-tab-class">
              <span id="events" class="evechares tab-li">
                {{ trans('player.events') }} 
                {{-- <span class="badge badge-warning">5</span> --}}
                <span class="events fa fa-circle-o-notch fa-spin" style="display: none;padding: 0px 10px;"></span>
              </span>
            </div>

          </div>
        </div>
      </div>
      @endauth  
      {{-- end tabs --}}

      <div id="changeable">{{-- start changeable div --}}
        @include('player.sport.pageParts.sport.sportInfo')
      </div>{{-- end changeable div --}}
      
    </div>
  </div>
</section>
    {{------------------------------------------------------------------------}}
      @include('player.sport.pageParts.sport.Models')
    {{------------------------------------------------------------------------}}

@endsection

@section('page_specific_scripts')
    <!-- player cripts-->
    <script src="{{ url('/') }}/player/js/sport.js"></script>
    <!-- player cripts-->
@stop