@extends('layouts.app')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerMenu"
                aria-controls="navbarTogglerMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerMenu">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ Route('welcome') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ Route('myline') }}">My Line</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{Route('myscore')}}">My Scores</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{Route('myfinal')}}">My Finals</a>
                </li>
            </ul>

            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ route('welcome') }}" class="text-sm text-gray-700 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth

                <a class="ml-4 text-sm text-gray-700 underline" href="#">HELP <span class="sr-only">(current)</span></a>
                <a class="ml-4 text-sm text-gray-700 underline" href="#">NEWS</a>
                <a class="ml-4 text-sm text-gray-700 underline" href="#">CONTACTS</a>
            </div>
        </div>
    </nav>

@endsection
