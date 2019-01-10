@if ( !empty($event->E_candidate_id) ) {{-- if event candidate exist --}}

	@if ( $event->E_date < date("Y-m-d") ) {{-- if event date is in past --}}

		{{-- @if ( empty($event->E_reservation) ) --}} {{-- if event reservation not exist --}}

		    {{-- @if (Auth::user()->id == $event->E_creator_id || Auth::user()->id == $event->E_candidate_id) --}}		


<div>
	<div class="panel panel-default shade top-bottom-border">

      <!--------------------->
      <div class="panel-heading text-center shade bottom-border">
       
        <h4 style="color: #06774a;margin: 5px 0px">
          {{ trans('player.All_Suggested_games') }}
          </h4>
          {{ trans('player.Desc_All_Suggested_games') }}
      </div>
{{------------------------------------------------------------}}
<!--------------->
	@include('player.event.pageParts.event.event-result-Child')    
<!---------------->
{{------------------------------------------------------------}}
	</div> <!---/.panel--->
</div> <!--- /div --->



		
			@endif {{-- end if Auth == E_creator or E_candidate --}}

		{{-- @endif --}} {{-- here if  end if reservation is empty --}}

	{{-- @endif --}}{{-- if event date is in past --}}

@endif {{-- end if !empty($event->E_candidate) --}}

@if (Auth::user()->id == $event->E_creator_id || Auth::user()->id == $event->E_candidate_id)
    <!------------------------------------------->

@endif