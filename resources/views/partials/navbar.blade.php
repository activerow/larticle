<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('img/brand-logo.png') }}" height="25px">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link mr-2 {{ Route::is('index') ? 'active' : '' }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link mr-2 {{ Route::is('about') ? 'active' : '' }}">
                        <i class="fas fa-users"></i> About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services') }}" class="nav-link mr-2 {{ Route::is('services') ? 'active' : '' }}">
                        <i class="fas fa-cube"></i> Services
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link mr-2 {{ Route::is('contact') ? 'active' : '' }}">
                        <i class="fas fa-envelope"></i> Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link mr-2 {{ Route::is('posts.index') ? 'active' : '' }}">
                        <i class="fas fa-sticky-note"></i> Blog
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link mr-2 {{ Route::is('login') ? 'active' : '' }}" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-warning {{ Route::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->full_name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>
                            <a href="{{ route('posts.create') }}" class="dropdown-item">Create Post</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
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