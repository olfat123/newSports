
<div>
     @if (Auth::id() == $user->id)
        @include('player.profile.pageParts.playerHisProfile.challenges.searchChallenge')
    @endif
<div id="myChallengesResult">
@include('player.profile.pageParts.playerHisProfile.challenges.challenges')
</div>

</div>

