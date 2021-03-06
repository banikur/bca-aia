<header class="nk-header nk-header-opaque">
    <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-autohide">
        <div class="container">
            <div class="nk-nav-table">
                <a href="{{ url('/') }}" class="nk-nav-logo">
                    <!-- <img src="assets/images/logo.png" alt="GoodGames" width="199"> -->
                </a>
                <ul class="nk-nav nk-nav-right d-none d-lg-table-cell" data-nav-mobile="#nk-nav-mobile">
                    @if (Route::has('login'))
                    @auth
                    <!-- <li class="scroll"><a class="navbar-brand" href="{{ url('/') }}">I</a></li> -->
                    <li class="scroll"><a class="navbar-brand" href="{{ url('/home') }}">Gallery</a></li>
                    <li class="scroll"><a class="navbar-brand" href="{{ url('/avatar') }}">Avatar</a></li>
                    <li class="scroll"><a class="navbar-brand" href="{{ url('/avatar') }}">Tetsimoni</a></li>
                    <li class="scroll"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Sign Out"><i class="fa fa-sign-out"></i></a> </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <li class="scroll"><a class="navbar-brand" href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                    <li class="scroll"><a class="navbar-brand" href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endauth
                    @endif
                </ul>
                <ul class="nk-nav nk-nav-right nk-nav-icons">
                    <li class="single-icon d-lg-none">
                        <a href="#" class="no-link-effect" data-nav-toggle="#nk-nav-mobile">
                            <span class="nk-icon-burger">
                                <span class="nk-t-1"></span>
                                <span class="nk-t-2"></span>
                                <span class="nk-t-3"></span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="index.html" class="nk-nav-logo">
                <img src="assets/images/logo.png" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>