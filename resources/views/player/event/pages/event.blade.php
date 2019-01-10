@extends('site.themeIndex')
@section('content')

@yield('content')
    {{--------------------------------------------------------------------}}
<section class="courts-main players-main">
  {{ csrf_field() }}
  <div class="container" style="font-size:80%;">

    <div class="row">
      
      <!----------- start event result section -------------->
      <div class="col-md-9" id="event-result">

        @include('player.event.pageParts.event.event-result')

      </div> <!-- end event result-->
        
       <!----------- start  event-winner section -------------->
      <div class="col-md-3" id="event-winner">

        @include('player.event.pageParts.event.event-winner')

      </div>
      <!----------- end  event-winner section -------------->


      </div><!-- .row-->
{{-- /////////////////////////// start hide playgrounds for now /////////////////// --}}
   {{--  <div class="row">
       <!----------- start event playgrounds section -------------->
      <div class="col-md-7" id="event-sport-playgrounds">

        @include('player.event.pageParts.event.event-sport-playgrounds')

      </div>
      <!----------- end event playgrounds section -------------->

      <!----------- start event-details section -------------->
      <div class="col-md-5" id="expected-playgrounds">

        @include('player.event.pageParts.event.expected-playgrounds')

      </div> <!-- end event details-->

    </div><!-- .row--> --}}

    {{-- /////////////////////////// end hide playgrounds for now /////////////////// --}}

    <div class="row">
       <!----------- start event creator section -------------->
      <div class="col-md-4" id="creator">

        @include('player.event.pageParts.event.creator')

      </div>
      <!----------- end event creator section -------------->

      <!----------- start event-details section -------------->
      <div class="col-md-8" id="event-details">

        @include('player.event.pageParts.event.event-details')

      </div>
        

      </div><!-- end event details-->
      <!----------- end event-details section -------------->

    </div><!--end row--->

     <div class="row">
      
      <!----------- start candidate players -------------->
      <div class="col-md-4" id="candidate">
         
        @include('player.event.pageParts.event.candidate')

      </div><!-- end event details-->
      <!----------- end candidate players -------------->

       <!----------- start event applicants section -------------->
      <div class="col-md-8" id="applicants">

        @include('player.event.pageParts.event.applicants')

      </div> <!-- col-md-8 -->
      <!----------- end event applicants section -------------->

    </div><!--end row--->

    
  </div><!--end container--->
</section>
    {{--------------------------------------------------------------------}}
        @include('player.event.pageParts.event.Models')
    {{------------------------------------------------------------------------}}

    {{----------------------------- chat part---------------------------------------}}
@if ( Auth::id() == $event->E_creator_id  || Auth::id() == $event->E_candidate_id)
  @if ($event->E_candidate_id != null)
  <div class="chat-widget-wrapper">
    <div class="chat-widget-container">
      <div class="chat-widget-text">
        <p class="heading">{{trans('player.live_chat')}}</p>
        <p>{{trans('player.chat_with')}}</p>
      </div>
      <div class="chat-widget-avatar">

        <img 
          @if(Auth::id() == $event->E_creator_id)
            @if (empty($event->candidate->user_img))
              src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
            @else
              src="{{ Storage::url($event->candidate->user_img) }}"
            @endif class="user-image"
          @elseif(Auth::id() == $event->E_candidate_id)
            @if (empty($event->creator->user_img))
              src="{{ url('/') }}/design/AdminLTE/dist/img/user.png"
            @else
              src="{{ Storage::url($event->creator->user_img) }}"
            @endif class="user-image"
          @endif
        />

      </div>
    </div>
    <div class="chat-box-container">
      {{-- <div class="chat-box-nav">
      </div> --}}
      <div class="chat-box-content">
        <iframe style="height:300px;"
            @if(Auth::id() == $event->E_creator_id)
              src="https://dry-harbor-39693.herokuapp.com/chat.html?ser=&type=d&user={{$event->creator->name}}&match=event_{{$event->id}}"
            @elseif(Auth::id() == $event->E_candidate_id)
              src="https://dry-harbor-39693.herokuapp.com/chat.html?ser=&type=d&user={{$event->candidate->name}}&match=event_{{$event->id}}"
            @endif
        >
        </iframe>
        {{-- <form action="" class="chat-box-form">
          kmtkhmthkmktmhk kehmkelh kermhkmkler hklremlhmek
        </form> --}}
      </div>
    </div>
  </div>
  @endif
@endif



    {{----------------------------- chat part---------------------------------------}}

@endsection

@section('page_specific_scripts')
    <!--  event cripts-->
    <script src="{{ url('/') }}/player/js/event.js"></script>
    <!--  event cripts-->
@stop