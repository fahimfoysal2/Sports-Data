<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'SportsData') }}</title>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
{{-- navbar --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white py-4">
    <a class="navbar-brand" href="#">Sports Data</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerMenu"
            aria-controls="navbarTogglerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerMenu">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}"
                   href="{{ Route('welcome') }}">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('myline') ? 'active' : '' }}" href="{{ Route('myline') }}">My
                    Line</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('myscore') ? 'active' : '' }}" href="{{Route('myscore')}}">My
                    Scores</a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('myfinal') ? 'active' : '' }}" href="{{Route('myfinal')}}">My
                    Finals</a>
            </li>
        </ul>

        <div>
            @auth
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-register text-sm">Logout</button>
                </form>
            @else
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="btn btn-register text-sm">Join</a>
                @endif

                <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 underline">Log in</a>
            @endauth

            <a class="ml-4 text-sm text-gray-700 underline" href="#">HELP <span class="sr-only">(current)</span></a>
            <a class="ml-4 text-sm text-gray-700 underline" href="#">NEWS</a>
            <a class="ml-4 text-sm text-gray-700 underline" href="#">CONTACTS</a>
        </div>
    </div>
</nav>
{{-- navbar --}}
<main role="main">
    @yield('content')
</main>
</body>
</html>
