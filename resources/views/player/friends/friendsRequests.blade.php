@extends('site.themeIndex')
@section('content')

@yield('content')

<div id="app">
		
</div>
@endsection

@section('page_specific_scripts')
    <!-- vue scripts-->
    <script type="text/javascript" src="{{ asset('js/friends.js')}}"></script>
 
    <!-- vue scripts-->
@stop