<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.header.head')
    @yield('css')
</head>

<body>
    @include('template.navbar.navbar')
    <div class="nk-main">
        <div class="nk-gap"></div>
        <div class="container">
            @yield('content')
            <div class="nk-widget nk-widget-highlighted">
                <h4 class="nk-widget-title"><span>{{ __('Dashboard') }}</span></h4>
                <div class="nk-widget-content">
                    <div class="card" style="background-color: transparent;">
                        <div class="card-header" style="background-color: transparent;"></div>
                        <div class="card-body" style="background-color: transparent;">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap"></div>
        @include('template.plugins.footer')
    </div>
    <!-- START: Page Background -->
    <!-- <div class="nk-page-background-fixed" style="background-image: url('assets/images/bg-ready.jpg') ;"></div> -->
    <!-- <img class="nk-page-background-top" src="assets/images/bg-ready.jpg" alt="">
    <img class="nk-page-background-bottom" src="assets/images/bg-ready.jpg" alt=""> -->
    <img class="nk-page-background-top" src="assets/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="assets/images/bg-bottom.png" alt="">

</body>
@include('template.footer.footer')
@yield('javascripts')

</html>