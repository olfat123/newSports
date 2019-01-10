@php
    $days = DB::table('days')->get();
    $hours = DB::table('hours')->orderBy('sort')->get();
@endphp

<div id="playersSearchFilters">
  @include('player.sport.pageParts.sport.players.playersSearch.playerSearchFilters')
</div>
<div id="playersSearchResult">
  @include('player.sport.pageParts.sport.players.playersSearch.playerSearchResult')
</div>