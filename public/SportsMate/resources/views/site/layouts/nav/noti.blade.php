<ul class="nav navbar-nav navbar-right notification-ul">
<li class="dropdown">
    <a href="#" 
        class="dropdown-toggle" 
        data-toggle="dropdown" 
        role="button" 
        aria-haspopup="true" 
        aria-expanded="false"
    >
        <i class="fa fa-bell"></i>
        @if (Auth::user()->unreadnotifications->count() > 0)
        <span id="noti-count" class=""
                style="background: #f89406 !important;"  
        >
            {{ Auth::user()->unreadnotifications->count() }}
        </span>
        @endif
        <input type="hidden" name="temp" value="{{Auth::user()->notifications->count()}}">
    </a>
    <ul class="dropdown-menu notify-drop" style="min-height: 325px !important;">
        <audio id="NotiAudio" style="display:none">
            <source src="{{url('/')}}/sounds/noti.mp3" type="audio/mpeg">
            Your browser does not support the audio tag.
        </audio> 
        <div class="notify-drop-title">
            <div class="row">
                <div class="text-center">
                    <a href="#" data-toggle="tooltip" title="{{ trans('player.delete') }}" class="noti_delete_all a-holding-divs" style="padding:1px">
                        {{ trans('player.delet_all') }}
                    </a>
                    -
                    <a href="#" data-toggle="tooltip" title="{{ trans('player.mark_as_read') }}" class="noti_all_as-read a-holding-divs" style="padding:1px">
                        {{ trans('player.mark_all_as_read') }}
                    </a>
                </div>            
            </div>
        </div>

        <!-- end notify title -->
        <!-- notify content -->
        <div id="notiLoop" class="drop-content">

            @include('site.layouts.nav.notiLoop')

        </div>
        @if (Auth::user()->notifications->count() > 0)
        {{-- <div class="notify-drop-footer text-center">
            <a class="a-holding-divs" href=""><i class="fa fa-eye"></i> {{ trans('player.mark_all_as_read') }}</a>
        </div> --}}
        @endif
        
    </ul>
</li>
</ul>