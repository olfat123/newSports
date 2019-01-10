@php
    $days = DB::table('days')->get();
    $hours = DB::table('hours')->orderBy('sort')->get();
@endphp

<div id="myEventsFilters">
  @include('player.sport.pageParts.sport.events.myEvents.myEventsFilters')
</div>
<div id="myEventsResult">
  @include('player.sport.pageParts.sport.events.myEvents.myEventsResult')
</div>