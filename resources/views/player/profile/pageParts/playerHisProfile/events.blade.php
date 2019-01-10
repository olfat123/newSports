<div>
    @if (Auth::id() == $user->id)
        @include('player.profile.pageParts.playerHisProfile.events.searchEvent')
    @endif
    
    <div id="myEventsResult">
        @include('player.profile.pageParts.playerHisProfile.events.events')
    </div>
</div>
