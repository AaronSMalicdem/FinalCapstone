@extends('layouts.app')

@section('navbar')
    <nav class="navbar navbar-expand-lg p-3">
        <div class="container-fluid">
            <!-- Left Side: Welcome Message -->
            <div class="welcome-user">
                @if (Auth::check())
                    <img src="{{ Auth::user()->profile_image }}" alt="{{ Auth::user()->name }}" class="user-image">
                    <span>Welcome, {{ Auth::user()->name }}</span>
                @else
                    <span>Welcome, Guest</span>
                @endif
            </div>

            <!-- Center: Dropdown Menu in an Oval Container -->
            <div class="mx-auto dropdown-oval-container">
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Main
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Main</a></li>
                        <li><a class="dropdown-item" href="#">Kuwago Cafe 1</a></li>
                        <li><a class="dropdown-item" href="#">Kuwago Cafe 2</a></li>
                        <li><a class="dropdown-item" href="#">Uddesign</a></li>
                    </ul>
                </div>
            </div>

            <!-- Right Side: Icons -->
            <div>
                <a href="#" class="text-white mx-2"><i class="fas fa-store"></i></a>
                <a href="#" class="text-white mx-2"><i class="fas fa-user"></i></a>
                <a href="#" class="text-white mx-2"><i class="fas fa-cog"></i></a>
                @if (Auth::check())
                    <a href="{{ route('logout') }}" class="text-white mx-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endif
            </div>
        </div>
    </nav>
@endsection
