<!-- header-area -->
<header class="header-style-four">
    <div id="sticky-header" class="header-four-wrap">
        <div class="container custom-container-two">
            <div class="row">
                <div class="col-12">
                    <div class="main-menu menu-style-two">
                        <nav>
                            <div class="logo">
                                <a href="{{ url('/') }}">
                                    <!-- <img src="assets/geco/img/logo/logo_two.png" alt="Logo"> -->
                                    LOGO
                                </a>
                            </div>
                            <div id="mobile-menu" class="navbar-wrap d-none d-lg-flex">
                                <ul>
                                    @if (Route::has('login'))
                                    <li class="show"><a href="{{ url('/') }}">Home</a></li>
                                    @auth
                                    <li class="show"><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/home') }}">Gallery</a></li>
                                    <li><a href="{{ url('/avatar') }}">Avatar</a></li>
                                    <li><a href="{{ url('/avatar') }}">Testimoni</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Sign Out"><i class="fa fa-sign-out"></i></a> </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    @else
                                    <li><a href="{{ route('login') }}">Log in</a></li>
                                    @if (Route::has('register'))
                                    <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                                    @endif
                                    @endauth
                                    @endif
                                </ul>
                            </div>

                        </nav>
                    </div>
                    <div class="mobile-menu"></div>
                </div>
                <!-- Modal Search -->
                <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form>
                                <input type="text" placeholder="Search here...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-area-end -->