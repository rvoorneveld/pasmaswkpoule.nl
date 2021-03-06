<?php
    $user = Auth::user();
?>
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @if (true === App::environment('production'))
        @include ('analytics')
    @endif

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link{{ true === ($booGamesRequest = Request::is('games')) ? ' active' : '' }}" href="/games">Wedstrijden</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ true === Request::is('ranking') ? ' active' : '' }}" href="/ranking">Ranglijst</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ true === Request::is('stadions') ? ' active' : '' }}" href="/stadions">Stadions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link{{ true === Request::is('spelregels') ? ' active' : '' }}" href="/spelregels">Spelregels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:wkpoule@webathletes.nl">Contact</a>
                        </li>
                        @if(false === empty($user) && 20 === $user->isAdmin)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle{{ true === Request::is('admin/*') ? ' active' : '' }}" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Beheer</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item{{ true === Request::is('admin/games') ? ' active' : '' }}" href="/admin/games">Wedstrijden</a>
                                    <a class="dropdown-item{{ true === Request::is('admin/users') ? ' active' : '' }}" href="/admin/users">Gebruikers</a>
                                </div>
                            </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Inloggen</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Aanmelden</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $user->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    {{--<a class="dropdown-item" href="/profile">--}}
                                        {{--Profiel--}}
                                    {{--</a>--}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Uitloggen
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @include('flash::message')
        @yield('carousel')
        <div class="container{{ true === $booGamesRequest ? '-fluid' : '' }} mt-4">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
