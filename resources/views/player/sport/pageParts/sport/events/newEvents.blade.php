@php
    $days = DB::table('days')->get();
    $hours = DB::table('hours')->orderBy('sort')->get();
@endphp

<div id="newEventsFilters">
  @include('player.sport.pageParts.sport.events.newEvents.newEventsFilters')
</div>
<div id="newEventsResult">
  @include('player.sport.pageParts.sport.events.newEvents.newEventsResult')
</div>



