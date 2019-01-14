<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/png" href="{{ Storage::url(setting()->icon) }}"/>
    <!-- Styles -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/rate.css') }}" rel="stylesheet">
</head>
<body class="scrollable">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                                    <!-- Right Side Of Navbar -->
                                    <ul class="nav navbar-nav navbar-right">
                                        <!-- Authentication Links -->
                                        @guest
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ url('/preregister') }}">Register</a></li>
                                        <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                                        @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                                Sports <span class="caret"></span>
                                            </a>

                                        <ul class="dropdown-menu">
                                            @php
                                                $sports = DB::table('sports')->get() ;
                                            @endphp
                                            <li>
                                                <a href="/Sport">All Sports</a>
                                            </li>
                                            @foreach ($sports as $sport)
                                            <li>
                                                <a href="/Sport/{{ $sport->id }}">{{ $sport->ar_sport_name }}</a>
                                            </li>
                                            @endforeach

                                        </ul>

                                    </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu">
                                                @if ( Auth::user()->type == 2)
                                                <li>
                                                    <a href="{{ url('/club') }}/{{Auth::user()->slug}}">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/club/') }}/{{Auth::user()->slug}}/edit">Edit Profile</a>
                                                </li>
                                                @elseif( Auth::user()->type == 1 )
                                                <li>
                                                    <a href="{{ url('/profile') }}/{{Auth::user()->slug}}">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="{{ url('/profile/') }}/{{Auth::user()->slug}}/edit">Edit Profile</a>
                                                </li>
                                                @endif
                                             
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                            </li>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>

                                        
                                    </ul>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

        <!-- Scripts -->

    @include('includes.scripts')

    <!-- Scripts -->
</body>
</html>
