    <!-- Header -->
    <header class="header" id="header">

        <nav class="navbar container">
            <a href="./index.html">
                <h2 class="logo">NewsFlash</h2>
            </a>

            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="{{url('user/home')}}" class="list-link current">Home</a>
                    </li>
                    @if(Auth::user()->role_as == '1')
                        <li class="list-item">
                            <a href="{{url('user/dashboard')}}" class="list-link">Dashboard</a>
                        </li>
                    @endif
                    <li class="list-item">
                        <a href="#" class="list-link">Categories</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Reviews</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">News</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Membership</a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link">Contact</a>
                    </li>
                    @auth
                    <li class="list-item screen-lg-hidden">
                        <a class="list-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form></a>
                    </li>
                    @else
                    <li class="list-item screen-lg-hidden">
                        <a href="{{ route('login') }}" class="list-link">Sign in</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="list-item screen-lg-hidden">
                        <a href="{{ route('register') }}" class="list-link">Sign up</a>
                    </li>
                    @endif
                    @endauth
                </ul>
            </div>

            <div class="list list-right">
                <button class="btn place-items-center" id="theme-toggle-btn">
                    <i class="ri-sun-line sun-icon"></i>
                    <i class="ri-moon-line moon-icon"></i>
                </button>

                <button class="btn place-items-center" id="search-icon">
                    <i class="ri-search-line"></i>
                </button>

                <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </button>
                @auth

                <a class="btn sign-up-btn fancy-border screen-sm-hidden" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <span>{{ __('Logout') }}</span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>

                @else
                    <a href="{{ route('login') }}" class="list-link screen-sm-hidden">Sign in</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn sign-up-btn fancy-border screen-sm-hidden"><span>Sign up</span></a>
                @endif
                @endauth
            </div>

        </nav>

    </header>
    <!-- Search -->
    <div class="search-form-container container" id="search-form-container">

        <div class="form-container-inner">

            <form action="" class="form">
                <input class="form-input" type="text" placeholder="What are you looking for?">
                <button class="btn form-btn" type="submit">
                    <i class="ri-search-line"></i>
                </button>
            </form>
            <span class="form-note">Or press ESC to close.</span>

        </div>

        <button class="btn form-close-btn place-items-center" id="form-close-btn">
            <i class="ri-close-line"></i>
        </button>

    </div>
