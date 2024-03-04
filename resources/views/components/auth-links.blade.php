<div class="login-register-btn mr-50">
    <div class="d-flex">
        @guest
            @if (Route::has('login'))
                <li class="nav-item list-unstyled">
                    <a class="nav-link" id="loginBtn" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif
            @if (Route::has('register'))
                <li class="nav-item list-unstyled">
                    <a class="nav-link" href="/create-an-account">{{ __('Create an account') }}</a>
                </li>
            @endif
            @else
            <div class="dropdown">
                <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">                    
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="text-dark dropdown-item" href="/artist-profile">Your Profile</a>
                    <a class="text-dark dropdown-item" href="/artist-dashboard">Dashboard</a>
                    <a class="text-dark dropdown-item" href="">Profile Settings</a>
                    <a class="text-dark dropdown-item" href="">Account Settings</a>
                    <a class="text-dark dropdown-item" href="">Privacy and Security</a>
                    <a class="text-dark dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </div>
        @endguest
    </div>
</div>