@extends('site.themeIndex')
@section('content')

@yield('content')
<div id="friends">
    
</div>
@endsection

@section('page_specific_scripts')
    <!-- vue scripts-->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="{{ url('/') }}/player/js/friends.js"></script>
    <!-- vue scripts-->
@stop